<div class="col-xs-12 col-md-7">
    <div class="card-container">
        <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">
            <p id="server-results">
            </p>
            <form id="exadduser" method="POST" action="exadduser.php" class="reveal-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="useremail" id="email" placeholder="Email">
                        </div>
                        
                        
                        <!--
                        <div class="form-group">
                            <select name="usercountry" class="form-control">
                                <?php /*
                                    require_once('./database/connection.php');
                                    $countryname = "Select  distinct(\"CountryID\"), \"CountryName\" from \"Country\" order by \"CountryName\" ASC";
                                    $resultcountry = pg_query($conn, $countryname);
                                    if (!$resultcountry) {
                                        echo "An error occurred.\n";
                                        exit;
                                    }
                                        while ($rowct = pg_fetch_row($resultcountry)) {
                                            echo "<option value=".$rowct[0].">".$rowct[1]."</option>";
                                        }
                                    */
                                    ?>
                            </select>
                        </div>
                        
                        
                        <div class="form-group">
                            <form action="" class="reveal-content">
                                <select class="form-control">
                                    <?php
                                    /*
                                    require_once('./database/connection.php');
                                    $countryname = "Select  distinct(\"TeamID\"), \"TeamName\" from \"Team\" order by \"TeamName\" ASC";
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
                            </form>
                        </div>
                        -->
                        <button type="submit" value="Submit" name="submit" id="exaddusersub" class="btn btn-primary">Add User</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-image col-xs-12" style="background-image: url('/assets/images/img-01.jpg')">
        </div>
    </div>
</div>

<script>
    $("#exaddusersub").submit(function(event) {
        event.preventDefault(); //prevent default action 
        let post_url = $(this).attr("action"); //get form action url
        let request_method = $(this).attr("method"); //get form GET/POST method
        let form_data = $(this).serialize(); //Encode form elements for submission	
        $.ajax({
            url: post_url,
            type: request_method,
            data: form_data
        }).done(function(response) {
            $("#server-results").html(response);
        });
    });
</script>

<!--
<script src="submmituser.js"></script>
-->

<?php pg_close($conn); ?>


















