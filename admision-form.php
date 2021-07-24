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

    <section id="hero_in" class="courses">
      <div class="wrapper">
      <img src="img/course-banner.jpg" alt="" class="fadeInUp">
        <div class="container">
          
          <!-- <h1 class="fadeInUp"><span></span>Online courses</h1> -->
        </div>
      </div>
    </section>




        <div id="svg_wrap"></div>

           <h1>Online Application</h1>
          <section>
            <p>Personal information</p>
            <input type="text" placeholder="Firstname" />
            <input type="text" placeholder="Surname" />
            <input type="text" placeholder="Birthdate" />
            <input type="text" placeholder="Insurance number" />
            <input type="text" placeholder="Family status" />
          </section>

          <section>
            <p>Address</p>
            <input type="text" placeholder="Street, nbr" />
            <input type="text" placeholder="City" />
            <input type="text" placeholder="Postcode" />
            <input type="text" placeholder="Country" />
          </section>

          <section>
            <p>Contact information</p>
            <input type="text" placeholder="Email address" />
            <input type="text" placeholder="Phone" />
            <input type="text" placeholder="Mobile" />
          </section>

          <section>
            <p>Application</p>
            <input type="text" placeholder="Preferred entrance date" />
            <input type="text" placeholder="Number of people" />
          </section>

          <section>
            <p>General condtitions</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </section>

            <div class="button" id="prev">&larr; Previous</div>
          <div class="button" id="next">Next &rarr;</div>
          <div class="button" id="submit">Agree and send application</div>



		<!-- /bg_color_1 -->
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
    <script src="https://kit.fontawesome.com/9b75ea7bc9.js" crossorigin="anonymous"></script>

     <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
      
<script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js'></script>
     <script  src="./script.js"></script>
      <script>
        $( document ).ready(function() {
var base_color = "rgb(230,230,230)";
var active_color = "rgb(237, 40, 70)";



var child = 1;
var length = $("section").length - 1;
$("#prev").addClass("disabled");
$("#submit").addClass("disabled");

$("section").not("section:nth-of-type(1)").hide();
$("section").not("section:nth-of-type(1)").css('transform','translateX(100px)');

var svgWidth = length * 200 + 24;
$("#svg_wrap").html(
  '<svg version="1.1" id="svg_form_time" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 ' +
    svgWidth +
    ' 24" xml:space="preserve"></svg>'
);

function makeSVG(tag, attrs) {
  var el = document.createElementNS("http://www.w3.org/2000/svg", tag);
  for (var k in attrs) el.setAttribute(k, attrs[k]);
  return el;
}

for (i = 0; i < length; i++) {
  var positionX = 12 + i * 200;
  var rect = makeSVG("rect", { x: positionX, y: 9, width: 200, height: 6 });
  document.getElementById("svg_form_time").appendChild(rect);
  // <g><rect x="12" y="9" width="200" height="6"></rect></g>'
  var circle = makeSVG("circle", {
    cx: positionX,
    cy: 12,
    r: 12,
    width: positionX,
    height: 6
  });
  document.getElementById("svg_form_time").appendChild(circle);
}

var circle = makeSVG("circle", {
  cx: positionX + 200,
  cy: 12,
  r: 12,
  width: positionX,
  height: 6
});
document.getElementById("svg_form_time").appendChild(circle);

$('#svg_form_time rect').css('fill',base_color);
$('#svg_form_time circle').css('fill',base_color);
$("circle:nth-of-type(1)").css("fill", active_color);

 
$(".button").click(function () {
  $("#svg_form_time rect").css("fill", active_color);
  $("#svg_form_time circle").css("fill", active_color);
  var id = $(this).attr("id");
  if (id == "next") {
    $("#prev").removeClass("disabled");
    if (child >= length) {
      $(this).addClass("disabled");
      $('#submit').removeClass("disabled");
    }
    if (child <= length) {
      child++;
    }
  } else if (id == "prev") {
    $("#next").removeClass("disabled");
    $('#submit').addClass("disabled");
    if (child <= 2) {
      $(this).addClass("disabled");
    }
    if (child > 1) {
      child--;
    }
  }
  var circle_child = child + 1;
  $("#svg_form_time rect:nth-of-type(n + " + child + ")").css(
    "fill",
    base_color
  );
  $("#svg_form_time circle:nth-of-type(n + " + circle_child + ")").css(
    "fill",
    base_color
  );
  var currentSection = $("section:nth-of-type(" + child + ")");
  currentSection.fadeIn();
  currentSection.css('transform','translateX(0)');
 currentSection.prevAll('section').css('transform','translateX(-100px)');
  currentSection.nextAll('section').css('transform','translateX(100px)');
  $('section').not(currentSection).hide();
});

});
      </script>
</body>
</html>