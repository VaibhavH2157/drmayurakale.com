<?php 
$title ='Dr.Mayura Kale,Diabetes,Thyroid and Obesity Constultant';
include("includes/header.php")?>
<main id="main" style="  overflow: hidden;">
  <head>
  <link href='https://fonts.googleapis.com/css?family=Abyssinica SIL' rel='stylesheet'>
  </head>
<style>
  appointment .php-email-form .error-message{
    background:green;
  }

  @media (min-width:620px)  { 
  .carousel-item img {
    margin-top:200px;
    width:100%;
    overflow: hidden;
    
    

  }
}

@media (min-width:460px)  { 
  .text-v{
    line-height: 1.1;
  }
}
  
  @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');

  
/* .news-event {
	background: url(../images/newsbg.jpg) no-repeat;
	background-size: cover;
}
.title-style-2 a {
	background: #ff6001;
	color: #fff;
	font-family: 'Montserrat', sans-serif;
	line-height: 42px;
	float: right;
	font-weight: 500;
	font-size: 14px;
	padding: 0 20px;
	border-radius: 3px;
}
.title-style-2 a:hover {
	background: #40407e;
	color: #fff;
}
.title-style-2 {
	margin-bottom: 30px;
}
.title-style-2 h2 {
	border-right: 1px solid #fadbe1;
	margin: 0px;
	letter-spacing: -.5px;
}
.latest-updates {
	width: 100%;
	float: left;
	background: #fff;
	border-radius: 3px;
	overflow: hidden;
	border: 1px solid #e8e8e8;
	box-shadow: 0 5px 15px rgba(0,0,0,.07);
}
.latest-updates h6 {
	background: #ff6001;
	color: #fff;
	line-height: 58px;
	font-weight: 700;
	padding: 0 20px;
	text-transform: uppercase;
	position: relative;
}
.latest-updates h6 img {
	position: absolute;
	right: 0;
	bottom: 0;
}
.latest-updates ul {
	margin: 0px;
	padding: 0 20px;
	list-style: none;
}
.latest-updates ul li {
	border-bottom: 1px solid #e8e8e8;
	padding: 10px 0 10px;
	position: relative;
}
.latest-updates ul li:hover:after {
	height: 100%;
}
.latest-updates ul li:after {
	position: absolute;
	left: -20px;
	top: 0;
	width: 2px;
	height: 0;
	content: "";
	background: #ff6001;
}
.latest-updates ul li strong {
	display: block;
    font-family: 'Montserrat', sans-serif;
    line-height: 24px;
    font-size: 14px;
    font-weight: 500;
    margin: 0 0 10px;
    letter-spacing: -.5px;
}
.latest-updates ul li strong a {
	color: #333;
}
.latest-updates ul li:last-child {
	border: 0px;
}
.event-meta li, .latest-updates .post-date {
	color: #777;
	font-size: 14px;
}
.event-meta i, .latest-updates .post-date i {
	color: #cccccc;
	font-size: 16px;
	margin-right: 5px;
}
.latest-updates ul li strong a:hover {
	color: #ff6001;
}
.event-post {
	width: 100%;
	background: #fff;
	box-shadow: 0 5px 15px rgba(0,0,0,.07);
	border-radius: 3px;
	overflow: hidden;
}
.event-post-txt {
	padding: 23px 28px;
}
.event-post-txt h5 {
	margin: 0 0 15px;
	font-weight: 700;
	letter-spacing: -.5px;
	font-size: 19px;
}
.event-post-txt h5 a {
	color: #333;
}
.event-meta {
	margin: 0 0 19px;
	padding: 0px;
	list-style: none;
}
.event-meta li {
	margin: 0 0 7px;
}
.event-post-txt p {
	line-height: 22px;
	margin: 0px;
}
.event-post-loc {
	border-top: 1px solid #eeeeee;
	color: #777;
	padding: 0 0 0 30px;
	height: 46px;
	position: relative;
	line-height: 46px;
}
.event-post-loc i {
	color: #cccccc;
	margin-right: 5px;
}
.event-post-loc a {
	float: right;
	color: #cccccc;
	border-left: 1px solid #eee;
	padding: 0 20px;
}
.event-post:hover .event-post-loc a, .event-post:hover h5 a {
	color: #ff6001;
}
.event-post:hover .event-post-loc a {
	background: #ff6001;
	color: #fff;
}
.event-post:hover .event-post-loc a i {
	color: #fff;
}
.thumb {
	position: relative;
	overflow: hidden;
}
.thumb:after {
	position: absolute;
	left: 0;
	top: 0;
	background: rgba(0,0,0,.3);
	width: 100%;
	height: 100%;
	content: "";
	opacity: 0;
}
.thumb img {
	width: 100%;
	height: auto;
}
.new-thumb a, .thumb a {
	position: absolute;
	left: -150px;
	right: 0;
	top: 0;
	bottom: 0;
	margin: auto;
	width: 44px;
	height: 44px;
	background: #fff;
	border-radius: 100%;
	z-index: 99;
	text-align: center;
	line-height: 44px;
	color: #ff6001;
	opacity: 0;
}
.new-thumb a:hover, .thumb a:hover {
	background: #ff6001;
	color: #fff;
}
.mb20 {
	margin-bottom: 20px;
}
.event-post:hover .thumb:after {
	opacity: 1;
}
.event-post:hover .thumb a {
	opacity: 1;
	left: 0;
} */

