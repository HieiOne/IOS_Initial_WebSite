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
                    <a href="#" id="button-news" class="active"><div><h1>NEWS</h1></div></a>
                    <a href="#" id="button-about"><div><h1>ABOUT</h1></div></a>
                    <a href="#" id="button-contact"><div><h1>CONTACT</h1></div></a>
                    <a href="#" id="button-donate"><div><h1>DONATE</h1></div></a>
                    <a href="#" id="button-login"><div><h1>LOGIN</h1></div></a>
                    <a href="#" id="button-signup"><div><h1 class="signup">SIGNUP</h1></div></a>
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
            <!-- TEAMS -->
            <div class="teams">
                <div class="title"><p><span>TEAMS</span></p></div>
                <?php
                    $query = "SELECT * FROM teams";
                    $result = mysqli_query($db,$query);
                    
                    echo "<div class='team-div'>";
                    while ($team = mysqli_fetch_array($result)) {
                        echo "<div class='team'>";
                            echo "<div class='team-image'><img src='./img/team_logos/$team[shortname].png' onerror=this.src='./img/not_available.png';></div>";
                            echo "<div class='team-name'><p>$team[name]</p></div>";
                            echo "<div class='team-result'><p>$team[result]</p></div>";
                        echo "</div>";
                    }
                    echo "</div>";
                ?>
            </div>

            <!-- LATEST MATCHES -->
            <!-- <div class="latest-matches">
                <div class="title"><p><span>LATEST MATCHES</span></p></div>
                <?php
                    // $query = "SELECT * FROM latestmatches";
                    // echo "<div class='matches-div'>";
                    // $result = mysqli_query($db,$query);

                    // while ($match = mysqli_fetch_array($result)) {
                    //     echo "<div class='match'>";
                    //         echo "<div class='match-team-home'>";
                    //             echo "<div class='match-team-image'><img src='./img/team_logos/$match[home_team_shortname].png' onerror=this.src='./img/not_available.png';></div>";
                    //             echo "<div class='match-team-name'><p>$match[home_team]</p></div>";
                    //         echo "</div>";
                    //         echo "<div class='match-info'>";
                    //             echo "<div class='match-score'><p>$match[score]</p></div>";
                    //             echo "<div class='match-date'><p>$match[match_date]</p></div>";
                    //         echo "</div>";
                    //         echo "<div class='match-team-away'>";
                    //             echo "<div class='match-team-image'><img src='./img/team_logos/$match[away_team_shortname].png' onerror=this.src='./img/not_available.png';></div>";
                    //             echo "<div class='match-team-name'><p>$match[away_team]</p></div>";
                    //         echo "</div>";
                    //     echo "</div>";
                    // }
                    // echo "</div>";
                ?>
            </div>

            <div class="league-table">
                <div class="title"><p><span class="purple">LEAGUE TABLE & STATS</span></p></div>
                <div class="league-table-div">
                    <table class="table-league">
                        <tr>
                            <th>POS</th>
                            <th>TEAM</th>
                            <th>PLD</th>
                            <th>WON</th>
                            <th>DRAWN</th>
                            <th>LOST</th>
                            <th>GF</th>
                            <th>GA</th>
                            <th>GD</th>
                            <th>PTS</th>
                        </tr>
                        <?php
                            // $query_league = "SELECT * FROM `leaguetable` ORDER BY won*3+drawn DESC, goalsfor-goalsagainst DESC";
                            // $result = mysqli_query($db, $query_league);
                            // $pos = 1;
                            // while ($team = mysqli_fetch_array($result)) {
                            //     $gd = $team['goalsfor']-$team['goalsagainst'];
                            //     $points = $team['won']*3+$team['drawn'];
                            //     echo "<tr>";
                            //     echo "<td>$pos</td>";
                            //     echo "<td>$team[team]</td>";
                            //     echo "<td>$team[pld]</td>";
                            //     echo "<td>$team[won]</td>";
                            //     echo "<td>$team[drawn]</td>";
                            //     echo "<td>$team[lost]</td>";
                            //     echo "<td>$team[goalsfor]</td>";
                            //     echo "<td>$team[goalsagainst]</td>";
                            //     echo "<td>$gd</td>";
                            //     echo "<td>$points</td>";
                            //     echo "</tr>";
                            //     $pos++;
                            // }
                        ?>                
                    </table>
                    <table class="table-stats">
                        <th colspan="2">GOALS</th>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        
                    </table>
                    <table class="table-stats">
                        <th colspan="2">ASSISTS</th>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>

                        
                    </table>
                    <table class="table-stats">
                        <th colspan="2">PASSES</th>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>

                        
                    </table>
                    <table class="table-stats">
                        <th colspan="2">SAVES</th>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Aryan</td>
                            <td>64</td>
                        </tr>

                        
                    </table>
                </div> -->
                

            <!-- </div> -->

            <div class="twitter">
                <div class="title"><p><span>IOS INSIDER</span></p></div>
                <a class="twitter-timeline" data-height="250" data-theme="dark" data-width="1200" href="https://twitter.com/IOS_Insider?ref_src=twsrc%5Etfw"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>

            <div class="content-news"></div>
        </div>
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