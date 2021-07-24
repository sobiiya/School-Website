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

   <div class="naccs">
  <div class="grid">
   <div class="gc gc--1-of-3">
    <div class="menu">
     <div class="active"><span class="light"></span><span>Beer</span></div>
     <div><span class="light"></span><span>Wine</span></div>
     <div><span class="light"></span><span>Lemonade</span></div>
    </div>
   </div>
   <div class="gc gc--2-of-3">
    <ul class="nacc">
     <li class="new">
      <div class="new5 res-wdh">
        <h2 class="new4">Academic Approach</h2>
        <img src="img/acad1.jpg" class="new1">
       <p class="aca-p0">Beer is the world's oldest[1][2][3] and most widely consumed[4] alcoholic drink; it is the third most popular drink overall, after water and tea.[5] The production of beer is called brewing, which involves the fermentation of sugars, mainly derived
        from cereal grain starches—most commonly from malted barley, although wheat, maize (corn), and rice are widely used.[6] Most beer is flavoured with hops, which add bitterness and act as a natural preservative, though other flavourings such as
        herbs or fruit may occasionally be included. The fermentation process causes a natural carbonation effect, although this is often removed during processing, and replaced with forced carbonation.[7] Some of humanity's earliest known writings refer
        to the production and distribution of beer: the Code of Hammurabi included laws regulating beer and beer parlours.</p>
      </div>
     </li>
     <li class="new">
      <div class="new5 res-wdh">
        <h2 class="new4">Academic Approach</h2>
        <img src="img/acad1.jpg" class="new1">
       <p class="aca-p1">A vine (Latin vīnea "grapevine", "vineyard", from vīnum "wine") in the narrowest sense is the grapevine (Vitis), but more generally it can refer to any plant with a growth habit of trailing or scandent (that is, climbing) stems, lianas or runners.
        The word also can refer to such stems or runners themselves, for instance when used in wicker work.[1][2] In the United Kingdom, the term "vine" applies almost exclusively to the grapevine. The term "climber" is used for all climbing plants.[3]</p>
      </div>
     </li>
     <li class="new mb-3">
      <div class="new5 res-wdh">
        <h2 class="new4">Academic Approach</h2>
        <img src="img/acad1.jpg" class="new1">
       <p class="aca-p2">Lemonade is any of various sweetened beverages found around the world, all characterized by lemon flavor. Most lemonade varieties can be separated into two distinct types: cloudy and clear; each is known simply as "lemonade" (or a cognate) in countries
        where dominant.[1] Cloudy lemonade, generally found in North America and India, is a traditionally homemade drink made with lemon juice, water, and sweetener such as cane sugar or honey.[2] Found in the United Kingdom, Ireland, South Africa, Australia,
        and New Zealand, clear lemonade is a lemon flavoured carbonated soft drink. Not to be confused with Sprite a lemon-lime flavored, soft drink.</p>
      </div>
     </li>
    </ul>
   </div>
  </div>
 </div>
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

     <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script><script  src="./script.js"></script>
  <script>
    // Acc
$(document).on("click", ".naccs .menu div", function() {
    var numberIndex = $(this).index();

    if (!$(this).is("active")) {
        $(".naccs .menu div").removeClass("active");
        $(".naccs ul li").removeClass("active");

        $(this).addClass("active");
        $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

        var listItemHeight = $(".naccs ul")
            .find("li:eq(" + numberIndex + ")")
            .innerHeight();
        $(".naccs ul").height(listItemHeight + "px");
    }
});
  </script>
</body>
</html>