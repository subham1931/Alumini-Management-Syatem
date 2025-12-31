<?php
    require 'connection.php';
    session_start();
    if($_SESSION['login_id']==0){
    header('location:login.php');
    }else{
        if(isset($_POST['save'])){
        
            $course_id=$_POST['course'];
            $session_id=$_POST['session'];
            $regdno=$_POST['regd-no'];
            $regddate=$_POST['regd-date'];
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $address=$_POST['address'];
            $contactno=$_POST['contactno'];
            $email=$_POST['email'];
            $DOB=$_POST['DOB'];

            // Random Password and username generator
            $uname1 =$fname;
            $uname2 = mt_rand(0,99);
            $uname3 = $uname1.$uname2;

            $password = mt_rand(0,999999);
            // echo $password;'<br>';

             // Image insertation
            $fileinfo= getimagesize($_FILES["image"]["tmp_name"]);
            $width=$fileinfo[0];
            $height=$fileinfo[1];
            $is_extension = array("jpg","jpeg","png");
            $file_extension= pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
    
            if(!file_exists($_FILES["image"]["tmp_name"])){
                echo "<script>alert('Please upload image');</script>";
            }elseif(!in_array($file_extension , $is_extension)){
                echo "<script>alert('Upload valid image.(JPG,JPEG,PNG).');</script>";
            }elseif($_FILES["image"]["size"] > 800000){
                echo "<script>alert('Image size must be less than 800KB |');</script>";
            }else{
                $path =$_FILES["image"]["name"];
                $file = $_FILES["image"]["tmp_name"];
                $new_name = time();
                $renamefile = $new_name.".". pathinfo($path, PATHINFO_EXTENSION);
                $destination = 'image2/'.$renamefile;
                if(move_uploaded_file($file, $destination)){
                $query2="INSERT INTO `alumni_master` VALUES ('','$course_id','$session_id','$regdno','$regddate','$fname','$lname', '$address','$contactno','$email','$DOB','$renamefile','$uname3','$password',current_timestamp())";
                $result= mysqli_query($con, $query2);
                if($result){
                    echo "<script>alert('Inserted Sussessfully');</script>";
                }else{
                    echo '<script>alert("Data Not Inserted");</script>';
                }
            }
        }
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
    <form action="" method="post" enctype = "multipart/form-data">
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
                        <li><a href="event.php">Event</a></li>
                        <li><a href="notice.php">Notice</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"> 
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="margin:0px; padding:0;">Hi,<?php echo $_SESSION['name']?><img src="loginprofileimage/user.png" height="40px" width="40px" style="border-radius: 40px; border-radious:40px; margin:5px; bottom:0px;" >
                            <ul class="dropdown-menu">
                                <li><a href="#" style="width: 170px; padding:5px; "><img src="loginprofileimage/user.png" alt="" height="20px" width="20px" style="margin-left:30px;">My profile</a>
                                    <li><a href="#" style="width: 170px; padding:5px; "><img src="loginprofileimage/edit.png" alt="" height="20px" width="20px" style="margin-left:30px;"> Edit Profile</a>
                                    <li><a href="logout.php" style="width: 170px; padding:5px; "><img src="loginprofileimage/log-out.png" alt="" height="20px" width="20px" style="margin-left:30px;"> Logout</a></li>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <div class="main">
                <h2 style="text-align:center; padding-top:50px;">Add Alumni</h2>

                <div class="inner-con">
                    <label for="course" >Course</label><br>
                    <select name="course" id="course">
                        <?php
                            $query= "SELECT * FROM course_master WHERE course_id='".$_SESSION['cid']."'";
                            $result=mysqli_query($con, $query);
                            if($result){
                                $row1=mysqli_fetch_array($result);
                                echo "<option value=".$_SESSION['cid'].">".$row1['course_name']."</option>";                        
                            }
                        ?>
                    </select><br><br>


                    <label for="session" >session</label><br>
                    <select name="session" id="session">
                        <?php
                            $query= "SELECT * FROM session_master WHERE session_id='".$_SESSION['sid']."'";
                            $result=mysqli_query($con, $query);
                            if($result){
                                $row1=mysqli_fetch_array($result);
                                echo "<option value=".$_SESSION['sid'].">".$row1['session_name']."</option>";                        
                            }
                        ?>
                    </select><br><br>

                    <label for="regd-no" >Regd No</label><br>
                    <input type="text" name="regd-no" id="regd-no" placeholder="Enter your Regd number" required><br><br>
                    <label for="regd-date" >Regd Date</label><br>
                    <input type="date" name="regd-date" id="regd-date" placeholder="Enter your regd date" required><br><br>
                    <label for="fname" >First Name</label><br>
                    <input type="text" name="fname" id="fname" placeholder="Enter your first Name" required><br><br>
                    <label for="lname" >Last Name</label><br>
                    <input type="text" name="lname" id="lname" placeholder="Enter your last Name" required><br><br>
                    <label for="address" >Address</label><br>
                    <input type="textarea" name="address" id="address" placeholder="Enter your address" required><br><br>
                    <label for="contactno" >Contact number</label><br>
                    <input type="tel" name="contactno" id="contactno" placeholder="Enter your contact number" required><br><br>
                    <label for="email" >Email</label><br>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required><br><br>
                    <label for="DOB" >Date of birth</label><br>
                    <input type="date" name="DOB" id="DOB" placeholder="Enter your DOB" required><br><br>
                    <label for="image" >Photo</label><br>
                    <input type="file" name="image" id="image" placeholder="Enter select your image"><br><br>
                    <button id="save" name="save"  value="save">Save</button>
                </div>
            </div>
        </main>
        <div class="footer">
			    <div class="wrap">
			        <div class="footer-grids">
				        <div class="footer-grid" >
					        <h3>Find Us in Facebook</h3>				
                            <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px; "><div></div></div></div>
                            <script>(function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
                                fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));
                            </script>
                            <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/MpcAutoCollege/" data-tabs="timeline" data-width="300" data-height="220" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-border="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=280&amp;height=220&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FMpcAutoCollege%2F&amp;locale=en_GB&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=300"><span style="vertical-align: bottom; width: 280px; height: 220px;"><iframe name="f6d5ce09a1732" width="300px" height="220px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.7/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df25d5e8839b0a2c%26domain%3Dmpcautocollege.org.in%26is_canvas%3Dfalse%26origin%3Dhttp%253A%252F%252Fmpcautocollege.org.in%252Ff27d09e1029cf1%26relation%3Dparent.parent&amp;container_width=280&amp;height=220&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FMpcAutoCollege%2F&amp;locale=en_GB&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=300" style="border: none; visibility: visible; width: 280px; height: 220px; margin-right:30px" class=""></iframe></span></div>
                        </div>

				        <div class="footer-grid">
					        <h3>RECENT ADDED</h3>
					        <ul style="display: flex; flex-direction: column; list-style: none; margin: 0; padding: 0;">
						        <li><a href="#">Objectives</a></li>
						        <li><a href="#">History</a></li>
						        <li><a href="#">Gazetted Staffs</a></li>
						        <li><a href="#">Non Teaching Staffs</a></li>
						        <li><a href="http://mail.mpcautocollege.org.in/" target="_blank">Webmail Login</a></li>
                                <li><a href="http://bhashsms.com/loginlanding.php" target="_blank">Message</a></li>
					        </ul>
				        </div>

				        <div class="footer-grid">
					        <h3>USEFUL LINKS</h3>
					        <ul style="display: flex; flex-direction: column; list-style: none; margin: 0; padding: 0;">
						        <li><a href="http://www.odisha.gov.in/" target="_blank">Govt Of Odisha</a></li>
						        <li><a href="http://dheodisha.gov.in/" target="_blank">Department of Higher Education</a></li>
						        <li><a href="http://www.rtiodisha.in/" target="_blank">RTI</a></li>
						        <li><a href="http://www.ugc.ac.in/" target="_blank">UGC</a></li>
						        <li><a href="http://www.naac.gov.in/" target="_blank">NAAC</a></li>
                                <li><a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm" target="_blank">FEE PAYMENT – STATE BANK COLLECT</a></li>
					        </ul>
				        </div>

				        <div class="footer-grid footer-lastgrid">
					        <h3>CONTACT US</h3>
					        <div class="footer-grid-address">
                                <p>TAKHATPUR, BARIPADA</p>
                                <p>Dist-MAYURBHANJ</p>
                                <p>ODISHA-757003</p>
						        <p>Phone/Fax-06792 252612</p>
						        <p>Email:<a class="email-link" href="mailto:mpcautocollege@gmail.com">mpcautocollege@gmail.com</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="email-link" href="mailto:info@mpcautocollege.org.in">info@mpcautocollege.org.in</a></p>
					        </div>
				        </div>

				        <div class="clear"> </div>
			        </div>

			        <div class="copy-right">
			            <p>© 2014 MPC Autonomous College All rights reserved. Powered by : <a href="#" target="_blank">MPC Autonomous college</a></p>
		            </div>
		        </div>
	        </div>
        </form>
    </body>  
</html>

<?php
    }
?>