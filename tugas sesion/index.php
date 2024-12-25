<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            header('Location: sukses_login.php');
        } else {
            echo "Invalid Password.";
        }
    } else {
        echo "No User Found.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Login</h1>
    <form method="POST" action="">
        <div class="input-group">
            <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="input-group">
            <input type="password" id="password" name="password" placeholder="Password" required>
                <span id="togglePassword" style="cursor: pointer;">👁️</span>
        </div>
        <div class="input-group">
            <button type="submit" class="btn">Login</button>
        </div>
        <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a></p>
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