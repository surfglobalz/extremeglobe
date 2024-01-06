
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="GlobalNet">
        <link rel="icon" href="../../favicon.ico">

        <title>GlobalNet Internet Services</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/css/globalnet.css" rel="stylesheet">
        <link href="assets/css/contact.css" rel="stylesheet">

        <!-- Change reCAPTCHA appearance. -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    </head>
    <body>

        <!-- Wrapper for the whole page -->
        <div id="wrapper">

            <!-- Navbar -->
            <!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<style type="text/css">
</style>

<!-- Fixed navbar -->
<header id="page_header">
	<nav class="navbar fixed-top navbar-light bg-faded navbar-expand-md d-print-none">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://www.surfglobal.net/index.php"> <img
				src="https://www.surfglobal.net/assets/images/logo.png" alt="GlobalNet">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarCollapse" aria-controls="navbarCollapse"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
				<ul class="navbar-nav">
					<li class="nav-item active"><a class="nav-link" href="https://www.surfglobal.net/index.php">Home</a>
					</li>
					<li class="nav-item dropdown"><a class="nav-link" href="#"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Members
							<span class="caret"></span>
							</a>
						<ul class="dropdown-menu" role="menu">
							<li><a class="nav-link" href="https://www.surfglobal.net/support/login.php">Account Login</a></li>
							<li><a class="nav-link" href="https://www.surfglobal.net/blog/">Blog</a></li>
							<li><a class="nav-link"
								href="https://ds2.surfglobal.net/roundcube/" target="_blank">Email</a></li>
							<li><a class="nav-link" href="#">Support</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown"><a class="nav-link" href="#"
						data-toggle="dropdown" role="button"
						aria-expanded="false">Sales <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a class="nav-link" href="https://www.surfglobal.net/contact.php">Contact Us</a></li>
							<li><a class="nav-link" href="https://www.surfglobal.net/products/">Products</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>

            <!-- Content Part -->
            <div id="content">

                <div id="myMap" class="mapDisplay">
                    <!-- Google Map -->
                    <div id="googleMap" class="map"></div>
                    <!-- End Google Map -->
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-8">
                            <div id="contact-form" class="clearfix">
                                <h1>Contact Us</h1>
                                <h2>Please provide as much information as possible so that we may better help you.</h2>

                                
                                <ul id="errors" class="">
                                    <li id="info">There were some problems with your form submission:</li>
                                                                    </ul>
                                <p id="success" class="">Thanks for your message! We will get back to you ASAP!</p>

                                <form method="post" action="contact_process.php">
                                    <label for="name">Name: <span class="required">*</span></label>
                                    <input type="text" id="name" name="name" value="" placeholder="John Doe" required="required" autofocus="autofocus" />

                                    <label for="email">Email Address: <span class="required">*</span></label>
                                    <input type="email" id="email" name="email" value="" placeholder="johndoe@example.com" required="required" />

                                    <label for="telephone">Telephone: </label>
                                    <input type="tel" id="telephone" name="telephone" value="" />

                                    <label for="enquiry">Enquiry: </label>
                                    <select id="enquiry" name="enquiry">
                                        <option value="General" >General</option>
                                        <option value="Sales" >Sales</option>
                                        <option value="Support" >Support</option>
                                    </select>

                                    <label for="message">Message: <span class="required">*</span></label>
                                    <textarea id="message" name="message" placeholder="Your message must be greater than 20 charcters" required="required" data-minlength="20"></textarea>

                                    <!-- reCAPTCHA -->
                                    <label for="recaptcha">reCAPTCHA: <span class="required">*</span></label>
                                    <div class="g-recaptcha" data-sitekey="6LexvwMTAAAAAAjnbhzzzgzfgQHBf3wa1a9XlYio"></div>

                                    <span id="loading"></span>
                                    <input type="submit" value="Submit" id="submit-button" />
                                    <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
                                </form>
                                
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="contact-info">
                                <!-- Contacts -->
                                <div class="headline"><h2>Contacts</h2></div>
                                <ul class="list-unstyled who margin-bottom-30 contacts">
                                    <li><i class="fa fa-home"></i> 362 South Main Street<BR>&nbsp;&nbsp;&nbsp;&nbsp;Saint Albans, VT 05478</li>
                                    <li><a href="mailto:sales@surfglobal.net"><i class="fa fa-envelope"></i> sales@surfglobal.net</a></li>
                                    <li><i class="fa fa-phone"></i> 802-764-1304</li>
                                    <li><a href="https://www.surfglobal.net"><i class="fa fa-globe"></i> https://www.surfglobal.net</a></li>
                                </ul>

                                <!-- Business Hours -->
                                <div class="headline"><h2>Business Hours</h2></div>
                                <ul class="list-unstyled margin-bottom-30 business-hours">
                                    <li><strong>Monday-Friday:</strong> 8am to 4:30pm</li>
                                    <li><strong>Saturday:</strong> Closed</li>
                                    <li><strong>Sunday:</strong> Closed</li>
                                </ul>
                            </div>
                        </div><!--/col-md-4--> 
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!-- Footer -->
<footer class="d-print-none footer">
    <div class="container">
        <p class="footer-phonenumber">Call 802-764-1304 Today to Connect and Save!</p>
        <div class="footer-social-container center-col">
            <ul class="social-links">
                <li>Connect With Us On </li>
                <li><a href="https://www.facebook.com/globalnetinternetservices" target="_blank" title="Follow us on Facebook"><i class="bi bi-facebook"></i></a></li>
            </ul>
        </div>

        <p class="footer-copyright">
            &copy;1997-2024 GlobalNet Internet Services, Inc. &nbsp;All Rights Reserved. &nbsp;<a href="https://www.surfglobal.net/privacy_policy.php">Privacy Policy</a> | <a href="https://www.surfglobal.net/terms.php">Terms of Service</a>
        </p>
    </div> 
</footer>
<!-- End Footer -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- The bootstrap bundle includes Popper -->
<script src="https://www.surfglobal.net/assets/jquery/jquery-3.6.4.min.js"></script>
<script src="https://www.surfglobal.net/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/4bb3b8ec7f.js"></script>

<!-- Load any tooltips on the page. -->
<script>
	$(document).ready(function(){
    	$('[data-toggle="tooltip"]').tooltip({container: 'body'});
	});
</script>
          
        </div>

        <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyC9uys_PsH_04Tu5d1QovBr5Q8p04TCJC4&v=3.exp&libraries=places"></script>
        <script>
            var myCenter = new google.maps.LatLng(44.791203, -73.097564);

            function initialize() {
                var mapProp = {
                    center: myCenter,
                    zoom: 12,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                var marker = new google.maps.Marker({
                    position: myCenter
                });

                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body>
</html>
