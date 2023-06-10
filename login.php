<?php

$host = 'localhost';
$dbName = 'pdo_testdb';
$username = 'root';
$password = '';

try {
    $dbConn = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT id, password FROM users WHERE username = :username";
    $statement = $dbConn->prepare($query);
    $statement->bindParam(':username', $username);
    $statement->execute();
    $result = $statement->fetch();

    if ($result && password_verify($password, $result['password'])) {
        session_start();
        $_SESSION['userId'] = $result['id'];
        header("Location: dashboard.php");
    } else {
        echo '
        <div>
            <p>Invalid login credentials</p>
            <a href="index.php">Login instead</a>
        </div>
    ';
    }
} catch (PDOException $e) {
    echo "Error occured". $e->getMessage();
}