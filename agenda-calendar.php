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
		<section id="hero_in" class="general">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>My agenda</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="container margin_60_35">
			
			<div class="row">
				<div class="col-md-9">
					<div class="box_general">
						<div id="calendar"></div>
						<!-- End calendar -->
					</div>
				</div>
				<div class="col-md-3">
					<div id="external-events">
						<h5>Draggable Events</h5>
						<div class='external-event'><i class="icon_mug"></i> Coffe Break</div>
						<div class='external-event'><i class="icon_mic_alt"></i> Meeting</div>
						<div class='external-event'><i class="icon_easel"></i> Lesson</div>
						<div class='external-event'><i class="icon_pencil-edit"></i> Exam</div>
						<p><input type='checkbox' id='drop-remove'> <label for='drop-remove'>Remove after drop</label></p>
					</div>
				</div>
			</div>
			<!--/row-->
		</div>
		<!-- /container -->
	</main>
	<!--/main-->
	
	<?php include('include/footer.php') ?>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>
	
	<!-- SPECIFIC CALENDAR --> 
	<script src="js/moment.min.js"></script>
	<script src="js/jquery-ui.custom.min.js"></script>
	<script src="js/fullcalendar.min.js"></script>
	<script src="js/fullcalendar_func.js"></script>
	
</body>
</html>