<?php
session_start();

// Static username and password for demonstration purposes
$username = 'admin';
$password = 'password';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

    if ($inputUsername == $username && $inputPassword == $password) {
        $_SESSION['loggedIn'] = true;
        header('Location: display.php');
        exit;
    } else {
        $error = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
</head>

<body>
    <h1>Login Page</h1>
    <form action="" method="post">
        <label>Username:</label>
        <input type="text" name="username"><br><br>
        <label>Password:</label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
    <?php if (isset($error)) {
        echo '<p style="color:red;">' . $error . '</p>';
    } ?>
</body>

</html>