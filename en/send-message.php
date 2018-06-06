<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

function verifyQuestion()
{
	session_start();
	$answear = trim(strtolower($_POST['answear']));
	return $answear === $_SESSION['answear'];
}

  if(isset($_POST['message-body']) && isset($_POST['answear']))
  {
	 if(verifyQuestion())	
	 {
		 
			require "../PHPMailer/src/Exception.php";
			require "../PHPMailer/src/PHPMailer.php";
			require "../PHPMailer/src/SMTP.php";
			
			$message = trim($_POST['message-body']);
			$userContact = trim($_POST['user-adress']);
			$userContact = (strlen($userContact) > 0) ? $userContact : " nie podano namiarów";
			
			if(!filter_var($userContact, FILTER_VALIDATE_EMAIL))
			{
			  $message .= PHP_EOL.' Namiary : '.$userContact;
              $userContact = "noreply@gmail.com";			  
			}
			

				$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
			try {
				//Server settings
				$mail->SMTPDebug = 0;                                 // Enable verbose debug output
				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = '';                 // SMTP username
				$mail->Password = '';                           // SMTP password
				$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 587;                                    // TCP port to connect to
				$mail->CharSet = 'UTF-8';

				//Recipients
				$mail->setFrom($userContact, 'Użytkownik strony portfolio');
				$mail->addAddress('cybertron2030@gmail.com', 'Imperator');     // Add a recipient
				$mail->addReplyTo($userContact, 'Użytkownik strony portfolio');

				$mail->isHTML(true);                                  
				$mail->Subject = "Wiadomość od podziwiającego portfolio";
				$mail->Body    = $message;

				$mail->send();
				$raport =  "The message has been sent successfully";
			} catch (Exception $e) 
			{
				$raport =  "The message has not been sent because of an unexpected error ".$e->getMessage();
			}	
	 }
	 else
	 {
		$raport = "The message has not been sent because your answear to the anti-spam question is wrong";
	 }
  }
  else
  {
	 $raport = "The message has not been sent because the message body or the answear was empty";
  }

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <title>Artur Mostowiak portfolio</title>
  <meta name="keywords" content="raport, message, sending">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Description" content="Status wysłanej wiadomości">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="Cybertron">
  <link rel="stylesheet" href="/raport.css">
  <link rel="shortcut icon" type="image/png" href="favicon.png">
  <link href='http://fonts.googleapis.com/css?family=Play&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body>

   <div class="raport">
   <?php echo $raport ?>
   </div>

</body>
