

<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['web'])     ||
   empty($_POST['q1'])   ||
   empty($_POST['q2'])   ||
   empty($_POST['q3'])   ||
   empty($_POST['q4'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$web = strip_tags(htmlspecialchars($_POST['web']));
$q1 = strip_tags(htmlspecialchars($_POST['q1']));
$q2 = strip_tags(htmlspecialchars($_POST['q2']));
$q3 = strip_tags(htmlspecialchars($_POST['q3']));
$q4 = strip_tags(htmlspecialchars($_POST['q4']));
   
// Create the email and send the message
$to = 'hello@tinyapartmentmtl.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nWebsite: $web\n\nQ1: $q1\n\nQ2: $q2\n\nQ3: $q3\n\nQ4: $q4\n";
$headers = "From: noreply@tinyapartmentmtl.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
