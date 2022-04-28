<?php 
session_start();
include('session_check.php');
if($_SESSION['bio']['usertype']=='admin')
header('location:admin.php?');
elseif($_SESSION['bio']['usertype']=='user')
header('location:welcome2.php?');


?>
<?php
$conn=mysqli_connect('localhost','root','','ccjitterss');

$a=$_POST['open'];
$b=date('Y/m/d',strtotime($_POST['date']));
$c=$_POST['bill'];
$d=$_POST['amount'];
$e=$_POST['coll'];
$f=$_POST['delivery'];
$g=$_POST['oln'];
$h=$_POST['exp'];
$i=$_POST['sf'];
$j=$_POST['ba'];
$k=$_POST['dep'];
$l=$_POST['fh'];
$m=$_POST['rm'];
$n='0';
$o='0';
$p='0';
$var="SELECT date from sales where date='$b'";
$query=mysqli_query($conn,$var);
$res=mysqli_fetch_array($query);
$dtt=date("20y-m-d");
if($_POST['date']==$dtt && $res==0)
{
$q="INSERT into `sales`(`ob`,`date`,`bn`,`amt`,`ct`,`cd`,`online`,`exp`,`spend`,`bavl`,`deposit`,`fund`,`remarks`,`opca`,`opcae`,`netclosing`) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p');";
$x=mysqli_query($conn,$q);
$dt=date('Y/m/d');
$x2="SELECT * from sales where date='$dt'";
$x3=mysqli_query($conn,$x2);
$r=mysqli_fetch_array($x3);
$id2=$r['id'];

?>
<?php
if($x==1)
{
  echo $r['id'];
  header('Location: sales.php?id='.$id2); 
    ?>
   
  <?php  
}
else
{
    echo ' <script type="text/javascript">
    alert("Please!! Try again Now..");
    location="sales.php";
    </script>';
}
}

else
{
    echo ' <script type="text/javascript">
    alert("Please!! Try again Now..");
    location="sales.php";
    </script>';
}
?>