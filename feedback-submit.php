<?php 
session_start();
include('session_check.php');


?>
<?php
include 'connection.php';
$id=$_SESSION['bio']['id'];
$name=$_SESSION['bio']['Name'];
$email=$_SESSION['bio']['Email'];
$food=$_POST['fq_food'];
$msg=$_POST['fq_msg'];
$q="INSERT INTO feedback(id,Name,Email,food,message) VALUES('$id','$name','$email','$food','$msg');";
$r=mysqli_query($conn,$q);
if($r==1)
{
    
        echo ' <script type="text/javascript">
        alert(" Sent Successfully!!");
        location="welcome2.php";
        </script>';
    
}
else
{
    
        echo ' <script type="text/javascript">
        alert(" UnSuccessful :(");
        location="welcome2.php";
        </script>';
    
}
?>