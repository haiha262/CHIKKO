<?php
if(isset($_POST["name"])) {
  $name = $_POST['name'];                 // Sender's name
  $email = $_POST['email'];     // Sender's email address
  $phone  = $_POST['phone'];     // Sender's email address

    $date = $_POST['date'];    // Sender's message
    $time = $_POST['time'];    // Sender's message
    $person = $_POST['person'];    // Sender's message
  $message = $_POST['message'];    // Sender's message


  $from = 'Contact Form';
  $to = 'haiha262@gmail.com';     // Recipient's email address
  $subject = 'Message from Chikko Cafe ';

 $body = " From: $name \n E-Mail: $email \n Phone : $phone \n Message : $message";
 if( $date != "")
 {
     $body .= "\n Reservation for $person people on $date  at  $time";
 }
	// init error message 
	$errmsg='';
  // Check if name has been entered
  if (!$_POST['name']) {
   $errmsg = 'Please enter your name';
  }

  
  // Check if email has been entered and is valid
  if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
   $errmsg = 'Please enter a valid email address';
  }
  
  //Check if message has been entered
  if (!$_POST['message']) {
   $errmsg = 'Please enter your message';
  }
 
	$result='';
  // If there are no errors, send the email

  if (!$errmsg) {
		if (mail ($to, $subject, $body, $from)) {
			$result='<div class="alert alert-success">Thank you for contacting us. Your message has been successfully sent. We will contact you very soon!</div>'; 
		} 
		else {
		  $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
		}
	}
	else{
		$result='<div class="alert alert-danger">'.$errmsg.'</div>';
	}
	echo $result;
 }
?>