.popup {
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            display: none;
            overflow: hidden;
            
          
        }
        .popup-content {
            background-color: white;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888888;
            width: 30%;
            font-weight: bolder;
            overflow: hidden;
            
        }

         /* Media Query for Mobile Devices */
         @media (max-width: 480px) {
          .popup-content {
            background-color: white;
            margin: 10% auto;
            
            padding: 20px;
            border: 1px solid #888888;
            width: 90%;
            font-weight: bolder;
            overflow: hidden;
            
        } 

        .popup{
          margin-top:100px;
        }


        #myButton{
          /* margin-left:100px; */
          justify-content:center;
          display: flex;
          align-iten:center;
         
        }
        
        


        }
/* 
        #closePopup{
          margin-right:-50px;
        } */

        /* #myButton{
          margin-left:px;
        } */
        .popup-content button {
            display: block;
            margin: 0 auto;
            
        }
        .show {
            display: block;
        }
        h1 {
            color: green;
        }


        /* ---------------patient form---------- */

        * {    
  box-sizing: border-box;    
}    
    
input[type=text], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
input[type=email], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
    
label {    
  padding: 12px 12px 12px 0;    
  display: inline-block;    
}    
    
input[type=submit] {    
  background-color: rgb(37, 116, 161);    
  color: white;    
  padding: 12px 20px;    
  border: none;    
  border-radius: 4px;    
  cursor: pointer;    
  float: right;    
}    
    
input[type=submit]:hover {    
  background-color: #45a049;    
}    
    
.container {    
  border-radius: 5px;    
  /* background-color: #f2f2f2;     */
  padding: 20px;    
}    
    
.col-25 {    
  float: left;    
  width: 25%;    
  margin-top: 6px;    
}    
    
.col-75 {    
  float: left;    
  width: 75%;    
  margin-top: 6px;    
}    
    
/* Clear floats after the columns */    
.row:after {    
  content: "";    
  display: table;    
  clear: both;    
}



.wrapper{
		display: flex;
		align-content: center;
		justify-content: space-between;
		margin: 1rem 0;
	}
	canvas {
		border: 1px solid #ced4da;
		border-radius: 0.4rem;
		font-size: 10px;
	}

	button#reload-button {
		font-size: 30px;
		width: 4.6rem;
		background-color: #fdd31d;
		border: none;
		border-radius: 0,4rem;
		color: #ccc;
	}
	input[type="text"] {
		font-family: 'Open Sans', sans-serif;
		display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
		}


    #captcha,
	.canvas {
		margin-bottom: 1em;
		font-size: 20px;
		letter-spacing: 3px;
		border: 1px solid #ced4da;
		border-radius: 0.4rem;
		/* height: 50%;
		width: 50%; */

	}

	#submit {
		/* font-size: 15px;
		width: 30px; */
		/* background-color: #fdd31d; */
		/* border: none;
		border-radius: 0, 4rem;
		color: #ccc; */
	}


	#textBox {
		height: 30px;
	}

	.redText {
		color: #a03146;
		font-weight: bold;
	}

	.greenText {
		color: #1a3815;
		font-weight: bold;
	}

  #refresh{
    height: 30px;
    margin-left:0px;
    margin-right:20px;
  }
