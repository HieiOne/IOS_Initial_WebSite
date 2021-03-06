<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IOSoccer Official</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/leaderboard.css" />
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

        <div class="content">
            <table>
                <tr>
                    <th>Position</th>
                    <th>Club</th>
                    <th>Played</th>
                    <th>Won</th>
                    <th>Drawn</th>
                    <th>Lost</th>
                    <th>GF</th>
                    <th>GA</th>
                    <th>GD</th>
                    <th>Points</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Next Generation</td>
                    <td>30</td>
                    <td>29</td>
                    <td>1</td>
                    <td>0</td>
                    <td>69</td>
                    <td>5</td>
                    <td>+63</td>
                    <td>88</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Next Generation</td>
                    <td>30</td>
                    <td>29</td>
                    <td>1</td>
                    <td>0</td>
                    <td>69</td>
                    <td>5</td>
                    <td>+63</td>
                    <td>88</td>
                </tr>
            </table>
        
        </div>
        <?php include('footer.php'); ?>
    </div>
    
    <!-- SCRIPTS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/topbar.js"></script>
    <script src="js/main.js"></script>
    <?php
        // CLOSING DB
        mysqli_close($db);
    ?>
</body>
</html>