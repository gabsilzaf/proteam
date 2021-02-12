<?php

require_once('toppage.php');
require_once('./database/connection.php');

if (empty($_POST['deleteuser'])) {
  echo "<script>";
    echo "alert('Houve um erro de sistema, vamos voltar a pagina anterior.')";
        echo "window.history.back();";
  echo "</script>";
} else {
    $useredit = $_POST['deleteuser'];
}

$showsqluser = "
select DISTINCT(\"UserID\"), \"ProfileID\" 
from \"User\"
left join \"Profile\" on \"ProfileID\" = \"User_Profile\"
left join \"TeamMembers\" on \"TeamMembers_Profile\" = \"User_Profile\"
Where \"UserID\" = '$useredit'
Order by \"UserID\" ASC
";


$resultuserq = pg_query($conn, $showsqluser);

if (!$resultuserq) {
    echo "An error occurred.\n";
    exit;
}
$row = pg_fetch_row($resultuserq);

$user_id = $row[0];
$userprofile = $row[1];

?>

<title>Delete User</title>

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
                            
                            echo "User ID: ".$user_id;
                            echo "Profile ID: ".$userprofile;
                            
                            $updateprofile ="DELETE FROM \"Profile\" WHERE \"ProfileID\"='$userprofile'; ";
                            
                            $resltinstpr = pg_query($conn, $updateprofile);

                            if (!$resltinstpr) {
                                
                                echo "Error: " . $resltinstpr . "<br>";
                            
                            } else {
                                
                                $updateuser = "delete from \"User\" where \"UserID\" = '$user_id'; ";
                                $resltinstpru = pg_query($conn, $updateuser);

                                if (!$resltinstpru) {
                                    
                                    echo "Error: " . $resltinstpru . "<br>";
                                    
                                } else {
                                    echo "New record deleted successfully.";
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
