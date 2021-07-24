<!DOCTYPE html>
<html lang="en">

<head>
    
<?php include('include/head.php') ?>

<style>
 
    accordion dl,
.accordion-list {
  border: 1px solid #ddd;
}
.accordion dl:after,
.accordion-list:after {
  content: "";
  display: block;
  height: 1em;
  width: 100%;
  /*background-color: #2ba659;*/
}

.accordion dd,
.accordion__panel {
  background-color: #fffe;
  font-size: 1em;
  line-height: 1.5em;
}

.accordion p {
  padding: 1em 2em 1em 2em;
}

.accordion {
  position: relative;
  background-color: #eee;
}
.rules-conts{
    margin-top: 15px;
}

/*.container {
  max-width: 960px;
  margin: 0 auto;
  padding: 2em 0 2em 0;
}*/

.accordionTitle,
.accordion__Heading {
  background-color: #f5f5fe;
  text-align: center;
  font-weight: 700;
  padding: 2em;
  display: block;
  text-decoration: none;
  color: #333;
  transition: background-color 0.5s ease-in-out;
  border-bottom: 1px solid #835bfd;
}
.accordionTitle:before,
.accordion__Heading:before {
  content: "+";
  font-size: 2.5em;
  line-height: 0.5em;
  color: #480048;
  float: left;
  transition: transform 0.3s ease-in-out;
}
.accordionTitle:hover,
.accordion__Heading:hover {
  background-color: #7042fc;
}

.accordionTitleActive,
.accordionTitle.is-expanded {
  background-color: #C04848;
}
.accordionTitleActive:before,
.accordionTitle.is-expanded:before {
  transform: rotate(-225deg);
}

.accordionItem {
  height: auto;
  overflow: hidden;
  max-height: 50em;
  transition: max-height 1s;
}
@media screen and (min-width: 48em) {
  .accordionItem {
    max-height: 15em;
    transition: max-height 0.5s;
  }
}

.accordionItem.is-collapsed {
  max-height: 0;
}

.no-js .accordionItem.is-collapsed {
  max-height: auto;
}

.animateIn {
  -webkit-animation: accordionIn 0.45s normal ease-in-out both 1;
          animation: accordionIn 0.45s normal ease-in-out both 1;
}

.animateOut {
  -webkit-animation: accordionOut 0.45s alternate ease-in-out both 1;
          animation: accordionOut 0.45s alternate ease-in-out both 1;
}

@-webkit-keyframes accordionIn {
  0% {
    opacity: 0;
    transform: scale(0.9) rotateX(-60deg);
    transform-origin: 50% 0;
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}

@keyframes accordionIn {
  0% {
    opacity: 0;
    transform: scale(0.9) rotateX(-60deg);
    transform-origin: 50% 0;
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}
@-webkit-keyframes accordionOut {
  0% {
    opacity: 1;
    transform: scale(1);
  }
  100% {
    opacity: 0;
    transform: scale(0.9) rotateX(-60deg);
  }
}
@keyframes accordionOut {
  0% {
    opacity: 1;
    transform: scale(1);
  }
  100% {
    opacity: 0;
    transform: scale(0.9) rotateX(-60deg);
  }
}


</style>

</head>

<body>
        
    <div id="page">
        
    <?php include('include/header.php') ?>
    
    <main>
        <section class="hero_single version_2">
            <div class="wrapper">
            <img src="img/rules.jpg" alt="">
            <!--    <div class="container">
                    <h3>What would you learn?</h3>
                    <p>Increase your expertise in business, technology and personal development</p>
                    <form>
                        <div id="custom-search-input">
                            <div class="input-group">
                                <input type="text" class=" search-query" placeholder="Ex. Architecture, Specialization...">
                                <input type="submit" class="btn_search" value="Search">
                            </div>
                        </div>
                    </form>
                </div> -->
            </div>
        </section>
        <!-- /hero_single -->

       <div class="container rules-conts">
          <!-- <h1 class="heading-primary">Keywords:</h1> -->
          <div class="accordion">
            <dl>
              <dt>
                <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">Rule 1</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
                <p>The last day of uncharged storage time for a container to clear customs and be picked up from the terminal (varies by terminal, carrier, and forwarder). </p>
                <p>Also, the last day of uncharged use of a container.</p>
              </dd>
              <dt>
                <a href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="accordion-title accordionTitle js-accordionTrigger">
                  Rule 2</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true">
                <p>Storage charge by the equipment owner (typically the carrier) for containers remaining at the terminal after the last free day. Charges per day generally increase over time.</p>
              </dd>
              <dt>
                <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  Rule 3</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                <p>Similar to demurrage but charged by the terminal instead of the equipment owner. A container in a shipment can incur all of demurrage, <a href="https://www.shippingandfreightresource.com/difference-between-storage-and-demurrage/">port storage</a> and detention charges.</p>
                <dt>
                <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  Rule 4
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                <p>Usage charge by the equipment owner (typically the carrier) for late return of containers.</p>
                <dt>
                <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  Rule 5
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                <p>Another form of detention, being an hourly rate fee applied by trucking companies after a given free time for loading or unloading at pickup or delivery.</p>
                <dt>
                <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  Rule 6
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                <p>A charge for storing a container at a yard, typically near the port or importer’s distribution center. The storage charge (also known as ground or quay rent) is cheaper than port storage or demurrage but will not avoid detention fees.</p>
              </dd>
            </dl>
          </div>
        </div>
      
    </main>
    <!-- /main -->
    <?php include('include/footer.php') ?>
    
    </div>
    <!-- page -->
    
    <!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
    <script src="assets/validate.js"></script>
    
    <script>
        
       //uses classList, setAttribute, and querySelectorAll
//if you want this to work in IE8/9 youll need to polyfill these
(function(){
    var d = document,
    accordionToggles = d.querySelectorAll('.js-accordionTrigger'),
    setAria,
    setAccordionAria,
    switchAccordion,
  touchSupported = ('ontouchstart' in window),
  pointerSupported = ('pointerdown' in window);
  
  skipClickDelay = function(e){
    e.preventDefault();
    e.target.click();
  }

        setAriaAttr = function(el, ariaType, newProperty){
        el.setAttribute(ariaType, newProperty);
    };
    setAccordionAria = function(el1, el2, expanded){
        switch(expanded) {
      case "true":
        setAriaAttr(el1, 'aria-expanded', 'true');
        setAriaAttr(el2, 'aria-hidden', 'false');
        break;
      case "false":
        setAriaAttr(el1, 'aria-expanded', 'false');
        setAriaAttr(el2, 'aria-hidden', 'true');
        break;
      default:
                break;
        }
    };
//function
switchAccordion = function(e) {
  console.log("triggered");
    e.preventDefault();
    var thisAnswer = e.target.parentNode.nextElementSibling;
    var thisQuestion = e.target;
    if(thisAnswer.classList.contains('is-collapsed')) {
        setAccordionAria(thisQuestion, thisAnswer, 'true');
    } else {
        setAccordionAria(thisQuestion, thisAnswer, 'false');
    }
    thisQuestion.classList.toggle('is-collapsed');
    thisQuestion.classList.toggle('is-expanded');
        thisAnswer.classList.toggle('is-collapsed');
        thisAnswer.classList.toggle('is-expanded');
    
    thisAnswer.classList.toggle('animateIn');
    };
    for (var i=0,len=accordionToggles.length; i<len; i++) {
        if(touchSupported) {
      accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
    }
    if(pointerSupported){
      accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
    }
    accordionToggles[i].addEventListener('click', switchAccordion, false);
  }
})();

    </script>


</body>
</html>