</style>

<?php
$todays_date = date('Y-m-d');
if (strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) {
    $slider_sql = "SELECT * FROM `index_slider`  WHERE (slider_date_from <= '$todays_date' AND slider_date_to >= '$todays_date') and type='mobile'";
} else {
    $slider_sql = "SELECT * FROM `index_slider`  WHERE (slider_date_from <= '$todays_date' AND slider_date_to >= '$todays_date') and type='computer'";
    // echo "web browser!";
}
$slider_sql = "SELECT * FROM `index_slider`";
$slider_data = mysqli_query($db, $slider_sql);
$slider_num = mysqli_num_rows($slider_data);
// echo $slider_num;
?>


<div class="mt-5">
  <div class="container-fluid">
    <div class="row">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    
    
    <div class="carousel-inner "style="margin-top:60px;">
    <?php
        for ($i = 0; $i < $slider_num; $i++) {
            $slider_row = mysqli_fetch_assoc($slider_data);
            extract($slider_row);
            
        ?>
      <div class="carousel-item active" style="margin-bottom:20px;">
        
       
      <img src="<?= $base_path ?>/slider_images/<?=$slider_image ?>" class="img-fluid" style="margin-top: 2%;"  alt="">

        <div class="carousel-caption d-none d-md-block">
          <section id="hero" class="d-flex align-items-center">
            <!-- <div class="container">
              <h1 class="text-dark">Welcome to Kale Clinic</h1>
              <h2 class="text-dark">We are team of talented docters</h2>
              <a href="Appoinment.html" class="btn-get-started scrollto">Make an Appoinment</a>
            </div> -->
          </section>
        </div>
      </div>
      
        <?php
        }
        ?>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" ></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" ></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
      </div>

  <!-- ======= Hero Section ======= -->
 
  <!-- End Hero -->


    <!-- ======= Why Us Section ======= -->
    

   
    <section id="why-us" class="why-us" style="margin-top:-50px;">
      <div class="container">

        <div class="row">

        <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0" style=" font-family: 'Tinos', serif;">
                    <i class="bx bx-receipt"></i>
                    <h4 style="font-weight:bold;  font-size: 25px;">OPD Timing</h4>
                    <p>10:30 am to 02:30 pm</p>
                    <p>06:00 pm to 08:00 pm</p>
                    <p>Blood Tests</p>
                    <p>08:00 AM to 01:00 PM</p>
                    <p>(Sunday closed)</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0"style=" font-family: 'Tinos', serif;">
                    <i class="bx bx-cube-alt"></i>
                    <h4 style="font-weight:bold;  font-size: 25px;">Address</h4>
                    <p> Dr.Kale's Diabetes Clinic- N4 CIDCO, near jaibhavani nagar,Chhp.Sambhaji Nagar (Aurangabad), Maharashtra 431005 </p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bi bi-person-lines-fill"></i>
                    <div class="text-center"style=" font-family: 'Tinos', serif;">
                      <button type="button" class="btn btn-outline-light"><a href="dr-maryura-kale-Contact.php" class="more-btn "><h4 class="text-dark"style="font-weight:bold;  font-size: 25px;">Contact</h4></a></button>
                     <p>Dr.Kale's Diabetes Clinic<br> Mo.7066237367,<br>8806385386</p>
                     <p></p>
                    <p class="text-center" style="justify-content:center; text-align: center;display:flex;">Email:<br>
                    contact@drmayurakale.com</p>
                      </div>
                   
                    </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>


          <div class="col-lg-4 d-flex align-items-stretch justify-content-center  ">
          <section id="appointment" class="appointment shadow p-3 mb-5 mt-5  bg-white rounded">
          <!-- section-bg -->
        
  <div class="container">
   <div class="section-title">
        <h4 class="text-dark " style="font-size:30px;font-weight:bold;">Appointment</h4>
      </div>
      <?php include('message.php')?>
     <form action="post_Appoinment.php" method="post"  class="mt-2" style="margin-right:-25px;">
                    <div class="row php-email-form">
                      <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name*"required>
                        <div class="validate"></div>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="tel" class="form-control"pattern="[0-9]{10}" name="mobile" id="mobile" placeholder="Your Phone*" maxlength="10" required>
                      <!-- <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email"> -->
                       <!-- <div class="validate"></div>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                        <!-- <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars"> -->
                       <div class="validate"></div>
                      </div>
                    </div>
                    <div class="row php-email-form">
                      <div class="col-md-6 form-group mt-3">
                        <input type="date" name="appointment_date" class="form-control datepicker" id="appointment_date" placeholder="Appointment Date" required>
                        <div class="validate"></div>
                      </div>
                      <div class="col-md-6 form-group mt-3">
                        <select name="appointment_for" id="appointment_for" class="form-select"required >
                          <option value="">Select*</option>
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
                   <div class="row php-email-form">
                    <div class="form-group mt-3 ">
                      <textarea class="form-control" name="text" rows="3" placeholder="Message (Optional)"></textarea>
                      <div class="validate"></div>
                    </div>
      </div>
                    <div class="text-center"style="margin-right:20px;"><button type="submit" class="btn btn-outline-primary mt-2">Make an Appointment</button></div>
                  </form>
            
  </div>
