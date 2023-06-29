<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="icon" type="image/x-icon" href="images/enderscape-logo.gif">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <script src="js/index.js"></script> 
    </head>
    <body>
        <div id="home">
            <nav id="nav">
                <a href="#home" onclick="smoothScroll(event, 'home')">
                    <picture>
                        <source srcset="images/enderscape-logo.avif">
                        <img src="images/enderscape-logo.png">
                    </picture>
                </a>
                <ul class="menu">
                    <li>
                        <a href="#home" onclick="smoothScroll(event, 'home')">
                            <picture>
                                <source srcset="images/home-icon.avif">
                                <img src="images/home-icon.png">
                            </picture>
                            <h3>Home</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#store" onclick="smoothScroll(event, 'store')">
                            <picture>
                                <source srcset="images/store-icon.avif">
                                <img src="images/store-icon.png">
                            </picture>
                            <h3>Store</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#leaderboards-bottom-row" onclick="smoothScroll(event, 'leaderboards-bottom-row')">
                            <picture>
                                <source srcset="images/leaderboard.avif">
                                <img src="images/leaderboard-icon.png">
                            </picture>
                            <h3>Leaderboards</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#wiki" onclick="smoothScroll(event, 'wiki')">
                            <picture>
                                <source srcset="images/wiki.avif">
                                <img src="images/wiki-icon.png">
                            </picture>
                            <h3>Wiki</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#vote" onclick="smoothScroll(event, 'vote')">
                            <picture>
                                <source srcset="images/vote.avif">
                                <img src="images/vote-icon.png">
                            </picture>
                            <h3>Vote</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#discord" onclick="smoothScroll(event, 'discord')">
                            <picture>
                                <source srcset="images/discord.avif">
                                <img src="images/discord-icon.png">
                            </picture>
                            <h3>Discord</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#quizzes" onclick="smoothScroll(event, 'quizzes')">
                            <picture>
                                <source srcset="images/quizzes.avif">
                                <img src="images/quizzes-icon.png">
                            </picture>
                            <h3>Quizzes</h3>
                        </a>
                    </li>
                </ul>
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
            <svg class="top" data-v-6da3ec0c="" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path data-v-6da3ec0c="" d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
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
            <svg class="bottom" data-v-6da3ec0c="" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" style="transform: rotate(360deg);">
                <path data-v-6da3ec0c="" d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
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
            <svg class="top" data-v-6da3ec0c="" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path data-v-6da3ec0c="" d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
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
            <svg class="bottom" data-v-6da3ec0c="" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" style="transform: rotate(360deg);">
                <path data-v-6da3ec0c="" d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
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
            <svg class="top" data-v-6da3ec0c="" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path data-v-6da3ec0c="" d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
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