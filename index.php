<?php

include 'pdo.php';
include 'userCrud.php';

$users = readUsers($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create User</title>
</head>
<body>
<?php
include 'header.php';

if (!empty($users)) {
    foreach ($users as $user) {
        if ($user['permission'] == true) {
            if ((int) $user['age'] < 18) {
                ?>
                <p>Sry <?php echo $user['username'] ?> you are too young !</p>
                <?php
            } else {
                ?>
                <p>Welcome <?php echo $user['username'] ?></p>
                <?php
            }
        } else {
            ?>
            <p>Access denied <?php echo $user['username'] ?></p>
            <?php
        }
    }
}
?>
</body>
</html>
