

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>KreativePixel website for Iphone, Android &nbsp; Smartphone Mobile Website Template | Home :: w3layouts</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!---animate-header--->
		 <link href="css/animate.css" rel="stylesheet" type="text/css" />
		 <!---animate-header--->
		<!---slider---->
		<script src="js/jquery.min.js"></script>
		<link rel="stylesheet" href="css/slippry.css">
		<script src="js/jquery-ui.js" type="text/javascript"></script>
		<script src="js/scripts-f0e4e0c2.js" type="text/javascript"></script>
		<script>
			  jQuery('#jquery-demo').slippry({
			  // general elements & wrapper
			  slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
			  // options
			  adaptiveHeight: false, // height of the sliders adapts to current slide
			  useCSS: false, // true, false -> fallback to js if no browser support
			  autoHover: false,
			  transition: 'fade'
			});
		</script>
		<!---scrooling-script--->
		<!---smoth-scrlling---->
							<script type="text/javascript">
									$(document).ready(function(){
									$('a[href^="#"]').on('click',function (e) {
									    e.preventDefault();
									    var target = this.hash,
									    $target = $(target);
									    $('html, body').stop().animate({
									        'scrollTop': $target.offset().top
									    }, 1000, 'swing', function () {
									        window.location.hash = target;
									    });
									});
								});
							</script>
					<!---//smoth-scrlling---->
		<!---//scrooling-script--->
		<!-----768px-menu----->
		<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
		<script type="text/javascript" src="js/jquery.mmenu.js"></script>
			<script type="text/javascript">
				//	The menu on the left
				$(function() {
					$('nav#menu-left').mmenu();
				});
		</script>
		<!-----//768px-menu----->
	</head>
	<body>
		<!---start-wrap---->
			<!---start-banner---->
			<div class="banner" id="move-top">
				<!----start-header---->
				<div class="header animated bounceInDown">
					<!------start-768px-menu---->
						<div id="page">
								<div id="header">
									<a class="navicon" href="#menu-left"> </a>
								</div>
								<nav id="menu-left">
									<ul>
										<li><a href="#home">Home</a></li>
										<li><a href="#fea">Features</a></li>
										<li><a href="#work">Work</a></li>
										<li><a href="#blog">Blog</a></li>
										<li><a href="#contact">Contact</a></li>
									</ul>
								</nav>
							</div>
					<!------start-768px-menu---->
					<div class="wrap">
						<!---start-logo---->
						<div class="logo">
							<a href="#"> <img src="images/logo.png" title="KreativePixel" /></a>
						</div>
						<!---//End-logo---->
						<!---//End-top-nav---->
					</div>
				</div>
				<!----//End-header---->
				<!----start-image-slider---->
					<div class="img-slider" id="home">
						<div class="wrap">
							<ul id="jquery-demo">
							  <li>
							    <a href="#slide1">
							    </a>
							    <div class="slider-detils">
							    	<!----//empieza php---->
	}
							    	<?php echo "Hola mundo de la bitreserva"; 
if (isset($_GET['code'])) {
    echo $_GET['code'];
	}else{
    // Fallback behaviour goes here
	}

	?>
	

