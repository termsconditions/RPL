
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<head>
  
    <!-- Basic -->
	<title>RPL | Home</title>
    
    <!-- Define Charset -->
	<meta charset="utf-8">
    
    <!-- Responsive Metatag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Page Description and Author -->
    <meta name="description" content="Venda - Responsive HTML5 Template">
    <meta name="author" content="ZoOm Arts">
  
    <!-- Favicon 
    <link rel="shortcut icon" href="images/favicon.png">
    
    <!-- Favicon 
    <link rel="shortcut icon" href="images/favicon.png">-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    
    <!-- Bootstrap CSS  -->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
  
    <!-- Revolution Banner CSS -->
    <link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
  
    <!-- Venda CSS Styles  -->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
  
    <!-- Responsive CSS Styles  -->
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
    
    <!-- Css3 Transitions Styles  -->
	<link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
  
    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="blue" media="screen" />
  
    <!-- Fontello Icons CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/fontello.css" media="screen">
    <!--[if IE 7]><link rel="stylesheet" href="css/fontello-ie7.css"><![endif]-->
    
    <!-- Venda JS  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
    <script type="text/javascript" src="js/modernizrr.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/count-to.js"></script>
    <script type="text/javascript" src="js/jquery.textillate.js"></script>
    <script type="text/javascript" src="js/jquery.lettering.js"></script>
    <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

	<!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
</head>
<body>

	<!-- Container -->
	<div id="container">
		
        <!-- Start Header -->
		<div class="hidden-header"></div>
        <header class="clearfix">
            
            <!-- Start Top Bar -->
			<div class="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
                            <!-- Start Contact Info -->
							<ul class="contact-details">
                            	<!--li><a href="#"><i class="icon-mobile-2"></i> +62 852</a></li-->
                                <li><a href="mailto:rpl-info@telkomuniversity.ac.id"><i class="icon-mail-2"></i> rpl-info@telkomuniversity.ac.id</a></li>
                            </ul>
                            <!-- End Contact Info -->
						</div>
						<div class="col-md-6">
                            <!-- Start Social Links -->
							<ul class="social-list">
								<li>
									<a class="facebook sh-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="icon-facebook-2"></i></a>
								</li>
								<li>
									<a class="twitter sh-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="icon-twitter-2"></i></a>
								</li>
							</ul>
                            <!-- End Social Links -->
						</div>
					</div>
				</div>
			</div>
            <!-- End Top Bar -->
          
			<!-- Start Header ( Logo & Naviagtion ) -->
			<div class="navbar navbar-default navbar-top">
				<div class="container">
					<div class="navbar-header">
                        <!-- Stat Toggle Nav Link For Mobiles -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<i class="icon-menu-1"></i>
						</button>
                        <!-- End Toggle Nav Link For Mobiles -->
						<a class="navbar-brand" href="?nav=home"><img alt="" src="images/loglog2.png" ></a>
					</div>
					<div  class="navbar-collapse collapse">
                        <!-- Start Navigation List -->
						<ul id="navigation" class="nav navbar-nav navbar-right">
							<li>
								<a href="?nav=home">Home</a>
							</li>
							<li>
								<a href="?nav=about">About</a>
							</li>
							<li>
								<a href="?nav=portfolio">Portfolio</a>
							</li>
							<li><a href="?nav=contact">Contact</a></li>
                            <li>
                                <a href="?nav=alumni">Alumni</a>
                            </li>
						</ul>
                        <!-- End Navigation List -->
					</div>
				</div>
			</div>
            <!-- End Header ( Logo & Naviagtion ) -->
         <script type="text/javascript">
           $(function() {
              $('#navigation li a').click(function() {
                  $('#navigation li a').removeClass('active');
                 // $(this).addClass('active');
              });
            });
          </script>
		</header>
		<!-- End Header -->

		<!--Start Content-->
        <?php
        if (isset($_GET['nav'])) {
          switch ($_GET['nav']) {
                case 'home':
                   include  "isiindex.php";
                    break;
                 case 'about':
                   include  "about.php";
                    break;
                 case 'portfolio':
                   include  "portfolio.php";
                    break;
                 case 'contact':
                   include  "contact.php";
                    break;   
                 case 'alumni':
                   include  "alumni.php";
                    break;  
                 case 'portdetail':
                   include  "portdetail.php";
                    break;  
                default:
                   include  "404.php";
                    break;
            }
        }
        else
        {
            include  "isiindex.php";
        }
            
         
         ?>
		<!-- End Content -->

  
		<!-- Start Footer -->
		<footer>
			<div class="container">               
                <!-- Start Copyright -->
				<div class="copyright-section">
					<div class="row">
						<div class="col-md-6">
							<p>© 2015 Software Engineering Laboratory -  All Rights Reserved</p>
						</div>
						<div class="col-md-6">
							<ul class="footer-nav">
								<!--li><a href="#">Sitemap</a></li-->
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="?nav=contact">Contact</a></li>
                                <li><a href="https://id.linkedin.com/in/rifqithomi" target="_blank">Developed by Rifqi Thomi</a></li>
							</ul>
						</div>						
					</div>
				</div>
                <!-- End Copyright -->
                
			</div>
		</footer>
		<!-- End Footer -->
      
	</div>
	<!-- End Container -->
    
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top"><i class="icon-up-open-1"></i></a>
	
	<div id="loader">
    	<div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
    </div>
 
</body>
</html>