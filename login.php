<?php
session_start();

require 'header.php';

if (!empty($_POST)) {
    // Get user in Database
    $user = [
        'id' => 1234,
        'login' => 'me',
        'password' => 'azerty',
        'username' => 'Bart',
    ];
    if ($_POST['password'] === $user['password']) {
        $_SESSION['user'] = $user;
    } else {
        $wrongCredentials = true;
    }
}

if (isset($_SESSION['user'])) { ?>
    <h1>Welcome <?php echo $_SESSION['user']['username']; ?></h1>
<?php
} else {
    if (isset($wrongCredentials) && $wrongCredentials) { ?>
        <h2>Wrong Credentials</h2>
    <?php
    }
    ?>
    <form action="#" method="post">
        <label for="login" id="login">Login</label>
        <input type="text" name="login">
        <label for="password" id="password">Password</label>
        <input type="password" name="password">
        <input type="submit" value="Login">
    </form>
    <?php
}
