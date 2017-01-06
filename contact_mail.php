<?php // Initialize variables to null.
if(isset($_POST['submit'])) { // Checking null values in message.
$email = $_POST['email'];
$to = "email id here";
$headers  = "From: " . strip_tags($email) . "\r\n";
$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
$headers .= "CC: info@crescentacademy.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$subject = "Contact Inquiry";

$message = '<html><body>';
 
$message .= '<table width="100%"; rules="all" style="border:1px solid #3A5896;" cellpadding="10">';
 
$message .= "<tr><td><img src='/Crescentacademy/images/favicon_ca_32x32.png' alt='Crescent Academy' /></td></tr>";
 
$message .= "<tr><td colspan=2>CONTACT INFORMATION</td></tr>";


$message .= "<tr><td colspan=2 font='colr:#999999;'><B>Name : </B>".$_POST['name']."</td></tr>"; 
$message .= "<tr><td colspan=2 font='colr:#999999;'><B>Email Id : </B>".$_POST['email']."</td></tr>"; 
$message .= "<tr><td colspan=2 font='colr:#999999;'><B>Phone : </B>".$_POST['phone']."</td></tr>"; 
$message .= "<tr><td colspan=2 font='colr:#999999;'><B>Inquiry : </B>".$_POST['inquiry']."</td></tr>"; 
 
  
$message .= "<tr><td colspan=2 font='colr:#999999;'>crescentacademy.com</td></tr>"; 

$message .= "</table>";
 
$message .= "</body></html>";

if(mail($to,$subject,$message,$headers))
{
$successMessage = "Message sent successfully.......";
}
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- ================================= HEAD ================================= -->

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<link rel="shortcut icon" type="image/png" href="images/favicon_ca_32x32.png">
        <title>CRESCENT ACADEMY - Orange County's After School Learning Center for Arabic, Islamic Studies &amp; Quran : Contact</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
		<link rel="stylesheet" href="css/responsivemultimenu.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
				<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-89942816-1', 'auto');
		  ga('send', 'pageview');

		</script>
    </head>

<!-- ================================= BODY ================================= -->

    <body>

<!-- ================================= Header ================================= -->

        <header class="siteHeader">

            <div class="headerTop">
                <div class="container">
                    <ul>
                        <li><a href="tel:9498006777"><i class="fa fa-phone call-icon"></i>Call Us :<span>(949) 800-6777</span></a></li>
                        <li><a href="http://fb.com/crescentacademe" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://twitter.com/crescentacademe" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/crescentacademy/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="http://www.pinterest.com/crescentacademy/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC1WIKtDSVGw-_oYbCN31kCg" target="_blank"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div><!-- headerTop ends -->

            <div class="headerMain">
                <div class="container">
                    <div class="siteBrand">
                        <a href="index.html"><img src="images/logo-ca.png" alt="" /></a>
                    </div><!-- logo ends -->

                    <div class="headerRight">
                        <div class="enrolBtn">
                            <a href="apply.html">APPLY NOW <i><img src="images/btn-arrow.png" alt="" /></i></a>
                        </div>

                        <nav class="site-nav rmm style" >
                            <ul class="menu-left">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">Stages</a>
                                    <ul>
                                        <li><a href="early-childhood.html">Pre-K &amp; K</a></li>
                                        <li><a href="elementary.html">Elementary</a></li>
                                        <li><a href="middle.html">Middle</a></li>
                                        <li><a href="high.html">High</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Info</a>
                                    <ul>
                                        <li><a href="apply.html">Apply</a></li>
                                        <li><a href="calendar.html">Calendar</a></li>
                                        <li><a href="faqs.html">FAQs</a></li>
                                        <li><a href="news.html">News</a></li>
                                    </ul>
                                </li>
                                <li class="active"><a href="#">Academy</a>
                                    <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="careers.html">Careers</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </li>
                            </ul>
                         </nav>
                    </div>
                </div><!-- container -->
            </div><!-- headerMain ends -->

        </header>

<!-- ================================= Banner Section ================================= -->

        <section class="slideArea innerPageBg parallax-window" data-parallax="scroll" data-image-src="images/banner-faqs.jpg">
            <div class="container">
                <div class="jumboText">
                    <h1>Contact Crescent Academy</h1>
                    <h3>We want to hear from you!</h3>
                </div>
            </div>
        </section>

<!-- ======================================== contact form =================================== -->
 
        <section class="innerPageView">
		    <div class="message"><?php echo $error; ?></div>
            <div class="container">
                <div class="pageContent contactPage">
                    <div class="contactBlock formBlock">
                        <h1>Send us a message</h1>
                <!--		<p>Technology is spreading everywhere, creating hundreds of thousands of high-paying jobs in many fields. </p>  -->
                        <form method="post" action="/Crescentacademy/contact_mail.php">
                            <div class="inputField "><input type="text" name="name" placeholder="Name" /><i class="ci-user"></i></div>
							<span class="error"><?php echo $nameError;?></span>
                            <div class="inputField"><input type="text" name="email" placeholder="Email" /><i class="ci-email"></i></div>
							<span class="error"><?php echo $emailError;;?></span>
                            <div class="inputField"><input type="text" name="phone" placeholder="Phone" /><i class="ci-phone"></i></div>
							<span class="error"><?php echo $phoneError;?></span>
                            <div class="inputField"><textarea name="inquiry" placeholder="Inquiry"></textarea></div>
                            <div class="inputField"><button type="submit" name="submit">Submit<img src="images/btn-arrow-big.png" alt="" /></button></div>
							<span class="success"><?php echo $successMessage;?></span>
                        </form>
                    </div> <!-- block ends -->

                    <div class="contactBlock contactInfo">
                     <!--    <div class="iLocation">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1174.2086165547341!2d-117.74785389185973!3d33.65292515948246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dce7f82e0babad%3A0xe8f36af065cbbb4d!2s200+Spectrum+Center+Dr%2C+Irvine%2C+CA+92618%2C+USA!5e0!3m2!1sen!2sin!4v1479992148874" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div> -->
                        <h1>CONTACT INFO</h1>
                        <ul>
                            <li>
                                <a href="tel:9498006777">
                                    <i><img src="images/icon-phone-blue.png" alt="" /></i>
                                    <div class="info">
                                        <p><strong>PHONE</strong></p>
                                        <p>(949) 800-6777</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="mailto:info@CrescentAcademy.com?subject=Contact request from website">
                                    <i><img src="images/icon-mail-blue.png" alt="" /></i>
                                    <div class="info">
                                        <p><strong>EMAIL</strong></p><p>info@CrescentAcademy.com</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <i><img src="images/icon-location-blue.png" alt="" /></i>
                                <div class="info">
                                    <p><strong>PHYSICAL ADDRESS</strong></p>
                                    <p>200 Spectrum Center Drive,<br />Irvine, CA 92618<br />USA</p>
                                </div>
                            </li>

                            <li>
                                <i><img src="images/icon-mailbox-blue.png" alt="" /></i>
                                <div class="info">
                                    <p><strong>MAILING ADDRESS</strong></p>
                                    <p>PO Box 54545,<br />Irvine, CA 92619<br />USA</p>
                                </div>
                            </li>

                            <li>
                                <a href="index.html">
                                    <i><img src="images/icon-globe-blue.png" alt="" /></i>
                                    <div class="info">
                                        <p><strong>WEBSITE</strong></p>
                                        <p>www.CrescentAcademy.com</p>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <ul class="socialLinks">
                            <li><a href="http://fb.com/crescentacademe" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://twitter.com/crescentacademe" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/crescentacademy/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="http://www.pinterest.com/crescentacademy/" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UC1WIKtDSVGw-_oYbCN31kCg" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>


                    </div>

                </div><!-- page content -->
            </div><!-- wrapper ends -->
        </section> <!-- inner page ends -->

<!-- ================================= Map ================================= -->

           <section class="map-wrapper">
			<div id="map-canvas"></div>
		</section>
	

<!-- ================================= Why CA ================================= -->

        <section class="projectTraining">
            <div id="projectTraining" class="owl-carousel owl-theme">

                <div class="item">
                    <div class="training-wrapper">
                        <h1>The Best of Both Worlds</h1>
                        <h2>Public schools do an excellent job teaching english, math, science, etc. That's paid for using your tax dollars. Why pay again for a full-day Islamic school, when you can just pay a fraction of that cost for the supplement that your child needs?</h2>
                    </div>
                </div>

                <div class="item">
                    <div class="training-wrapper">
                        <h1>No Prior Knowledge Required</h1>
                        <h2>We understand that your child may be a beginner, even in High School, so we adapt our teaching accordingly.</h2>
                    </div>
                </div>

                <div class="item">
                    <div class="training-wrapper">
                        <h1>2 Hours Twice a Week</h1>
                        <h2>Many parents complain that weekend school is inconvenient and is not enough. That is why our classes are two hours each, twice a week, on school days.</h2>
                    </div>
                </div>

                <div class="item">
                    <div class="training-wrapper">
                        <h1>Character Building</h1>
                        <h2>Islam is not only a set of rituals, it is a complete lifestyle. Crescent Academy follows the prophetic model in building a comprehensive character.</h2>
                    </div>
                </div>

                <div class="item">
                    <div class="training-wrapper">
                        <h1>Skilled Teachers</h1>
                        <h2>One has to select carefully who they take their religion from. Our teachers are skilled role models who are trained on how to deliver Islam the correct way.</h2>
                    </div>
                </div>

                <div class="item">
                    <div class="training-wrapper">
                        <h1>Inquiry-Based Approach</h1>
                        <h2>Students learn better when they <strong>ask for it!</strong> Our teaching approach is to let the students ask first in order to be interested in the answer.</h2>
                    </div>
                </div>

                <div class="item">
                    <div class="training-wrapper">
                        <h1>Convenient Location</h1>
                        <h2>Crescent Academy is conveniently located in the heart of Orange County close to the intersection of I-5 and CA-405 in the city of Irvine.</h2>
                    </div>
                </div>

            </div>
        </section><!-- projectTraining ends -->

<!-- ================================= Enroll Now ================================= -->

        <section class="enrollnow">
            <div class="container">
                <h1>Space is Limited. Apply Now!</h1>
                <a href="apply.html" class="cta">APPLY NOW <img src="images/btn-arrow-big.png"></a>
            </div>
        </section>

<!-- ================================= Footer ================================= -->

        <footer class="siteFooter">
            <div class="container">
                 <div class="footer-wrapper clearfix">
                    <div class="footerBlock small-w">
                        <h1>Stages</h1>
                        <ul>
                            <li><a href="early-childhood.html">Pre-K &amp; K</a></li>
                            <li><a href="elementary.html">Elementary</a></li>
                            <li><a href="middle.html">Middle</a></li>
                            <li><a href="high.html">High</a></li>
                        </ul>
                    </div> <!-- block ends -->

                    <div class="footerBlock small-w">
                        <h1>Info</h1>
                        <ul>
                            <li><a href="apply.html">Apply</a></li>
                            <li><a href="calendar.html">Calendar</a></li>
                            <li><a href="faqs.html">FAQs</a></li>
                            <li><a href="news.html">News</a></li>

                        </ul>
                    </div> <!-- block ends -->

                    <div class="footerBlock small-w">
                        <h1>Academy</h1>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="careers.html">Careers</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                    </div> <!-- block ends -->

                    <div class="social-wrapper">
                        <ul class="social-list">
                            <li><a href="http://fb.com/crescentacademe" target="_blank"><img src="images/icon-facebook.png"></a></li>
                            <li><a href="http://twitter.com/crescentacademe" target="_blank"><img src="images/icon-twitter.png"></a></li>
                            <li><a href="https://www.instagram.com/crescentacademy/" target="_blank"><img src="images/icon-instagram.png"></a></li>
                            <li><a href="http://www.pinterest.com/crescentacademy/" target="_blank"><img src="images/icon-pinterest.png"></a></li>
                            <li><a href="https://www.youtube.com/channel/UC1WIKtDSVGw-_oYbCN31kCg" target="_blank"><img src="images/icon-youtube.png"></a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- container ends -->

            <section class="copyrights">
                <p>Copyright &copy; 2017 <a href="about.html">Crescent Academies LLC.</a> All rights reserved | <a href="Privacy-Policy.html">Privacy Policy</a> | <a href="terms-of-service.html">Terms of Service</a></p>
            </section>
        </footer>
<style>
.error{
	
	float: left;
    margin-top: 15px;
    position: relative;
    width: 100%;
	color:red
}
.success{
	
	float: left;
    margin-top: 15px;
    position: relative;
    width: 100%;
	color:green;
}
</style>
<!--  ================================= jQuery 1.7+ =================================  -->

        <script src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		<script src="js/CustomGoogleMapMarker.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/jquery.fadethis.js"></script>
		<script src="js/jquery.vide.js"></script>
        <script src="js/responsivemultimenu.js"></script>
        <script src="js/custom.js"></script>
		<script>
			$(document).ready(function() {
				$(window).fadeThis({
					speed: 1000,
					reverse: false,
				});
			});
		</script>
	    <script type="text/javascript">
			function initialize() {

				var myLatlng = new google.maps.LatLng(33.652738,-117.7480227);
				var mapOptions = {
					zoom: 16,
					center: myLatlng,
					disableDefaultUI: true
				}
				
				var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
				
				/*
				// Example standard marker
				var marker = new google.maps.Marker({
					position: myLatlng,
					map: map,
					title: 'Hello World!'
				});
				*/
				
				overlay = new CustomMarker(
					myLatlng, 
					map,
					{
						marker_id: '123'
					}
				);
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>  

    </body>
</html>
