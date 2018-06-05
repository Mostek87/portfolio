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
		 
			require "PHPMailer/src/Exception.php";
			require "PHPMailer/src/PHPMailer.php";
			require "PHPMailer/src/SMTP.php";
			
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
				$raport =  "Wiadomość wysłana pomyślnie";
			} catch (Exception $e) 
			{
				$raport =  "Nie udało się wysłać wiadomości z powodu nieoczekiwanego błędu ".$e->getMessage();
			}	
	 }
	 else
	 {
		$raport = "Nie wysłano wiadomości ze względu na błędną odpowiedź na pytanie kontrolne";
	 }
  }
  else
  {
	 $raport = "Nie udało się wysłać wiadomości ponieważ nie podano treści wiadomości, lub odpowiedzi na pytanie kontrolne.";
  }

?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Artur Mostowiak portfolio</title>
  <meta name="keywords" content="raport, wiadomość, wysyłanie">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Description" content="Status wysłanej wiadomości">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="Cybertron">
  <link rel="stylesheet" href="raport.css">
  <link rel="shortcut icon" type="image/png" href="favicon.png">
  <link href='http://fonts.googleapis.com/css?family=Play&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body>

   <div class="raport">
   <?php echo $raport ?>
   </div>

</body>
