<?php
session_start();
session_regenerate_id(true);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Dummy authentication check
    if ($username == "admin" && $password == "password") {
        $_SESSION["username"] = $username;
        setcookie("username", $username, time() + (86400 * 30), "/");
        header("Location: admin-dashboard.php");
        exit();
    } else {
        echo "Invalid credentials.";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <form method="post" action="login.php">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>


<!-- setcookie("username", $username, [
    'expires' => time() + (86400 * 30),
    'path' => '/',
    'secure' => true,   // Only send over HTTPS
    'httponly' => true, // JavaScript cannot access the cookie
    'samesite' => 'Strict' // CSRF protection
]); -->