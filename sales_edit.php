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
$q="select * from sales where id='$id'";
$x=mysqli_query($conn,$q);
$r=mysqli_fetch_array($x);
?>
<html>
<head>
</head>
<body>

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
                                        <th class="th1"><strong>OP+AMT-DC</strong></th>
                                        <th class="th1"><strong>OP+AMT-DC-Exp</strong></th>
                                        <th class="th1"><strong>Net Closing</strong></th>

                                    </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                       <form action="sales_edit_code.php?id=<?php echo $r['id'];?>" method="post">
                                       <td><div><input type="text" value="<?php echo $r['ob'];?>" name="open1"></div></input></td>
                                       <td><div><input type="date" value="<?php echo $r['date'];?>" name="date1"></div></input></td>
                                       <td><div><input type="text" value="<?php echo $r['bn'];?>" name="bill1"></div></input></td>
                                       <td><div><input type="text" value="<?php echo $r['amt'];?>" name="amount1"></div></input></td>
                                       <td><div><input type="text" value="<?php echo $r['ct'];?>" name="coll1"></div></input></td>
                                       <td><div><input type="text" value="<?php echo $r['cd'];?>" name="delivery1"></div></input></td>
                                       <td><div><input type="text" value="<?php echo $r['online'];?>" name="oln1"></div></input></td>
                                       <td><div><input type="text" value="<?php echo $r['exp'];?>" name="exp1"></div></input></td>
                                       <td><div><input type="text" value="<?php echo $r['spend'];?>" name="sf1"></div></input></td>
                                       <td><div><input type="text" value="<?php echo $r['bavl'];?>" name="ba1"></div></input></td>
                                       <td><div><input type="text" value="<?php echo $r['deposit'];?>" name="dep1"></div></input></td>
                                       <td><div><input type="text" value="<?php echo $r['fund'];?>" name="fh1"></div></input></td>
                                       <td><div><input type="text" value="<?php echo $r['remarks'];?>" name="rm1"></div></input></td>
                                       <td><div><input type="text" value="<?php echo $r['opca'];?>" name="opca1"></div></input></td>
                                       <td><div><input type="text" value="<?php echo $r['opcae'];?>" name="opcae1"></div></input></td>
                                       <td><div><input type="text" value="<?php echo $r['netclosing'];?>" name="net1"></div></input></td>
                                      
                                  </tr>
                                </tbody>
                               
                            </table>
<input type="submit" value="submit"> 
</form>
</body>
</html>