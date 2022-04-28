<?php 
session_start();
include('session_check.php');
if($_SESSION['bio']['usertype']=='user')
header('location:welcome2.php?');
elseif($_SESSION['bio']['usertype']=='employee')
header('location:employee.php?');


?>
<?php
$conn=mysqli_connect('localhost','root','','ccjitterss');
$id=$_GET['id'];
$a=$_POST['open1'];
$b=date('Y/m/d',strtotime($_POST['date1']));
$c=$_POST['bill1'];
$d=$_POST['amount1'];
$e=$_POST['coll1'];
$f=$_POST['delivery1'];
$g=$_POST['oln1'];
$h=$_POST['exp1'];
$i=$_POST['sf1'];
$j=$_POST['ba1'];
$k=$_POST['dep1'];
$l=$_POST['fh1'];
$m=$_POST['rm1'];
$n=$_POST['opca1'];
$o=$_POST['opcae1'];
$p=$_POST['net1'];

$q="update sales set ob='$a',date='$b',bn='$c',amt='$d',ct='$e',cd='$f',online='$g',exp='$h',spend='$i',deposit='$k',remarks='$m',opca='$n',opcae='$o',netclosing='$p',bavl='$j',fund='$l' where id='$id'";
$x=mysqli_query($conn,$q);
if($x==1)
{
    echo ' <script type="text/javascript">
    alert("Updated Successfully :) ");
    location="Management.php";
    </script>';
}
else
{
    echo ' <script type="text/javascript">
    alert("Failed to Update :(");
    location="Management.php";
    </script>';
}
?>