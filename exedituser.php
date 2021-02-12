<?php

require_once('toppage.php');

?>

<title>Edit User</title>

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
                </div>
            </div>
        </div>
    </div>

    <div id="usersection" class="section-container">
        <div class="container text-center">
            <div class="row">

                <div class="title col-xs-12">
                    <h3>Edit user</h3>
                </div>

                <div class="col-xs-12 col-md-12">
                    <div class="card-container">

                        <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">

                            <?php
                            require_once('./database/connection.php');
                            
                            if (empty($_POST['userid'])) {
                                echo "No ID Found.";
                                echo "<script type=\"text/javascript\"> alert( \"It was not possible to determine the user, let's go back.\"); </script>";
                                echo "<script type=\"text/javascript\">window.history.back();</script>";
                            } else {
                                $user_id = $_POST['userid'];
                                // echo $user_id;
                            }
                            
                            if (empty($_POST['profileid'])){
                                echo "No Profile Not Found.";
                            } else {
                                $userprofile = $_POST['profileid'];
                                // echo $userprofile;
                            }
                            
                            if (empty($_POST['name'])) {
                                echo "No Name Found.";
                            } else {
                                $username = $_POST['name'];
                                // echo $username;
                            }
                            
                            if (empty($_POST['lastname'])) {
                                echo "No last Name Found.";
                            }else {
                                $userlastnm = $_POST['lastname'];
                                // echo $userlastnm;
                            }
                            
                            if (empty($_POST['useremail'])) {
                                echo "No Email Found.";
                            }else {
                                $useremail = $_POST['useremail'];
                                // echo $useremail;
                            }
                            
                            /*
                            if (empty($_POST['usercountry'])) {
                                echo "No Country Found.";
                            }else {
                                $usercountry = $_POST['usercountry'];
                                // echo $usercountry;
                            }
                            */

                            $updateprofile ="UPDATE public.\"Profile\" SET \"ProfileName\"='$username', \"ProfileLastName\"='$userlastnm' WHERE \"ProfileID\"='$userprofile';";
                            
                            $resltinstpr = pg_query($conn, $updateprofile);

                            if (!$resltinstpr) {
                                
                                echo "Error: " . $resltinstpr . "<br>";
                            
                            } else {
                                
                                $updateuser = "UPDATE public.\"User\" SET \"UserEMail\"='$useremail' WHERE \"UserID\"='$user_id'; ";
                                $resltinstpru = pg_query($conn, $updateuser);

                                if (!$resltinstpru) {
                                    
                                    echo "Error: " . $resltinstpru . "<br>";
                                    
                                } else {
                                    // echo "New record created successfully. Last inserted ID is: " . $last_id;
                                    echo "New record updated successfully.";
                                    echo "<p>You should be automatically redirected in <span id=\"seconds\">5</span> seconds.</p>";
                                }
                            }
                            
                            ?>

                        </div>
                        <div class="card-image col-xs-12" style="background-image: url('./assets/images/img-01.jpg')">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Countdown timer for redirecting to another URL after several seconds

        var seconds = 5; // seconds for HTML
        var foo; // variable for clearInterval() function

        function redirect() {
            document.location.href = './alluser.php';
        }

        function updateSecs() {
            document.getElementById("seconds").innerHTML = seconds;
            seconds--;
            if (seconds == -1) {
                clearInterval(foo);
                redirect();
            }
        }

        function countdownTimer() {
            foo = setInterval(function() {
                updateSecs()
            }, 1000);
        }

        countdownTimer();

    </script>

    <?php require_once('./footer.php')?>

    </html>
    <?php pg_close($conn); ?>
