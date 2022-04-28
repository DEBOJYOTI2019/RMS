<?php
$conn=mysqli_connect("localhost","root","","ccjitterss");
if($conn){
$name=$_POST['Name'];
$gender=$_POST['Gender'];
$email_id=$_POST['Email'];
$phone=$_POST['Phone'];
$address=$_POST['Address'];
$city=$_POST['City'];
$state=$_POST['State'];

$password=$_POST['password'];
$password_enc=password_hash($password,PASSWORD_BCRYPT);
$photo=$_FILES["photo1"]["name"];
$images="profile-logo/".$photo;
$usertype=$_POST['usertype'];
$q="INSERT INTO `registration`(`Name`, `Gender`, `Email`, `Phone`, `Address`, `City`, `State`, `password`, `file`, `usertype`) VALUES ('$name','$gender','$email_id','$phone','$address','$city','$state','$password_enc','$images','$usertype')";
$r=mysqli_query($conn,$q);
if($r==1)
{
    move_uploaded_file($_FILES['photo1']['tmp_name'],$images);
    echo ' <script type="text/javascript">
    alert("Registration Successfull!! :)");
    history.back();
    </script>'; 
}
else
{
    echo ' <script type="text/javascript">
    alert("Registration Failed :( ");
    history.back();
    </script>'; 
}
}
else{
    echo ' <script type="text/javascript">
    alert("Connection Error :)");
    history.back();
    </script>'; 
}
?>