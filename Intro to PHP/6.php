<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals with separate php tags</title>
</head>
<body>
    <?php $userStatus = ""; ?>
    <?php if ($userStatus == "loggedin"): ?>
        <a href = "account.php">Account</a>
        <a href = "logout.php">Logout</a>
    <?php else : ?>
        <a href = "login.php">Login</a>
        <a href = "register.php">Register</a>
    <?php endif; ?>
</body>
</html>