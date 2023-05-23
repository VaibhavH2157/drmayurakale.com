
<?php   include('../config.php'); ?>
<?php

$message = "";

if(isset($_GET['id'])){
    $active_id = $_GET['id'];
    $update = "UPDATE `feedback_student` SET `status`= 0 where id='$active_id'";
    print_r($update);
    $yes = mysqli_query($db,$update);

    if($yes){
       $message = "Your Feedback is active";
       header('Location:feedbacks.php');
     
    }
}
?>