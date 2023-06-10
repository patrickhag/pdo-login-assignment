<?php
    session_start();
    if (!isset($_SESSION['userId'])) {
        header('Location: index.php');
        exit();
    }
    ?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <h1>Welcome to the Dashboard!</h1>
    <a href="#">About</a>
    <a href="#">Contact</a>
    <a href="view.php">All users</a>
    <a href="logout.php" style='margin-left: 20px;'>Logout</a>

</body>

</html>