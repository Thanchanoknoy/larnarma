<?php
    include 'Database.php';
    $database = new Database();
    $oldname    = $_REQUEST['oldname'];
    $name     = $_REQUEST['txtnamefood'];
    $price      = $_REQUEST['txtpricefood'];
    if ($_FILES['file']['size'] != 0) {
      $picture = "/larnarhan/image-menus/".$_FILES['file']['name'];
      copy($_FILES["file"]["tmp_name"], "image-menus/".$_FILES["file"]["name"]);
    } else {
      $picture = $_REQUEST['oldfile'];
    }
   // print_r("UPDATE menus SET name = '$name', price = '$price', picture = '$picture' WHERE name = '$oldname'");
    $database->update("UPDATE menus SET name = '$name', price = '$price', picture = '$picture' WHERE name = '$oldname'");
    echo "<script>window.location='ad-update.php';</script>";


?>