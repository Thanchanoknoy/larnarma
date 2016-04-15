<?php
  session_start();
  if (!isset($_SESSION['login'])) {
          echo "<script>alert('Login Again');</script>";
          echo "<script>window.location='ad-login.php';</script>";
      
  }
   




    include 'Database.php';
    $database = new Database();
   // $id_personal = $_SESSION['id_personal'];
  
    //print_r("SELECT id_reserve,date_reserve,time_reserve,seat,id_personal FROM reserve ");
    //$result = $database->select("SELECT id_reserve,date_reserve,time_reserve,seat,id_personal FROM reserve  ");

    // print_r("SELECT personal.user, reserve.date_reserve, reserve.time_reserve, reserve.seat
    //        FROM reserve
    //         JOIN personal
    //        ON personal.id = reserve.id_reserve");




    $result = $database->select("select * from reserve join personal on id_personal = id");

    if (mysqli_num_rows($result) > 0){
        $x=0;
        while($row = mysqli_fetch_array($result)){

            $printuser[$x]              = $row['user'];
            $printdate_reserve[$x]      = $row['date_reserve'];
            $printtime_reserve[$x]      = $row['time_reserve'];
            $printseat[$x]              = $row['seat'];

        

            $x++;
        } 
  }
  //print_r($printid_reserve);
  //print_r(printdate_reserve);

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

        <div id="body" class="container-fluid">
            <div class="row" style="float:right;">
              <div class="col-md-12">     
              <?php
                echo $_SESSION['user']."&nbsp;";
                if(isset($_SESSION['user'])){
                  echo "<a href='ad-logout.php'> Log Out</a>";
                }
                      ?>
              </div>  
            </div>
          </div>
                    </table>
                </td>
              </tr>           
            </tr>
          </table>

</div>
</div> 
<br><br><br><br>  
<div class="row">
              <div class="col-md-4"></div>
                <div class="col-md-4">
                
                  <div class="panel panel-warning">
                      <div class="panel-heading style1">
                        <div align="left"><strong>Order List</strong></div>
                      </div>
                      <div class="panel-body">
                            <table class="table table-striped">
                                <th>#</th>
                                <th>User</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Seat</th>  
<?php
                                for($i=0;$i<$x;$i++){
                                    $count = $i+1;
                                    echo "<tr>";
                                        echo "<td>".$count."</td>";
                                        echo "<td>".$printuser[$i]."</td>";
                                        echo "<td>".$printdate_reserve[$i]."</td>";
                                        echo "<td>".$printtime_reserve[$i]."</td>";
                                        echo "<td>".$printseat[$i]."</td>";

                                    echo "</tr>";
                                }
                                    
?>         
                            </table>  
                      </div>
                    </div>
                </div>
            </div>





                  
</div>
</div>   

    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>