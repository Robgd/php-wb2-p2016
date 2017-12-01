<?php

/**
 * @param PDO  $con
 * @param null|int $id
 *
 * @return array
 */
function readUserPokemons(PDO $con, $id = null) {
    $sql = 'SELECT * FROM pokemon';
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
 * @param PDO   $con
 * @param array $pokemon
 *
 * @return array
 */
function createPokemon($con, array $pokemon) {
    $stmt = $con->prepare("INSERT INTO pokemon (name, type, strength, vitality, user_id) VALUES (:name, :type, :strength, :vitality, :user_id)");
    $stmt->execute($pokemon);

    $lastId = $con->lastInsertId('pokemon');

    $pokemon = readUserPokemons($con, $lastId);

    return $pokemon;
}
