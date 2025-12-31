<?php
session_start();
session_unset();
$_SESSION['name']=0;
header("location:userlogin.php");
?>