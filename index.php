<?php 

require_once  'sessions/session.php';

if(!$_SESSION): header("Location: ./form.php");

else: ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="top">
        <a href="" target="_blank">Главная</a>
        <span>
          <?php
            echo $_SESSION['username'];?>
          <a href="./sessions/logout.php">Log out</a>
        </span>
    </header>
    <main class="content">
        <h2>Hello</h2>
    </main>

</body>
</html>

<?php 
endif ?>

