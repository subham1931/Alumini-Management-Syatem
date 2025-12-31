<?php
session_start();
session_unset();
$_SESSION['login_id']=0;
header("location:login.php");
?>