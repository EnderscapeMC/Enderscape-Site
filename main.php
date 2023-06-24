<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="icon" type="image/x-icon" href="images/enderscape-logo.gif">
        <meta charset="utf-8">
        <title>Home</title>
        <script src="js/index.js"></script> 
    </head>
    <body>
        <div class="home">
            <nav id="nav">
                <a href="main.php"><img src="images/enderscape-logo.png" alt="Desaturated version of the Enderscape logo, a Minecraft parrot."></a>
                <ul class="menu">
                    <li><a href="main.php"><img src="images/home-icon.png"><h3>Home</h3></a></li>
                    <li><a href="#"><img src="images/wiki-icon.png"><h3>Wiki</h3></a></li>
                    <li><a href="#"><img src="images/store-icon.png"><h3>Store</h3></a></li>
                    <li><a href="#"><img src="images/vote-icon.png"><h3>Vote</h3></a></li>
                    <li><a href="#"><img src="images/discord-icon.png"><h3>Discord</h3></a></li>
                    <li><a href="#"><img src="images/quizzes-icon.png"><h3>Quizzes</h3></a></li>
                </ul>
            </nav>
            <header id="header">
                <h1 id="title">Enderscape</h1>
                <h3>Survival | Creative | Duels | Skyblock</h3>
                <div id="ip">
                    <a href="#"><h3>IP: enderscape.net</h3><img src="images/clipboard-icon.png"></a><br>
                    <?php include('../includes/online_players.php'); ?>
                </div>
                <div id="notification">IP has been copied to clipboard!</div>
            </header>
        </div>
        <div class="wiki">
            <section class="left">
                <h1>Wiki</h1>
            </section>
            <section class="right">
                <p>Ever wondered how the Lands menu works or how to make more money on the server? The Enderscape Wiki is currently being built and will contain everything you need to know about the server and it's features.</p>
                <button type="button">Visit Wiki</button>
            </section>
        </div>
        <div>
            <table class="leaderboards">
                <tr>
                    <th><h3 style='margin-bottom: 5px'>Balance Leaderboard</h3></th>
                    <th><h3 style='margin-bottom: 5px'>Lands Leaderboard</h3></th>
                    <th><h3 style='margin-bottom: 5px'>McMMO Power Leaderboard</h3></th>
                </tr>
                <tr>
                    <td><?php include('../includes/balance_cmi_database.php'); ?></td>
                    <td><?php include('../includes/lands_database.php'); ?></td>
                    <td><?php include('../includes/mcmmo_database.php'); ?></td>
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