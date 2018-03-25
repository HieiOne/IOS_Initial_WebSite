<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IOSoccer Official</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/news.css" />
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

        $file = 'news';
        //HEADER
        include("header.php");
    ?>

        <!-- CONTENT -->
        <div class="content">
            <div class="news">
                <div class="new">
                </div>
                <div class="new">
                </div>
                <div class="new">
                </div>
                <div class="new">
                </div>
                <div class="new">
                </div>
                <div class="new">
                </div>
                <div class="new">
                </div>
                <div class="new">
                </div>
                <div class="new">
                </div>
                <div class="new">
                </div>
                <div class="new">
                </div>
                <div class="new">
                </div>
                <div class="new">
                </div>
                <div class="new">
                </div>
                <div class="new">
                </div>
                <div class="new">
                </div>
                <div class="new">
                </div>
                <div class="new">
                </div>
            </div>
            <div class="pagination">
            </div>
        </div>
        <!-- FOOTER -->
        <?php include('footer.php'); ?>
    </div>
    <!-- SCRIPTS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/topbar.js"></script>
    <?php
        // CLOSING DB
        mysqli_close($db);
    ?>
</body>
</html>