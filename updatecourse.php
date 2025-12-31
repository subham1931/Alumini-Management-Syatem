<?php
include 'connection.php';
session_start();
if($_SESSION['login_id']==0){
header('location:login.php');
}else{
        $id = $_GET['updateid'];
        $sqli5="SELECT * from `course_master` WHERE course_id=$id";
        $result5=mysqli_query($con,$sqli5);
        $row=mysqli_fetch_assoc($result5);
        $course=$row['course_name'];

        if(isset($_POST['submit'])){
            // $id = $_GET['updateid'];
            $course= $_POST['course'];
    
            $sql="UPDATE `course_master` SET `course_id`=$id AND `course_name`='$course' WHERE course_id=$id";

            $result=mysqli_query($con,$sql);
        }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS//dashboard.css">
        <link rel="stylesheet" href="CSS//dashboard3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="script.js"></script>
        <script src="https://kit.fontawesome.com/5026e2b9f4.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Admission form</title>
        <style>
            .dropdown-menu,.dropdown-menu li a {
                background-color: #014279;
                color: #fff;
                height: auto;
            } 
        </style>
    </head>
    <body style="background-color: #01315A;">
    <form action="" method="post">
        <header>
            <div class="container">
                <div class="img">
                    <a href="gallery.php">
                        <img src="Image/logo.png" alt="logo">
                    </a>
                </div>

                <div class="telephone">
                    <span>Call Us</span>
                    <span class="number">(06792) 240032</span>
                </div>
            </div>
            <nav class="navbar" style="background-color: #014279; width: 1100px; left:150px;">
            <div class="container-fluid">
                <ul class="nav navbar-nav" >
                    <li class="active"><a href="Admindashboard.php">Home</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="course.php">Course</a></li>
                            <li><a href="session.php">Session</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Alumini<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="addalumni.php">Add Alumni</a></li>
                            <li><a href="allalumni.php">All Alumni</a></li>
                        </ul>
                    </li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="event.php">Event</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </nav>
        </header>

        <main>
            <div class="main">
                <div class="inner-box">
                    <!-- <marquee behavior="" direction="left">welcome to our college</marquee> -->
                    <!-- <h2>WELCOME TO OUR COLLEGE</h2> -->
                    <label for="course" style="margin:40px 0px 0px 0px;">Course</label><br>
                    <input type="text" name="course" id="course" value="<?php echo $course;?>" placeholder="Course" >
                    <button id="save" name="submit"  value="submit">Save</button>
                </div>
            </div>
        </main>
        </form>
    </body>  
</html>

<?php
    }
?>