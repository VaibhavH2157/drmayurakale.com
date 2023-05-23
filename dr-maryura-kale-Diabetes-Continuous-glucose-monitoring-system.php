<?php 
$title ='Continuous glucose monitoring system Treatments by Dr Mayura Kale (Diabetologist) in Chatrapati Sambhaji Nagar,Maharashtra';
include("includes/header.php")?>
<main id="main">
  <style>
    #more {
      display: none;
      
    }

    #myBtn{
      color:blue;
      border:none;
      /* margin-left:450px; */
      background-color:white;

    }
    
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
    
  

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
       <div class="d-flex justify-content-between align-items-center">
          <h2>Continuous glucose monitoring system </h2>
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
      <div>
        <!-- <h1 class="text-primary text-center"></h1> -->
        <!-- <hr/ class="w-25 m-auto"> -->
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-12">
          <img src="img\Photos\Continuous glucose monitoring system.jpg" class="img-fluid img-thumbnail mt-3" alt="">


          
          <div style="  line-height: 1.4;">
         <p class="p-2 mt-3" style="text-align: justify; text-indent: 25px;font-family: 'Tinos', serif;font-size: 18px;">
         It's important for people with diabetes to work closely with their healthcare team to manage their blood sugar levels and to undergo regular screening for complications. Early detection and treatment can help prevent or delay the onset of these complications.<br>
           <span id="dots"></span><span id="more"> 
          Continuous glucose monitoring (CGM) is a way to track blood sugar levels in real-time using a small device that is inserted under the skin. CGM systems use a small sensor that measures glucose levels in the interstitial fluid (fluid that surrounds the cells) and transmit this data wirelessly to a receiver or a smartphone app. The CGM system provides a continuous stream of glucose readings throughout the day and night, allowing people with diabetes to monitor their blood sugar levels more frequently than traditional fingerstick testing. CGM systems can provide a variety of information such as glucose trends, rate of change, and alerts for high or low glucose levels. </p>
<h4 style="font-family: 'Tinos', serif; font-size: 18px; text-align: justify; font-weight: bold;"><i class="bx bxs-quote-alt-left quote-icon-left"></i>We regularly serve people with diabetes to identify patterns of blood sugar and make adjustments to their insulin doses, diet, and exercise to better manage their diabetes by using the CGMS. We use it regularly in patients with diabetes having frequent low sugar problem.<i class="bx bxs-quote-alt-right quote-icon-right"></i></h4>
<button onclick="myFunction()" id="myBtn">Read more</button>
           
          
         </div>
          
           
        </div>

  <div class="col-sm-12 col-md-6 col-lg-6 col-12 mt-4 ">
          <div class="card-body ">
            <section id="appointment" class="appointment section-bg">
                <div class="container">
            
                  <div class="section-title">
                    <h2>Make an Appointment</h2>
                    
                  </div>
                  <?php include('message.php')?>
            
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
                   
                    <div class="text-center"><button type="submit" class="btn btn-primary" style="margin-right:25px;">Make an Appointment</button></div>
                  </form>
            
                </div>
              </section>
            
        </div>

        </div>
        
        <!-- <p style="text-align: justify; text-indent: 50px;font-family: 'Tinos', serif;font-size: 18px;"> It is important to note that these strategies are not one-size-fits-all and should be tailored to an individual's specific needs and circumstances. It is recommended to consult with a registered dietitian for personalized advice on managing lifestyle disorders through diet.</p> -->
      </div>

    </div>
   </section>


   <!-- ---------------Feedback---------------------- -->
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

<!-- ------------------------patient feedback form--------------------------- -->
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

    
    

  


  </main><!-- End #main -->
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

  <script>
    function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
  </script>

<!-- End #main















<?php include("includes/footer.php")?>