<!----//eacaba php---->
							    	<h3> <label>Saldo.mx</label> Banks of the West</h3>
							    	<span>Hola<i> liquidez de la gente</i></span>
							    	<a class="slide-btn" href="#">View Projects</a>
							    </div>
							  </li>
							  <li>
							    <a href="#slide2">
							    </a>
							      <div class="slider-detils">
							    	<h3>We Design <label>Creative Website</label> For Enterprising People</h3>
							    	<span>Lorem ipsum dolor sit amet, consectetur adipisc ing elit.<i> Aliquam viverra consectetur nibh a blan dit. Proin at amet consectetur adipisc lacinia nunc.</i></span>
							    	<a class="slide-btn" href="#">View Projects</a>
							    </div>
							  </li>
							</ul>
						</div>
					</div>
					<div class="clear"> </div>
				</div>
					<!----//End-image-slider---->
					<!---start-top-grids---->
					<div class="top-grids" id="fea">
						<div class="wrap">
							<h3><span>Check Out</span>Features</h3>
							<i> </i>
							<div class="top-grids-box">
								<div class="top-grid">
									<a class="icon1" href="#"><span> </span></a>
									<h4><a href="#">Mobile Ready</a></h4>
									<p> Lorem ipsum dolor sit amet, consectetur adipisc ing. Aliquam viverra   dolor sit consectetur nibh a blan.</p>
									<a class="btn" href="#">Read  More</a>
								</div>
								<div class="top-grid">
									<a class="icon2" href="#"><span> </span></a>
									<h4><a href="#">HTML5 Valid</a></h4>
									<p> Lorem ipsum dolor sit amet, consectetur adipisc ing. Aliquam viverra   dolor sit consectetur nibh a blan.</p>
									<a class="btn" href="#">Read  More</a>
								</div>
								<div class="top-grid">
									<a class="icon3" href="#"><span> </span></a>
									<h4><a href="#">CSS3 Magic</a></h4>
									<p> Lorem ipsum dolor sit amet, consectetur adipisc ing. Aliquam viverra   dolor sit consectetur nibh a blan.</p>
									<a class="btn" href="#">Read  More</a>
								</div>
								<div class="top-grid">
									<a class="icon4" href="#"><span> </span></a>
									<h4><a href="#">Amazing design</a></h4>
									<p> Lorem ipsum dolor sit amet, consectetur adipisc ing. Aliquam viverra   dolor sit consectetur nibh a blan.</p>
									<a class="btn" href="#">Read  More</a>
								</div>
								<div class="clear"> </div>
							</div>
						</div>
					</div>
					<!---//End-top-grids---->
					<!---- start-works---->
					<!-- Owl Carousel Assets -->
					<link href="css/owl.carousel.css" rel="stylesheet">
					     <!-- Owl Carousel Assets -->
					    <!-- Prettify -->
					    <script src="js/owl.carousel.js"></script>
					        <script>
					    $(document).ready(function() {
					
					      $("#owl-demo").owlCarousel({
					        items : 1,
					        lazyLoad : true,
					        autoPlay : true,
					        navigation : true,
						    navigationText : ["",""],
						    rewindNav : false,
						    scrollPerPage : false,
						    pagination : false,
			    			paginationNumbers: false,
					      });
					
					    });
					    </script>
					   <!-- //Owl Carousel Assets -->
					<div class="works" id="work">
						<h3><span>Our Latest</span>Works</h3>
						<i> </i>
						<!-- start content_slider -->
						<!---work-grid-capition-script---->
						<script type="text/javascript">
							$(document).ready(function() {
								$('.fade').hover(
									function(){
										$(this).find('.caption').fadeIn(250);
									},
									function(){
										$(this).find('.caption').fadeOut(250);
									}
								);
							});
							</script>
						<!---//work-grid-capition-script---->
				<!---//End-gallery-script----->
					       <div id="owl-demo" class="owl-carousel">
				                <div class="item" id="example1">
				                	<div class="grid-block fade">
							        	<div class="caption">
							            	<h4>Beatiful Mountain</h4>
							                <p>Something more beautiful mountains photos.</p>
							               	<ul>
							               		<li><a class="w-icon1" href="#"><span> </span></a></li>
							               		<li><a class="w-icon2" href="#"><span> </span></a></li>
							               		<div class="clear"> </div>
							               	</ul>
							            </div>
							        	<img src="images/w1.jpg" />
							        </div>
							        <div class="grid-block fade">
							        	<div class="caption">
							            	<h4>Beatiful Mountain</h4>
							                <p>Something more beautiful mountains photos.</p>
							               	<ul>
							               		<li><a class="w-icon1" href="#"><span> </span></a></li>
							               		<li><a class="w-icon2" href="#"><span> </span></a></li>
							               		<div class="clear"> </div>
							               	</ul>
							            </div>
							        	<img src="images/w2.jpg" />
							        </div>
				                </div>
				                <div class="item" id="example2">
							        <div class="grid-block fade">
							        	<div class="caption">
							            	<h4>Beatiful Mountain</h4>
							                <p>Something more beautiful mountains photos.</p>
							               	<ul>
							               		<li><a class="w-icon1" href="#"><span> </span></a></li>
							               		<li><a class="w-icon2" href="#"><span> </span></a></li>
							               		<div class="clear"> </div>
							               	</ul>
							            </div>
							        	<img src="images/w7.jpg" />
							        </div>
							        <div class="grid-block fade">
							        	<div class="caption">
							            	<h4>Beatiful Mountain</h4>
							                <p>Something more beautiful mountains photos.</p>
							               	<ul>
							               		<li><a class="w-icon1" href="#"><span> </span></a></li>
							               		<li><a class="w-icon2" href="#"><span> </span></a></li>
							               		<div class="clear"> </div>
							               	</ul>
							            </div>
							        	<img src="images/w8.jpg" />
							        </div>
				                </div>
			              </div>
				<!----//End-img-cursual---->
					</div>
					<!---- //End-works---->
					<!---start-blog---->
					<div class="blog" id="blog">
						<div class="wrap">
							<h3><span>Recent</span> Blog Posts</h3>
							<i> </i>
							<div class="blog-artical-grids">
								<div class="artical-grid">
									<div class="artical-grid-head">
										<img class="post-pic" src="images/artical-pic1.jpg">
										<span class="admin1"><img src="images/admin1.jpg" title="admin-name" /></span>
									</div>
									<div class="artical-info">
										<label class="poston">January 11, 2014</label>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing. Aliquam viverra   dolor sit consectetur.</p>
									</div>
								</div>
								<div class="artical-grid">
									<div class="artical-grid-head">
										<img class="post-pic" src="images/artical-pic2.jpg">
										<span class="admin1"><img src="images/admin2.jpg" title="admin-name" /></span>
									</div>
									<div class="artical-info">
										<label class="poston">January 11, 2014</label>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing. Aliquam viverra   dolor sit consectetur.</p>
									</div>
								</div>
								<div class="artical-grid">
									<div class="artical-grid-head">
										<img class="post-pic" src="images/artical-pic3.jpg">
										<span class="admin1"><img src="images/admin3.jpg" title="admin-name" /></span>
									</div>
									<div class="artical-info">
										<label class="poston">January 11, 2014</label>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing. Aliquam viverra   dolor sit consectetur.</p>
									</div>
								</div>
								<div class="clear"> </div>
							</div>
						</div>
					</div>
					<!---//End-blog---->
					<!----start-contact---->
					<div class="contact" id="contact">
						<div class="wrap">
						<div class="contact-form">
							<div class="contact-info">
									<h3><span>Contact Us</span> Now</h3>
									<p>Lorem ipsum address line1, address lin</p>
									<label>0414 459 237</label>
									<a href="mailto:yourwebsitename.com">info@elegantbizz.com</a>
									<i> </i>
									<form>
										<input type="text" placeholder="Name">
										<input type="text" placeholder="Email">
										<textarea placeholder="message"> </textarea>
										<input type="submit" value="Send Message"> 
									</form>
							</div>
						</div>
						</div>
					</div>
					<!----//End-contact---->
					<!---start-footer--->
					<!----start-scrooling-script---->
								 <a href="#move-top" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"> </span></a>
							<!----//End-scrooling-script---->
					<div class="footer">
						<div class="footer-top">
							<div class="wrap">
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">Features</a></li>
									<li><a href="#">Work</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="footer-bottom">
							<div class="wrap">
								<p>Template by <a href="http://w3layouts.com/">W3layouts</a></p>
							</div>
						</div>
					</div>
					<!---//End-footer--->
					<!---stikey-header--->
			</div>
		<!---//End-wrap---->
	</body>
</html>

