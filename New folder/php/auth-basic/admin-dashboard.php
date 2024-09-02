<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
</head>

<body>
    <h1>Welcome, <?php echo $_SESSION["username"]; ?>!</h1>
    <p>Cookie username: <?php echo $_COOKIE["username"]; ?></p>
    <a href="logout.php">Logout</a>
</body>

</html>