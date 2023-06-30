<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="icon" type="image/x-icon" href="images/enderscape-logo.gif">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <script src="js/index.js"></script> 
        <title>Home</title>
    </head>
    <body>
        <div id="home">
            <nav>
                <a href="#home" onclick="smoothScroll(event, 'home')">
                    <picture>
                        <source srcset="images/enderscape-logo.avif" style="width: 40px; padding: 12px 12px 12px 0px;">
                        <img src="images/enderscape-logo.png" style="width: 40px;  padding: 12px 12px 12px 0px;">
                    </picture>
                </a>
                <div class="topnav" id="topnav">
                    <a href="#home" class="firstmenu" onclick="smoothScroll(event, 'home')">
                        <picture>
                            <source srcset="images/home-icon.avif">
                            <img src="images/home-icon.png">
                        </picture>
                        <h3>Home</h3>
                    </a>
                    <a href="#store" class="menuitem" onclick="smoothScroll(event, 'store')">
                        <picture>
                            <source srcset="images/store-icon.avif">
                            <img src="images/store-icon.png">
                        </picture>
                        <h3>Store</h3>
                    </a>
                    <a href="#leaderboards-bottom-row" class="menuitem" onclick="smoothScroll(event, 'leaderboards-bottom-row')">
                        <picture>
                            <source srcset="images/leaderboard-icon.avif">
                            <img src="images/leaderboard-icon.png">
                        </picture>
                        <h3>Leaderboards</h3>
                    </a>
                    <a href="#wiki" class="menuitem" onclick="smoothScroll(event, 'wiki')">
                        <picture>
                            <source srcset="images/wiki-icon.avif">
                            <img src="images/wiki-icon.png">
                        </picture>
                        <h3>Wiki</h3>
                    </a>
                    <a href="#vote" class="menuitem" onclick="smoothScroll(event, 'vote')">
                        <picture>
                            <source srcset="images/vote-icon.avif">
                            <img src="images/vote-icon.png">
                        </picture>
                        <h3>Vote</h3>
                    </a>
                    <a href="#discord" class="menuitem" onclick="smoothScroll(event, 'discord')">
                        <picture>
                            <source srcset="images/discord-icon.avif">
                            <img src="images/discord-icon.png">
                        </picture>
                        <h3>Discord</h3>
                    </a>
                    <a href="#quizzes" class="menuitem" onclick="smoothScroll(event, 'quizzes')">
                        <picture>
                            <source srcset="images/quizzes-icon.avif">
                            <img src="images/quizzes-icon.png">
                        </picture>
                        <h3>Quizzes</h3>
                    </a>
                    <a href="javascript:void(0);" class="icon" onclick="responsiveNav()">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </nav>
            <header id="header">
                <h1 id="title">Enderscape</h1>
                <h3>Survival | Creative | Duels | Skyblock</h3>
                <div id="ip">
                    <a href="#">
                        <h3>IP: enderscape.net</h3>
                        <picture>
                            <source srcset="images/clipboard-icon.avif">
                            <img src="images/clipboard-icon.png">
                        </picture>
                    </a>
                    <br>
                    <?php include('../includes/online_players.php'); ?>
                </div>
                <div id="notification">IP has been copied to clipboard!</div>
            </header>
            <svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="top">
                <path d="M0 88L25 93.2C50 98.3 100 108.7 150 110C200 111.3 250 103.7 300 96.7C350 89.7 400 83.3 450 85.3C500 87.3 550 97.7 600 104.2C650 110.7 700 113.3 750 113.8C800 114.3 850 112.7 900 107.8C950 103 1000 95 1050 94.2C1100 93.3 1150 99.7 1175 102.8L1200 106L1200 121L1175 121C1150 121 1100 121 1050 121C1000 121 950 121 900 121C850 121 800 121 750 121C700 121 650 121 600 121C550 121 500 121 450 121C400 121 350 121 300 121C250 121 200 121 150 121C100 121 50 121 25 121L0 121Z" fill="#191919" stroke-linecap="round" stroke-linejoin="miter"></path>
            </svg>
        </div>
        <div id="store">
            <div>
                <section class="left">
                    <h1>Store</h1>
                </section>
                <section class="right">
                    <p>Here you can buy a variety of in-game products for real-world currency.</p>
                    <p>By purchasing from our store, you are supporting the server, ensuring it stays online for years to come.</p>
                    <button type="button" onclick="window.open('https://store.enderscape.net/', '_blank')">Visit Store</button>
                </section>
            </div>
        </div>
        <div id="leaderboards">
            <svg class="bottom" viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                <path d="M0 21L25 22C50 23 100 25 150 22.5C200 20 250 13 300 10.8C350 8.7 400 11.3 450 10.3C500 9.3 550 4.7 600 5.7C650 6.7 700 13.3 750 20.5C800 27.7 850 35.3 900 37.5C950 39.7 1000 36.3 1050 32.3C1100 28.3 1150 23.7 1175 21.3L1200 19L1200 0L1175 0C1150 0 1100 0 1050 0C1000 0 950 0 900 0C850 0 800 0 750 0C700 0 650 0 600 0C550 0 500 0 450 0C400 0 350 0 300 0C250 0 200 0 150 0C100 0 50 0 25 0L0 0Z" fill="#191919" stroke-linecap="round" stroke-linejoin="miter"></path>
            </svg>
            <section>
                <div id="leaderboards-top-row">
                    <div class="leaderboard">
                        <h3>Balance Leaderboard</h3>
                        <?php include('../includes/balance_cmi_database.php'); ?>
                    </div>
                    <div class="leaderboard">
                        <h3>Lands Leaderboard</h3>
                        <?php include('../includes/lands_database.php'); ?>
                    </div>
                    <div class="leaderboard">
                        <h3>McMMO Power Leaderboard</h3>
                        <?php include('../includes/mcmmo_database.php'); ?>
                    </div>
                </div>
                <div id="leaderboards-bottom-row">
                    <div class="leaderboard">
                        <h3>Rank Leaderboard</h3>
                        <?php include('../includes/rank_cmi_database.php'); ?>
                    </div>
                    <div class="leaderboard">
                        <h3>Vote Leaderboard</h3>
                        <?php include('../includes/votes_cmi_database.php'); ?>
                    </div>
                    <div class="leaderboard">
                        <h3>Playtime Leaderboard</h3>
                        <?php include('../includes/playtime_cmi_database.php'); ?>
                    </div>
                </div>
                <p>* Refresh the page to update the leaderboards.</p>
            </section> 
            <svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="top">
                <path d="M0 88L25 93.2C50 98.3 100 108.7 150 110C200 111.3 250 103.7 300 96.7C350 89.7 400 83.3 450 85.3C500 87.3 550 97.7 600 104.2C650 110.7 700 113.3 750 113.8C800 114.3 850 112.7 900 107.8C950 103 1000 95 1050 94.2C1100 93.3 1150 99.7 1175 102.8L1200 106L1200 121L1175 121C1150 121 1100 121 1050 121C1000 121 950 121 900 121C850 121 800 121 750 121C700 121 650 121 600 121C550 121 500 121 450 121C400 121 350 121 300 121C250 121 200 121 150 121C100 121 50 121 25 121L0 121Z" fill="#191919" stroke-linecap="round" stroke-linejoin="miter"></path>
            </svg>
        </div>
        <div id="wiki">
            <div>
                <section class="left">
                    <h1>Wiki</h1>
                </section>
                <section class="right">
                    <p>Ever wondered how the Lands menu works or how to make more money on the server?</p>
                    <p>The Enderscape Wiki is currently being built and will contain everything you need to know about the server and it's features.</p>
                    <button type="button" onclick="window.open('https://docs.enderscape.net', '_blank')">Visit Wiki</button>
                </section>
            </div>
        </div>
        <hr>
        <div id="vote">
            <div>
                <section class="left">
                    <h1>Vote</h1>
                </section>
                <section class="right">
                    <p>Vote for Enderscape and get rewarded with in-game perks.</p>
                    <p>By voting you can earn exclusive vote tags to showcase your dedication and Cubelet keys to unlock randomised prizes.</p>
                    <button type="button" onclick="window.open('../html/vote.php', '_blank')">Vote Now</button>
                </section>
            </div>
        </div>
        <hr>
        <div id="discord">
            <div>
                <section class="left">
                    <h1>Discord</h1>
                </section>
                <section class="right">
                    <p>Join the server's Discord to connect with other players, have your say on the server and stay up to date with changes and announcements.</p>
                    <p>You can link your Minecraft account with our Discord server by typing /link in game.</p>
                    <button type="button" onclick="window.open('https://discord.gg/nHmYSDd8ms', '_blank')">Join the Discord</button>
                </section>
            </div>
        </div>
        <div id="quizzes">
        <svg class="bottom" viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
            <path d="M0 21L25 22C50 23 100 25 150 22.5C200 20 250 13 300 10.8C350 8.7 400 11.3 450 10.3C500 9.3 550 4.7 600 5.7C650 6.7 700 13.3 750 20.5C800 27.7 850 35.3 900 37.5C950 39.7 1000 36.3 1050 32.3C1100 28.3 1150 23.7 1175 21.3L1200 19L1200 0L1175 0C1150 0 1100 0 1050 0C1000 0 950 0 900 0C850 0 800 0 750 0C700 0 650 0 600 0C550 0 500 0 450 0C400 0 350 0 300 0C250 0 200 0 150 0C100 0 50 0 25 0L0 0Z" fill="#191919" stroke-linecap="round" stroke-linejoin="miter"></path>
        </svg>
            <div>
                <section class="left">
                    <h1>Quizzes</h1>
                    <p>Test your Enderscape knowledge with our collection of quizzes.</p>
                    <button type="button" onclick="window.open('#', '_blank')">Suggest a Quiz</button>
                </section>
                <section class="right">
                    <ul>
                        <a href="../html/lore-quiz.html">
                            <li>
                                <picture>
                                    <source srcset="images/lore-icon.avif">
                                    <img src="images/lore-icon.png">
                                </picture>
                                <h2>How well do you know Enderscape lore?</h2>
                            </li>
                        </a>
                        <a href="../html/which-staff-are-you.html">
                            <li>
                                <picture>
                                    <source srcset="images/staff-icon.avif">
                                    <img src="images/staff-icon.png">
                                </picture>
                                <h2>Which staff member are you?</h2>
                            </li>
                        </a>
                        <a href="../html/builds-quiz.html">
                            <li>
                                <picture>
                                    <source srcset="images/grassblock-icon.avif">
                                    <img src="images/grassblock-icon.png">
                                </picture>
                                <h2>Do you know who created these builds?</h2>
                            </li>
                        </a>
                    </ul>
                </section>
            </div>
            <svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="top">
                <path d="M0 88L25 93.2C50 98.3 100 108.7 150 110C200 111.3 250 103.7 300 96.7C350 89.7 400 83.3 450 85.3C500 87.3 550 97.7 600 104.2C650 110.7 700 113.3 750 113.8C800 114.3 850 112.7 900 107.8C950 103 1000 95 1050 94.2C1100 93.3 1150 99.7 1175 102.8L1200 106L1200 121L1175 121C1150 121 1100 121 1050 121C1000 121 950 121 900 121C850 121 800 121 750 121C700 121 650 121 600 121C550 121 500 121 450 121C400 121 350 121 300 121C250 121 200 121 150 121C100 121 50 121 25 121L0 121Z" fill="#191919" stroke-linecap="round" stroke-linejoin="miter"></path>
            </svg>
        </div>
        <footer>
            <p>
                © Enderscape 2023 | Website by 
                <a href="https://github.com/maneheks" target="_blank">maneheks</a>
            </p>
        </footer>
    </body>
</html>