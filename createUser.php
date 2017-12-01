<?php

require 'pdo.php';
require 'userCrud.php';

if (!empty($_POST)) {
    $user = createUser($con, [
        'permission' => $_POST['permission'],
        'age' => $_POST['age'],
        'username' => $_POST['username']
    ]);
}

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Create User</title>
    </head>
    <body>
        <?php
        if (!isset($user)) {
            ?>
            <form action="#" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
                <label for="age">Age</label>
                <input type="text" name="age" id="age">
                <input type="hidden" name="permission" value="1">
                <input type="submit" value="Submit">
            </form>
            <?php
        } else {
            ?>
            <p>User created !</p>
            <?php
        }
        ?>
    </body>
    </html>
