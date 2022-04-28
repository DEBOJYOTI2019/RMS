<?php 
session_start();
include('session_check.php');
if($_SESSION['bio']['usertype']=='user')
header('location:welcome2.php?');
elseif($_SESSION['bio']['usertype']=='employee')
header('location:employee.php?');


?>
<?php
include 'connection.php';
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
    <link rel="stylesheet" href="assets/css/sales-style.css">
    <link rel="stylesheet"  media="screen and (max-width:902px)" href="css/mobile.css">
    <title>Employee</title>
  </head>
  <body>

  <div>
    <div class="d-flex flex-row">
        <div class="col-md-3">
            <div class="card card1 p-3">
                <div class=" image d-flex flex-row align-items-center mt-3"> <img src="https://i.imgur.com/R4afbIg.png" height="50" width="50" /> <span>Admin</span> </div>
                <hr class="hline">
                <div class="d-flex flex-column align-items-center"> <button class="btn"><i class="fa fa-dashboard"></i><span style="font-size:18px;"><a href="admin.php" style="text-decoration:none;color:white;">Dashboard</a></span></button> <button class="btn"><i class="fa fa-dashboard"></i><span style="font-size:18px; color:red;">
                <a style="text-decoration:none; color:white;" href="../bill/bill.php">Customer Billing</a></span></button>
                <button class="btn"><i class="fa fa-dashboard"></i><span style="font-size:18px; color:red;">
                <a style="text-decoration:none; color:white;" href="bill/bill_show.php">Bill Report</a></span></button>
                <button class="btn"><i class="fa fa-dashboard"></i><span style="font-size:18px; color:red;">
                <a style="text-decoration:none; color:white;" href="users.php">Users</a></span></button><button class="btn"><i class="fa fa-dashboard"></i><a href="management.php" style="text-decoration:none;color:white;"><span style="font-size:18px;">Sales Report</span></a></button> <button class="btn mt-3"><i class="fa fa-users"></i><span style="color:red; font-size:18px;">Sales Entry</span></button> <button class="btn mt-3"><i class="fa fa-inbox"></i><a href="sales-admin.php"style="text-decoration:none; color:white; font-size:18px;"><span style="font-size:18px;">Inventory</span></a></button> <span class="other mt-4">Other Information</span> <button class="btn mt-3"><i class="fa fa-book"></i><span style="font-size:18px;">Logout</span></div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card2 p-3">
                <div class="hello d-flex justify-content-end align-items-center mt-3"> <span>Hi, Director</span> </div>
                <div class="d-flex flex-row gap-3">
                <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div>
            <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="col-md-4 d-flex">
            <div class="card flex" data-sr-id="10" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                <div class="card-body">
                    <div class="d-flex align-items-center text-hover-success">
                        <div class="avatar w-56 m-2 no-shadow gd-success"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up">
                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                <polyline points="17 6 23 6 23 12"></polyline>
                            </svg> </div>
                        <div class="px-6 flex">
                            <?php
                             error_reporting(E_ERROR | E_PARSE);
                             $d=date('Y-m-d',strtotime('yesterday'));
                             $k="SELECT * from sales where date='$d'";
                             $z=mysqli_query($conn,$k);
                             $zr=mysqli_fetch_array($z);
                             $sh=$zr['netclosing'];
                            ?>
                            <div><h6>Prv.Closing Balance:</h6></div>
                            <div class="text-success mt-2"><?php echo $sh; ?></div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            </div>
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card3">
                    <div class="card3-body">
                        <h4 class="card3-title">Sales Entry</h4>
                        
                        <p class="card3-description"></p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="th1"><strong>Opening Balance</strong></th>
                                        <th class="th1"><strong>Date</strong></th>
                                        <th class="th1"><strong>Bill No</strong>.</th>
                                        <th class="th1"><strong>Amount</strong></th>
                                        <th class="th1"><strong>Collection Type</strong></th>
                                        <th class="th1"><strong>Delivery Charges</strong></th>
                                        <th class="th1"><strong>Gpay/Other UPI</strong></th>
                                        <th class="th1"><strong>Expenditure</strong></th>
                                        <th class="th1"><strong>Spend for</strong></th>
                                        <th class="th1"><strong>Bill Available</strong></th>
                                        <th class="th1"><strong>Deposit</strong></th>
                                        <th class="th1"><strong>Fund handed</strong></th>
                                        <th class="th1"><strong>Remarks</strong></th>

                                    </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                       <form action="sales-submit.php" method="post">
                                       <td><div><input type="text" name="open"></div></input></td>
                                       <td><div><input type="date" name="date"></div></input></td>
                                       <td><div><input type="text" name="bill"></div></input></td>
                                       <td><div><input type="text" name="amount"></div></input></td>
                                       <td><div><input type="text" name="coll"></div></input></td>
                                       <td><div><input type="text" name="delivery"></div></input></td>
                                       <td><div><input type="text" name="oln"></div></input></td>
                                       <td><div><input type="text" name="exp"></div></input></td>
                                       <td><div><input type="text" name="sf"></div></input></td>
                                       <td><div><input type="text" name="ba"></div></input></td>
                                       <td><div><input type="text" name="dep"></div></input></td>
                                       <td><div><input type="text" name="fh"></div></input></td>
                                       <td><div><input type="text" name="rm"></div></input></td>
                                  </tr>
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                </div>
                <div class="d-flex justify-content-center mt-5 gap-2 p-3">
                    <div style="margin-left:700px; margin-right:50px;">
                <button style="" type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                    <div style="">
                <button style="padding: 0 15px 0 15px;" type="reset" class="btn btn-primary btn-sm">Clear</button>
                    </div>
                    </form>
                </div>
                
