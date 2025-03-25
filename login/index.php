<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup</title>
     <link rel="stylesheet" href="loginStyle.css">
    <link rel="shortcut icon" href="../assets/images/flashLogo.png" type="image/svg+xml">
</head>
<body>
    <div class="container">
        <a href="../index.php" class="btn btn-primary">
            <img src="../assets/images/arrowLeft.png" class="arrowLeft" alt="Left arrow">
        </a>
        <div class="switch-btns">
            <button class="switch-btn" id="login-switch">Login</button>
            <button class="switch-btn" id="signup-switch">Signup</button>
        </div>

        <div class="form-box" id="form-box">
            <!-- Login Form -->
            <form action="auth.php" method="POST" id="login-form" class="form">
                <h2>Login</h2>
                <label>Email</label>
                <input type="email" name="login-email" id="login-email" placeholder="Email" required>
                <label>Password</label>
                <input type="password" name="login-password" id="login-password" placeholder="Password" required>
                <button type="submit" name="login-login" id="login-btn">Login</button>
                <p>Not a member? <a href="#" id="show-signup">Signup now</a></p>
            </form>

            <!-- Signup Form -->
            <form action="auth.php" method="POST" id="signup-form" class="form">
                <h2>Signup</h2>
                <label>Name</label>
                <input type="text" name="signup-name" id="signup-name" placeholder="Full Name" required>
                <label>Email</label>
                <input type="email" name="signup-email" id="signup-email" placeholder="Email" required>
                <label>Password</label>
                <input type="password"name="signup-password" id="signup-password" placeholder="Password" required>
                <button type="submit" name="signup" id="signup-btn">Signup</button>
            </form>
        </div>
    </div>

    <!-- script -->
    <script src="loginScript.js"></script>
</body>
</html>
