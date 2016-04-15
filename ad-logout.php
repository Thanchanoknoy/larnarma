<?php
// Start the session
session_start();
 	unset($_SESSION['login']);
    unset($_SESSION['user']);
    unset($_SESSION['position']);
    echo "<script>window.location='ad-login.php';</script>";

?>
