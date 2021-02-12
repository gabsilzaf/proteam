<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="description" name="description">
    <meta name="google" content="notranslate" />
    <meta content="" name="author">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">


    <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
    <link href="./assets/favicon.ico" rel="icon">

    <link href="http://proteam.rf.gd/dashboard2/mountain/style.css" rel="stylesheet">


    <title>Proteam</title>

    <link href="./main.550dcf66.css" rel="stylesheet">
</head>

<body>
    <!-- Add your content of header -->

    <?php require_once('header.php'); ?>

    <!-- Add your site or app content here -->
    <div id="home" class="hero-full-container background-image-container white-text-container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Proteam</h1>
                    <!-- <a href="./project.html" class="btn btn-default btn-lg" title="">Discover</a> -->
                </div>
            </div>
        </div>
    </div>

    <?php require_once('./database/connection.php'); ?>

    <div id="teamsection" class="section-container">
        <div class="container text-center">
            <div class="row">

                <div class="title col-xs-12">
                    <h3>Team</h3>
                </div>

                <table style="width:100%; text-align: center; margin: 25px 0;">
                    <tr>
                        <th style="text-align: center;">ID</th>
                        <th style="text-align: center;">Team</th>
                        <th style="text-align: center;">Club</th>
                        <th style="text-align: center;">Sport</th>
                        <th style="text-align: center;">Competition</th>
                        <th style="text-align: center;">Member</th>
                        <!-- <th style="text-align: center;">Location</th>-->
                    </tr>

                    <?php require_once('showteam.php'); ?>

                </table>

            </div>

            <div class="section-container contact-container">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-md-5">
                            <div class="form-group">

                                <div class="col-xs-1 col-md-3">
                                    <select class="form-control">
                                        <?php
                                        $showsqlteam = "select \"TeamID\"
                                        From \"Team\"
                                        join \"Sport\" on \"Team_Sport\" = \"SportID\"
                                        join \"Club\" on \"Team_Club\" = \"ClubID\"
                                        join \"TeamCompetition\" on \"TeamCompetition_Team\" = \"TeamID\"
                                        join \"Competition\" on \"TeamCompetition_Competition\" = \"CompetitionID\"
                                        order by \"TeamID\" asc";

                                        $resultteamq = pg_query($conn, $showsqlteam);

                                        if (!$resultteamq) {
                                            echo "An error occurred.\n";
                                        exit;
                                        }

                                        while ($rowteam = pg_fetch_row($resultteamq)) {
                                            echo "<option>".$rowteam[0]."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div id="compeditdel" class="col-xs-1 col-md-3">
                                    <a href="" class="btn btn-primary editbttn">Editar</a>
                                </div>

                                <div class="col-xs-1 col-md-3">
                                    <select class="form-control">
                                        <?php
                                        $showsqlteam = "select \"TeamID\"
                                        From \"Team\"
                                        join \"Sport\" on \"Team_Sport\" = \"SportID\"
                                        join \"Club\" on \"Team_Club\" = \"ClubID\"
                                        join \"TeamCompetition\" on \"TeamCompetition_Team\" = \"TeamID\"
                                        join \"Competition\" on \"TeamCompetition_Competition\" = \"CompetitionID\"
                                        order by \"TeamID\" asc";

                                        $resultteamq = pg_query($conn, $showsqlteam);

                                        if (!$resultteamq) {
                                            echo "An error occurred.\n";
                                        exit;
                                        }

                                        while ($rowteam = pg_fetch_row($resultteamq)) {
                                            echo "<option>".$rowteam[0]."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div id="compeditdel" class="col-xs-1 col-md-3">
                                    <a href="" class="btn btn-primary delbttn">Eliminar</a>
                                </div>

                            </div>
                        </div>

                        <div class="col-xs-12 col-md-7">
                            <div class="card-container">
                                <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">
                                    <form action="" class="reveal-content">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="team" placeholder="Team">
                                                </div>
                                                <div class="form-group">
                                                    <!-- <input type="text" class="form-control" id="club" placeholder="Club"> -->
                                                    <select class="form-control">
                                                            <?php
                                                        
                                                            echo "<option value=\"\">Without Club</option>";
                                                        
                                                            $showsqlteam = "select \"ClubID\", \"ClubName\" from \"Club\" order by \"ClubName\" asc";
                                                            $resultteamq = pg_query($conn, $showsqlteam);

                                                            if (!$resultteamq) {
                                                                echo "An error occurred.\n";
                                                            exit;
                                                            }

                                                            while ($rowteam = pg_fetch_row($resultteamq)) {
                                                                echo "<option value=".$rowteam[0].">".$rowteam[1]."</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <input type="email" class="form-control" id="sport" placeholder="Sport"> -->
                                                        <select class="form-control">
                                                            <?php
                                                            $showsqlteam = "select * from \"Sport\" order by \"SportName\" asc";
                                                            $resultteamq = pg_query($conn, $showsqlteam);

                                                            if (!$resultteamq) {
                                                                echo "An error occurred.\n";
                                                            exit;
                                                            }

                                                            while ($rowteam = pg_fetch_row($resultteamq)) {
                                                                echo "<option value=".$rowteam[0].">".$rowteam[1]."</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <input type="text" class="form-control" id="club" placeholder="Club"> -->
                                                    <select class="form-control">
                                                            <?php
                                                        
                                                            echo "<option value=\"\">Without Competition</option>";
                                                        
                                                            $showsqlteam = "select \"CompetitionID\", \"CompetitionName\" from \"Competition\" order by \"CompetitionName\" asc";
                                                            $resultteamq = pg_query($conn, $showsqlteam);

                                                            if (!$resultteamq) {
                                                                echo "An error occurred.\n";
                                                            exit;
                                                            }

                                                            while ($rowteam = pg_fetch_row($resultteamq)) {
                                                                echo "<option value=".$rowteam[0].">".$rowteam[1]."</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                </div>
                                                <!--
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="location" placeholder="Location">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="member" placeholder="Member">
                                                </div>
                                                -->
                                                <button type="submit" class="btn btn-primary">ADD Team</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-image col-xs-12" style="background-image: url('/assets/images/img-01.jpg')">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php require_once('./footer.php')?>

</html>
