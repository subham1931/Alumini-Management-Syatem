<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Image/favicon.png" type="image/x-icon" style="width: 80px;">
    <title>Mpc Autonomous College</title>
</head>
<body>
<?php
$server="localhost";
$username="root";
$password="";
$database="alumini_db";

$con=mysqli_connect($server,$username,$password,$database);
if(!$con){
    die("Connction failed".mysqli_connect_error());
}
?>    
</body>
</html>