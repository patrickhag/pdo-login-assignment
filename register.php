<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./style.css">
    <title>Simple HTML Form</title>
</head>

<body>
    <div class="container">
        <h1>Register User</h1>
        <form method="post" action="create_nu_acc.php">

            <label for="name">Names:</label>
            <input type="text" id="names" name="names" required>
            <br><br>

            <label for="name">Username:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <span id="togglePassword" class="toggle-password" onclick="togglePasswordField()">&#x1f441;</span><br><br>

            <input type="submit" name="submit" value="Submit">
        </form>
        <script src="./script.js"></script>
    </div>
</body>

</html>