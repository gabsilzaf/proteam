<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="ranslate" />
  <meta content="Alien Developer" name="author">
  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
  <link href="./assets/favicon.ico" rel="icon">
  <link href="./style.css" rel="stylesheet">
  <link href="./main.550dcf66.css" rel="stylesheet">

  <title>Proteam</title>

</head>

<body id="homeproteam" > <!-- Add your content of header -->

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
  
    <div id="" class="section-container">
    <div class="container text-center">
      <div class="row">
        <p>
        <a href="./user.php" class="btn btn-primary btn-lg dashbutton">USER</a>
        <a href="./allteam.php" class="btn btn-primary btn-lg dashbutton">TEAM</a>
        <a href="./allclub.php" class="btn btn-primary btn-lg dashbutton">CLUB</a>
        <a href="./allcompetition.php" class="btn btn-primary btn-lg dashbutton">COMPETITION</a>
        </p>
    </div>
</div>
</div>

 <div id="section2" class="section-container">
    <div class="container text-center">
      <div class="row">
        <div id="showdbf" class="col-xs-12">
            <div class="showdbf col-md-3">
                <h3>50</h3>
            </div>
            <div class="showdbf col-md-3">
                <h3>50</h3>
            </div>
            <div class="showdbf col-md-3">
                <h3>50</h3>
            </div>
            <div class="showdbf col-md-3">
                <h3>50</h3>
            </div>
        </div>
      </div>
    </div>
</div>

    
<!--
  <div id="usersection" class="section-container">
    <div class="container text-center">
      <div class="row">
        <div class="title col-xs-12">
            <h3>User</h3>
        </div>
        <table style="width:100%; text-align: center; margin: 25px 0;">
            <tr>
            <th style="text-align: center;" >ID</th>
            <th style="text-align: center;" >Name</th>
            <th style="text-align: center;" >Lastname</th>
            <th style="text-align: center;" >E-mail</th>
            <th style="text-align: center;" >Location</th>
            <th style="text-align: center;" >Team</th>
            <th style="text-align: center;" >Competition</th>
        </tr>
        <tr>
            <td style="text-align: center;" >Proteam</td>
            <td style="text-align: center;" >Proteam</td>
            <td style="text-align: center;" >Proteam</td>
            <td style="text-align: center;" >Proteam</td>
            <td style="text-align: center;" >Proteam</td>
            <td style="text-align: center;" >Proteam</td>
            <td style="text-align: center;" >Proteam</td>
        </tr>
        </table>
      </div>
    <div class="section-container contact-container">
    <div class="container">
      <div class="row">
         
        <div class="col-xs-12 col-md-12">
            <div class="form-group">
                <div class="col-xs-6 col-md-6">
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <p> <a href="" class="btn btn-primary editbttn">Editar</a> </p>
                </div>
                
                <div class="col-xs-6 col-md-6">
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <p> <a href="" class="btn btn-primary delbttn">Eliminar</a> </p>
                </div>
            </div>
        </div>
          
        <div class="col-xs-12 col-md-12">
          <div class="card-container">
            <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">
              <form action="" class="reveal-content">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="location" placeholder="Location">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="team" placeholder="Team">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="competition" placeholder="Competition">
                    </div>
                    <button type="submit" class="btn btn-primary">ADD User</button>
                  </div></div>
              </form>
            </div>
            <div class="card-image col-xs-12" style="background-image: url('/assets/images/img-01.jpg')">
            </div></div></div></div></div></div>
        </div>
    </div>
  
  <div id="teamsection" class="section-container">
    <div class="container text-center">
      <div class="row">
          
        <div class="title col-xs-12">
            <h3>Team</h3>
        </div>
        
        <table style="width:100%; text-align: center; margin: 25px 0;">
            <tr>
            <th style="text-align: center;" >ID</th>
            <th style="text-align: center;" >Team</th>
            <th style="text-align: center;" >Club</th>
            <th style="text-align: center;" >Sport</th>
            <th style="text-align: center;" >Location</th>
            <th style="text-align: center;" >Member</th>
            <th style="text-align: center;" >Competition</th>
        </tr>
        <tr>
            <td style="text-align: center;" >Proteam</td>
            <td style="text-align: center;" >Proteam</td>
            <td style="text-align: center;" >Proteam</td>
            <td style="text-align: center;" >Proteam</td>
            <td style="text-align: center;" >Proteam</td>
            <td style="text-align: center;" >Proteam</td>
            <td style="text-align: center;" >Proteam</td>
        </tr>
        </table>
        
      </div>
      
