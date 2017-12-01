<?php

if (!empty($_POST)) {
    $user = [
        'character' => $_POST['character'],
        'actor' => $_POST['actor'],
        'die_count' => $_POST['die_count'],
    ];
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
        <label for="character">Character</label>
        <input type="text" name="character" id="character">
        <label for="actor">Actor</label>
        <input type="text" name="actor" id="actor">
        <label for="actor">Die count</label>
        <input type="text" name="die_count" id="die_count">
        <input type="submit" value="Submit">
    </form>
    <?php
} else {
    ?>
    <p>Hello <?php echo $user['character']; ?>, you died <?php echo $user['die_count']; ?> !!</p>
    <p>
        <?php
        if ($user['die_count'] > 0) {
            echo "Be careful guy, you may not come back :(";
        } else {
            "Hey, well done !!";
        }
        ?>
    </p>
    <?php
}
?>
</body>
</html>
