<?php

 			session_start();
		    include 'Database.php';
		    $database = new Database(); 
		    $menu = $_REQUEST['menu']; 
	        print_r("DELETE FROM menus WHERE name='$menu'");
	       

	         $result = $database->delete("DELETE FROM menus WHERE name='$menu'");
         	echo "<script>window.location='ad-drop.php';</script>";
?>