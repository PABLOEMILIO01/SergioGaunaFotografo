<?php

  $receiving_email_address = 'sergiogaunafotografo@gmail.com';

  if( file_exists($php_email_form = 'php-email-form/contact.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

/* 
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
 */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
  $headers = "From: ".$email.'sergiogaunafotografo@gmail.com';
  mail($email_to, $email_subject, $email_message, $headers);
  header("Location: https://example.com");
?>
