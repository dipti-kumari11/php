<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="insert.php" method="post">
    <p>
        <label for="username" id="username_label">UserName:</label>
        <input type="text" name="username" id="username">
    </p>
    <p>
        <label for="email" id="email_label">Email Address:</label>
        <input type="text" name="email" id="email">
    </p>
    <p>
        <label for="password" id="password_label">Password:</label>
        <input type="text" name="password" id="password">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>
