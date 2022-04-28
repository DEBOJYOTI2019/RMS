
<?php
include 'connection.php';
session_start();
$name=$_POST['Name'];
$ph=$_POST['Ph'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$iid=$_SESSION['bio']['id'];
$State=$_POST['State'];



$var="UPDATE  registration set Name='$name',Phone='$ph',Address='$Address',City='$City',State='$State' where id='$iid'";
$query=mysqli_query($conn,$var);


if($query==1)
{
    echo ' <script type="text/javascript">
    alert("Successfully Updated :)");
    location="customer-profile.php";
    </script>';
}
else
{
  
    echo ' <script type="text/javascript">
    alert("An Email Already Exists!!!");
    location="customer-profile-edit.php";
    </script>';
}
?>