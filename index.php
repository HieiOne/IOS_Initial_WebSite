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

        <!-- FOOTER -->
        <div class="footer">
            <h1>©2018 - IOSoccer</h1>
        </div>
    </div>

    <script src="js/main.js"></script>
    <?php
        mysqli_close($db);
    ?>
</body>
</html>