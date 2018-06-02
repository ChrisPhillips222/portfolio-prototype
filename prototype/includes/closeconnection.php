<?php 

$nameErr = "";
$emailErr = ""; 
$subjErr = "";
$commentErr = "";
$firstName = "";
$lastName = "";
$email = "";
$subject = ""; 
$comment = "";
$_POST = array();

if(isset($conn)) {
    $conn = null;
    //echo "<p>4. Database connection closed!</p>";
//}
//else{
    //echo "<br>4. No database connection to close.";
    echo "<script>
        var timer = setTimeout(function() {
            window.location='./index.php'
        }, 3000);
    </script>";
}

?>