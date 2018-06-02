<?php
if(isset($_POST["submit"])) {
	
  if (empty($_POST["name"])) {
    $nameErr = "<div class='alert alert-warning text-center' role='alert'>Name is required</div>";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "<div class='alert alert-warning text-center' role='alert'>Only letters and white space allowed</div>"; 
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "<div class='alert alert-warning text-center' role='alert'>Email is required</div>";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "<div class='alert alert-warning text-center' role='alert'>Invalid email format</div>";
    }
  }
  if(empty($_POST["subject"]))
	{
		$subjErr= "<div class='alert alert-warning text-center' role='alert'>Subject is required</div>";
	}
	else
	{
		$subject = test_input($_POST["subject"]);
	}
  if (empty($_POST["comment"])) {
    $commentErr= "<div class='alert alert-warning text-center' role='alert'>Please Enter A Comment</div>";
  } else {
    $comment = test_input($_POST["comment"]);
  }
  if ($nameErr=='' && $emailErr=='' && $subjErr=='' && $commentErr=='' ){
      echo"<style>#form{display: none;}</style>";
      include "includes/writetodatabase.php";
      include "includes/mailprocessing.php";
}
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>