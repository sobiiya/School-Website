<!DOCTYPE html>
<html lang="en">

<head>
<?php include('include/head.php') ?>

</head>

<body>
	
	<div id="page">
		
			
	<?php include('include/header.php') ?>
	<!-- /header -->
	
	<main>
		<section id="hero_in" class="contacts">
		
			<div class="wrapper">
			<img src="img/contact-us.jpg" alt="" >
		
			</div>
		</section>
		<!--/hero_in-->

		<div class="contact_info">
			<div class="container">
				<ul class="clearfix">
					<li>
						<i class="pe-7s-map-marker"></i>
						<h4>Address</h4>
						<span>PO Box 97845 Baker st. 567, Los Angeles<br>California - US.</span>
					</li>
					<li>
						<i class="pe-7s-mail-open-file"></i>
						<h4>Email address</h4>
						<span>admission@udema.com - info@udema.com<br></span>

					</li>
					<li>
						<i class="pe-7s-phone"></i>
						<h4>Contacts info</h4>
						<span>+ 61 (2) 8093 3402 + 61 (2) 8093 3402<br></span>
					</li>
				</ul>
			</div>
		</div>
		<!--/contact_info-->

		<div class="bg_color_1">
			<div class="container margin_120_95">
				<div class="row justify-content-between">
					<div class="col-lg-5">
						<div class="contact-info">
							<img src="img/school-logo.png" alt="">
							<!-- <p>A School of the Sacred Heart</p> -->
							<ul >
								<li class="icon-contact"><a href="#0"><i class="ti-facebook " id="icon-c"></i></a></li>
								<li class="icon-contact"><a href="#0"><i class="ti-twitter-alt " id="icon-c"></i></a></li>
								<li class="icon-contact"><a href="#0"><i class="fab fa-youtube " id="icon-c"></i></i></a></li>
							</ul>
							<h4 class="contact-heading">School Time</h4>
							<div class="contact-div1">
								<h5>Pre-Primary School</h5>
								<p><i class="far fa-clock i-con"></i>Monday – Friday 11:30am to 2:30pm</p>
							</div>				

							<div class="contact-div1">
								<h5>Primary School</h5>
								<p><i class="far fa-clock i-con"></i>Monday – Friday 7:30am to 12:30pm</p>
							
								<!-- <hr> -->
							</div>
							<div class="contact-div1">
											
								<h5>Secondary School</h5>
								<p><i class="far fa-clock i-con"></i>Monday – Friday 12:45am to 5:45pm</p>
								<!-- <hr> -->
							</div>
							<div class="contact-div1">
								<h5>Office Hours</h5>
								<p><i class="far fa-clock i-con"></i>Monday – Friday 8am to 4pm</p>
								<!-- <hr> -->
							</div>
						
						
						
						</div>
					</div>
					<div class="col-lg-6">
						<h4>Send a message</h4>
						<p>Ex quem dicta delicata usu, zril vocibus maiestatis in qui.</p>
						<div id="message-contact"></div>
						<form method="post" action="assets/contact.php" id="contactform" autocomplete="off">
							<div class="row">
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text" id="name_contact" name="name_contact">
										<label class="input_label">
											<span class="input__label-content">Your Name</span>
										</label>
									</span>
								</div>
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text" id="lastname_contact" name="lastname_contact">
										<label class="input_label">
											<span class="input__label-content">Last name</span>
										</label>
									</span>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="email" id="email_contact" name="email_contact">
										<label class="input_label">
											<span class="input__label-content">Your email</span>
										</label>
									</span>
								</div>
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text" id="phone_contact" name="phone_contact">
										<label class="input_label">
											<span class="input__label-content">Your telephone</span>
										</label>
									</span>
								</div>
							</div>
							<!-- /row -->
							<span class="input">
									<textarea class="input_field" id="message_contact" name="message_contact" style="height:150px;"></textarea>
									<label class="input_label">
										<span class="input__label-content">Your message</span>
									</label>
							</span>
							<span class="input">
									<input class="input_field" type="text" id="verify_contact" name="verify_contact">
									<label class="input_label">
									<span class="input__label-content">Are you human? 3 + 1 =</span>
									</label>
							</span>
							<p class="add_top_30"><input type="submit" value="Submit" class="btn_1 rounded" id="submit-contact"></p>
						</form>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->

	
	</main>
	<!--/main-->

	

	<!--/footer-->
	</div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.2664951917386!2d72.832399214379!3d19.22721405219955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b1312f518933%3A0xf82b36cabf24b545!2sOrchids%20The%20International%20School%2C%20Borivali!5e0!3m2!1sen!2sin!4v1612943297657!5m2!1sen!2sin"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="contact-map"></iframe>
	<!-- page -->
	<?php include('include/footer.php') ?>
	
	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
	<script type="text/javascript" src="js/mapmarker.jquery.js"></script>
	<script type="text/javascript" src="js/mapmarker_func.jquery.js"></script>

	<script src="https://kit.fontawesome.com/9b75ea7bc9.js" crossorigin="anonymous"></script>
</body>
</html>