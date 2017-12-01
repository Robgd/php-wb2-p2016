<?php

/**
 * @param PDO  $con
 * @param null|int $id
 *
 * @return array
 */
function readUsers(PDO $con, $id = null) {
    $sql = 'SELECT * FROM users';
    if ($id !== null) {
        $sql .= ' WHERE id = :id';
    }
    $stmt = $con->prepare($sql);

    $stmt->execute([
        'id' => $id
    ]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param PDO $con
 * @param     $user
 *
 * @return array
 */
function createUser($con, $user) {
    $stmt = $con->prepare("INSERT INTO users (id, permission, age, username) VALUES (NULL, :permission, :age, :username)");
    $stmt->execute($user);

    $lastId = $con->lastInsertId('user');

    $user = readUsers($con, $lastId);

    return $user;
}
