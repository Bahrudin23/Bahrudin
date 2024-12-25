<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = "INSERT INTO users (fullname, username, email, password) VALUES ('$fullname', '$username', '$email', '$password')";
    if ($conn->query($query)) {
        header('Location: index.php');
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Register</h1>
    <form method="POST" action="">
        <div class="input-group">
            <input type="text" name="fullname" placeholder="Full Name" required>
        </div>
        <div class="input-group">
            <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="input-group">
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-group">
            <input type="password" id="password" name="password" placeholder="Password" required>
                <span id="togglePassword" style="cursor: pointer;">👁️</span>
        </div>
        <div class="input-group">
            <button type="submit" class="btn">Register</button>
        </div>
        <p class="login-register-text">Already have an account? <a href="index.php">Login Here</a></p>
    </form>
</div>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function () {
        // Toggle tipe password
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        // Toggle ikon
        this.textContent = type === 'password' ? '👁️' : '🙈';
    });
</script>

</body>
</html>