<?php
include('dbcon.php');

session_start();
 
  if(isset($_SESSION['uid']))
  {
    ?>
    <script type="text/javascript">
      window.location='user/index.php?id="<?php echo $_SESSION['uid']; ?>"';
    </script>
    <?php
}
?>
<?php
include 'dbcon.php';

if(isset($_POST['submit']))
{
	$n = $_POST['name'];
	$em = $_POST['email'];
	$p = $_POST['pass'];
	$cp = $_POST['cfm_pass'];
	$u = $_POST['username'];

	if($p != $cp)
	{
		?>
		<script>
			alert('Password not matched');
		</script>
		<?php
	}
	else
	{
		$sql = "INSERT INTO `user1`(`name`, `email_id`, `password`, `username`) VALUES ('$n','$em','$p','$u')";
		$res = mysqli_query($con,$sql);

		if($res)
		{
			?>
			<script>
				alert('You Registered Successfully!');
			</script>
			<?php
		}
		else
		{
			?>
			<script>
				alert('Error!');
			</script>
			<?php
		}
	}
}

?>




<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Page </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="log.css.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <style type="text/css">
        #headr
        {
            font-size:18px; 
            color: #fff;
        }

        #poll
        {
            background: #CCFFCC;
        }

input[type=text], input[type=email], input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div .frm {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 50%;
  position: relative;
  left: 25%;
  right: 20%;
}

@media only screen and (max-width: 768px) {
 div .frm {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 85%;
  position: relative;
  left: 5%;
  right: 5%;
}
}


        

        

    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
<div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="img/h1.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <div class="search-input">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input type="text" />
                                        <button class="btn search-ib">Search</button>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <p >
                                    <a id="headr" href="login.php"  class="nav-link dropdown-toggle"><span><i class="fa fa-sign-in">&nbsp;</i>Login |</span></a> 
                                    <a id="headr" href="reg.php"  class="nav-link dropdown-toggle"><span><i class="fa fa-user">&nbsp;</i>Register |</span> </a>
                                    <a id="headr" href="pass.php"  class="nav-link dropdown-toggle"> <span><i class="fa fa-question">&nbsp;</i>Forget password</span> </a>
                                </p> </li>
                            </ul>

                            <span class="pull-right"><img  height="400" src="img/h2.gif"></span>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
                                
                                    
                                        
                                        
                                    
                                      
                            
                                        
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="index.html">Home</a>
                                    
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="news.html">News</a>
                                    
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="article.html">Articles</a>
                                    
                                </li>  
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="firms.html">CA Firms</a>
                                    
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="jobs.html">Jobs</a>
                                    
                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="trainee.html">Article Trainees</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="web.html">Website</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="empanelment.html">Empanelment</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="queries.html">Queries</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="files.html">Files</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="matrimonial.html">Matrimonial</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Pagemob" href="ads.html">Classified Ads</a>
                                    
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active"><a  href="index.html"> Home</a>
                        </li>
                        <li><a  href=" news.html"> News</a>
                        </li>
                        <li ><a  href=" article.html"> Articles</a>
                        </li>
                        <li><a  href=" firms.html">CA Firms</a>
                        </li>
                        <li><a  href=" jobs.html"> Jobs</a>
                        </li>
                        <li><a  href=" trainee.html">Article Trainees</a>
                        </li>
                        <li><a  href=" web.html"> Website</a>
                        </li>
                    
                        <li><a href=" empanelment.html"><i ></i> Empanelment</a>
                        </li>
                        <li><a href="files.html"><i ></i> Files</a>
                        </li>
                        <li><a href="matrimonial.html">Matrimonial</a>
                        </li>
                        <li><a href="queries.html">Queries</a>
                        </li>
                        
                        <li><a href="ads.html">Classified Ads</a>
                            </li>
                        <li><a data-toggle="tab" href=" #Page"><i ></i> More</a>
                        </li>
                        

                    </ul>

                    <div class="tab-content custom-menu-content">
                        
                        <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th><a href="#" >CA Community</a></th>
                                        <th><a href="#" >Testimonials</a></th>
                                        <th><a href="#" >eDirectory</a></th>
                                        <th><a href="#" >Advertise us</a></th>
                                    </tr>
                                    <tr>
                                        <th><a href="#" >Events</a></th>
                                        <th><a href="#" >Judiciary</a></th>
                                        <th><a href="#" >Score Board</a></th>
                                        <th><a href="#" >Contact us</a></th>
                                    </tr>
                                    <tr>
                                        <th><a href="#" >Top Members</a></th>
                                        <th><a href="#" >Notification/Circulars</a></th>
                                        <th><a href="#" >Press Release</a></th>
                                        <th><a href="#" >Interviews</a></th>
                                    </tr>
                                    <tr>
                                        <th><a href="#" >Coaching Centers</a></th>
                                        <th><a href="#" >Book</a></th>
                                        <th><a href="#" >Members</a></th>
                                        <th><a href="#" >Students Zone</a></th>
                                    </tr>
                                </table>
                            </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Main Menu area End-->
    
    
        <!-- Login -->
        
