<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="icon" type="image/x-icon" href="https://i.imgur.com/mGLyODd.gif">
        <meta charset="utf-8">
        <title>Home</title>
        <script src="js/index.js"></script> 
    </head>
    <body>
        <nav>
            <a href="main.php"><img src="https://i.imgur.com/lIQy2B7.png" alt="Desaturated version of the Enderscape logo, a Minecraft parrot."></a>
            <ul class="menu">
                <li><a href="main.php"><img src="https://i.imgur.com/l4QRrVE.png"><h3>Home</h3></a></li>
                <li><a href="#"><img src="https://i.imgur.com/bCnXOJ8.png"><h3>Wiki</h3></a></li>
                <li><a href="#"><img src="https://i.imgur.com/QqcuOVh.png"><h3>Store</h3></a></li>
                <li><a href="#"><img src="https://i.imgur.com/B94U44H.png"><h3>Vote</h3></a></li>
                <li><a href="#"><img src="https://i.imgur.com/Qw1VNqw.png"><h3>Discord</h3></a></li>
                <li><a href="#"><img src="https://i.imgur.com/DuQZll8.png"><h3>Quizzes</h3></a></li>
            </ul>
        </nav>
        <header id="header">
            <a href="main.php"><h1 id="title">Enderscape</h1></a>
            <h3>Survival | Creative | Duels | Skyblock</h3>
            <div id="ip">
                <a href="#"><h3>IP: enderscape.net</h3></a><br>
                <?php include('../includes/online_players.php'); ?>
            </div>
            <div id="notification">IP has been copied to clipboard!</div>
        </header>
        <?php include('../includes/lands_database.php'); ?>
        <?php include('../includes/mcmmo_database.php'); ?>
        <?php include('../includes/cmi_database.php'); ?>
    </body>
</html>