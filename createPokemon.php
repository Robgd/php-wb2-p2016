<?php

require 'pdo.php';
require 'pokemonCrud.php';

if (!empty($_POST)) {
    $pokemon = createPokemon($con, $_POST);
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
        if (!isset($pokemon)) {
            ?>
            <form action="#" method="post">
                <label for="user_id">User ID</label>
                <input type="text" name="user_id" id="user_id">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
                <label for="type">Type</label>
                <input type="text" name="type" id="type">
                <label for="strength">Strength</label>
                <input type="text" name="strength" id="strength">
                <label for="vitality">Vitality</label>
                <input type="text" name="vitality" id="vitality">
                <input type="submit" value="Submit">
            </form>
            <?php
        } else {
            ?>
            <p>Pokemon created !</p>
            <?php
        }
        ?>
    </body>
    </html>
