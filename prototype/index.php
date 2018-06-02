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
<div id = "intro">
<nav class="navbar navbar-expand-md navbar-light" style="background-color:#A1BF8F">
<?php include "includes/navigation.php"; ?>
</nav>
<main class = "container-fluid">
<section class="row justify-content-center">
    <section class="col-md-6" style="max-width: 720px">
        <img id="layer1" src ="images/layer1.png"  alt="Logo" class="img-fluid">
        <img id="layer2" src ="images/layer2.png"  alt="Logo" class="img-fluid">
        <img id="layer3" src ="images/layer3.png"  alt="Logo" class="img-fluid">
        <img id="layer4" src ="images/layer4.png"  alt="Logo" class="img-fluid">
        <img id="layer5" src ="images/layer5.png"  alt="Logo" class="img-fluid">
        </section>
    <section class="col-md-6">
        <img src="images/me2.png" alt="portrait" class=" d-none mx-auto d-md-block img-fluid portrait rounded">

        <article class="goal container-fluid rounded shadow-lg">Let's Make Something Interesting!</article>
        </section>
</section>

</main>
</div> <!--end intro-->
<div id = "project-container" class="container-fluid">
<?php include "includes/projectgallery.php"; ?>
</div>
<footer class="text-center">
<?php include "includes/footer.php"; ?>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
<script src = "js/script.js"></script>
<script src = "js/popper.min.js"></script>
<script src = "js/bootstrap.min.js"></script>
</body>
</html>
