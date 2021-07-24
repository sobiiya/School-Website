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
			<img src="img/onlinecourse.jpg" alt="" class="fadeInUp">
				<div class="container">
					
					<!-- <h1 class="fadeInUp"><span></span>Online courses</h1> -->
				</div>
			</div>
		</section>
            <section class="row-p">
               <div class="container">
                  <div class="row ">
                     <div class="col-lg-7 col-md-8 col-sm-12">
                        <div class="payment-div">
                           <h2 >Payment</h2>
                           <h6 class="payment-subheading">Course > Payment</h6>
                           <form>
                            <label for="exampleInputEmail1">Contact Information</label>
                              <div class="form-row">
                              <div class="form-group col-lg-6">
                            
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
                            <small id="emailHelp"  class="form-text text-muted"></small>
                         </div>
                         <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputAddress" placeholder="Phone">
                         </div>
                              </div>                         
                       
                              <div class="form-group form-check">
                                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                 <label class="form-check-label" for="exampleCheck1">Keep me upto date on new and exclusive</label>
                              </div>
                              <div class="form-group">
                                 <input type="text" class="form-control" id="inputAddress" placeholder="Address1">
                              </div>
                              <div class="form-group">
                                 <input type="text" class="form-control" id="inputAddress2" placeholder="Address2">
                              </div>
                              <div class="form-row">
                                 <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                 </div>
                                 <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                       <option selected>Choose...</option>
                                       <option>...</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                 </div>
                              </div>
                             
                              <!-- <div>
                                 <label for="inputCity">Payment Method</label>
                                 </div> -->
                              <h4>Select Payment Method</h4>
                                <!-- <div> -->
                             
                                <div class=>
                                    <input type="radio" name="choice-animals" id="choice-animals-cats">
                                    <label for="choice-animals-cats">Add Debit/Credit/ATM Card</label>
                                    <div class="reveal-if-active">
                                       <label for="validationTooltip04"></label>
                                       <div class="form-row">
                                                <div class="col-md-6 mb-3  col-lg-6 ">
                                                    <label for="validationDefault01">Name on Card</label>
                                                    <input type="text" class="form-control " id="validationDefault01"  required>
                                                </div>
                                                <div class="col-md-6 mb-3 col-lg-6">
                                                    <label for="validationDefault02">Card Number</label>
                                                    <input type="text" class="form-control " id="validationDefault02"  required>
                                                </div>
                                              
                                                <!-- <div class="col-md-6 mb-3 col-lg-2">
                                                    <button type="submit" class="btn btn-primary add-card-btn">Add your Card</button> 
                                                </div> -->
                                                <div class="col-md-6 mb-3 col-lg-3">
                                                    <label for="validationDefault02">Expiry Date</label>
                                                    <input type="month" id="start" name="start"
                                                    min="" value="" class="form-field exp-f">
                                                </div>
                                            </div>
                                    </div>
                                 </div>
                                 <div>
                                    <input type="radio" name="choice-animals" id="choice-animals-cats">
                                    <label for="choice-animals-cats">Net Banking</label>
                                    <div class="reveal-if-active">
                                       <label for="validationTooltip04"></label>
                                       <select class="custom-select" id="validationTooltip04" required>
                                          <option selected disabled value="">Choose...</option>
                                          <option>...</option>
                                       </select>
                                       <div class="invalid-tooltip">
                                          Please select a valid Bank.
                                       </div>
                                    </div>
                                 </div>
                                 <div>
                                    <input type="radio" name="choice-animals" id="choice-animals-cats">
                                    <label for="choice-animals-cats">Other UPI App</label>
                                    <div class="reveal-if-active">
                                        <div class="form-row"> 
                                            <div class="col-lg-6">
                                            <label for="validationTooltip04"></label>
                                       <input type="text" class="form-control " placeholder="Ex.Mobilenumber@Upi" id="validationDefault01"  required>
                                            </div class="col-lg-6">
                                    
                                                <button type="submit" class="btn btn-primary btn-v">Verify</button> 
                                        </div>
                                   
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                        Save The Information for Next Time
                                        </label>
                                    </div>
                                        <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                                    </div>
                                </div>     
                              <!-- <div>
                                 <input type="submit" value="Submit">
                                 </div> -->
                          
                            </form>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
					      <div class="box_grid wow wow1">
						      <figure class="block-reveal">
							      <div class="block-horizzontal"></div>
							         <a href="#0" class="wish_bt"></a>
							         <a href="course-detail.html"><img src="img/school-10.jpg" class="img-fluid" alt=""></a>
							         <div class="price">$54</div>
							         <div class="preview"><span>Preview course</span></div>
						      </figure>
						      <div class="wrapper">
							      <small>Category</small>
							         <h3>Exploring Everyday Chemistry</h3>
							         <p>Explore the organic chemistry behind perfume, medicine, brewing and sport from one of the UK's leading universities</p>
							         <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						      </div>
						      <ul>
							      <li><i class="icon_clock_alt"></i> 1h 30min</li>
							      <li><i class="icon_like"></i> 890</li>
							      <!-- <li><a href="course-detail.html">Enroll now</a></li> -->
						      </ul>
					      </div>
				         </div>
                     </div>
                  
                 
                  </div>
               </div>
            </section>
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
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
   </body>
</html>