<div class="notika-email-post-area">
        <div class="container">
            <div class="row">
            	
            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="compose-ml">
                        <a class="btn" href="#"><span class="pull-center"><h4>Registartion Form</h4></span></a>
                    </div>
                    <div class="frm">
  <form action="r.php" method="post">
    
    <label for="lname">Username</label>
    <input type="text" id="user" name="username" placeholder="Your name..">

    <label for="fname">Email ID</label>
    <input type="email" id="fname" name="email" placeholder="Enter Your Email_ID">

    <label for="lname">Password</label>
    <input type="password" id="lname" name="pass" placeholder="Password..">

    <label for="lname">Confirm Password</label>
    <input type="password" id="lname" name="cfm_pass" placeholder="Retype Password..">

    <label for="lname">Name</label>
    <input type="text" id="lname" name="name" placeholder="Your name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="country">State</label>
    <select id="country" name="country">
      <option value="australia">U.P.</option>
      <option value="canada">Pubjab</option>
      <option value="usa">West Bengal</option>
    </select>

    <label for="country">City</label>
    <select id="country" name="country">
      <option value="australia">Kanpur</option>
      <option value="canada">Delhi</option>
      <option value="usa">Mumbai</option>
    </select>

    <label for="country">Qualification</label>
    <select id="country" name="country">
      <option value="australia">CA</option>
      <option value="canada">CS</option>
      <option value="usa">CMA</option>
    </select>
    <br><br>

    <center>
    <label for="ploicy"><h4>By Registering you are accepting the Terms & Conditions of this site.</h4></label></center>
  
    <input type="submit" name="submit" value="Register">
  </form>
</div>


            </div>
            
        </div>
