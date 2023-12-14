<?php
  if(isset( $_POST['name']))
  $name = $_POST['name'];
  if(isset( $_POST['email']))
  $email = $_POST['email'];
  if(isset( $_POST['message']))
  $message = $_POST['message'];
  if(isset( $_POST['phone']))
  $subject = $_POST['phone'];

  if ($name === '') {
    echo "Name cannot be empty.";
    die();
  }
  if ($email === '') {
    echo "Email cannot be empty.";
    die();
  } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Email format invalid.";
      die();
    }
  }
  if ($phone === '') {
    echo "Phone number cannot be empty.";
    die();
  }
  if ($message === '') {
    echo "Message cannot be empty.";
    die();
  }

  $content="From: $name \n Email: $email \n Message: $message";
  $recipient = "desmondsean75@gmail.com";
  $mailheader = "From: $email \r\n";
  mail($recipient, $phone, $content, $mailheader) or die("Error!");
  echo "Email sent!";
?>