</section>
</div>
</div>

      </div>
    </section>
  
    <!-- End Why Us Section -->

    <!-- ======= servises Section ======= -->

    <!-- ======= Testimonials Section ======= -->
    <!-- Start Doctor Section -->
    <div class="doctor">

      <div class="section m-0 p-10">
        
        <div class="container">
          
          <div class="section-title ">
            <h2 class="text-center ">Dr.Mayura Kale<br><h3 class="text-center"style="font-family: 'Abyssinica SIL';">(Diabetes,Thyroid and Obesity Constultant)</h3></h2>
            

        
          </div>
          <!-- <h5 class="text-dark"  style="font-family: 'Chakra Petch', sans-serif; font-size:20px;" > 	MBBS (TNMC – Nair Hospital Mumbai) , D.Diabetology (TNMC – Nair Hospital Mumbai),D.N.B.(Medicine) ,FDFM.     
          (IPA)
            </h5> -->
            <!-- <h6 class="text-dark mb-2 mt-2 text-secondary" style="font-family: 'Tinos', serif;text-align: justify;text-indent: 60px; font-size:18px;">
              Publon Certified Peer Reviewer (Around 6 manuscripts reviewed in last 3 years for International Journal of Diabetes in Developing Countries)
            </h6>  -->
            <div class="row mt-3">
              <div class="col-sm-4 justify-content-center ">
                <img src="img\gallery\Dr.mayura_kale_new.jpg" class="img-fluid" alt="">
                
              </div>
              
              <div class="col-sm-8" >
                <div class="text-v" style="font-family: 'Abyssinica SIL';font-size: 22px;">
                  <h5 class=" mb-2 mt-1 text-secondary" style="font-family: 'Tinos', serif;text-align: justify; line-height: 1.6;text-indent: 50px">
                  Dr. Mayura Kale strongly believes in holistic management of the lifestyle disorders like diabetes, hypertension and in providing sustainable solutions to her patients. The treatment includes intense counselling about diet and exercise. She believes that local and sustainable diet has a big role for acheiving excellent long term outcomes. She and her staff offer best services to their patients with diabetes, thyroid, hypertension and other lifestyle disorders. They have served thousands of patients to live a healthy and happy life.

                  Dr. Mayura Kale has completed her post graduation in Diabetology from Department Of Endocrionology , T. N. Medical College and BYL Nair Hospital, Mumbai. She has completed D.N.B. in Medicine from the National Board of Examinations.
               
               
              </h5> 
              
            </div>
            <div class="text-end">
              
              <a href="dr-maryura-kale-about.php">.....Read More</a>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        <!-- End Doctors Section -->

        <!-- -------------------events---------------------------- -->
        <!-- <div class="col-md-5">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#Events" aria-controls="Events" role="tab" data-toggle="tab" aria-expanded="true">Upcoming Events</a></li>
              <li role="presentation" class=""><a href="#next_event" aria-controls="next_event" role="tab" data-toggle="tab" aria-expanded="false">Past Event</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="Events" style="height:280px">  -->
                <!--Event List Start-->
                <?php
                  $curdate = date("Y-m-d");
                  //echo $curdate;
                  $sql ="SELECT * FROM event WHERE event_start_date > '$curdate' order by event_start_date desc limit 3";
                  $data = mysqli_query($db,$sql);
                  $num = mysqli_num_rows($data);
                  if($num>0)
                  {
                    for($i=1;$i<=$num;$i++)
                    {
                      $row = mysqli_fetch_assoc($data);
                      extract($row);
                      ?>
                      <!-- <ul class="event-list">
                        <li><img src="event_images/<?=$event_attachment?>" style="width:80px;"></li>
                        <li class="el-title">
                          <h6><a href="event-details.php?event=<?=$id?>"><?=$event_name?></a></h6>
                          <p>
                            <strong class="edate"><i class="fa fa-calendar"></i><?=$event_start_date?></strong>
                            <i class="fas fa-map-marker-alt"></i> <?=$event_location?>
                          </p>
                        </li>
                      </ul> -->
                      <?php  
                    }
                  }
                ?>
                <!--Event List End--> 
              <!-- </div>
              <div role="tabpanel" class="tab-pane" id="next_event">  -->
                <?php
                  $curdate = date("Y-m-d");
                  //echo $curdate;
                  $sql = "SELECT * FROM event where event_start_date < '$curdate' order by event_start_date desc limit 3";
                  $data = mysqli_query($db,$sql);
                  $num = mysqli_num_rows($data);
                  if($num>0)
                  {
                    for($i=1;$i<=$num;$i++)
                    {
                      $row = mysqli_fetch_assoc($data);
                      extract($row);
                      ?>
                      <!-- <ul class="event-list">
                        <li><img src="event_images/<?=$event_attachment?>" style="width:80px;"></li>
                        <li class="el-title">
                          <h6><a href="event-details.php?event=<?=$id?>"><?=$event_name?></a></h6>
                          <p>
                            <strong class="edate"><i class="fa fa-calendar"></i><?=$event_start_date?></strong>
                            <i class="fas fa-map-marker-alt"></i> <?=$event_location?>
                          </p>
                        </li>
                      </ul> -->
                      <?php
                    }
                  }
                ?>
              <!-- </div>
            </div> -->
            <!-- Tab panes -->
          <!-- </div>
        </div>
      </div>
    </section> -->

       


    <!-- ======= Frequently Asked Questions Section ======= -->
    
    <section id="faq" class="faq section-bg mt-5">
      <div class="container">

        <div class="section-title">
          <h2>Treatments</h2>
         
        </div>

        <div class="faq-list">
          <ul>
          <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-1" class="collapsed">Diabetes in Adults<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show " data-bs-parent=".faq-list">
                <div class="d-flex">
                  <div class="row">
                    <div class="col-sm-6"><p  class="text-justify" style="font-size:16px;font-family: 'Tinos', serif;">
                    These Treatment for diabetes in adults typically includes lifestyle changes, such as a healthy diet and regular exercise, as well as medication or insulin therapy to help manage blood sugar levels. It's important to manage diabetes to prevent complications such as heart disease, nerve damage, kidney damage, and eye damage.
