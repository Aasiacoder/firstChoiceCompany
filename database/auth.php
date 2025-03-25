<?php
session_start();
include 'config.php'; // Include MySQL connection

header("Content-Type: application/json"); // Ensure JSON response

// Function to sanitize input
function sanitizeInput($conn, $data) {
    return htmlspecialchars(mysqli_real_escape_string($conn, trim($data)));
}

// Signup Function
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["signup"])) {
    $name = sanitizeInput($conn, $_POST["signup-name"]);
    $email = sanitizeInput($conn, $_POST["signup-email"]);
    $password = $_POST["signup-password"];

    // Check if the email already exists
    $checkEmailStmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $checkEmailStmt->bind_param("s", $email);
    $checkEmailStmt->execute();
    $checkEmailStmt->store_result();

    if ($checkEmailStmt->num_rows > 0) {
        echo json_encode(["status" => "error", "message" => "Email already registered!"]);
        exit();
    }
    $checkEmailStmt->close();

    // Hash password securely
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Determine role
    $role = "Employee"; // Default role
    if ($email === "deena001@gmail.com") {
        $role = "HR";
    } elseif ($email === "gokul123@gmail.com") {
        $role = "Manager";
    }

    // Insert user into database
    $stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $hashedPassword, $role);

    if ($stmt->execute()) {
        $_SESSION["userRole"] = $role;
        $_SESSION["userName"] = $name;
        $_SESSION["isLoggedIn"] = true;

        echo json_encode(["status" => "success", "message" => "Signup successful!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Signup failed: " . $stmt->error]);
    }

    $stmt->close();
    exit();
}

// Login Function
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["login"])) {
    $email = sanitizeInput($conn, $_POST["login-email"]);
    $password = $_POST["login-password"];

    // Fetch user from database
    $stmt = $conn->prepare("SELECT id, name, email, password, role FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row["password"])) {
            $_SESSION["userRole"] = $row["role"];
            $_SESSION["userEmail"] = $row["email"];
            $_SESSION["userName"] = $row["name"];
            $_SESSION["isLoggedIn"] = true;

            echo json_encode(["status" => "success", "message" => "Login successful!"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Incorrect password!"]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "User not found!"]);
    }

    $stmt->close();
    exit();
}

?>