<div class="section-container contact-container">
    <div class="container">
      <div class="row">
          
        <div class="col-xs-12 col-md-12">
            <div class="form-group">
                <div class="col-xs-6 col-md-6">
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <p> <a href="" class="btn btn-primary editbttn">Editar</a> </p>
                </div>
                
                <div class="col-xs-6 col-md-6">
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <p> <a href="" class="btn btn-primary delbttn">Eliminar</a> </p>
                </div>
            </div>
        </div>
          
        <div class="col-xs-12 col-md-12">
          <div class="card-container">
            <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">
              <form action="" class="reveal-content">
                <div class="row">
                  <div class="col-md-12">
                    
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="location" placeholder="Location">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="team" placeholder="Team">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="competition" placeholder="Competition">
                    </div>
                    <button type="submit" class="btn btn-primary">ADD Team</button>
                  </div></div>
              </form>
            </div>
            <div class="card-image col-xs-12" style="background-image: url('/assets/images/img-01.jpg')">
            </div></div></div></div></div></div>
            
        </div>
    </div>
      

  <div id="clubsection" class="section-container">
    <div class="container text-center">
      <div class="row">
          
        <div class="title col-xs-12">
            <h3>Club</h3>
        </div>
        
        <table style="width:100%; text-align: center; margin: 25px 0;">
            <tr>
            <th style="text-align: center;" >ID</th>
            <th style="text-align: center;" >Club</th>
            <th style="text-align: center;" >Location</th>
            <th style="text-align: center;" >Invite Code</th>
            <th style="text-align: center;" >Homebase</th>
        </tr>
        <tr>
            <td style="text-align: center;" >Proteam</td>
            <td style="text-align: center;" >Proteam</td>
            <td style="text-align: center;" >Proteam</td>
            <td style="text-align: center;" >Proteam</td>
            <td style="text-align: center;" >Proteam</td>
        </tr>
        </table>
        
      </div>
      
<div class="section-container contact-container">
    <div class="container">
      <div class="row">
        
        <div class="col-xs-12 col-md-12">
            <div class="form-group">
                <div class="col-xs-6 col-md-6">
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <p> <a href="" class="btn btn-primary editbttn">Editar</a> </p>
                </div>
                
                <div class="col-xs-6 col-md-6">
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <p> <a href="" class="btn btn-primary delbttn">Eliminar</a> </p>
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-md-12">
          <div class="card-container">
            <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">
              <form action="" class="reveal-content">
                <div class="row">
                  <div class="col-md-12">
                    
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="location" placeholder="Location">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="team" placeholder="Team">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="competition" placeholder="Competition">
                    </div>
                    <button type="submit" class="btn btn-primary">ADD Club</button>
                  </div></div>
              </form>
            </div>
            <div class="card-image col-xs-12" style="background-image: url('/assets/images/img-01.jpg')">
            </div></div></div></div></div></div>
            
        </div>
    </div>
    
    
  
    <div id="compsection" class="section-container">
        <div class="container text-center">
          <div id="compsection2" class="row">
              
            <div class="title col-xs-12">
                <h3>Competition</h3>
            </div>
            
            <table style="width:100%; text-align: center; margin: 25px 0;">
                <tr>
                <th style="text-align: center;" >#</th>
                <th style="text-align: center;" >Team</th>
                <th style="text-align: center;" >G</th>
                <th style="text-align: center;" >W</th>
                <th style="text-align: center;" >D</th>
                <th style="text-align: center;" >L</th>
                <th style="text-align: center;" >Goal</th>
                <th style="text-align: center;" >P</th>
            </tr>
            <tr>
                <td style="text-align: center;" >Proteam</td>
                <td style="text-align: center;" >Proteam</td>
                <td style="text-align: center;" >Proteam</td>
                <td style="text-align: center;" >Proteam</td>
                <td style="text-align: center;" >Proteam</td>
                <td style="text-align: center;" >Proteam</td>
                <td style="text-align: center;" >Proteam</td>
                <td style="text-align: center;" >Proteam</td>
            </tr>
            </table>
            
        </div>
          
        <div id="compsection3" class="row">
            
            <table style="width:100%; text-align: center; margin: 25px 0;">
                <tr>
                <th style="text-align: center;" >Week</th>
                <th style="text-align: center;" >Team</th>
                <th style="text-align: center;" >Score</th>
                <th style="text-align: center;" >Day</th>
                <th style="text-align: center;" >Time</th>
                <th style="text-align: center;" >Location</th>
                <th style="text-align: center;" >Status</th>
            </tr>
            <tr>
                <td style="text-align: center;" >Proteam</td>
                <td style="text-align: center;" >Proteam</td>
                <td style="text-align: center;" >Proteam</td>
                <td style="text-align: center;" >Proteam</td>
                <td style="text-align: center;" >Proteam</td>
                <td style="text-align: center;" >Proteam</td>
                <td style="text-align: center;" >Proteam</td>
            </tr>
            </table>
            
          </div>
          
<div class="section-container contact-container">
    <div class="container">
      <div class="row">
          
        <div class="col-xs-12 col-md-12">
            <div class="form-group">
                <div class="col-xs-6 col-md-6">
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <p> <a href="" class="btn btn-primary editbttn">Editar</a> </p>
                </div>
                
                <div class="col-xs-6 col-md-6">
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <p> <a href="" class="btn btn-primary delbttn">Eliminar</a> </p>
                </div>
            </div>
        </div>
          
        <div class="col-xs-12 col-md-12">
          <div class="card-container">
            <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">
              <form action="" class="reveal-content">
                <div class="row">
                  <div class="col-md-12">
                    
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="location" placeholder="Location">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="team" placeholder="Team">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="competition" placeholder="Competition">
                    </div>
                    <button type="submit" class="btn btn-primary">ADD Competition</button>
                  </div></div>
              </form>
            </div>
            <div class="card-image col-xs-12" style="background-image: url('/assets/images/img-01.jpg')">
            </div></div></div></div></div></div>
        </div>
    </div>
-->

<?php require_once('./footer.php')?>

</html>