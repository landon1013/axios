<?php
  $_POST = json_decode(file_get_content('php://input'), true);

  $name = $_POST['name'];
  $email = $_POST['email'];
  $body = $_POST['body'];

  $to = "landon@thecallfamily.com"; //recipient

  $subject = "RIA Emails"; //subject
  $header = "From: ". $name . " <" . $email . ">\r\n";

  if (mail($to, $subject, $body, $header)){
    include'thanks.php';
  } else {
    echo 'Error: something went wrong.';
  }

?>
