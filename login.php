<?php

// Include the database connection file (dbconnect.php)
require_once 'connection.php';

// Check if the admin is already logged in

// prevent a user from going back to admin.php when logged out
session_start();
if (isset($_SESSION['admin_authenticated']) && $_SESSION['admin_authenticated'] === true) {
    header("Location: admin_dashboard.php");
    exit();
}

// Handle form submission for admin login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password match the admin's credentials in the database
    $sql = "SELECT * FROM adminlog WHERE username = ? AND a_password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Admin authentication successful, retrieve admin's first name and store it in session
        $row = $result->fetch_assoc();
        $adminFirstName = $row['Fname'];

        session_start();
        $_SESSION['admin_authenticated'] = true;
        $_SESSION['admin_first_name'] = $adminFirstName;
        header("Location: admin_dashboard.php");
        exit();
    } else {
    }
}

// Close the database connection
$conn->close();
?>


<!-- login.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="login_styles.css">

    <style>
        body {
        background-image: url("images/My project.png"); /* Replace "your-image.jpg" with the URL or path to your desired background image */
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        opacity: 0.8; /* Adjust the opacity value as needed */
        }

        .error-message {
    color: #ff0000; /* Red color for the error message */
    margin-top: 10px;
    text-align: center;
    font-weight: bold;
        }


        .login-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 50px 30px; /* Increased padding for more height */
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            }

        .login-container h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-group input[type="submit"] {
            width: 100%;
            padding: 8px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        footer {
  background-color: grey;
  color: #fff;
  padding: 20px 0;
  text-align: center;
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
}

    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/logo.png" alt="Your Brand Logo">
            <h1>Top Trader Kenya : Log in to continue</h1>
        </div>
    </header>

    <div class="login-container">
        <h1>Admin Login</h1>
        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" name="login" value="Log In">
            </div>

            <div class="error-message">
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login']) && $result->num_rows !== 1) {
            echo "Invalid username or password. Please try again.";
        }
                ?>
            </div>
        </form>
    </div>



    <footer>
  <div class="footer-content">
    <p>&copy; 2023 Top Trader Kenya. All rights reserved.</p>
  </div>
</footer>

</body>
</html>
