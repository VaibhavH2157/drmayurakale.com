<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medilab Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>



<footer id="footer" class="gap-4 mt-5">

    <div class="footer-top bg-light">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-3 footer-contact ">
            <h3> Dr.Mayura Kale</h3>
            <p style="margin-top:-20px;">
            
            <?php
								$company_Master = "SELECT * FROM `oc_master_company`";
								$company_master_data = mysqli_query($db, $company_Master);
								$company_num = mysqli_num_rows($company_master_data);
								// echo $slider_num;
								for ($i = 0; $i < $company_num; $i++) {
									$class_master_row = mysqli_fetch_assoc($company_master_data);

									extract($class_master_row);
								?>
                                    <br>
                                    <li style="list-style-type:none;"><i class="fa fa-phone"></i> Call Now : <a href="tel:<?=$mobile?>"><?=$mobile?></a> </li>
                                            <!-- <li><i class="fa fa-phone"></i> Call Now : <a href="tel:02402485001">02402485001</a></li> -->
                                    <!-- <p style="font-family: 'Tinos', serif;margin-bottom:-20px;">
                                    <li>Call Now :<i class="fa fa-phone" aria-hidden="true"></i>
                                    <a href="<?=$class_master_row['mobile']?>"><?=$class_master_row['mobile']?></a></li> -->
                               
                                    </p>
                                    <br>
                                   <i class="bi bi-envelope-at"></i> <a href="mailto:<?=$email ?>"><?=$email ?></a> <br>
                                   
                                   

                                      
                                </p>
                                <?php 
                }
                ?>
            </p>

            <h3 class="footer_title mt-2"> Address:</h3>
                                
                                <?php
								$company_Master = "SELECT * FROM `oc_master_company`";
								$company_master_data = mysqli_query($db, $company_Master);
								$company_num = mysqli_num_rows($company_master_data);
								// echo $slider_num;
								for ($i = 0; $i < $company_num; $i++) {
									$class_master_row = mysqli_fetch_assoc($company_master_data);

									extract($class_master_row);
								?>
                                   
                                    <p class="mt-2">
                                    <a href="https://goo.gl/maps/qCbo1Gvun88Uw7JS8"><?=$class_master_row['address1']?></a>
                                    </p>
                                <?php 
                }
                ?>


<div>
      <!-- <iframe style="border:0; width: 100%; height: 150px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3752.395405631549!2d75.36206991434953!3d19.865518831843506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdba28b2c1737e5%3A0xf57237b5decddb4c!2sDr.Mayura%20Kale%20-Diabetologist%20aurangabad!5e0!3m2!1smr!2sin!4v1679041555245!5m2!1smr!2sin" frameborder="0" allowfullscreen></iframe>
    </div> -->
          </div>
          </div>




          <div class="col-lg-3 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
            <?php
                                         $nav_sql = "SELECT * from menus where menu_level=1";
                                        $nav_data = mysqli_query($db,$nav_sql);
                                        $nav_num = mysqli_num_rows($nav_data);
                                        

                                        if ($nav_num>0) {
                                           for ($i=0; $i < $nav_num; $i++) { 
                                            $nav_row = mysqli_fetch_assoc($nav_data);
                                            extract($nav_row);
                                            $sub_nav_sql = "SELECT * from menus where menu_level=1 and has_parent=$id";
                                            $sub_nav_data = mysqli_query($db,$sub_nav_sql);
                                            $sub_nav_num = mysqli_num_rows($sub_nav_data);

                                            if ($sub_nav_num>0) {
                                                ?>
                                                 
                                                <?php
                                            }else {
                                                ?>
                                                <li><a class="" href="<?=$base_path?><?=$menu_link?>" style="font-size: 13px;"><?=$menu_name?></a></li>
                                                <?php
                                            }
                                            ?>
                                            
                                            <?php
                                        }
                                        
                                           }?>
                                           
            </ul>
          </div>

          <div class="col-lg-3 col-md-3 footer-links">
            <h4>Our Treatments</h4>
            <ul>
            <?php
                                        $service_nav_sql = "SELECT id from menus where menu_level=1 and (menu_name='Diabetes Treatments' or menu_name='Service')";
                                      
                                        $service_id=(mysqli_fetch_assoc(mysqli_query($db,$service_nav_sql))['id']);
                                        
                                       
                                        $service_sub_nav_sql = "SELECT * from menus where menu_level=2 and has_parent=$service_id";
                                        $service_sub_nav_data = mysqli_query($db,$service_sub_nav_sql);
                                        $service_sub_nav_num = mysqli_num_rows($service_sub_nav_data);

                                        if ($service_sub_nav_num>0) {
                                            for ($i=0; $i < $service_sub_nav_num; $i++) { 
                                                $service_sub_nav_row = mysqli_fetch_assoc($service_sub_nav_data);
                                                extract($service_sub_nav_row);
                                                ?>
                                                  <li ><a href="<?=$menu_link?>" style="font-size: 13px;"><?=$menu_name?></a></li>
                                           <?php
                                                }
                                           }?>
                                   
                                  
            </ul>
          </div>

          <div class="col-lg-3 col-md-3 footer-newsletter">
     
          <h4>Other Treatments</h4>
            <ul>
            <?php
                                        $service_nav_sql = "SELECT id from menus where menu_level=1 and (menu_name='Other Treatments' or menu_name='Treatments')";
                                      
                                        // $service_id=(mysqli_fetch_assoc(mysqli_query($db,$service_nav_sql))['id']);
                                        
                                       
                                        $service_sub_nav_sql = "SELECT * from menus where menu_level=2 and has_parent=24";
                                        $service_sub_nav_data = mysqli_query($db,$service_sub_nav_sql);
                                        $service_sub_nav_num = mysqli_num_rows($service_sub_nav_data);

                                        if ($service_sub_nav_num>0) {
                                            for ($i=0; $i < $service_sub_nav_num; $i++) { 
                                                $service_sub_nav_row = mysqli_fetch_assoc($service_sub_nav_data);
                                                extract($service_sub_nav_row);
                                                ?>
                                                 <li class="mt-1" style="list-style-type: none; 
                                                 font-size: 16px; 
                                                 margin-left:-30px;
                                                 position: relative;
                                                 padding-bottom: 9px;
                                                 color: #777777;
                                                 
                                                 "><a href="<?=$menu_link?>" style="font-size: 13px; color: #777777;"><?=$menu_name?></a></li>
                                           <?php
                                                }
                                           }?>
                                   
                                  
            </ul>




        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center">
        <div class="copyright ">
          &copy; Copyright <strong><span>Dr.Mayura kale</span></strong>. All Rights ReservedDesigned by <a href="https://bootstrapmade.com/">BigmarkMedia</a>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0 d-flex">
      <?php
                                        $social_link_sql = "SELECT * FROM `social_links`";
                                        $social_link_data = mysqli_query($db,$social_link_sql);
                                        $social_link_num = mysqli_num_rows($social_link_data);
                                        // echo $slider_num;
                                        for ($i=0; $i < $social_link_num; $i++) { 
                                            $social_link_row = mysqli_fetch_assoc($social_link_data);
                                         
                                            extract($social_link_row);
                                            ?>
                                            <li style="list-style-type: none;" >
                                                <a href="<?=$link?>">
                                                    <i class="<?=$icon?>"></i>
                                                </a>
                                            </li>
                                            <?php
                                        }
                                            ?>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- <script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    swal("Good job!", "You clicked the button!", "success");
  </script> -->

</body>

</html>