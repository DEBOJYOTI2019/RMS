<?php 
session_start();
include('session_check.php');
if($_SESSION['bio']['usertype']=='user')
header('location:welcome2.php?');
elseif($_SESSION['bio']['usertype']=='employee')
header('location:employee.php?');


?>
<!doctype html>
<?php 
$conn=mysqli_connect('localhost','root','','ccjitterss');
$q="select * from sales";
$x=mysqli_query($conn,$q);
?>
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
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>

    <link rel="stylesheet" href="management.css">
    <title>Sales Report</title>
  </head>
  <body>

  <div>
    <div class="d-flex flex-row">
        <div class="col-md-3">
            <div class="card card1 p-3">
                <div class=" image d-flex flex-row align-items-center mt-3"> <img src="https://i.imgur.com/R4afbIg.png" height="50" width="50" /> <span>Admin</span> </div>
                <hr class="hline">
                <div class="d-flex flex-column align-items-center"> <button class="btn"><i class="fa fa-dashboard"></i><a href="admin.php"style="text-decoration:none; color:white; font-size:18px;"><span style="font-size:18px;">Dashboard</span></a></button> <button class="btn"><i class="fa fa-dashboard"></i><span style="font-size:18px; color:red;">
                <a style="text-decoration:none; color:white;" href="../bill/bill.php">Customer Billing</a></span></button>
                <button class="btn"><i class="fa fa-dashboard"></i><span style="font-size:18px; color:red;">
                <a style="text-decoration:none; color:white;" href="bill/bill_show.php">Bill Report</a></span></button>
                <button class="btn"><i class="fa fa-dashboard"></i><span style="font-size:18px; color:red;">
                <a style="text-decoration:none; color:white;" href="users.php">Users</a></span></button><button class="btn"><i class="fas fas-dashboard"></i><span style=" color:red; font-size:18px;">Sales Report</span></button> <button class="btn mt-3"><i class="fa fa-users"></i><span><a href="sales-admin.php"style="text-decoration:none; color:white; font-size:18px;">Sales Entry</a></span></button> <button class="btn mt-3"><i class="fa fa-inbox"></i><a href="inventory.php"style="text-decoration:none; color:white; font-size:18px;"><span style="font-size:18px;">Inventory</span></a></button> <span class="other mt-4">Other Information</span> <button class="btn mt-3"><i class="fa fa-book"></i><a href="logout.php" style="text-decoration:none; color:white;"><span style="font-size:18px;">Logout</span></a></div>
            </div>
        </div>
        <div class="col-md-9">
        <div class="container12">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title m-b-0">Sales Report</h5>
                </div>
                <div class="table-responsive">
                    <table class="table" id="table_data2">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Opening balance</th>
                                <th scope="col">Date</th>
                                <th scope="col">Bill No.</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Collection type</th>
                                <th scope="col">Delivery Charge</th>
                                <th scope="col">Online Amount</th>
                                <th scope="col">Expenditure</th>
                                <th scope="col">Spend For</th>
                                
                                <th scope="col">Deposit</th>
                                 <th scope="col">Remarks</th>
                                 <th scope="col">Opening bal.+Closing. Amt</th>
                                <th scope="col">Opening Bal.+Col. Amt-Exp(Closing Bal.)</th>
                                
                                
                                <th scope="col">Net Closing Balance</th>
                                
                                <th scope="col">Bill Available</th>
                                <th scope="col">Fund Incharge</th>
                                <th scope="col">Edit</th>
                            </tr>
                        </thead>
                        <tbody class="customtable">
                        <?php
                        while($r=mysqli_fetch_array($x))
                        {
                              ?>
                            <tr>
                                <td><?php echo  $r['ob']."<br>"; ?></td>
                                <td><?php echo  $r['date']."<br>"; ?></td>
                                <td><?php echo  $r['bn']."<br>"; ?></td>
                                <td><?php echo  $r['amt']."<br>"; ?></td>
                                <td><?php echo  $r['ct']."<br>"; ?></td>
                                <td><?php echo  $r['cd']."<br>"; ?></td>
                                <td><?php echo  $r['online']."<br>"; ?></td>
                                <td><?php echo  $r['exp']."<br>"; ?></td>
                                <td><?php echo  $r['spend']."<br>"; ?></td>
                              
                                <td><?php echo  $r['deposit']."<br>"; ?></td>
                                
                                <td><?php echo  $r['remarks']."<br>"; ?></td>
                                <td><?php echo  $r['opca']."<br>"; ?></td>
                                <td><?php echo  $r['opcae']."<br>"; ?></td>
                                <td><?php echo  $r['netclosing']."<br>"; ?></td>
                                <td><?php echo  $r['bavl']."<br>"; ?></td>
                                <td><?php echo  $r['fund']."<br>"; ?></td>
                                <td><a href="sales_edit.php?id=<?php echo $r['id'];?>" class="a2"> <button style="padding: 0 15px 0 15px;" class="btn btn-success btn-sm">Edit</button></a></td></tr>
                            </tr>
                 <?php
                }
                ?>
                           
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5 gap-2 p-3">
                    <div style="margin-left:700px; margin-right:50px;">
                <button style="padding: 0 15px 0 15px;" type="button" id="export_button"  class="btn btn-success btn-sm">Export</button>
                    </div>
            </div>
                </div>
            </div>
            </div>
    </div>
            


        
</div>
<script>
    
    function html_table_to_excel(type)
    {
        var data=document.getElementById('table_data2');
        var file=XLSX.utils.table_to_book(data,{sheet:"sheet1"});
        XLSX.write(file,{bookType:type,bookSST:true,type:'base64'});
        XLSX.writeFile(file,'file.'+ type);
    }
    const export_button=document.getElementById('export_button');
    export_button.addEventListener('click',()=>{html_table_to_excel('xlsx');});
    </script>
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