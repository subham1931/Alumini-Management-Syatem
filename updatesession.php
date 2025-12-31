<?php
    include 'connection.php';
    session_start();
    if($_SESSION['login_id']==0){
    header('location:login.php');
    }else{
        $id = $_GET['updateid'];
        $sqli5="SELECT * from `session_master` WHERE session_id=$id";
        $result5=mysqli_query($con,$sqli5);
        $row=mysqli_fetch_assoc($result5);
        $course_id=$row['course_id'];
        $session=$row['session_name'];

        if(isset($_POST['submit'])){
            // $id = $_GET['updateid'];
            $course= $_POST['course'];
            $session= $_POST['session'];
    
            $sql="UPDATE `session_master` SET `session_id`=$id `course_id`=$course AND `session_name`='$session' WHERE `session_id`=$id";

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
        <link rel="stylesheet" href="CSS//dashboard2.css">
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
            <select name="course" id="course">
                <option value="Not selected">Select Course</option>
                <?php
                $query= "SELECT * FROM `course_master` order by course_name";
                $result=mysqli_query($con, $query);
                if($result){
                    while($row=mysqli_fetch_array($result)){
                        echo "<option value=".$row['course_id'].">".$row['course_name']."</option>";
                    }
                }
            ?>
            </select><br><br>

                    <label for="session" >Session</label><br>
                    <input type="text" name="session" id="session" placeholder="Session" ><br><br>
                    <button id="save" name="save"  value="save">Save</button>
                </div>

                <?php
                
                ?>

                <h3 style="text-align: center;">All Course</h3>

                <div class="view" id="view">
                    <table class="table" width="100%" style="text-align:center">
                        <thead style="font-size: 15px;">
                            <tr>
                                <th scope="col" style="text-align: center;">Session ID</th>
                                <th scope="col" style="text-align: center;">Course ID</th>
                                <th scope="col" style="text-align: center;">Session </th>
                                <th scope="col" style="text-align: center;">Operation</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 15px;">
                            <?php
                                $count=1;
                                $sql1="SELECT * FROM `session_master` ORDER BY session_id;";
                                $result = mysqli_query($con,$sql1);
                                while($row= mysqli_fetch_array($result))
                                { ?>
                                <tr>
                                    <td><?php echo $count;?></td>
                                    <td><?php echo $row["course_id"];?></td>
                                    <td><?php echo $row["session_name"];?></td>
                                    <td><button class="update" ><a href="updatesession.php?updateid=<?php echo $row["session_id"];?>">Update</a></button>
                                    <button class="delete"><a href="session.php?deleteid=<?php echo $row["session_id"];?>">Delete</a></button></td>
                                </tr>
                                <?php $count++;
                            }?>
                        </tbody>
                    </table>  
                </div>
            </div>
        </main>
        </form>
    </body>  
</html>

<?php
    }
?>