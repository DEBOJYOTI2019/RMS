<?php

$id=$_POST['a1'];
$conn=mysqli_connect("localhost","root","","ccjitterss");
$query="update message set `status`=1 where id='$id'";
$r=mysqli_query($conn,$query);
if($r==1)
{
    echo ' <script type="text/javascript">
    alert("Mail Sent Successfully!!");
    location="message-show.php";
    </script>';
}
else
{
    echo ' <script type="text/javascript">
    alert("Mail Sent failed :(");
    location="message-show.php";
    </script>'; 
}
?>
