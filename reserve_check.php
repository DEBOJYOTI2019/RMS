<?php
include "connection.php";
$Time=$_POST['time'];
$Date=date('20y-m-d',strtotime($_POST['date']));
$t=date('h:i:s',strtotime($Time));
$q="SELECT * from reserve where Date='$Date' and Time='$Time' or Time='$t'";
$r=mysqli_query($conn,$q);
$x=mysqli_fetch_array($r);
if($x['Date']!=$Date && $x['Time']!=$t)
{
    echo ' <script type="text/javascript">
    alert(":)");
    location="reserve_book.php";
    </script>';
}
else
{
    echo ' <script type="text/javascript">
    alert("Sorry :)");
    location="reserve_book.php";
    </script>';
}
echo $t;
?>