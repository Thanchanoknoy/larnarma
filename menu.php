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
           
          </table>
     </div>
 


<?php
    
            $m_host = "localhost"; 
            $m_user = "root";
            $m_pass = "123456"; 
            $m_name = "dblarnarma";
            /* select db then connect to db */     
            $con = mysql_connect ($m_host,$m_user,$m_pass) or die("Could not connect to mysql " . mysql_error());
            mysql_select_db ($m_name, $con) or die("Could not select database: $m_name " . mysql_error());  
            $result = mysql_query("SELECT id,name,price,picture from menus");
            $x=0;
                while($row = mysql_fetch_array($result)){
     
                    $printid[$x]            = $row['id'];
                    $printname[$x]          = $row['name']; 
                    $printprice[$x]         = $row['price'];
                    $printpicture[$x]       = $row['picture'];
                     
                    $x++;
                }
?>

<div class="container" style="margin-top:25px;">

<?php
        $count = 0;
        if($x % 2 == 0){
            $row = (int)($x/2);
        }
        else{
            $row = (int)($x/2)+1;
        }
        for($i=0;$i<$row;$i++){
        
?>
        <div class="row">

<?php
          for($j=0;$j<2;$j++){
              $count++;
              
?>

               <div class="col-md-3 <?php if ($j==0) { echo 'col-md-offset-3';} ?>">
                <div class="thumbnail">
                  <img src="<?php echo $printpicture[$count-1]; ?>" >
                  <div class="caption">
                    <h3><?php echo $printname[$count-1]; ?></h3>
                    <p >&emsp;price/one:&emsp;<?php echo $printprice[$count-1]; ?>BTH</p><br>
                  </div>
                </div>
              </div>

<?php
              if($count==$x){
                  break;
              }
                            }
?>
        </div>
<?php
        }
?>
</div>
    
















     <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>    

    
    
    
    
