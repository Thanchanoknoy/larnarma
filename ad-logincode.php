<?php
     session_start();

    include 'Database.php';

    $database = new Database();
    //print_r("SELECT id,user,password,name,surname FROM register WHERE user = '".$_REQUEST['username'] ."' AND password = '".$_REQUEST['password']."' "); 
     $result = $database->select("SELECT id,user,password,name,surname,position FROM personal WHERE user = '".$_REQUEST['username'] ."' AND password = '".$_REQUEST['password']."' ");

    
    if (mysqli_num_rows($result) > 0){
        $x=0;
        while($row = mysqli_fetch_array($result)){
            $printid[$x]                = $row['id'];
            $printuser[$x]              = $row['user'];
            $printname[$x]              = $row['name'];
            $printsurname[$x]           = $row['surname'];
            $printposition[$x]          = $row['position'];

            $x++;
        } 

        $_SESSION['login'] = true;
        $_SESSION['id_personal']     = $printid[0];
        $_SESSION['user'] = $printuser[0];
        $_SESSION['position'] = $printposition[0];
        echo "<script>window.location='ad-showmenus.php';</script>";

    }
    else{
        unset($_SESSION['login']);
        unset($_SESSION['user']);
        unset($_SESSION['position']);


        echo "<script>alert('Login Again');</script>";
        echo "<script>window.location='login.php';</script>";
    }



    
?>