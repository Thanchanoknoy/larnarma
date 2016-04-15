<?php
	session_start();

	include 'Database.php';
	$database = new Database();
	$id_personal = $_SESSION['id_personal'];
	

	$database->insert("INSERT INTO reserve (date_reserve,time_reserve,seat,id_personal) VALUES ('".$_REQUEST['txtdate']."' ,
		'".$_REQUEST['txttime']."' ,'".$_REQUEST['txtseat']."' ,'".$id_personal."')");
        



    echo "<script>alert('You are success for reserve!');</script>";
    echo "<script>window.location='login.php';</script>";
?>