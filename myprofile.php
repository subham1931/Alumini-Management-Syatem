<?php
    require 'connection.php';
    session_start();
    if($_SESSION['uname']==0 && $_SESSION['uname2']==0){
    header('location:login.php');
    }else{
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS//dashboard3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="script.js"></script>
        <script src="https://kit.fontawesome.com/5026e2b9f4.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

                <!-- <nav class="navbar" style="background-color: #014279; width: 1100px; left:150px; display:flex;">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="userdashboard.php">Home</a></li>
                            <li><a href="userevent.php">Event</a></li>
                            <li><a href="usernotice.php">Notice</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="margin:0px; padding:0;">Hi,<?php echo $_SESSION['uname'] . ' ' . $_SESSION['uname2'] ?><img src="<?php echo "image2/" . $_SESSION['img'] ?>" height="40px" width="40px" style="border-radius: 40px; border-radious:40px; margin:5px; bottom:0px;">
                                <ul class="dropdown-menu">
                                    <li><a href="myprofile.php" style="width: 170px; padding:5px; "><img src="loginprofileimage/user.png" alt="" height="20px" width="20px" style="margin-left:30px;">My profile</a>
                                    <li><a href="logout.php" style="width: 170px; padding:5px; "><img src="loginprofileimage/log-out.png" alt="" height="20px" width="20px" style="margin-left:30px;"> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav> -->
            </header>

            <div class="pf" style="background-color: #01315A;">
              <section class="vh-10" style="background-color: #01315A;">
                <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-10 mb-4 mb-lg-0">
                      <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                          <div class="col-md-4 gradient-custom text-center text-white"
                            style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                            <img src="<?php echo "image2/".$_SESSION['img']?>"
                              alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                            <h5 style="color: black;"><?php echo $_SESSION['uname'].' '.$_SESSION['uname2']?></h5>
                            <p style="color: black;">Web Designer</p>
                            <i class="far fa-edit mb-5"></i>
                          </div>
                          <div class="col-md-8">
                            <div class="card-body p-4">
                              <h6>Information</h6>
                              <hr class="mt-0 mb-4">
                              <div class="row pt-1">
                                <div class="col-6 mb-3">
                                  <h6>Registration No</h6>
                                  <p class="text-muted"><?php echo $_SESSION['rn']?></p>
                                </div>
                                <div class="col-6 mb-3">
                                  <h6>Registration Date</h6>
                                  <p class="text-muted"><?php echo $_SESSION['rd']?></p>
                                </div>
                                <div class="col-6 mb-3">
                                  <h6>Email</h6>
                                  <p class="text-muted"><?php echo $_SESSION['email']?></p>
                                </div>
                                <div class="col-6 mb-3">
                                  <h6>Phone</h6>
                                  <p class="text-muted"><?php echo $_SESSION['cn']?></p>
                                </div>
                                <div class="col-6 mb-3">
                                  <h6>Date Of Birth</h6>
                                  <p class="text-muted"><?php echo $_SESSION['dob']?></p>
                                </div>
                                <div class="col-6 mb-3">
                                  <h6>Address</h6>
                                  <p class="text-muted"><?php echo $_SESSION['add']?></p>
                                </div>
                                
                              </div>
                              <h6>Projects</h6>
                              <hr class="mt-0 mb-4">
                              <div class="row pt-1">
                                <div class="col-6 mb-3">
                                  <h6>Recent</h6>
                                  <p class="text-muted">Lorem ipsum</p>
                                </div>
                                <div class="col-6 mb-3">
                                  <h6>Most Viewed</h6>
                                  <p class="text-muted">Dolor sit amet</p>
                                </div>
                              </div>
                              <div class="d-flex justify-content-start">
                                <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                                <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                                <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div class="clear"></div>

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
                      <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px; "></div>
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