<div class="justify-content-end d-flex">
<a href="dr-maryura-kale-Diabetes-in-Adults.php">.....Read More</a>
</div>

              </p>
            </div>
                    <div class="col-sm-6 d-flex justify-content-end"> <img class="mt-3"  src="img\Photos\Diabetes in Adults.jpg" height="200" alt=""></div>
                  </div>
                </div>
                
             
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Blood sugar control<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <div class="d-flex">
                  <div class="row">
                    <div class="col-sm-6"><p  class="text-justify" style="font-size:16px;font-family: 'Tinos', serif;">
                    Optimum blood sugar control is essential for successful outcome of most of the procedures and operations.
<div class="justify-content-end d-flex">
<a href="dr-maryura-kale-Blood sugar control for minor and major operations.php  ">.....Read More</a>
</div>

              </p>
            </div>
                    <div class="col-sm-6 d-flex justify-content-end"> <img class="mt-3"  src="img\Photos\Blood sugar control for minor and major operations1.jpeg" height="200" alt=""></div>
                  </div>
                </div>
                
             
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Diabetes in Children <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <div class="d-flex">
                  <div class="row">
                    <div class="col-sm-6"><p  class="text-justify" style="font-size:16px;font-family: 'Tinos', serif;">
                    Also known as juvenile diabetes, type1 or insulin-dependent diabetes, is a chronic condition in which the pancreas produces little or no insulin. Insulin is a hormone that regulates the amount of glucose (sugar) in the blood. Without enough insulin, glucose builds up in the bloodstream, leading to high blood sugar levels.
                    <div class="justify-content-end d-flex">
                    <a href="dr-maryura-kale-diabetes-in-Children.php">.....Read More</a>
                    </div>
                    
                </p></div>
                    <div class="col-sm-6 d-flex justify-content-end"> 
                      <img class="mt-3"  src="img\Photos\chi1.jpg" height="200"  alt="">
                    </div>
                  </div>
                </div>
                
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-4">Diabetes in Pregnancy Treatment<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse " data-bs-parent=".faq-list">
                <div class="d-flex">
                  <div class="row align-items-end justify-contain-between ">
                    <div class="col-sm-6">
                      <p class="text-justify" style="font-size:16px;font-family: 'Tinos', serif;">
                      Women can have diabetes prior to the pregnancy also. These women may have difficulty in having baby or early abortions. Strict blood sugar control prior to planning pregnancy gives excellent results. Gestational diabetes, is a condition where women who did not previously have diabetes develop high blood sugar levels during pregnancy which return to normal after delivery.
                <div class="justify-content-end d-flex">
                <a href="dr-maryura-kale-diabetes-in-pregrancy.php">.....Read More</a>
