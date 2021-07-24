<!DOCTYPE html>
<html>
<head>

<?php include('include/head.php')?>

</head>
<body>
		<?php include('include/header.php') ?>
	
		<section id="hero_in" class="contacts">
		
			<div class="wrapper">
			<img src="img/contact-us.jpg" alt="" >
		
			</div>
		</section>
	<div class="form-container">
		<form id="form1">
			<h3 class="ad-fm-h3">ADMISSION 1/3</h3>
			<input class="ad-fm-ip" type="text" name="" placeholder="First Name" required="">
			<input class="ad-fm-ip" type="text" name="" placeholder="Last Name" required="">
			<input class="ad-fm-ip" type="text" name="" placeholder="Email" required="">
			<input class="ad-fm-ip" type="tel" name="" placeholder="Your Telephone" required="">
			<input class="ad-fm-ip" type="tel" name="" placeholder="Age" required="">
			 <select class="ad-fm-sel" name="Grade" id="cur-grade">
			    <option value="nursery">Current Grade Of The Student*</option>
			    <option value="kindergarden">Kindergarden</option>
			    <option value="nursery">Nursery</option>
			    <option value="seniorkg">Senior Kg</option>
			    <option value="grade-1">Grade 1</option>
			    <option value="grade-2">Grade 2</option>
			    <option value="grade-3">Grade 3</option>
			    <option value="grade-4">Grade 4</option>
			    <option value="grade-5">Grade 5</option>
			    <option value="grade-6">Grade 6</option>
			    <option value="grade-7">Grade 7</option>
			    <option value="grade-8">Grade 8</option>
			    <option value="grade-9">Grade 9</option>
			    <option value="grade-10">Grade 10</option>
			    <option value="jrClg">Junior College</option>

			  </select>
			
			 <select class="ad-fm-sel" name="Grade" id="app-grade">
			    <option value="nursery">Grade Applying For*</option>
			    <option value="kindergarden">Kindergarden</option>
			    <option value="nursery">Nursery</option>
			    <option value="seniorkg">Senior Kg</option>
			    <option value="grade-1">Grade 1</option>
			    <option value="grade-2">Grade 2</option>
			    <option value="grade-3">Grade 3</option>
			    <option value="grade-4">Grade 4</option>
			    <option value="grade-5">Grade 5</option>
			    <option value="grade-6">Grade 6</option>
			    <option value="grade-7">Grade 7</option>
			    <option value="grade-8">Grade 8</option>
			    <option value="grade-9">Grade 9</option>
			    <option value="grade-10">Grade 10</option>
			    <option value="jrClg">Junior College</option>

			  </select>

			  <div>
			  	<input class="ad-fm-rd" type="radio" id="male" name="gender" value="male">
  				<label for="male">Male</label>
  				<input class="ad-fm-rd" type="radio" id="female" name="gender" value="female">
  				 <label for="female">Female</label>
			  </div>

			<div class="btn-box">
				<button class="ad-fm-btn" type="button" id="next1">Next</button>
			</div>
		</form>


		<form id="form2">
			<h3 class="ad-fm-h3">ADMISSION 2/3</h3>
			<input class="ad-fm-ip" type="text" name="" placeholder="Address">
			<input class="ad-fm-ip" type="text" name="" placeholder="City">
			<input class="ad-fm-ip" type="text" name="" placeholder="Pin Code">
			<input class="ad-fm-ip" type="text" name="" placeholder="State">
			
			
			<div class="btn-box">
				<button class="ad-fm-btn" type="button" id="back1">Back</button>
				<button class="ad-fm-btn" type="button" id="next2">Next</button>
			</div>
		</form>

		<form id="form3">
			<h3 class="ad-fm-h3">PERSONAL INFO</h3>
			<input class="ad-fm-ip" type="text" name="" placeholder="First Name" required="">
			<input class="ad-fm-ip" type="text" name="" placeholder="Last Name" required="">
			<input class="ad-fm-ip" type="tel" name="" placeholder="Relationship To Application*" required="">
			<input class="ad-fm-ip" type="text" name="" placeholder="Educational Qualification">
			<input class="ad-fm-ip" type="text" name="" placeholder="Occupation">

			
			
			<div class="btn-box">
				<button class="ad-fm-btn" type="button" id="back2">Back</button>
				<button class="ad-fm-btn" type="button">Submit</button>
			</div>
		</form>

		<div class="step-row">
			<div id="progess"></div>
			<div class="step-col"><small>Step 1</small></div>
			<div class="step-col"><small>Step 2</small></div>
			<div class="step-col"><small>Step 3</small></div>
		</div>

	</div>
	<?php include('include/footer.php') ?>

	<!-- /main -->

	


	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>

	<!-- <script>
		var Form1 = document.getElementById("form1");
		 var Form2 = document.getElementById("form2");
		 var Form3 = document.getElementById("form3");

		 var Next1 = document.getElementById("next1");
		 var Next2 = document.getElementById("next2");
		 var Back1 = document.getElementById("back1");
		 var Back2 = document.getElementById("back2");

		 var Progress = document.getElementById("progess");


		 Next1.onclick = function(){
		 	Form1.style.left = "-450px";
		 	Form2.style.left = "40px";
		 	Progress.style.width ="240px";

		 }

		 Back1.onclick = function(){
		 	Form1.style.left = "40px";
		 	Form2.style.left = "-450px";
		 	Progress.style.width ="120px";

		 }

		 Next2.onclick = function(){
		 	Form2.style.left = "-450px";
		 	Form3.style.left = "40px";
		 	Progress.style.width ="360px";

		 }

		 Back2.onclick = function(){
		 	Form2.style.left = "40px";
		 	Form3.style.left = "-450px";
		 	Progress.style.width ="240px";

		 }
	</script> -->

<script>
if (screen && screen.width > 479) {
document.write('<script type="text/javascript" src="js/desktop.js"><\/script>');
}
</script>

<script>
if (screen && screen.width < 479) {
document.write('<script type="text/javascript" src="js/mobile.js"><\/script>');
}
</script>

</body>
</html>