<div class="bbb_advs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 bbb_adv_col">
                <!-- bbb_adv Item -->
                <?php
                $conn=mysqli_connect('localhost','root','','ccjitterss');
                error_reporting(E_ERROR | E_PARSE);
                $st=$_GET['id'];
                error_reporting(E_ERROR | E_PARSE);
                $q="SELECT * from sales where id='$st'";
                $x=mysqli_query($conn,$q);
               
                $r=mysqli_fetch_array($x);
                $open=(int)$r['ob']+(int)$r['amt']-(int)$r['cd'];
                $openex=$open-(int)$r['exp'];
                $net=$openex-(int)$r['deposit']-(int)$r['online'];
                $qr="UPDATE sales set opca='$open',opcae='$openex',netclosing='$net' where id='$st'";
                $xt=mysqli_query($conn,$qr);
                ?>
                <div class="bbb_adv d-flex flex-row align-items-center justify-content-start">
                    <div class="bbb_adv_content">
                        <div class="bbb_adv_title"><h5>Opening bal.+Closing Amt.</h5></div>
                        
                        <div class="bbb_adv_text"><h4 style="color:blue;"><?php echo $open;?></h4></div>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-4 bbb_adv_col">
                <!-- bbb_adv Item -->
                <div class="bbb_adv d-flex flex-row align-items-center justify-content-start">
                <div class="bbb_adv d-flex flex-row align-items-center justify-content-start">
                    <div class="bbb_adv_content">
                        <div class="bbb_adv_title"><h5>Opening bal.+Closing Amt.+Expenditure</h5></div>
                        <div class="bbb_adv_text"><h4 style="color:blue;"><?php echo $openex;?></h4></div>
                    </div>
                </div>
            </div>
</div>
            <div class="col-lg-4 bbb_adv_col">
                <!-- bbb_adv Item -->
                <div class="bbb_adv d-flex flex-row align-items-center justify-content-start">
                <div class="bbb_adv d-flex flex-row align-items-center justify-content-start">
                    <div class="bbb_adv_content">
                        <div class="bbb_adv_title"><h5>Net Closing Balance</h5></div>
                        <div class="bbb_adv_text"><h4><strong style="color:red;"><?php echo $net;?></strong></h4></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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