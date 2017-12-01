<?php

/**
 * @param array $params
 *
 * @return PDO
 */
function initPDO(array $params) {
    $connection = new PDO(
        'mysql:host='.$params['host'].';dbname='.$params['dbname'].';port='.$params['port'],
        $params['user'],
        $params['password']
    );

    return $connection;
}

$params = [
    'host' => 'localhost',
    'dbname' => 'foo',
    'user' => 'root',
    'password' => 'root',
    'port' => 8889,
];

$con = initPDO($params);

///**
// * @param PDO $con
// * @param int $id
// *
// * @return array
// */
//function readQuery(PDO $con, $id) {
//    $sql = 'SELECT * FROM table WHERE id = :id';
//    $stmt = $con->prepare($sql);
//
//    $stmt->execute([
//        'id' => $id
//    ]);
//
//    return $stmt->fetchAll(PDO::FETCH_ASSOC);
//}
//
///**
// * @param PDO $con
// * @param int $id
// *
// * @return array
// */
//function createQuery(PDO $con, $params) {
//    $sql = "INSERT INTO table (id, attribut1, attribut2, attribut3, ...) VALUES (NULL, :attribut1, :attribut2, :attribut3, ...)";
//    $stmt = $con->prepare($sql);
//
//    $stmt->execute([
//        'attribut1' => $params['attribut1'],
//        'attribut2' => $params['attribut2'],
//        'attribut3' => $params['attribut3'],
//        // ...
//    ]);
//
//    $lastId = $con->lastInsertId('table');
//    $user = readQuery($con, $lastId);
//
//    return $user;
//}
