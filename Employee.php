<?php 
session_start();
include 'connection.php';
include('session_check.php');
if($_SESSION['bio']['usertype']=='user'  )
header('location:welcome2.php?');
elseif($_SESSION['bio']['usertype']=='admin')
header('location:Admin.php?');
$r1=$_SESSION['bio']['id'];
$q1="select * from registration where id='$r1'";
$x1=mysqli_query($conn,$q1);
$k1=mysqli_fetch_array($x1);

?>
<?php
$conn=mysqli_connect('localhost','root','','ccjitterss');
$q="SELECT COUNT(*) from sales";
$x=mysqli_query($conn,$q);
$r=mysqli_fetch_array($x);
$y=(int)(((int)$r[0]/30)*100);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/Employee.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Employee</title>
  </head>
  <body>

  <div>
    <div class="d-flex flex-row">
        <div class="col-md-3">
            <div class="card card1 p-3">
                <div class=" image d-flex flex-row align-items-center mt-3" style="border-radius:20px;"><img src="<?php echo $k1['file'] ?>"  height="50" width="50"/> <span style="font-size:20px; margin-left:10px;"><?php echo $k1['Name'] ?></span> </div>
                <hr class="hline">
                <div class="d-flex flex-column align-items-center"> 
                    <button class="btn"><i class="fa fa-dashboard"></i><span style="color:red; font-size:18px;">Dashboard</span></button>
                    <button class="btn"><i class="fa fa-dashboard"></i><a href="../bill/bill.php" style="color:white; text-decoration:none;"><span >Customer Billing</span></a></button>  
                    <button class="btn"><i class="fa fa-dashboard"></i><a href="salesreport.php" style="color:white; tetx-decoration:none;"><span style="font-size:18px;">Sales Report</span></a></button> <button class="btn mt-3"><i class="fa fa-users"></i><span><a href="sales.php"style="text-decoration:none; color:white; font-size:18px;">Sales Entry</a></span></button> <button class="btn mt-3"><i class="fa fa-inbox"></i><span style="font-size:18px;">Inventory</span></button> <span class="other mt-4">Other Information</span> <button class="btn mt-3"><i class="fa fa-book"></i><a href="logout.php" style="text-decoration:none; color:white;"><span style="font-size:18px;">Logout</span></a></div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card2 p-3">
                <div class="hello d-flex justify-content-end align-items-center mt-3"> <span>Hi,RMS Employee</span> </div>
                <div class="d-flex flex-row gap-3">
                    <div class="card cardchild mt-3 p-2 px-3 py-3">
                        <div class="d-flex p-2 mt-2 justify-content-between rounded">
                            <div class="d-flex flex-column"><span class="type">Sales Entry</span><span class="number"><?php echo $r[0] ?></span></div>
                            <div class="d-flex flex-column"><img src="https://i.imgur.com/Slxu74c.png" class="logo1" height="40" width="40" /><span class="percentage"><?php echo $y?>%</span></div>
                        </div>
                    </div>
                    <div class="card cardchild mt-3 p-2 px-3 py-3">
                        <div class="d-flex p-2 mt-2 justify-content-between rounded">
                            <div class="d-flex flex-column"><span class="type">Grocery Entry</span><span class="number"><?php echo $r[0] ?></span></div>
                            <div class="d-flex flex-column"><img src="https://i.imgur.com/7SEdq7z.png" class="logo2" height="40" width="40" /><span class="percentage2"><?php echo $y?>%</span></div>
                        </div>
                    </div>
                    <div class="card cardchild mt-3 p-2 px-3 py-3">
                        <div class="d-flex p-2 mt-2 justify-content-between rounded">
                            <div class="d-flex flex-column"><span class="type">Vegetable Entry</span><span class="number">25</span></div>
                            <div class="d-flex flex-column"><img src="https://i.imgur.com/xvUzRjK.png" class="logo3" height="40" width="40" /><span class="percentage3">17%</span></div>
                        </div>
                    </div>
                    <div class="card cardchild mt-3 p-2 px-3 py-3">
                        <div class="d-flex p-2 mt-2 justify-content-between rounded">
                            <div class="d-flex flex-column"><span class="type">Chkn/Fish Entry</span><span class="number">5</span></div>
                            <div class="d-flex flex-column"><img src=" https://i.imgur.com/iLU5F9A.png" class="logo4" height="40" width="40" /><span class="percentage4">13%</span></div>
                        </div>
                    </div>
                </div>
                <!--<div class="d-flex justify-content-center mt-5 gap-2 p-3">
                    <div class="col-md-6">
                        <div class="card cardchildchild p-2">
                            <div class="profile1"> <img src="img/rm.jpg" height="90" width="90" class="rounded-circle" /> </div>
                            <div class="d-flex flex-column justify-content-center align-items-center mt-5"> <span class="name">Rakesh Majumdar</span> <span class="mt-1 braceletid">Director</span> <span class="dummytext mt-3 p-3">Hello Jitterians, We are always here you help you feel free to contact us.</span> </div>
                            <div class="d-flex justify-content-center align-items-center mt-3"> <button class="btn1">Schedule a Talk</button> </div>
                            <div class=" icons d-flex flex-row justify-content-center gap-3 mt-4"> <span><i class="fa fa-google"></i></span> <span><i class="fa fa-facebook"></i></span> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-instagram"></i></span> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card cardchildchild p-2">
                            <div class="profile1"> <img src="img/ad.jpg" height="90" width="90" class="rounded-circle" /> </div>
                            <div class="d-flex flex-column justify-content-center align-items-center mt-5"> <span class="name">Ananda Das</span> <span class="mt-1 braceletid">Director</span> <span class="dummytext mt-3 p-3">Hello Jitterians, We are always here you help you feel free to contact us.</span> </div>
                            <div class="d-flex justify-content-center align-items-center mt-3"> <button class="btn2">Schedule a Talk</button> </div>
                            <div class=" icons d-flex flex-row justify-content-center gap-3 mt-4"> <span><i class="fa fa-google"></i></span> <span><i class="fa fa-facebook"></i></span> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-instagram"></i></span> </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>