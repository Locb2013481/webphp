<?php 
session_start();
unset($_SESSION["user_name"]);
unset($_SESSION["user_name_admin"]);
header("location: ../views/index.php");

?>