</div>
                

                </p>
              </div>
                    <div class="col-sm-6 d-flex justify-content-end"> <img  class="mt-3" src="img\Photos\pr1.jpg" height="200" alt=""></div>
                  </div>
                
               
                </div>
              
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Diabetes Complications Screening <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <div div class="text-justify" style="font-size:16px; font-family: 'Tinos', serif;">
                  <div class="d-flex">
                    <div class="row">
                      <div class="col-sm-6"><p>
                      Diabetes is a chronic disease and uncontrolled, diabetes can lead to a number of complications that can affect various parts of the body. It can affect the retina, nerves, kidney, foot, heart, brain etc.
<div class="justify-content-end d-flex">
<a href="dr-maryura-kale-Diabetes-Complications-Screening.php">.....Read More</a>
</div>

                      </p>
                    </div>
                    <div class="col-sm-6 d-flex justify-content-end">
                      <img class="mt-3"  src="img\Photos\comp1.jpg" height="200" alt="">
                    </div>
                  </div>
                </div>
              </div>
                
                
              </div>
            </li>


            <li data-aos="fade-up" data-aos-delay="600"> <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">Continuous glucose monitoring system<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                <div class="d-flex ">
                  <div class="row ">
                    <div class="col-sm-6 "><p  class="text-justify" style="font-size:15px">
                    It's important for people with diabetes to work closely with their healthcare team to manage their blood sugar levels and to undergo regular screening for complications. Early detection and treatment can help prevent or delay the onset of these complications.
                    <a href="dr-maryura-kale-Diabetes-Continuous-glucose-monitoring-system.php">.....Read More</a>
                </p>
              </div>
                    <div class="col-sm-6 d-flex justify-content-end">
                      <img class="mt-3"  src="img\Photos\download.jpg" height="200" alt="">
                    </div>
                  </div>
                </div>
                
              </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed">Diabetes Remission<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                <div class="d-flex">
                  <div class="row ml-auto">
                    <div class="col-sm-6"> <p  class="text-justify" style="font-size:16px;font-family: 'Tinos', serif;">
                    Diabetes remission refers to a state in which an individual with diabetes achieves normal blood sugar levels without the use of medication. This can be achieved through various means such as changes in diet, exercise, weight loss, and/or weight loss surgery. Type 2 diabetes, on the other hand, is a usually condition where the body becomes resistant to insulin, and it can often be managed with lifestyle changes and medication.
                    <div class="justify-content-end d-flex">
                    <a href="dr-maryura-kale-diabetes-Remission.php">.....Read More</a>
                    </div>
                   
                </p></div>
                    <div class="col-sm-6 d-flex justify-content-end">
                      <img class="mt-3"  src="img\Photos\Diabetes Remission.jpg" height="200" alt="">
                    </div>
                  </div>
                </div>
               
              </div>
            </li>



            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed">Diabetes Prevention Treatment<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-8" class="collapse " data-bs-parent=".faq-list">
                <div class="d-flex justify-contain-between ,ml-auto">
                  <div class="row ">
                    <div class="col-sm-6"> <p  class="text-justify" style="font: size 13px;font-family: 'Tinos', serif;">
                    The most effective way to prevent or manage diabetes is to make healthy lifestyle choices which include regular physical activity, a balanced and nutritious diet, maintaining a healthy weight, and avoiding smoking, alcohol.
                  <div class="justify-content-end d-flex">
                  <a href="dr-maryura-kale-diabetes-in-prevention.php">.....Read More</a>
