<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IOSoccer Federation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="icon" href="img/iosf.png">
</head>
<body>
    <?php
        $db = mysqli_connect("localhost", "root", "toor", "iosf_website");

        if (!$db) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
    ?>
    <div id="main">
        <!-- HEADER -->
        <div class="header">
            <!-- TOP-BAR -->
            <div class="top-bar">
                <div class="game-title">
                    <a href="#"><h1>IOSOCCER</h1></a>
                </div>

                <div class="search-bar">
                    <form action="#" method="GET">
                        <input class="search" type="text" name="search" placeholder="Search..">
                    </form>
                </div>
                <div class="buttons">
                    <a><img src="./img/bars.png"></img></a>
                    <a href="#" id="button-home" class="active"><div><h1>HOME</h1></div></a>
                    <a href="#" id="button-news"><div><h1>NEWS</h1></div></a>
                    <a href="#" id="button-about"><div><h1>ABOUT</h1></div></a>
                    <a href="#" id="button-league"><div><h1>LEAGUE</h1></div></a>
                    <a href="#" id="button-contact"><div><h1>CONTACT</h1></div></a>
                    <a href="#" id="button-login"><div><h1 class="login">LOGIN</h1></div></a>
                </div>
            </div>
            <!-- INTRO -->
            <div class="intro">
                <div class="gameprice">
                    <p><span>FREE TO PLAY</span></p>
                </div>
                <div class="description"><p>A skill based first-person soccer game,<br>download now for free!</p></div>
                <div class="download">
                    <button>DOWNLOAD</button>
                </div>
                <div class="socialnetworks">
                    <div class="images">
                        <a href="#"><img src="./img/twitter.png"></a>
                        <a href="#"><img src="./img/facebook.png"></a>
                        <a href="#"><img src="./img/youtube.png"></a>
                    </div>
                </div>
                <div class="video">
                    <iframe src="https://www.youtube.com/embed/aQUaKW-KHtQ" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <div class="background"></div>
        </div>

        <!-- CONTENT -->
        <div class="content">
            <div class="content-introduction">
                <p class="title">Play good <span class="colored">football</span></p>
                <p class="text">Enjoy total footballing freedom our system allows the player to mould into any<br>sort of footballer they want to be!</p>
            </div>
            <div class="news">
                <div class="top">
                    <p>NEWS</p>
                    <div class="news_button">
                        <div onclick="plusDivs(1)">&#10095</div>
                        <div onclick="plusDivs(-1)" class="space">&#10094</div>
                    </div>
                </div>
                <div class="boxes">
                    <a href="#">
                        <div class="new">
                            <div class="new_title"><span>HOLA PUTO<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>
                    <a href="#">
                        <div class="new">
                            <div class="new_title"><span>HOLA PUTO1<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>
                    <a href="#">
                        <div class="new">
                            <div class="new_title"><span>HOLA PUTO2<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>
                    <a href="#">
                        <div class="new">
                            <div class="new_title"><span>HOLA PUTO3<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>
                    <a href="#">
                        <div class="new">
                            <div class="new_title"><span>HOLA PUTO4<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>
                    <a href="#">
                        <div class="new">
                            <div class="new_title"><span>HOLA PUTO5<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>
                    <a href="#">
                        <div class="new">
                            <div class="new_title"><span>HOLA PUTO6<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>
                    <a href="#">
                        <div class="new">
                            <div class="new_title"><span>HOLA PUTO7<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>
                    <a href="#">
                        <div class="new">
                            <div class="new_title"><span>HOLA PUTO8<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>
                    <a href="#">
                        <div class="new">
                            <div class="new_title"><span>HOLA PUTO9<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>
                    <a href="#">
                        <div class="new">
                            <div class="new_title"><span>HOLA PUTO10<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>

                </div>
            </div>
            <div class="info_1"></div>
            <div class="screenshots"></div>
            <div class="info_2"></div>
            <div class="content-ending">
                <p class="title">We are here to have <span class="colored">fun</span>!</p>
                <p class="text">We welcome new players and are a very friendly bunch who love to play football.<br>I hope I don't have to rework this</br></p>
            </div>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            <h1>©2018 - IOSoccer</h1>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/main.js"></script>
    <?php
        // CLOSING DB
        mysqli_close($db);
    ?>
</body>
</html>