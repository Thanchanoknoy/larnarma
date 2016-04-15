<?php
    session_start();

    include 'Database.php';
    $database = new Database();

    $name   = $_REQUEST['txtnamefood'];
    $price  = $_REQUEST['txtpricefood'];
    $picture = "/larnarhan/image-menus/".$_FILES['file']['name'];
    //$picture = "/larnarhan/image-menus/".$_FILES["file"]["name"];

    


   copy($_FILES["file"]["tmp_name"], "image-menus/".$_FILES["file"]["name"]);
    //print_r("INSERT INTO menus (name,price,picture) VALUES ('$name','$price','$picture')");

    
    $database->insert("INSERT INTO menus (name,price,picture) VALUES ('$name','$price','$picture')");

    echo "<script>window.location='ad-showmenus.php';</script>";
?>



