<?php 
session_start();
include('session_check.php');
if($_SESSION['bio']['usertype']=='admin')
header('location:admin.php?');
elseif($_SESSION['bio']['usertype']=='employee')
header('location:employee.php?');

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="feedback.css">
    <title>Feedback</title>
  </head>
  <body>
  <div class="padding container-fluid d-flex justify-content-center">
    <div class="col-md-4">
        <div class="free-quote bg-dark h-100">
            <h2 class="my-4 heading text-center">Complain/Feedback</h2>
            <form action="feedback-submit.php" method="post">
                <div class="form-group"> <label for="fq_name">Food Name</label> <input type="text" class="form-control btn-block" id="fq_name" name="fq_food" placeholder="Food Name"> </div>
                <div class="form-group mb-4"> <label for="fq_email">Message</label> <input type="text" class="form-control btn-block" id="fq_email" name="fq_msg" placeholder="Message"> </div>
                <div class="form-group"> <input type="submit" class="btn btn-primary text-white py-2 px-4 btn-block" ></div>
            </form>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
$("#contactus-submit").click(function(){
var r= $('<i class="fa fa-spinner fa-spin"></i>');
$("#contactus-submit").html(r);
$("#contactus-submit").append(" Sending...");
$("#contactus-submit").attr("disabled", true);


setTimeout(function(){
$("#contactus-submit").attr("disabled", false);
$("#contactus-submit").html('Send');

}, 3000);


});
});
</script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>