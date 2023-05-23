<?php 
$title ='Blood sugar control Treatments by Dr Mayura Kale (Diabetologist) in Chatrapati Sambhaji Nagar, Maharashtra';
include("includes/header.php")?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blood sugar control for minor and major operations</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Services</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Breadcrumbs Section -->
    <!-- Consultant start -->
   <section class="Consultant ">
    <div class="container ">
      <!-- <div>
        <h1 class="text-primary text-center">Hyper Tension</h1>
        <hr/ class="w-25 m-auto">
      </div> -->
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-12">

          <img src="img\Photos\Blood sugar control for minor and major operations1.jpeg" class="mt-5 img-fluid"  alt="">


           
           <p class="p-2" style="font-family: 'Tinos', serif;font-size: 18px;">
           Optimum blood sugar control is essential for successful outcome of most of the procedures and operations.           </p>
           <h4 style="font-family: 'Tinos', serif;  font-size: 17px; text-align: justify; font-weight: bold;"><i class="bx bxs-quote-alt-left quote-icon-left"></i>We have served hundreds of patients with diabetes to achieve blood sugar control prior to, during and after the operations like dental surgeries, eye operations, bypass (heart) operations, spine and orthpedic operations etc. <i class="bx bxs-quote-alt-right quote-icon-right"></i></h4>
           <!-- <p style="text-align: justify; text-indent: 50px;">It's important to work closely with a healthcare professional to determine the appropriate laboratory investigations for diabetes management. Regular monitoring can help prevent or detect complications early, leading to better outcomes.

</p> -->
          
        
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 col-12 mt-4 ">
          <div class="card-body mt-4">
          <section id="appointment" class="appointment section-bg">
                <div class="container">
            
                  <div class="section-title">
                    <h2>Make an Appointment</h2>
                    
                  </div>
            
                  <form action="post_Appoinment.php" method="post" role="form">
                    <div class="row php-email-form">
                      <div class="col-md-4 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars"required>
                        <div class="validate"></div>
                      </div>
                      <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email"required>
                        <div class="validate"></div>
                      </div>
                      <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="mobile" class="form-control" name="mobile" id="phone" placeholder="Your Phone" pattern="[0-9]{10}" data-rule="minlen:4" data-msg="Please enter at least 4 chars" maxlength="10" required>
                        <div class="validate"></div>
                      </div>
                    </div>
                    <div class="row php-email-form">
                      <div class="col-md-6 form-group mt-3">
                        <input type="date" name="appointment_date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars"required>
                        <div class="validate"></div>
                      </div>
                      <div class="col-md-6 form-group mt-3">
                      <select name="appointment_for" id="appointment_for" class="form-select" >
                          <option value="">Select Problem </option>
                          <option value="Diabetes in adults"> Diabetes in adults </option>
                          <option value="Diabetes in children"> Diabetes in children</option>
                          <option value="Diabetes in pregnancy">Diabetes in pregnancy</option>
                          <option value="Blood sugar control">Blood sugar control</option>
                          <option value="Diabetes in complications screening">Diabetes in complications screening</option>
                          <option value="Continuous glocose monitoring system">Continuous glocose monitoring system</option>
                          <option value="Diabetes remission">Diabetes remission</option>
                          <option value="Diabetes Prevention">Diabetes Prevention</option>
                          <option value="Diet consultation">Diet consultation</option>
                          <option value="Weight loss">Weight loss</option>
                          <option value="Thyroid Problem">Thyroid Problem</option>
                          <option value="Hyper Tension">Hyper Tension</option>
                          <option value="Raised-cholestrol(BP)">Raised-cholestrol(BP)</option>
                          <option value="Fatty Liver">Fatty Liver </option>
                          <option value="Laboratory Tests">Laboratory Tests </option>
                        </select>
                       
                        <div class="validate"></div>
                      </div>
                     
                    </div>
                   <div class="row php-email-form ">
                   <div class="form-group mt-3">
                      <textarea class="form-control" name="text" rows="3" placeholder="Message (Optional)"></textarea>
                      <div class="validate"></div>
                   </div>
                   
                    </div>
                   
                    <div class="text-center"><button type="submit" class="btn btn-primary" style="margin-right:20px;">Make an Appointment</button></div>
                  </form>
            
                </div>
              </section>
             <!-- <div class="mb-3">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                    </div> -->
            
        </div>

        </div>
        
      </div>

    </div>
   </section>


   <!-- ----------------feedback-------------------- -->
   <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="section-title">
        <h2 class="text-center">Patient Reviews</h2>
        </div>
       
        

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
          <?php
            
                                          $staus = 1;
                                          $sql  = "SELECT * FROM `feedback_student`WHERE `status`='$staus'" ;
                                          $data = mysqli_query($db,$sql);
                                          $num = mysqli_num_rows($data);
                                          if($num>0)
                                          {
                                              for($i=1;$i<=$num;$i++)
                                              {
                                                  $row = mysqli_fetch_assoc($data);
                                                  extract($row);
        
        if($i==1){
        
        ?>
            <div class="swiper-slide">
              <div class="testimonial-wrap ">
        
                 <div class="testimonial-item">
                 <div class="testimonial-img rounded float-left">
                  <img src="<?= $base_path ?>gallery_images/<?= $gallery_image ?>"  height="60" alt=""></div>
                 
                <h3 class="text-primary"><p class="overview"><?=$name?></p></h3>
                <h4></h4>
                <p class="text-dark">
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                 
                  <p class="testimonial"><?=$feedback?></p>
                  <!-- <div class="text-primary">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i><br>
                  </div> -->
                  
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                



              </div>
              </div>
              
            </div>
              <?php
          }else{ ?>
           <div class="swiper-slide">
              <div class="testimonial-wrap ">
          <div class="testimonial-item">
                 <div class="testimonial-img rounded float-left">
                  <img src="<?= $base_path?>gallery_images/<?= $gallery_image?>"  height="60" alt=""></div>
                 
                <h3 class="text-primary"><p class="overview"><?=$name?></p></h3>
                <h4></h4>
                <p class="text-dark">
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  
                  <p class="testimonial"><?=$feedback?></p>
                  
                  <!-- <div class="text-primary">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i><br>
                  </div> -->
                 
                  
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                



              </div>
             
 
        
 </div>
              
              </div>
              <?php }
                        ?>
        
        <?php
                                              }
                                          }
                                          ?>
      </div>
      </div>
      </div>
      </section>


    


   <!-- Appointment start -->

   
  </main><!-- End #main -->















<?php include("includes/footer.php")?>
