<?php
 session_start();
 require 'connection.php';
 if(isset($_POST['submit'])){                 
    $username=$_POST['name'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM `admin_login` WHERE `user_name` = '$username' AND `password` = '$password'";
    $sql2 = "SELECT * FROM `alumni_master` WHERE `user_name` = '$username' AND `password` = '$password'";
    $result = mysqli_query($con,$sql);
    $result2 = mysqli_query($con,$sql2);
    $row = mysqli_fetch_assoc($result);
    $row2 = mysqli_fetch_assoc($result2);
    if($row > 0){
        $_SESSION['name'] = $row['user_name'];
        $_SESSION['login_id'] = $row['sr_no'];
        echo "<script>window.location.href = 'admindashboard.php';('Login sucessfully');</script>";
	}elseif($row2 > 0){
			$_SESSION['course'] = $row2['course_id'];
			$_SESSION['session'] = $row2['session_id'];
			$_SESSION['uname'] = $row2['fname'];
			$_SESSION['uname2'] = $row2['lname'];
			$_SESSION['rn'] = $row2['regd_no'];
			$_SESSION['rd'] = $row2['regd_dt'];
			$_SESSION['email'] = $row2['email'];
			$_SESSION['cn'] = $row2['cno'];
			$_SESSION['dob'] = $row2['dob'];
			$_SESSION['add'] = $row2['address'];
			$_SESSION['img'] = $row2['photo'];
			echo "<script>window.location.href = 'userdashboard.php';('Login sucessfully');</script>";	
    }else{
        echo "<script>('In valid Username or password');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    }
 }
  
?>
<!DOCTYPE HTML>
<html>

<head>
	<title></title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Spin Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Stylesheets -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="CSS/login.css" rel='stylesheet' type='text/css' >
	<!--// Stylesheets -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<h1>Login </h1>
	<div class="clear-loading spinner">
		<span></span>
	</div>
	<div class="w3ls-login box box--big">
		<!-- form starts here -->
		<form action="#" method="post">
			<div class="agile-field-txt">
				<label><i class="fa fa-user" aria-hidden="true"></i> Username </label>
				<input type="text" name="name" placeholder="Enter User Name" required="" />
			</div>
			<div class="agile-field-txt">
				<label><i class="fa fa-unlock-alt" aria-hidden="true"></i> password </label>
				<input type="password" name="password" placeholder="Enter Password" required="" id="myInput" />
				<div class="agile_label">
					<input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
					<label class="check" for="check3">Show password</label>
				</div>
				<div class="agile-right">
					<a href="#">forgot password?</a>
				</div>
			</div>
			<!-- script for show password -->
			<script>
				function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
			</script>
			<!-- //end script -->
				<input type="submit" name="submit" value="LOGIN">
		</form>
	</div>
</body>
</html>