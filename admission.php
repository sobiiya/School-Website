<!DOCTYPE html>
<html lang="en">

<head>
<?php include('include/head.php') ?>

<style type="text/css">
	#form_container {
    height: 100vh;
    background-color: #fff;
     margin: 0; 
    width: 553px;
    -webkit-box-shadow: 0px 0px 60px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 0px 60px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 0px 60px 0px rgba(0, 0, 0, 0.3);
}
</style>
</head>

<body id="admission_bg">
	
	
	
	<!-- <div id="preloader">
		<div data-loader="circle-side"></div>
	</div> -->
	<!-- End Preload -->


	
	<div id="form_container" class="clearfix">
		<figure>
			<a href="index.php"><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
		</figure>
		<div id="wizard_container">
			<div id="top-wizard">
				<div id="progressbar"></div>
			</div>
			<!-- /top-wizard -->
			<form name="example-1" id="wrapped" method="POST">
				<input id="website" name="website" type="text" value="">
				<!-- Leave for security protection, read docs for details -->
				<div id="middle-wizard">
					<div class="step">
						<div id="intro">
							<figure><img src="img/wizard_intro_icon.svg" alt=""></figure>
							<h1>Admission Apply</h1>
							<p>Oberoi International School is dedicated to fulfilling every child’s educational and developmental needs in a safe and caring environment conducive to learning and teaching.  </p>
							<p><strong>We strive to ensure that every child in our care is empowered to make choices and encouraged to contribute to our community.</strong></p>
						</div>
					</div>

					<div class="step">
						<h3 class="main_question"><strong>1/3</strong>Please fill with your details</h3>
						<div class="form-group">
							<input type="text" name="firstname" class="form-control required" placeholder="First name">
						</div>
						<div class="form-group">
							<input type="text" name="lastname" class="form-control required" placeholder="Last name">
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control required" placeholder="Your Email">
						</div>
						<div class="form-group">
							<input type="text" name="telephone" class="form-control" placeholder="Your Telephone">
						</div>
						<div class="form-group">
							<input type="text" name="age" class="form-control" placeholder="Age">
						</div>
						<div class="form-group select">
							<div class="styled-select">
								<select class="required" name="education_apply" id="education_apply">
									<option value="" selected="">Grade Applying For*</option>
									<option value="Kindergarten">Kindergarten</option>
									<option value="Nursery">Nursery</option>
									<option value="Senior Kg">Senior Kg</option>
									<option value="Grade 1">Grade 1</option>
									<option value="Grade 2">Grade 2</option>
									<option value="Grade 3">Grade 3</option>
									<option value="Grade 4">Grade 4</option>
									<option value="Grade 5">Grade 5</option>
									<option value="Grade 6">Grade 6</option>
									<option value="Grade 7">Grade 7</option>
									<option value="Grade 8">Grade 8</option>
									<option value="Grade 9">Grade 9</option>
									<option value="Grade 10">Grade 10</option>
									<option value="Junior College">Junior College</option>

								</select>
							</div>
						</div>

							<div class="form-group select">
							<div class="styled-select">
								<select class="required" name="education_apply" id="education_apply">
									<option value="" selected="">Current Grade Of the Student*</option>
									<option value="Kindergarten">Kindergarten</option>
									<option value="Nursery">Nursery</option>
									<option value="Senior Kg">Senior Kg</option>
									<option value="Grade 1">Grade 1</option>
									<option value="Grade 2">Grade 2</option>
									<option value="Grade 3">Grade 3</option>
									<option value="Grade 4">Grade 4</option>
									<option value="Grade 5">Grade 5</option>
									<option value="Grade 6">Grade 6</option>
									<option value="Grade 7">Grade 7</option>
									<option value="Grade 8">Grade 8</option>
									<option value="Grade 9">Grade 9</option>
									<option value="Grade 10">Grade 10</option>
									<option value="Junior College">Junior College</option>

								</select>
							</div>
						</div>






						<div class="form-group radio_input">
							<label><input type="radio" value="Male" checked name="gender" class="icheck">Male</label>
							<label><input type="radio" value="Female" name="gender" class="icheck">Female</label>
						</div>
					</div>
					<!-- /step-->

					<div class="step">
						<h3 class="main_question"><strong>2/3</strong>Please fill your address</h3>
						<div class="form-group">
							<input type="text" name="address" class="form-control required" placeholder="Address">
						</div>
						<div class="form-group">
							<input type="text" name="city" class="form-control required" placeholder="City">
						</div>
						<div class="form-group">
							<input type="text" name="zip_code" class="form-control required" placeholder="Zip code">
						</div>
						<div class="form-group">
							<div class="styled-select">
								<select class="required" name="country">
									<option value="" selected>Select your state</option>
									<option value="Europe">Maharashtra</option>
									<option value="Asia">Gujrat</option>
									<option value="North America">Goa</option>
									<option value="South America">Karnataka</option>
								</select>
							</div>
						</div>
					</div>
					<!-- /step-->

					

					<div class="submit step">
						<h3 class="main_question"><strong>3/3</strong>Guardian Details</h3>
						<!-- <div class="form-group radio_input">
							<label><input type="checkbox" value="Management" name="preferences[]" class="icheck">Management adn Business</label>
						</div> -->
						<div class="form-group">
							<input type="text" name="guardian" class="form-control" placeholder="First Name">
						</div>
						<div class="form-group">
							<input type="text" name="guardian" class="form-control" placeholder="Last Name">
						</div>
						<div class="form-group">
							<input type="text" name="guardian" class="form-control" placeholder="Relationship To Applicant*">
						</div>
						<div class="form-group">
							<input type="text" name="guardian" class="form-control" placeholder="Educational Qualification">
						</div>
						<div class="form-group">
							<input type="text" name="guardian" class="form-control" placeholder="Occupation">
						</div>
						<!-- <div class="form-group radio_input">
							<label><input type="checkbox" value="Art" name="preferences[]" class="icheck">Art: Impressionist</label>
						</div>
						<div class="form-group radio_input">
							<label><input type="checkbox" value="Litteratture" name="preferences[]" class="icheck">Litteratture: Poetry</label>
						</div>
						<div class="form-group radio_input">
							<label><input type="checkbox" value="Math" name="preferences[]" class="icheck">Math: 12 Principles</label>
						</div>
						<div class="form-group radio_input">
							<label><input type="checkbox" value="Architecture" name="preferences[]" class="icheck">Architecture</label>
						</div>
						<div class="form-group add_top_30">
							<textarea name="additional_message" class="form-control required" style="height:120px;" placeholder="Hello world....write your messagere here!"></textarea>
						</div> -->
						<div class="form-group terms">
							<input name="terms" type="checkbox" class="icheck required" value="yes">
							<label>Please accept <a href="#" data-toggle="modal" data-target="#terms-txt">terms and conditions</a> ?</label>
						</div>
					</div>
					<!-- /step-->
				</div>
				<!-- /middle-wizard -->
				<div id="bottom-wizard">
					<button type="button" name="backward" class="backward">Backward </button>
					<button type="button" name="forward" class="forward">Forward</button>
					<button type="submit" name="process" class="submit">Submit</button>
				</div>
				<!-- /bottom-wizard -->
			</form>
		</div>
		<!-- /Wizard container -->
	</div>
	<!-- /Form_container -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<?php include('include/footer.php')?>
	
	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main_admission.js"></script>
	<script src="assets/validate.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="js/jquery-ui-1.8.22.min.js"></script>
	<script src="js/jquery.wizard.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script src="js/admission_func.js"></script>
  
</body>
</html>