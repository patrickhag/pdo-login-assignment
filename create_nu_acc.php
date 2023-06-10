<?php

$host = 'localhost';
$dbName = 'pdo_testdb';
$username = 'root';
$password = '';

try {
    $dbConn = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $names = $_POST['names'];
        $username = $_POST['username'];
        $password = $_POST['password'];
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users(names, username, password) values (:names, :username, :password)";
    $statement = $dbConn->prepare($query);
    $statement->bindParam(':names', $names);
    $statement->bindParam(':username', $username);
    $statement->bindParam(':password', $hashedPassword);

    $result = $statement->execute();
    if ($result) {
        echo '
            <script>
                alert("Registration Successful");
                window.location.href = "view.php";
            </script>
            ';
    } else {
        echo '<script>alert("Registration Failed")</script>';
    }
} catch (PDOException $error) {
    echo "Connection failed: " . $error->getMessage();
}