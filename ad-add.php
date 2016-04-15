<?php
  session_start();
  if (!isset($_SESSION['login']) || $_SESSION['position'] != 'admin') {
          echo "<script>alert('Login Again');</script>";
          echo "<script>window.location='ad-login.php';</script>";
      
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
                                    <a href="ad-login.php" class="link1"><span class="text1">L</span><span class="text2">ogin</span></a>
                                </h3>
                            </td>
                            <td width="120" align="center" class="bg4">
                                <a href="#"></a>
                                <h3>
                                     <a href="ad-showmenus.php" class="link1"><span class="text1">S</span><span class="text2">how</span></a>
                                </h3>
                            </td>
                            <td width="120" align="center" class="bg5">
                                <a href="#"></a>
                                <h3>
                                    <a href="ad-add.php" class="link1"><span class="text1">A</span><span class="text2">dd</span></a>
                                </h3>
                            </td>
                            <td width="120" align="center" class="bg5">
                                <a href="#"></a>
                                <h3>
                                    <a href="ad-update.php" class="link1"><span class="text1">U</span><span class="text2">pdate</span></a>
                                </h3>
                            </td>
                            <td width="120" align="center" class="bg6">
                                <a href="#"></a>
                                <h3>
                                     <a href="ad-drop.php" class="link1"><span class="text1">D</span><span class="text2">rop</span></a>
                                </h3>
                            </td>
                            <td width="120" align="center" class="bg7">
                                <a href="#"></a>
                                <h3>
                                    <a href="ad-status.php" class="link1"><span class="text1">S</span><span class="text2">tatus</span></a>
                                </h3>
                            </td>
                        </tr>

                    </table>
                </td>
              </tr>           
            </tr>

     <div id="body" class="container-fluid">
          <div class="row" style="float:right;">
            <div class="col-md-12"style=" color:white;font-size:16px;">     
            <?php
              echo $_SESSION['user']."&nbsp;";
              if(isset($_SESSION['user'])){
                echo "<a href='ad-logout.php'> Log Out</a>";
              }
                    ?>
            </div>  
          </div>
        </div>
            <tr><td><img src="images/img35.jpg" alt="" width="600" height="201"></td> </tr>
          </table>
                  
</div>
</div>   

<form method="post" action="ad-addcode.php" enctype="multipart/form-data">


<div class="container" style="margin-top:25px;">
    
    <div class="container-fluid">
            
        <div class="row">
            <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading style1">
                        <div align="left"><strong>New Menu</strong></div>
                    </div>
                        <div class="panel-body">
                            <form method="post" action="ad-addcode.php">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon" >Name:</span>
                                            <input type="text" class="form-control" placeholder="name" aria-describedby="basic-addon1" name="txtnamefood" required>
                                        </div>
                                    </div>                                    
                                </div><br>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon" >Price:</span>
                                            <input type="text" class="form-control" placeholder="price" aria-describedby="basic-addon1" name="txtpricefood" required>
                                        </div>
                                    </div>    
                                </div><br>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon" >Picture:</span>
                                           

                                             <input type="file" name="file" id="file" required>
                                            
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        <div class="panel-footer" style="background-color: rgb(251, 244, 213);">
                            <div class="row">
                                <div class="col-md-9"></div>
                                <div class="col-md-3">
                                    <input name="Submit" type="submit" class="btn btn-danger" id="button"  value="OK">
                                </div>
                        </div>
                    </form>
                      </div>
                    </div>
                <br><br>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
</div>
</form>
    

    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>