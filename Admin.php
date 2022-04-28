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
$q="SELECT COUNT(*) from sales";
$m2="SELECT COUNT(*) from message";
$m3="SELECT COUNT(*) from feedback";
$x=mysqli_query($conn,$q);
$x2=mysqli_query($conn,$m2);
$x3=mysqli_query($conn,$m3);
$r=mysqli_fetch_array($x);
$r2=mysqli_fetch_array($x2);
$r3=mysqli_fetch_array($x3);
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
    <title>Admin</title>
  </head>
  <body>

  <div>
    <div class="d-flex flex-row">
        <div class="col-md-3">
            <div class="card card1 p-3">
                <div class=" image d-flex flex-row align-items-center mt-3"> <img src="assets/img/ccjitterssblack.png" height="50" width="50" /> <span>Admin</span> </div>
                <hr class="hline">
                <div class="d-flex flex-column align-items-center"> <button class="btn"><i class="fa fa-dashboard"></i><span style="font-size:18px; color:red;">Dashboard</span></button>
                <button class="btn"><i class="fa fa-dashboard"></i><span style="font-size:18px; color:red;">
                <a style="text-decoration:none; color:white;" href="../bill/bill.php">Customer Billing</a></span></button>
                <button class="btn"><i class="fa fa-dashboard"></i><span >
                <a style="text-decoration:none; color:white;" href="bill/bill_show.php">Bill Report</a></span></button>
                
                <button class="btn"><i class="fa fa-dashboard"></i><span style="font-size:18px; color:red;">
                <a style="text-decoration:none; color:white;" href="users.php">Users</a></span></button>
                <button class="btn"><i class="fas fas-dashboard"></i><span><a href="management.php" style="text-decoration:none; color:white; font-size:18px;">Sales Report</a></span></button> <button class="btn mt-3"><i class="fa fa-users"></i><span><a href="sales-admin.php"style="text-decoration:none; color:white; font-size:18px;">Sales Entry</a></span></button> <button class="btn mt-3"><i class="fa fa-inbox"></i><span style="font-size:18px;">Inventory</span></button> <span class="other mt-4">Other Information</span> <button class="btn mt-3"><i class="fa fa-book"></i><a href="logout.php" style="text-decoration:none; color:white;"><span style="font-size:18px;">Logout</span></a></div>
            </div>
        </div>
        <div class="col-md-9">
            
            <div class="card card2 p-3">
                <div class="hello d-flex justify-content-end align-items-center mt-3"> <span>Welcome Director</span> </div>
                <div style="margin-top:20%; margin-left:5%;">
                <div class="d-flex flex-row gap-3">
                    <div class="card cardchild mt-3 p-2 px-3 py-3">
                        <div class="d-flex p-2 mt-2 justify-content-between rounded">
                            <div class="d-flex flex-column"><a href="sales-admin.php" style="color:black; text-decoration:none;"><span class="type">Sales Entry<br></span><span class="number"><?php echo $r[0] ?></span></a></div>
                            <div class="d-flex flex-column"><img src="https://i.imgur.com/Slxu74c.png" class="logo1" height="40" width="40" /><span class="percentage"><?php echo $y?>%</span></div>    
                        </div>
                    </div>
                    <div class="card cardchild mt-3 p-2 px-3 py-3">
                        <div class="d-flex p-2 mt-2 justify-content-between rounded">
                            <div class="d-flex flex-column"><a href="management.php"style="color:black; text-decoration:none;"><span class="type">Sales Report<br></span><span class="number"><?php echo $r[0] ?></span></a></div>
                            <div class="d-flex flex-column"><img src="https://i.imgur.com/7SEdq7z.png" class="logo2" height="40" width="40" /><span class="percentage2"><?php echo $y?>%</span></div>
                        
                        </div>
                    </div>
                    <div class="card cardchild mt-3 p-2 px-3 py-3">
                        <div class="d-flex p-2 mt-2 justify-content-between rounded">
                            <div class="d-flex flex-column"><a href="feedback-view.php"style="color:black; text-decoration:none;"><span class="type">Feedback<br></span><span class="number"><?php echo $r3[0] ?></span></a></div>
                            <div class="d-flex flex-column"><img src="https://i.imgur.com/7SEdq7z.png" class="logo2" height="40" width="40" /><span class="percentage2"></span></div>
                          </div>
                    </div>
                    <div class="card cardchild mt-3 p-2 px-3 py-3">
                        <div class="d-flex p-2 mt-2 justify-content-between rounded">
                            <div class="d-flex flex-column"><a href="message-show.php"style="color:black; text-decoration:none;"><span class="type" >Business Enquiry<br></span><span class="number"><?php echo $r2[0] ?></span></a></div>
                            <div class="d-flex flex-column"><img src=" https://i.imgur.com/iLU5F9A.png" class="logo4" height="40" width="40" /><span class="percentage4"></span></div>
                        </div>
                    </div>

                    <div class="card cardchild mt-3 p-2 px-3 py-3">
                        <div class="d-flex p-2 mt-2 justify-content-between rounded">
                            <div class="d-flex flex-column"><a href="salesreport.php"style="color:black; text-decoration:none;"><span class="type">Inventory<br></span><span class="number">120</span></a></div>
                            <div class="d-flex flex-column"><img src=" https://i.imgur.com/iLU5F9A.png" class="logo4" height="40" width="40" /><span class="percentage4">13%</span></div>
                        </div>
                    </div>

                </div>
            </div>
                <div class="d-flex justify-content-center mt-5 gap-2 p-3">
                   
                </div>
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