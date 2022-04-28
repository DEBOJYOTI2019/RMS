

<?php
include "connection.php";
$Table=$_POST['tbn'];
$Time=$_POST['tm'];
$Date=date('Y/m/d',strtotime($_POST['dte']));
date_default_timezone_set('Asia/Kolkata');
$t=date('H:i',strtotime($Time));
$q="INSERT INTO reserve(`Tables`,`Date`,`Time`,`paystatus`,`transaction_id`) values('$Table','$Date','$t','0','0');";
$r=mysqli_query($conn,$q);
if($r==1)
{
    echo ' <script type="text/javascript">
    alert("Seats Booked Successfully :)");
    location="reserve.php";
    </script>';
}
else
{
    echo ' <script type="text/javascript">
    alert("Sorry Reservation Failed :)");
    location="reserve.php";
    </script>';
}
?>