</div>
                  
              </p>
            </div>
                    <div class="col-sm-6 d-flex justify-content-end">
                      <img class="mt-3" src="img\Photos\prevent1.jpg" height="200" alt=""></div>
                  </div>
               
              
                </div>
                
              </div>
            </li>
           


        </div>
     

           
           

           
           

            
           
              
                  
     </div>
    </section>
    <!-- End Frequently Asked Questions Section -->


    

    
    <!-- .container>.row>.col-sm-6*2 -->

<!-- patients Reviews -->


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



      <div class="d-flex justify-content-center">
      <button  id="myButton" class="btn btn-outline-primary">
         Submit Review
      </button>
      
      </div>
    <div id="myPopup" class="popup">
        <div class="popup-content ">
            <h1 style=" color: #2c4964;" class="d-flex justify-content-center">
              Review Form
              <button style="margin-left:50px;size:10px;" id="closePopup" class="btn"><i class="bi bi-x-lg"></i></button>
              </h1>
              
              <div class="container"> 
            
  <form action="post_patient-reviews.php" method="post" name="myForm" onsubmit="return validateForm()">    
    <div class="row php-email-form">    
      <div class="col-25">    
        <label for="fname">Patient Name*</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="fname" name="name" size="65" placeholder="Your name.." required  pattern="{10}"><b><span class="formerror"></span></b>
        <div class="validate"></div>  
      </div>    
    </div>    
    
    <div class="row php-email-form ">    
      <div class="col-25">    
        <label for="feed_back">Feedback*</label>    
      </div>    
      <div class="col-75">    
        <textarea id="subject" name="feedback" cols="132" rows="5" placeholder="Write something.." style="height:100px" required pattern="[0-50]{51}"></textarea>  
        <div class="validate"></div>  
      </div>    
    </div>
    <div class="d-flex justify-content-center">
    <span id="captcha" style="font-family: 'Poppins', sans-serif;" class="canvas h-50 w-50">captcha text</span>
								<button id="refresh" type="submit"><i class="bi bi-bootstrap-reboot"></i></button>
    
    
								<div id="captchaBackground">
									<input id="textBox" type="text" name="text">
									
								</div>
                </div>
							<span id="output"></span>
							
            <!-- <?php include('message.php')?>  	     -->
    <div class="row php-email-form mt-2" >     
      <button type="submit" name="Submit" id="submit" class="btn btn-outline-primary" value="Submit">Submit</button>    
    </div>

  </form>    
