 <?php 
$to = 'jbrown947@729studio.com';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = '$name Would Like More Info About 729 Studio!';
$message = <<< EMAIL

Hi! My name is $name.
My email address is $email.
$message

EMAIL;
$header = '$email';

if($_POST) {
	mail($to, $subject, $message, $header);
	echo('Thank you. We usually respond within 24 hours.');
} 
?>
  
