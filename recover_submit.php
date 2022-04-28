<?php

$conn=mysqli_connect("localhost","root","","ccjitterss");
$code=$_POST['code'];
$pass=$_POST['password'];
$password_enc=password_hash($pass,PASSWORD_BCRYPT);
$q="SELECT Code from registration where Code='$code'";
$r=mysqli_query($conn,$q);
$k=mysqli_fetch_array($r);
if($k['Code']==$code)
{
	$rad=rand(100,1000);
	$q2="UPDATE registration set Password='$password_enc' where Code='$code'";
    $r2=mysqli_query($conn,$q2);
    if($r2==1)
    {
        $q3="UPDATE registration set Code='0' where Code='$code'";
        mysqli_query($conn,$q3);  
        echo ' <script type="text/javascript">
        alert("Password Changed Successfully!!! :(");
        location="index.php";
        </script>';   
    }
    else
    {
        echo ' <script type="text/javascript">
        alert("Failed to connect!!!");
        location="index.php";
        </script>';
    }
}
else
{
    echo ' <script type="text/javascript">
        alert("Failed to connect!!!");
        location="index.php";
        </script>';
}
?>