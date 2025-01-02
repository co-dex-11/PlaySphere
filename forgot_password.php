<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PlaySphere";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usernameOrEmail = $_POST['usernameOrEmail'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    if ($newPassword !== $confirmPassword) {
        echo "<script>alert('Passwords do not match.'); window.location.href = 'forgot_password.php';</script>";
        exit();
    }

    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    $sql = "UPDATE users SET password_hash='$hashedPassword' WHERE username='$usernameOrEmail' OR email='$usernameOrEmail'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Password reset successful!'); window.location.href = 'index.php#login-section';</script>";
    } else {
        echo "<script>alert('Error updating password: " . mysqli_error($conn) . "'); window.location.href = 'forgot_password.php';</script>";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/fav.png">
    <title>Forgot Password - PlaySphere</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="Styles/index.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #161313;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .forgot-password-form {
            background: rgba(43, 40, 40, 0.7);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .forgot-password-form h2 {
            color: #bbd12b;
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .forgot-password-form form {
            display: flex;
            flex-direction: column;
            gap: 0.1rem;
        }

        .forgot-password-form label {
            text-align: left;
            font-size: 1rem;
            font-weight: 500;
            color: #ddd;
        }

        .forgot-password-form input {
            background: #252525;
            border: 1px solid #444;
            color: #fff;
            font-size: 1rem;
            padding: 0.75rem;
            border-radius: 5px;
            outline: none;
        }

        .forgot-password-form input:focus {
            border-color: #bbd12b;
            box-shadow: 0 0 5px rgba(187, 209, 43, 0.5);
        }

        .forgot-password-form .btn-sub {
            background-color: #bbd12b;
            color: #161313;
            font-weight: 600;
            font-size: 1rem;
            padding: 0.75rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .forgot-password-form .btn-sub:hover {
            background-color: #a3c61f;
        }

        .forgot-password-form p {
            font-size: 0.9rem;
            color: #ddd;
            margin-top: 1rem;
        }

        .forgot-password-form a {
            color: #bbd12b;
            font-weight: 500;
            text-decoration: underline;
        }

        .forgot-password-form a:hover {
            color: #a3c61f;
        }
    </style>
    <script>
        function validateForm() {
            var usernameOrEmail = document.getElementById('usernameOrEmail').value;
            var newPassword = document.getElementById('newPassword').value;
            var confirmPassword = document.getElementById('confirmPassword').value;

            if (usernameOrEmail.trim() === "") {
                alert("Username or Email must be filled out");
                return false;
            }

            if (newPassword.trim() === "") {
                alert("New Password must be filled out");
                return false;
            }

            if (newPassword.length < 6) {
                alert("Password must be at least 6 characters long");
                return false;
            }

            if (newPassword !== confirmPassword) {
                alert("Passwords do not match");
                return false;
            }

            return true;
        }
    </script>
</head>

<body>
    <div class="form-container">
        <div class="forgot-password-form">
            <h2>Forgot Password</h2>
            <form action="forgot_password.php" method="post" onsubmit="return validateForm()">
                <label for="usernameOrEmail">Username or Email:</label>
                <input type="text" id="usernameOrEmail" name="usernameOrEmail" placeholder="Enter your username or email" required><br>
                <label for="newPassword">New Password:</label>
                <input type="password" id="newPassword" name="newPassword" placeholder="Enter your new password" required><br>
                <label for="confirmPassword">Confirm New Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your new password" required><br>
                <button type="submit" class="btn-sub">Reset Password</button>
            </form>
            <p>Remembered your password? <a href="index.php#login-section">Login here</a></p>
        </div>
    </div>
</body>

</html>
