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

    <?php require_once('./header.php'); ?>

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

    <div id="clubsection" class="section-container">
        <div class="container text-center">
            <div class="row">

                <div class="title col-xs-12">
                    <h3>Club</h3>
                </div>

                <table style="width:100%; text-align: center; margin: 25px 0;">
                    <tr>
                        <th style="text-align: center;">ID</th>
                        <th style="text-align: center;">Club</th>
                        <th style="text-align: center;">Location</th>
                        <th style="text-align: center;">Invite Code</th>
                        <!-- <th style="text-align: center;" >Homebase</th> -->
                    </tr>

                    <?php require_once('showclub.php');?>

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
                                            $showsqlteam = "Select \"ClubID\" from \"Club\", \"Country\" where \"Club_Country\" = \"CountryID\" Order by \"ClubID\" asc";
                                            $resultteamq = pg_query($conn, $showsqlteam);

                                            if (!$resultteamq) {
                                                echo "An error occurred.\n";
                                                exit;
                                            }

                                            while ($rowteam = pg_fetch_row($resultteamq)) {
                                                echo "<option value=".$rowteam[0].">".$rowteam[0]."</option>";
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
                                            $showsqlteam = "Select \"ClubID\" from \"Club\", \"Country\" where \"Club_Country\" = \"CountryID\" Order by \"ClubID\" asc";
                                            $resultteamq = pg_query($conn, $showsqlteam);

                                            if (!$resultteamq) {
                                                echo "An error occurred.\n";
                                                exit;
                                            }

                                            while ($rowteam = pg_fetch_row($resultteamq)) {
                                                echo "<option value=".$rowteam[0].">".$rowteam[0]."</option>";
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
                                                    <input type="text" class="form-control" id="club" placeholder="Club">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="invitecode" placeholder="Invite Code">
                                                </div>
                                                
                                                <div class="form-group">
                                                <?php require_once('./selectcountry.php'); ?>
                                                </div>
                                                <!--
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="location" placeholder="Location">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="homebase" placeholder="Homebase">
                                                </div>
                                                -->
                                                <button type="submit" class="btn btn-primary">ADD Club</button>
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
