






<?php
require 'userCrud.php';

if (!empty($_POST)) {
    createUser($con, $_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create User</title>
</head>
<body>
    <h1>Create a user</h1>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="age">Age</label>
        <input type="text" name="age" id="age">
        <input type="hidden" name="permission" value="1">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
