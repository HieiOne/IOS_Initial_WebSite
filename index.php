<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IOSoccer Official</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="icon" href="img/game.ico">
</head>
<body>
    <div id="main">
    <?php
        $db = mysqli_connect("localhost", "root", "toor", "iosf_website");

        if (!$db) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

        //HEADER
        include("header.php");
    ?>
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
                        <div onclick="plusDivs(1,0)">&#10095</div>
                        <div onclick="plusDivs(-1,0)" class="space">&#10094</div>
                    </div>
                </div>
                <div class="boxes">
                    <a href="#">
                        <div class="new fade">
                            <div class="new_title"><span>HOLA PUTO<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>
                    <a href="#">
                        <div class="new fade">
                            <div class="new_title"><span>HOLA PUTO1<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>
                    <a href="#">
                        <div class="new fade">
                            <div class="new_title"><span>HOLA PUTO2<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>
                    <a href="#">
                        <div class="new fade">
                            <div class="new_title"><span>HOLA PUTO3<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>
                    <a href="#">
                        <div class="new fade">
                            <div class="new_title"><span>HOLA PUTO4<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>
                    <a href="#">
                        <div class="new fade">
                            <div class="new_title"><span>HOLA PUTO5<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>
                    <a href="#">
                        <div class="new fade">
                            <div class="new_title"><span>HOLA PUTO6<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>
                    <a href="#">
                        <div class="new fade">
                            <div class="new_title"><span>HOLA PUTO7<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>
                    <a href="#">
                        <div class="new fade">
                            <div class="new_title"><span>HOLA PUTO8<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>
                    <a href="#">
                        <div class="new fade">
                            <div class="new_title"><span>HOLA PUTO9<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>
                    <a href="#">
                        <div class="new fade">
                            <div class="new_title"><span>HOLA PUTO10<span></div>
                            <div class="new_body"><span>I will truncate text with javascript later</span></div>
                            <div class="new_author"><span>Hiei</span></div>
                            <img src="./img/news_background.jpg">
                        </div>
                    </a>

                </div>
            </div>
            <div class="info_1">
                <div class="info_left">
                    <div class="info_picture"><img src="./img/news_background.jpg"></div>
                    <div class="info_text">
                        <div class="info_text_header"><span>TEAMS</span></div>
                        <div class="info_text_body"><span class="title"><span class="colored">Good players</span> need teams<br></span><span>For you,the skies will be blue, the birds will sing, and your copy will be crafted by a dedicated little man whose wife will be sitting at home, knitting, wondering why your entry demands more of her husband‘s time than it should. man whose wife will be sitting at home, knitting, wondering why your entry demands more of her husband‘s time than it should.</span></div>
                    </div>
                </div>
                <div class="info_right">
                    <div class="info_text">
                        <div class="info_text_header"><span>GAMEPLAY</span></div>
                        <div class="info_text_body"><span class="title">Complete <span class="colored">freedom</span><br></span><span>For you,the skies will be blue, the birds will sing, and your copy will be crafted by a dedicated little man whose wife will be sitting at home, knitting, wondering why your entry demands more of her husband‘s time than it should. man whose wife will be sitting at home, knitting, wondering why your entry demands more of her husband‘s time than it should.</span></div>
                    </div>
                    <div class="info_picture"><img src="./img/news_background.jpg"> </div>
                </div>
            </div>

            <div class="screenshots">
                <div class="top">
                    <p>SCREENSHOTS</p>
                    <div class="news_button">
                        <div onclick="plusDivs(1, 1)">&#10095</div>
                        <div onclick="plusDivs(-1, 1)" class="space">&#10094</div>
                    </div>
                </div>
                <div class="boxes">
                        <div class="screenshot fade">
                            <img src="./img/news_background.jpg" onclick="ShowModal('./img/news_background.jpg')">
                        </div>
                        <div class="screenshot fade">
                            <img src="./img/news_background.jpg" onclick="ShowModal('./img/news_background.jpg')">
                        </div>
                        <div class="screenshot fade">
                            <img src="./img/news_background.jpg" onclick="ShowModal('./img/news_background.jpg')">
                        </div>
                        <div class="screenshot fade">
                            <img src="./img/news_background.jpg" onclick="ShowModal('./img/news_background.jpg')">
                        </div>
                        <div class="screenshot fade">
                            <img src="./img/news_background.jpg" onclick="ShowModal('./img/news_background.jpg')">
                        </div>
                        <div class="screenshot fade">
                            <img src="./img/news_background.jpg" onclick="ShowModal('./img/news_background.jpg')">
                        </div>
                </div>
            </div>

            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
            </div>
            
            <div class="info_2">
                <div class="info_left">
                    <div class="info_picture"><img src="./img/news_background.jpg"></div>
                    <div class="info_text">
                        <div class="info_text_header"><span>COMPETITIONS</span></div>
                        <div class="info_text_body"><span class="title">Fun casual <span class="colored">tournaments</span><br></span><span>For you,the skies will be blue, the birds will sing, and your copy will be crafted by a dedicated little man whose wife will be sitting at home, knitting, wondering why your entry demands more of her husband‘s time than it should. man whose wife will be sitting at home, knitting, wondering why your entry demands more of her husband‘s time than it should.</span></div>
                    </div>
                </div>
                <div class="info_right">
                    <div class="info_text">
                        <div class="info_text_header"><span>COMMUNITY</span></div>
                        <div class="info_text_body"><span class="title"><span class="colored">Friendly</span> staff and players<br></span><span>For you,the skies will be blue, the birds will sing, and your copy will be crafted by a dedicated little man whose wife will be sitting at home, knitting, wondering why your entry demands more of her husband‘s time than it should. man whose wife will be sitting at home, knitting, wondering why your entry demands more of her husband‘s time than it should.</span></div>
                    </div>
                    <div class="info_picture"><img src="./img/news_background.jpg"> </div>
                </div>
            </div>
            <div class="content-ending">
                <p class="title">We are here to have <span class="colored">fun</span>!</p>
                <p class="text">We welcome new players and are a very friendly bunch who love to play football.<br>I hope I don't have to rework this</br></p>
            </div>
        </div>
        <?php include('footer.php'); ?>
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