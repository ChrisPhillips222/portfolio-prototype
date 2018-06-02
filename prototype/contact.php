<!doctype html>
<html lang = "en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href='http://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet"> <link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/bootstrap.css">
<style type="text/css">
body,td,th {
	font-family: "IBM Plex Sans", sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}
</style>
<script src = "js/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.0/TweenMax.min.js"></script>
<title>Chris Phillips</title>
</head>

<body id="body" class="max-width">
<nav class="navbar navbar-expand-md navbar-light" style="background-color:#A1BF8F">
<?php include "includes/navigation.php"; ?>
</nav>
<main  class = "container-fluid h-100">
		<div class="w-75 mx-auto">
		            <?php 
					echo $message;
					?>
					<form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<div class="form-group">
					
					<fieldset>
						<label>What's your name?</label>
						<input type="text" class="form-control" name="name" id="name" required tabindex="1" value="<?php echo $name;?>"><br>
						<?php echo $nameErr;?>
						<label>Email address</label>
						<input type="email" class="form-control" name="email" id="email" required tabindex="3"  value="<?php echo $email;?>"><br>
						<?php echo $emailErr;?>
						<label>Subject</label>
						<input type="text" class="form-control" name="subject" id="subject" required tabindex="4" value="<?php echo $subject;?>"><br>
						<?php echo $subjErr;?>
						<label>What's on your mind?</label>
						<textarea type="text" class="form-control" id="comment" name="comment" required tabindex="5" maxlength="1500"><?php echo $comment;?></textarea><br>
						<?php echo $commentErr;?>
					</fieldset>	
					<input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Send" tabindex="6">
					
					</div><!-- /.form-group -->
				</form>
			</div>
				
</main>
<footer class="text-center">
<?php include "includes/footer.php"; ?>
</footer>
<script src = "js/script.js"></script>
<script src = "js/popper.min.js"></script>
<script src = "js/bootstrap.min.js"></script>
</body>
</html>
				