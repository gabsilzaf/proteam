<?php

require_once('toppage.php');
require_once('./database/connection.php');

if (empty($_POST['edituser'])) {
  echo "<script>";
    echo "alert('Houve um erro de sistema, vamos voltar a pagina anterior.')";
        echo "window.history.back();";
  echo "</script>";
} else {
    $useredit = $_POST['edituser'];
}

$showsqluser = "
select DISTINCT(\"UserID\"), \"ProfileName\", \"ProfileLastName\", \"UserEMail\", \"CountryName\",\"TeamName\", \"CompetitionName\", \"User_Profile\"
from \"User\"
left join \"Country\" on \"CountryID\" = \"User_Country\"
left join \"Profile\" on \"ProfileID\" = \"User_Profile\"
left join \"TeamMembers\" on \"TeamMembers_Profile\" = \"User_Profile\"
left join \"Team\" on \"TeamID\" = \"TeamMembers_Team\"
left join \"TeamCompetition\" on \"TeamCompetition_Team\" = \"TeamID\"
left join \"Competition\" on \"CompetitionID\" = \"TeamCompetition_Competition\"
Where \"UserID\" = '$useredit'
Order by \"UserID\" ASC
";


$resultuserq = pg_query($conn, $showsqluser);

if (!$resultuserq) {
    echo "An error occurred.\n";
exit;
} 

$row = pg_fetch_row($resultuserq);


/*
$showsqluserteam = "
select DISTINCT(\"UserID\"), \"TeamName\"
from \"User\"
left join \"Country\" on \"CountryID\" = \"User_Country\"
left join \"Profile\" on \"ProfileID\" = \"User_Profile\"
left join \"TeamMembers\" on \"TeamMembers_Profile\" = \"User_Profile\"
left join \"Team\" on \"TeamID\" = \"TeamMembers_Team\"
left join \"TeamCompetition\" on \"TeamCompetition_Team\" = \"TeamID\"
left join \"Competition\" on \"CompetitionID\" = \"TeamCompetition_Competition\"
Where \"UserID\" = '$useredit'
Order by \"UserID\" ASC
";
$resultuserqt = pg_query($conn, $showsqluserteam);
*/


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
                            <form id="updateuser" action="exedituser.php" method="POST" class="reveal-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="userid" id="edituser" value="<?php  echo "$row[0]"; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="profileid" id="profileid" value="<?php  echo "$row[7]"; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" value="<?php  echo "$row[1]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="lastname" id="lastname" value="<?php  echo "$row[2]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="useremail" id="email" value="<?php  echo "$row[3]"; ?>">
                                        </div>
                                        
                                        <!--
                                        <?php /*
                            
                                        echo "Equipas actualmente inserido.";
                                        while ($rowct = pg_fetch_row($resultuserqt)) {
                                            echo"<div class=\"form-group\">";
                                            echo "<input type=\"text\" class=\"form-control\" id=\"userteam\" value=\"$rowct[1]\" disabled> ";
                                            echo "</div>";
                                        }
                                        ?>
                                        <?php // require_once('./popupuser.php');?>

                                        <div class="form-group">
                                            <select name="deleteuser" class="form-control">
                                                <?php  
                                    
                                                echo "<option id=".$row[6]." hidden>".$row[1]."</option>";

                                                require_once('./database/connection.php');
                                                $countryname = "Select  distinct(\"CountryID\"), \"CountryName\" from \"Country\" order by \"CountryName\" ASC";
                                                $resultcountry = pg_query($conn, $countryname);
                                                if (!$resultcountry) {
                                                    echo "An error occurred.\n";
                                                    exit;
                                                }
                                                    while ($rowct = pg_fetch_row($resultcountry)) {
                                                        echo "<option id=".$rowct[0].">".$rowct[1]."</option>";
                                                    }
                                                    */
                                                ?>
                                            </select>
                                        </div>
                                        
                                        -->
                                        
                                        <div id="compeditdel" class="col-xs-1 col-md-3">
                                            <button type="submit" class="btn btn-primary">Edit user: <?php  echo "$row[1]"; ?> </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-image col-xs-12" style="background-image: url('./assets/images/img-01.jpg')">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('./footer.php')?>

    </html>
<?php pg_close($conn); ?>