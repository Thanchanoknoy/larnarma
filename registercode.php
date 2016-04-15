<?php

    $m_host = "localhost"; 
    $m_user = "root";
    $m_pass = "123456";   
    $m_name = "dblarnarma";
    
    /* select db then connect to db */     
    $con = mysql_connect ($m_host,$m_user,$m_pass) or die("Could not connect to mysql " . mysql_error());
    mysql_select_db ($m_name, $con) or die("Could not select database: $m_name " . mysql_error());  
    // echo "INSERT INTO register (user, password, name,surname,address,phone,email) VALUES ('".$_REQUEST['txtuser']."' , '".$_REQUEST['txtpassword']."', 
    //     '".$_REQUEST['txtname']."', '".$_REQUEST['txtsurname']."','".$_REQUEST['txtaddress']."', '".$_REQUEST['txtphone']."', '".$_REQUEST['txtemail']."' )";


//     $result = mysql_query("INSERT INTO register (user, password, name,surname,address,phone,email)
//                     VALUES ($_REQUEST['txtuser'], $_REQUEST['txtpassword'], $_REQUEST['txtname'], $_REQUEST['txtsurname'],
//                      $_REQUEST['txtaddress'], $_REQUEST['txtphone'], $_REQUEST['txtemail'] )");
        $result = mysql_query("INSERT INTO personal (user, password, name,surname,address,phone,email) VALUES ('".$_REQUEST['txtuser']."' , 
                '".$_REQUEST['txtpassword']."', '".$_REQUEST['txtname']."', '".$_REQUEST['txtsurname']."','".$_REQUEST['txtaddress']."', 
                '".$_REQUEST['txtphone']."', '".$_REQUEST['txtemail']."' )");


     echo "<script>window.location='reserve.php';</script>";
// //echo id;
    
//     echo $_REQUEST['txtuser'];
//     echo $_REQUEST['txtpassword'];
//     echo $_REQUEST['txtname'];
//     echo $_REQUEST['txtsurname'];
//     echo $_REQUEST['txtaddress'];
//     echo $_REQUEST['txtphone'];
//     echo $_REQUEST['txtemail'];


?>