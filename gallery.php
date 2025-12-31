<?php
    require 'connection.php';
    session_start();
    if($_SESSION['login_id']==0){
    header('location:login.php');
    }else{
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="script.js"></script>
        <script src="https://kit.fontawesome.com/5026e2b9f4.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/gallery.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Admission form</title>
    </head>
    <body>
    <form action="" method="post">
        <header>
            <div class="container">
                <div class="img">
                    <a href="Admindashboard.php">
                        <img src="Image/logo.png" alt="logo">
                    </a>
                </div>

                <div class="telephone">
                    <span>Call Us</span>
                    <span class="number">(06792) 240032</span>
                </div>
            </div>
            <nav class="navbar" style="background-color: #014279; width: 1100px; margin: 0 auto;">
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

        </form  >
    </body>  
</html>

<?php
}
?>
