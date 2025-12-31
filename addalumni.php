<?php
    require 'connection.php';
    session_start();
    if($_SESSION['login_id']==0){
    header('location:login.php');
    }else{
        if(isset($_POST['next'])){
            $course=$_POST['course'];
            $session=$_POST['session'];

            $sql = "SELECT * FROM `session_master` WHERE `course_id` = '$course' AND `session_id` = '$session'";
            $result1 = mysqli_query($con,$sql);
            $row1 = mysqli_fetch_assoc($result1);
            if($row1 > 0){
                $_SESSION['cid'] = $row1['course_id'];
                $_SESSION['sid'] = $row1['session_id'];
                echo "<script>window.location.href = 'addalumninext.php';</script>";
                // header('location:addalumninext.php');

            }else{
                echo "<script>('In valid Username or password');</script>";
                echo "<script>window.location.href = 'addalumni.php';</script>";
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
                        <option value="Not selected">Select your Course</option>
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


                    <label for="session" >session</label><br>
                    <select name="session" id="session">
                        <option value="Not selected">Select your session</option>
                        <?php
                            $query= "SELECT * FROM `session_master` order by session_name";
                            $result=mysqli_query($con, $query);
                            if($result){
                                while($row=mysqli_fetch_array($result)){
                                echo "<option value=".$row['session_id'].">".$row['session_name']."</option>";
                                }
                            }
                        ?>
                    </select><br><br>
                    <button id="save" name="next" value="next">Next</button>
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
						        <li><a href="Objective.aspx">Objectives</a></li>
						        <li><a href="History.aspx">History</a></li>
						        <li><a href="teachstaff.aspx">Gazetted Staffs</a></li>
						        <li><a href="non-teaching-staffs.aspx">Non Teaching Staffs</a></li>
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
			            <p>© 2014 MPC Autonomous College All rights reserved. Powered by : <a href="http://seespl.com/" target="_blank">SEESPL</a></p>
		            </div>
		        </div>
	        </div>
        </form>
    </body>  
</html>

<?php
    }
?>