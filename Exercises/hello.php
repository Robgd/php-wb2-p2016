










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>
<body>
    <?php
    if (!empty($_GET) && isset($_GET['name'])) { ?>
        <h1>Hello <?php echo $_GET['name']; ?></h1>
    <?php
    } else { ?>
        <h1>Hello i'm no one</h1>
    <?php
    }
    ?>
</body>
</html>