</div>    
        </div>
    </div>


    

     <!-- ======= Counts Section ======= -->
     <!-- <section id="counts" class="counts my-5">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
              <p>Doctors</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p>Services</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p>Research Labs</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section>End Counts Section -->
    

   
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6447c80a31ebfa0fe7fa538a/1gus6ar65';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<script>
   if ($('.recent-event-slider').length) {
        $('.recent-event-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
        });
        $('.recent-event-slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.recent-event-slider',
            dots: false,
            centerMode: false,
            focusOnSelect: true,
        });
    }



    if ($('#defaultCountdown').length) {
        var austDay = new Date();
        austDay = new Date(2019, 12, 18, 14);
        $('#defaultCountdown').countdown({
            until: austDay
        });
        $('#year').text(austDay.getFullYear());
    }



   
</script>



<script> myButton.addEventListener("click", function () {
            myPopup.classList.add("show");
        });
        closePopup.addEventListener("click", function () {
            myPopup.classList.remove("show");
        });
        window.addEventListener("click", function (event) {
            if (event.target == myPopup) {
                myPopup.classList.remove("show");
            }
        });</script>


<!--End of Tawk.to Script-->


	<script>
	let captchaText = document.querySelector('#captcha');
	let userText = document.querySelector('#textBox');
	let submitButton = document.querySelector('#submit');
	let output = document.querySelector('#output');
	let refreshButton = document.querySelector('#refresh');

	let alphaNums = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
	let emptyArr = [];
	for (let i = 1; i <= 7; i++) {
		emptyArr.push(alphaNums[Math.floor(Math.random() * alphaNums.length)]);
	}
	captchaText.innerHTML = emptyArr.join('');

	userText.addEventListener('keyup', function(e) {
		if (e.keyCode === 13) {
			if (userText.value === captchaText.innerHTML) {
				output.classList.add("greenText");
				output.innerHTML = "Correct!";
			} else {
				output.classList.add("redText");
				output.innerHTML = "Incorrect, please try again";
			}
		}
	});

	submitButton.addEventListener('click', function() {
		if (userText.value === captchaText.innerHTML) {
			output.classList.add("greenText");
			output.innerHTML = "Correct!";
		} else {
			output.classList.add("redText");
			output.innerHTML = "Incorrect, please try again";
		}
	});

	refreshButton.addEventListener('click', function() {
		userText.value = "";
		let refreshArr = [];
		for (let j = 1; j <= 7; j++) {
			refreshArr.push(alphaNums[Math.floor(Math.random() * alphaNums.length)]);
		}
		captchaText.innerHTML = refreshArr.join('');
		output.innerHTML = "";
	});

	submitButton.addEventListener('keyup', function(e) {
		if (e.keyCode === 13) {
			if (userText.value === captchaText.innerHTML) {
				console.log("correct!");
				output.classList.add("greenText");
				output.innerHTML = "Correct!";
			} else {
				output.classList.add("redText");
				output.innerHTML = "Incorrect, please try again";
			}
		}
	});
</script>






<script>
function seterror(id , error){
element = document.getElementById(id);
element.getElementsByClassName('formerror')[0].innerHTML = error;
}



function validateForm(){
    var returnval = true;
    var name = document.forms['myForm']['name'].value;
    if(name.length<20){
      seterror("name","length of name is too long");
      returnval = false;
    }
    if(name.length == 0){
      seterror("name","length of name can not be zero");
      returnval = false;
    }
}

</script>
    
    
  </main><!-- End #main -->
  
















<?php include("includes/footer.php")?>
