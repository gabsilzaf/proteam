<?php require_once('./toppage.php'); ?>
    <title>Proteam</title>
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
                    <h3>User</h3>
                </div>
                <table style="width:100%; text-align: center; margin: 25px 0;">
                    <tr>
                        <th style="text-align: center;">ID</th>
                        <th style="text-align: center;">Name</th>
                        <th style="text-align: center;">Lastname</th>
                        <th style="text-align: center;">E-mail</th>
                        <th style="text-align: center;">country</th>
                        <th style="text-align: center;">Team</th>
                        <th style="text-align: center;">Competition</th>
                    </tr>
                    <?php require_once('showuser.php'); ?>
                </table>
            </div>
            <div class="section-container contact-container">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-md-5">
                            <div class="form-group">

                                <form action="edituser.php" class="reveal-content" method="POST">
                                    <div class="col-xs-1 col-md-3">
                                        <select name="edituser" class="form-control">
                                            <?php   

                                            require_once('./database/connection.php');

                                            $showsqluser = "Select \"UserID\" from \"User\" Order by \"UserID\" asc";

                                            $resultuserq = pg_query($conn, $showsqluser);

                                            if (!$resultuserq) {
                                                echo "An error occurred.\n";
                                            exit;
                                            }

                                            while ($row = pg_fetch_row($resultuserq)) {
                                                echo "<option>".$row[0]."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div id="compeditdel" class="col-xs-1 col-md-3">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </div>
                                </form>
                                <form action="deluser.php" method="POST" class="reveal-content">
                                    <div class="col-xs-1 col-md-3">
                                        <select name="deleteuser" class="form-control">
                                            <?php
                                            $showsqluser = "Select \"UserID\" from \"User\" Order by \"UserID\" asc";
                                            $resultuserq = pg_query($conn, $showsqluser);
                                            if (!$resultuserq) {
                                                echo "An error occurred.\n";
                                            exit;
                                            }

                                            while ($row = pg_fetch_row($resultuserq)) {
                                                echo "<option>".$row[0]."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div id="compeditdel" class="col-xs-1 col-md-3">
                                        <button type="submit" class="btn btn-primary">Del</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <?php require_once('./adduser.php'); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('./footer.php')?>
</html>