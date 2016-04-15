<?php
  session_start();
  if (!isset($_SESSION['login'])) {
          echo "<script>alert('Login Again');</script>";
          echo "<script>window.location='login.php';</script>";
      
  }
   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Larn Arma</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="default.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container-fluid">
        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td class="text3">Larnarma.com</td>
            </tr>
            <tr>
                <td>
                    <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="120" align="center" class="bg3">
                                <a href="#"></a>
                                <h3>
                                    <a href="home.php" class="link1"><span class="text1">H</span><span class="text2">ome</span></a>
                                </h3>
                            </td>
                            <td width="120" align="center" class="bg4">
                                <a href="#"></a>
                                <h3>
                                     <a href="menu.php" class="link1"><span class="text1">M</span><span class="text2">enu</span></a>
                                </h3>
                            </td>
                            <td width="120" align="center" class="bg5">
                                <a href="#"></a>
                                <h3>
                                    <a href="contact.php" class="link1"><span class="text1">C</span><span class="text2">ontact</span></a>
                                </h3>
                            </td>
                            <td width="120" align="center" class="bg6">
                                <a href="#"></a>
                                <h3>
                                     <a href="promotion.php" class="link1"><span class="text1">P</span><span class="text2">romotion</span></a>
                                </h3>
                            </td>
                            <td width="120" align="center" class="bg7">
                                <a href="#"></a>
                                <h3>
                                    <a href="login.php" class="link1"><span class="text1">R</span><span class="text2">eserve</span></a>
                                </h3>
                            </td>
                        </tr>
                    </table>
                </td>
              </tr>           
            </tr>
             <tr><td><img src="images/img34.jpg" alt="" width="600" height="251"></td> </tr>
          
    <div id="body" class="container-fluid">
      <div class="row" style="float:right;">
        <div class="col-md-12">     
        <?php
          echo $_SESSION['user']."&nbsp;";
          if(isset($_SESSION['user'])){
            echo "<a href='logout.php'> Log Out</a>";
          }
                ?>
        </div>  
      </div>
    </div>
  </table>
                  
</div>
</div>   

<br>
<form method="post" action="reservecode.php">

             <div class="row">
                  <div class="col-md-offset-4 col-md-4">
                    <div class="col-md-offset-2 col-md-8">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true">&nbsp;&nbsp;&nbsp;</span></span>
                            <input type="date" class="form-control" placeholder="DD/MM/YYYY" aria-describedby="basic-addon1" name="txtdate" required>
                     </div>
                    </div>
                  </div>
            </div><br>
            <div class="row">
                  <div class="col-md-offset-4 col-md-4">
                    <div class="col-md-offset-2 col-md-8">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-time" aria-hidden="true">&nbsp;&nbsp;&nbsp;</span></span>
                            <input type="time" class="form-control" placeholder="XX:XX" aria-describedby="basic-addon1" name="txttime" required>
                        </div>
                    </div>
                  </div>
            </div><br>
            
            <div class="row">
                  <div class="col-md-offset-4 col-md-4">
                    <div class="col-md-offset-2 col-md-8">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-cutlery" aria-hidden="true">&nbsp;&nbsp;&nbsp;</span></span>
                            <input type="number" class="form-control" placeholder="Seat" aria-describedby="basic-addon1"name="txtseat" required>
                        </div>
                    </div>
                  </div>
            </div><br>
            
            <br>
                <div class="row">
                  <div class="col-md-offset-4 col-md-4">
                    <div class="col-md-offset-2 col-md-8">
                        <button class="btn btn-warning btn-block">OK</button> 
                    </div>
                  </div>
                </div>
            <br>
                <div class="row">
                  <div class="col-md-offset-4 col-md-4">
                    <div class="col-md-offset-2 col-md-8">
                        <a href="reserve2.php" class="btn btn-warning btn-block">Check</a>  
                    </div>
                  </div>
                </div>

                <div class="row">
                      <div class="col-md-offset-4 col-md-4">
                        <div class="col-md-offset-8 col-md-2">
                            <a href="login.php" class=""><span class="text1">Back</span></a>
                        </div>
                      </div>
                    </div>
                    </div>
            </div>   
        </form>




    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>