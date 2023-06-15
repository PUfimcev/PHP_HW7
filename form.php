<?php 
require_once  'sessions/session.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="body">

        <div class="log__form">
            <h3>Enter password</h3>
            <form action="./login.php" method="post">
                <label for="#">Username: </label>
                <input type="text" name="username" placeholder="Username" value="<?php echo (isset($_COOKIE['name_inval'])) ? $_COOKIE['name_inval'] : '' ?>" required>
                <label for="#">Password: </label>
                <input type="password" name="password" placeholder="Password" required>
                <button class="btn">Enter</button>
            </form>
        </div>
        <div class="error">
            <?php echo (isset($_COOKIE['error'])) ? "<p>".$_COOKIE['error']."</p>" : "";?>
        </div>
    </div>


</body>
</html>