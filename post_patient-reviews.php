<?php include("admin/config.php")?>
<?php 

//  $con = mysqli_connect('localhost','root','','drmayurakale');
 

 $name = $_POST['name'];
 $feedback = $_POST['feedback'];
 




 $insert = "INSERT INTO `feedback_student`(`name`,`feedback`) values('$name','$feedback')";

 $sql = mysqli_query($db,$insert);

 print_r($sql);
if($sql)
{
  $_SESSION['status'] = "Your Feedback has been submitted successfully!";
  header('location:index.php');
}
else{
  $_SESSION['status'] = "Try Again!";
  header('location:index.php');

}


// if($sql)
//  {
//     echo '<div class="alert alert-success" role="alert">
//     Your apppointment submited sucessfuly!
//   </div>';
//  }
//  else{
//     echo '<div class="alert alert-danger" role="alert">
//     try again
//   </div>';

 
