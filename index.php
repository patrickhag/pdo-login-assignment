<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Simple HTML Form</title>
</head>

<body>
    <div class="container">
        <h1>Sign In</h1>
        <form method="post" action="login.php">
            <p>
                <label for="name">Username:</label>
                <input type="text" id="username" name="username" required>
            </p>
            <p>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <span id="togglePassword" class="toggle-password" onclick="togglePasswordField()">&#x1f441;</span>
            </p>
            <input type="submit" name="submit" value="Submit">
        </form>
        <script src="./script.js"></script>
    </div>
</body>

</html>