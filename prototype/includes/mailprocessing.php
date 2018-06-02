<?php	  
	  require "class/PHPMailerAutoload.php";
	  require "class/class.phpmailer.php";
      $mail = new PHPmailer(true);
      try{
		$mail->IsSMTP();
		$mail->Host = "squim.systems";
		$mail->Port = "587";
		$mail->SMTPAuth = true;
		$mail->Username = "christopher.phillips@squim.systems";
		$mail->Password = "TheBarrowMan!3";
		$mail->SMTPSecure = "tls";
		$mail->setFrom($email, $name);
		$mail->AddAddress("christopher.phillips@squim.systems");
		$mail->AddCC($email, $name);
		$mail->WordWrap = 50;
		$mail->IsHTML(true);
		$mail->Subject = $subject;
		$mail->Body = $comment;
		$mail->Send();
		$message = "<div class='alert alert-success text-center' role='alert'><strong>Thank You!</strong></div><br>"
		."Your name: ".$name."<br>"
		."Your email: ".$email."<br>"
		."Your subject: ".$subject."<br>"
		."Your message: ".$comment."<br><br>";
		$nameErr = "";
		$emailErr = ""; 
		$subjErr = "";
		$commentErr = "";
		$name = "";
		$email = "";
		$subject = ""; 
		$comment = "";
      } catch (phpmailerException $e) {
        echo $e->errorMessage(); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
        echo $e->getMessage(); //Boring error messages from anything else!
    }
    include "includes/closeconnection.php"
?>