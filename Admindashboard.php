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
        <link rel="stylesheet" href="CSS//dashboard.css">
        <!-- <link rel="stylesheet" href="CSS//dashboard2.css"> -->
        <link rel="stylesheet" href="CSS//dashboard2.css">
        <link rel="stylesheet" href="CSS//dashboard3.css">
        <link rel="stylesheet" href="CSS//test2.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="script.js"></script>
        <script src="https://kit.fontawesome.com/5026e2b9f4.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Admission form</title>
        <style>
            .dropdown-menu,.dropdown-menu li a {
                background-color: #014279;
                color: #fff;
                height: auto;
            } 
            div .mySlides {
                display:none;
            }

            .w3-section{
                margin-left: 200px;
            }
        </style>
    </head>
    <body style="background-color: #01315A;">
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
            <div class="w3-content w3-section" style="max-width:500px; left:100px;">
                <img class="mySlides" src="Image/slide1.jpg" style="width:200%;">
                <img class="mySlides" src="Image/slide2.jpg" style="width:200%">
                <!-- <img class="mySlides" src="Image/slide3.jpg" style="width:200%; height: 1000%;"> -->
            </div>

            <div class="main">
                <div class="leftcon" style="margin-top: 10px; padding: 10px;">
                    <div class="cont1 span_2_of_a about_desc">
                        <h2>Welcome To Our College</h2>
                        <p><span>Maharaja Purna Chandra (Autonomous) College, Baripada is one of the Premier institutions of Higher Education in Orissa.</span></p>

                        <div class="image-group">
                            <div class="grid images_3_of_1">
                                <img src="Image/raja.jpg" height="150">
                                <img src="Image/rani.jpg" height="150">
                                <p>
                                    <strong>
                                        Maharaja Purna Chandra Bhanja Deo
                                        <br>
                                        and Maharani Takhat Kumari
                                    </strong>
                                </p>
                            </div>
                        </div>

                        <p style="text-align: justify;">Christened after the Late Maharaja Purna Chandra Bhanja Deo, the enlightened ruler of the erstwhile Princely state of Mayurbhanj, the College has been successfully catering to the need of higher education of the people, not only of Orissa but also of its adjoining states since its inception in July 1948. </p>
                        <p style="text-align: justify;">Over the years the institution has grown from strength to strength and from glory to glory by adding fresh feathers to its cap of success. With the conferment of Autonomous status upon the College by the UGC and Govt. of Orissa in 2000-2001 and accreditation by NAAC with ‘B’ grade, the College has added two more shining feathers to its cap of success.</p>
                        <br><br>
                        <b style="margin-top:20px;font-weight:800"><a style="font-weight:800" href="http://pg.samsodisha.gov.in/" target="_blank">Click here to OnLine PG Admission</a></b>
                        <br> <br> 
                    </div>

                    <div class="bottom-grid3 bottom-last">
                        <h3>Principal</h3>
                        <span style="text-align: center;">
                            <img src="Image/d2d4a2ef-0081-4db6-aa7a-2fe1040ad718MKP1.png" id="ContentPlaceHolder1_Image1">
                            <br>
                            <div style="text-align: center">
                                <span id="ContentPlaceHolder1_lblname" style="text-transform: capitalize">Sri Mukti Kanta Panda</span>
                            </div>
                        </span>
                        <p style="text-align: justify; text-align: center">
                            <span id="ContentPlaceHolder1_lblmsg" style="color: black; border: none; width: 250px; height: 130px; text-align: justify">When there is righteousness in the heart,<br>
                                There is beauty in the character.<br>
                                When there is beauty in the Character,<br>
                                There is harmony in the home.<br>
                                
                            </span>
                        </p><br>
                    </div>
                    <div class="clear"></div>
                    <div class="clear"> </div>
                </div>
                    
                
            </div>

                <div class="sectiongroup" >
                    <div class="col_1_of_4 span_1_of_4">
                        <div class="banner-box1">
                            <a href="allalumni.php" style="text-decoration: none; cursor:pointer;"><span class="text20">Total Alumni</span></a>  
                        </div>
                            <?php
                                // $count=1;
                                $sql="SELECT * FROM `alumni_master` ORDER BY alumni_id;";
                                $result = mysqli_query($con,$sql);
                                $row= mysqli_num_rows($result);
                                echo '<p style="font-size: 50px; text-align:center;">'.$row.'</p>';
                            ?>
                    </div>
                    
                    <div class="col_1_of_4 span_1_of_4">
                        <div class="banner-box2">
                            <a href="allalumni.php" style="text-decoration: none; cursor:pointer;"><span class="text20">Recently joined</span></a>
                        </div>
                        <marquee scrollamount="2" direction="up" onmouseover="stop()" onmouseout="start()" height="230" style="color: black"> 
                            <table id="ContentPlaceHolder1_DataList1" cellspacing="0" style="border-collapse:collapse;background-color:transparent;width:100%;">
	                            <tbody>
                                    <tr>
		                                <td>
                                            <div style=" text-align:justify;width:100%;padding-bottom:10px;">
                                                <?php
                                                    $sql="SELECT * FROM `alumni_master` ORDER BY alumni_id DESC LIMIT 5";
                                                    $result= mysqli_query($con,$sql);
                                                    while($row = mysqli_fetch_array($result)){
                                                ?>
                                                    <img src="Image/new-logo.png" style="width: 20px;"> 
                                                    <p><span id="ContentPlaceHolder1_DataList1_time_0" class="desc" style="color:black"><?php echo $row["dateandtime"];?></span>
                                                        :
                                                        <a id="ContentPlaceHolder1_DataList1_hlNoticeName_0" class="desc" href="CMS/Notice/07fa92a1-af59-4f2b-9d88-4ef30251dcd5ug%206%20sem%20reg.pdf" target="_blank" style="color:black"><?php echo $row["fname"].' '.$row["lname"];?></a><br>
                                                    </p>
                                                <?php
                                                    }
                                                ?>
                                            </div>  
                                        </td>
	                                </tr>
                                </tbody>
                            </table> 
                        </marquee>
                    </div>

                    <div class="col_1_of_4 span_1_of_4">
                        <div class="banner-box2">
                            <span class="text20">Notice</span>
                            <a href="note.php" class="link2"></a>
                        </div>
                        <marquee scrollamount="2" direction="up" onmouseover="stop()" onmouseout="start()" height="230" style="color: black"> 
                            <table id="ContentPlaceHolder1_DataList1" cellspacing="0" style="border-collapse:collapse;background-color:transparent;width:100%;">
	                            <tbody>
                                    <tr>
		                                <td>
                                            <div style=" text-align:justify;width:100%;padding-bottom:10px;">
                                                <?php
                                                    $sql2="SELECT * FROM `notice_master` ORDER BY notice_id DESC LIMIT 5";
                                                    $result2= mysqli_query($con,$sql2);
                                                    while($row = mysqli_fetch_array($result2)){
                                                ?>
                                                <img src="Image/new-logo.png" style="width: 20px;"> 
                                                <p><span id="ContentPlaceHolder1_DataList1_time_0" class="desc" style="color:black"><?php echo $row["dateandtime"];?></span>
                                                    :
                                                    <a id="ContentPlaceHolder1_DataList1_hlNoticeName_0" class="desc" href="CMS/Notice/07fa92a1-af59-4f2b-9d88-4ef30251dcd5ug%206%20sem%20reg.pdf" target="_blank" style="color:black"><?php echo $row["notice"];?></a><br>
                                                </p>
                                                <?php
                                                    }
                                                ?>
                                            </div>  
                                        </td>
	                                </tr>
                                </tbody>
                            </table> 
                        </marquee>
                    </div>

                    <div class="col_1_of_4 span_1_of_4">
                        <div class="banner-box4">
                            <span class="text20">Event</span>
                            <a href="event.php" class="link2"></a>
                        </div>
                        <marquee scrollamount="2" direction="up" onmouseover="stop()" onmouseout="start()" height="230" style="color: black"> 
                            <table id="ContentPlaceHolder1_DataList1" cellspacing="0" style="border-collapse:collapse;background-color:transparent;width:100%;">
	                            <tbody>
                                    <tr>
		                                <td>
                                            <div style=" text-align:justify;width:100%;padding-bottom:10px;">
                                                <?php
                                                    $sql2="SELECT * FROM `event_master` ORDER BY event_id DESC LIMIT 5";
                                                    $result2= mysqli_query($con,$sql2);
                                                    while($row = mysqli_fetch_array($result2)){
                                                ?>
                                                <img src="Image/new-logo.png" style="width: 20px;"> 
                                                <p><span id="ContentPlaceHolder1_DataList1_time_0" class="desc" style="color:black"><?php echo $row["dateandtime"];?></span>
                                                    :
                                                    <a id="ContentPlaceHolder1_DataList1_hlNoticeName_0" class="desc" href="#" target="_blank" style="color:black"><?php echo $row["tittle"];?></a><br>
                                                </p>
                                                <?php
                                                    }
                                                ?>
                                            </div>  
                                        </td>
	                                </tr>
                                </tbody>
                            </table> 
                        </marquee>
                    </div>
                </div>
                <div class="clear"></div>
        </main>

            <script>
                var myIndex = 0;
                carousel();
                function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}    
                    x[myIndex-1].style.display = "block";  
                    setTimeout(carousel, 2000); // Change image every 2 seconds
                }
            </script>

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
        </form >
    </body>  
</html>

<?php
 }
?>