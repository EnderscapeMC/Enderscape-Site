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
        <div class="home">
            <nav id="nav">
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
                <h1 id="title">Enderscape</h1>
                <h3>Survival | Creative | Duels | Skyblock</h3>
                <div id="ip">
                    <a href="#"><h3>IP: enderscape.net</h3></a><br>
                    <?php include('../includes/online_players.php'); ?>
                </div>
                <div id="notification">IP has been copied to clipboard!</div>
            </header>
        </div>
        <div class="leaderboards-section">
            <table>
                <tr>
                    <th><h3 style='margin-bottom: 5px'>Lands Leaderboard</h3></th>
                    <th><h3 style='margin-bottom: 5px'>McMMO Power Leaderboard</h3></th>
                    <th><h3 style='margin-bottom: 5px'>Balance Leaderboard</h3></th>
                </tr>
                <tr>
                    <td><?php include('../includes/lands_database.php'); ?></td>
                    <td><?php include('../includes/mcmmo_database.php'); ?></td>
                    <td><?php include('../includes/balance_cmi_database.php'); ?></td>
                </tr>
                <tr>
                    <th><h3 style='margin-bottom: 5px'>Rank Leaderboard</h3></th>
                    <th><h3 style='margin-bottom: 5px'>Vote Leaderboard</h3></th>
                    <th><h3 style='margin-bottom: 5px'>Playtime Leaderboard</h3></th>
                </tr>
                <tr>
                    <td><?php include('../includes/rank_cmi_database.php'); ?></td>
                    <td><?php include('../includes/votes_cmi_database.php'); ?></td>
                    <td><?php include('../includes/playtime_cmi_database.php'); ?></td>
                </tr>
            </table>
        </div>
    </body>
</html>