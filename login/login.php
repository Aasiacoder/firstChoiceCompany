<?php
header("Content-Type: application/json");
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include '../database/config.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    $sql = "SELECT id, name, password, role FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row["password"])) {
            $_SESSION["userRole"] = $row["role"];
            $_SESSION["userEmail"] = $email;
            $_SESSION["userName"] = $row["name"];
            $_SESSION["isLoggedIn"] = true;

            // echo json_encode(["status" => "success", "message" => "Login successful"]);
            echo json_encode(["status" => "success", "message" => "Login successful", "redirect" => "../index.php"]);
            exit; // Stop further execution
        } else {
            echo json_encode(["status" => "error", "message" => "Invalid credentials"]);
            exit;
        }
    } else {
        echo json_encode(["status" => "error", "message" => "User not found"]);
        exit();
    }
    mysqli_stmt_close($stmt);
}




// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = $_POST["email"];
//     $password = $_POST["password"];

//     // Fetch user from database
//     $sql = "SELECT id, name, password, role FROM users WHERE email = ?";
//     $stmt = mysqli_prepare($conn, $sql);
//     mysqli_stmt_bind_param($stmt, "s", $email);
//     mysqli_stmt_execute($stmt);
//     $result = mysqli_stmt_get_result($stmt);

//     if ($row = mysqli_fetch_assoc($result)) {
//         if (password_verify($password, $row["password"])) {
//             $_SESSION["userRole"] = $row["role"];
//             $_SESSION["userEmail"] = $email;
//             $_SESSION["userName"] = $row["name"];
//             $_SESSION["isLoggedIn"] = true;

//             echo json_encode(["status" => "success", "message" => "Login successful"]);
//         } else {
//             echo json_encode(["status" => "error", "message" => "Invalid credentials"]);
//         }
//     } else {
//         echo json_encode(["status" => "error", "message" => "User not found"]);
//     }
//     mysqli_stmt_close($stmt);
// }
?>