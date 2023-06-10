<?php
    session_start();
    if (!isset($_SESSION['userId'])) {
        header('Location: login.php');
        exit();
    }
    ?>

<!DOCTYPE html>
<html>

<head>
    <title>User View</title>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid black;
        padding: 8px;
    }
    </style>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <h2>All Users</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Names</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <?php
            $host = 'localhost';
    $dbName = 'pdo_testdb';
    $username = 'root';
    $password = '';

    try {
        $dbInstance = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
        if ($dbInstance) {
            $query = "SELECT id, names, username, password FROM users";
            $statement = $dbInstance->prepare($query);
            $statement->execute();

            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['names']."</td>";
                echo "<td>".$row['username']."</td>";
                echo "<td>".$row['password']."</td>";
                echo "</tr>";
            }
        }
    } catch (PDOException $error) {
        echo "Connection failed: " . $error->getMessage();
    }
    ?>
    </table>
</body>

</html>