</div>	 
            
        <!-- Forgot Password -->

    </div>
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <div class="FooterLinks">
                            <div style="text-align: center;">
                                www.casansaar.com
                            </div>
                            <div style="text-align: center;">
                                ...keeps you Updated
                            </div>
                            <div class="footer_a">
                            <p style="color: black;">
                            <a  href="#">Home  </a>   |   <a  href="#">  News  </a>   |   <a  href="#">  Articles  </a>   |   <a  href="#">  Discussion  </a>   |   <a  href="#">  CA Firms  </a>   |   <a  href="#">  Members  </a>   |   <a  href="#">  CA Community  </a>   |   <a  href="#">  Jobs  </a>   |   <a  href="#">  GST Calculator  </a>   |   <a  href="#">  Empanelment  </a>   |   <a  href="#">  Files  </a>   |   <a  href="#">  Matrimonial  </a>   |   <a  href="#">  Students zone  </a>   |   <a  href="#">  Queries  </a>   |   <a  href="#">  Classified Ads  </a>   |   <a  href="#">  Events  </a>   |   <a  href="#">  About us  </a>   |   <a  href="#">   Top Members  </a>   |   <a  href="#">  Coaching Centres  </a>   |   <a  href="#"> Testimonials  </a>   |   <a  href="#"> Judiciary  </a>   |   <a  href="#"> Notifications/Circulars  </a>   |   <a  href="#"> Book  </a>   |   <a  href="#"> eDirectory  </a>   |   <a  href="#"> Interview  </a>   |   <a  href="#"> Website  </a>   |   <a  href="#"> Emails  </a>   |   <a  href="#"> Software  </a>   |   <a  href="#">  Score Board  </a>   |   <a  href="#">   Press Release    </a>   |   <a  href="#">   Blood Bank     </a>   |   <a  href="#">   Opinion Poll     </a>   |   <a  href="#">   Feedback  </a>   |   <a  href="#">   Advertise us  </a>   |   <a  href="#">   Terms & Conditions  </a>   |   <a  href="#">   Contact us  </a>   |   <a  href="#">   Blog   </a>   |   <a  href="#">   Sitemap   </a>   |   <a  href="#">   Income Tax   </a>   |   <a  href="#">   Auditing   </a>   |   <a  href="#">   Bank   </a>   |   <a  href="#">   Bank branch audit   </a>   |   <a  href="#">   Banking   </a>   |   <a  href="#">   Black Money   </a>   |   <a  href="#">   CA   </a>   |   <a  href="#">   CA Announcement   </a>   |   <a  href="#">   TDS   </a>   |   <a  href="#">   Students Zone   </a>   |   <a  href="#">   Custom   </a>   |   <a  href="#">   VAT   </a>   |   <a  href="#">   Service Tax   </a>   |   <a  href="#">   Corporate Law   </a>   |   <a  href="#">   General   </a>   |   <a  href="#">   Excise   </a>   |   <a  href="#">   SEBI   </a>   |   <a  href="#">   Finance   </a>   |   <a  href="#">   GST   </a>   |   <a  href="#">   ICAI   </a>   |   <a  href="#">   FEMA   </a>   |   <a  href="#">   ICWAI   </a>   |   <a  href="#">   ICSI   </a>   |   <a  href="#">   DGFT   </a>   |   <a  href="#">   RBI   </a>   |   <a  href="#">   IFRS   </a>   |   <a  href="#">   CAG   </a>   |   <a  href="#">   Budget   </a>   |   <a  href="#">   Merger & Acquisitions   </a>   |   <a  href="#">   International Business   </a>   |   <a  href="#">   Shares & Stock   </a>   |   <a  href="#">   Excel Tips   </a>   |   <a  href="#">   International Taxation   </a>   |   <a  href="#">   ITR   </a>   |   <a  href="#">   Chartered Accountant   </a>   |   <a  href="#">   Tax Audit   </a>   |   <a  href="#">   Companies Act   </a>   |   <a  href="#">   Money Laundering   </a>   |   <a  href="#">   MCA   </a>   |   <a  href="#">   Income Tax Refund   </a>   |   <a  href="#">   NPA   </a>   |   <a  href="#">   Income tax software   </a>   |   <a  href="#">   CST   </a>   |   <a  href="#">   CA Exams   </a>   |   <a  href="#">   CA Results   </a>   |   <a  href="#">   CBDT   </a>   |   <a  href="#">   Accounting Standards   </a>   |   <a  href="#">   DIN   </a>   |   <a  href="#">   Judical Announcement   </a>   |   <a  href="#">   MDP   </a>   |   <a  href="#">   PAN   </a>   |   <a  href="#">   Whats App   </a>   |   <a  href="#">   Secretarial Standards   </a>   |   <a  href="#">   NGO   </a>   |   <a  href="#">   CA Convocation   </a>   |   <a  href="#">   Finance Bill   </a>   |   <a  href="#">   ICAI Notification   </a>   |   <a  href="#">   CARO   </a>   |   <a  href="#">   COMPANIES SECRETARY   </a>   |   <a  href="#">   Accounts</a>
                        </p>
                        </div>

                        </div>



                        <p>Copyright © 2018 
. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <script  src="js/index.js"></script>
	<!--  Chat JS
		============================================ -->
    <script src="js/chat/moment.min.js"></script>
    <script src="js/chat/jquery.chat.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    
</body>

</html>