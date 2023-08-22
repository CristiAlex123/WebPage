<?php​

function died($error) {​

        // your error code can go here​

        echo "We are very sorry, but there were error(s) found with the form you submitted. ";​

        echo "These errors appear below.<br /><br />";​

        echo $error."<br /><br />";​

        echo "Please go back and fix these errors.<br /><br />";​

        die();​

    }​

// validation expected data exists​

    if(!isset($_POST['text']) ||​

        !isset($_POST['captcha'])) {​

        died('We are sorry, but there appears to be a problem with the form you submitted.');       ​

    }​

 $text = $_POST['text']; // required​

 $captcha = $_POST['captcha']; // required​

 $correctsum = $_POST['correctsum']; 
 
 $error_message = "";​

    $string_exp = "/^[A-Za-z .'-]+$/";​

 ​

  if(!preg_match($string_exp,$text)) {​

    $error_message .= 'The Name you entered does not appear to be valid.<br />';​

  }​

​

if(!isset($_POST['captcha'])){  ​

     $error_message.= 'Please enter the captcha!<br/>';​

 }elseif($_POST['captcha']!=$_POST['correctsum']){​

      $error_message.= 'The sum is not correct! Please add again.<br/>';​

 }else{​

    header('location:ura.php');​

 }  if(strlen($error_message) > 0) {​

    died($error_message);​

  }​

?>