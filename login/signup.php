<?php 
header("Content-Type: application/json");
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include '../database/config.php'; // Database connection
// include "db.php"; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hashing password

    // **Check if the email already exists**
    $checkStmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {
        echo json_encode(["status" => "error", "message" => "Email already registered!"]);
        exit();
    }
    $checkStmt->close();

    // Assign role based on email
    $role = "User"; 
    if ($email === "deena001@gmail.com") {
        $role = "HR";
    } elseif ($email === "gokul123@gmail.com") {
        $role = "Manager";
    }

    // Insert user into database

    // $sql = "INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)";
    // $stmt = mysqli_prepare($conn, $sql);
    // mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $password, $role);

    $stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $password, $role);

    // if (mysqli_stmt_execute($stmt)) {
    //     $_SESSION["userRole"] = $role;
    //     $_SESSION["userName"] = $name;
    //     $_SESSION["isLoggedIn"] = true;
    if ($stmt->execute()) {
        $_SESSION["userRole"] = $role;
        $_SESSION["userName"] = $name;
        $_SESSION["isLoggedIn"] = true;
        // echo json_encode(["status" => "success", "message" => "Signup successful"]);
        echo json_encode(["status" => "success", "message" => "Signup successful", "redirect" => "../index.php"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Signup failed: " . $stmt->error]); // mysqli_error($conn)
    }
    $stmt->close();
    // mysqli_stmt_close($stmt);
}
?>
