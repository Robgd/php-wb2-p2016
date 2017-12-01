<?php

require 'pdo.php';













function readUser(PDO $con) {
    $sql = 'SELECT * FROM user';

    $stmt = $con->prepare($sql);
    $stmt->execute();

    $users = $stmt->fetchAll();

    return $users;
}

function createUser(PDO $con, array $user) {
    $sql = 'INSERT INTO user (username, age, permission) VALUES (:username, :age, :permission)';

    $stmt = $con->prepare($sql);
    $stmt->execute($user);
}
