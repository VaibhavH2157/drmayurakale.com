<?php   include('../config.php'); ?>
<?php

$message = "";

if(isset($_GET['id'])){
    $active_id = $_GET['id'];
    $updated = "UPDATE `feedback_student` SET `status`= 1 where id='$active_id'";
    $yes = mysqli_query($db,$updated);
    if($yes){
       $message = "Your Feedback is deactive";
       header('Location:feedbacks.php');
      
    }
}
?>