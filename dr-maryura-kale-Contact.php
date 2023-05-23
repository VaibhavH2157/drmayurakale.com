<?php 
$title ='Contact';
include("includes/header.php")?>
<main id="main">
<style>
  appointment .php-email-form .error-message{
    background:green;
  }
</style>

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs m-6 p-10 ">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Breadcrumbs Section -->

    
 <!-- start contact section -->
 <section id="contact" class="contact p-0 m-0">
    <div class="container">

      <div class="section-title">
        <!-- <h2>Contact</h2> -->
       
      </div>
    </div>

    <div>
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3752.395405631549!2d75.36206991434953!3d19.865518831843506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdba28b2c1737e5%3A0xf57237b5decddb4c!2sDr.Mayura%20Kale%20-Diabetologist%20aurangabad!5e0!3m2!1smr!2sin!4v1679041555245!5m2!1smr!2sin" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container">
      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
          <?php
								$company_Master = "SELECT * FROM `oc_master_company`";
								$company_master_data = mysqli_query($db, $company_Master);
								$company_num = mysqli_num_rows($company_master_data);
								// echo $slider_num;
								for ($i = 0; $i < $company_num; $i++) {
									$class_master_row = mysqli_fetch_assoc($company_master_data);

									extract($class_master_row);
								?>
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p><a href="https://goo.gl/maps/qCbo1Gvun88Uw7JS8"><?=$class_master_row['address1']?></a> </p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p><a href="mailto:<?=$email ?>"><?=$email ?></a></p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <li style="list-style-type:none;"><a class="justify-content-end d-flex" href="tel:<?=$mobile?>"><?=$mobile?></a> </li>
            </div>
            </p>
                                <?php 
                }
                ?>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">
        <?php include('message.php')?>

          <form action="post_Contact.php" method="post" role="form" >
            <div class="row php-email-form">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="row php-email-form">
            <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Your Mobile Number" pattern="[0-9]{10}" maxlength="10" required>
              </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
      </div>

      <div class="row php-email-form">
      <div class="form-group mt-3">
              <textarea class="form-control" name="text" rows="5" placeholder="Message" required></textarea>
            </div>
      </div>
           
           
            <div class="text-center"><button type="submit" class="btn btn-primary">Send Message</button></div>
          </form>

        </div>

      </div>

    </div>
  </section>
  <!-- End Contact Section -->



 
      


     

  </main><!-- End #main -->















<?php include("includes/footer.php")?>
