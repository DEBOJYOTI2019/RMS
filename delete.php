<?php
$conn=mysqli_connect('localhost','root','','ccjitterss');
$id=$_GET['id'];
$q1="delete from message where id='$id'";
$x2=mysqli_query($conn,$q1);

if($x2==1 )
{
    header("location:message-show.php?msg=done");
}
else
{
    header("location:message-show.php?msg=not done");
}

?>