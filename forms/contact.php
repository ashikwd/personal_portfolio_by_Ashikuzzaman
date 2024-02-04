<?php
  // Replace ashikwdbd@gmail.com with your real receiving email address
  $receiving_email_address = 'ashikwdbd@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
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
 
  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  $contact->smtp = array(
    'host' => 'smtp.gmail.com',
    'username' => 'ashikwdbd@gmail.com',
    'password' => 'tmkguftosxccorku',
    'port' => '587',
    'to' => 'ashikwdbd@gmail.com', // this is your Email address
    'from' => 'usermail@gmail.com', // this is the sender's Email address
  );

      
  

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
