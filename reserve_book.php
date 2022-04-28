<?php 
session_start();
include('session_check.php');
include('session_check.php');
if($_SESSION['bio']['usertype']=='admin')
header('location:admin.php?');
elseif($_SESSION['bio']['usertype']=='employee')
header('location:employee.php?');
$r=$_SESSION['bio']['id'];
?>

<?php
include "connection.php";
$Time=$_POST['time'];
$Date=date('20y-m-d',strtotime($_POST['date']));
$t=date('H:i:s',strtotime($Time));
$q="SELECT * from reserve where Date='$Date' and Time='$Time' or Time='$t'";
$r=mysqli_query($conn,$q);
$x=mysqli_fetch_array($r);
error_reporting(E_ERROR | E_PARSE);
$tb=$x['Tables'];
?>
<script>
	var ss=0;
</script>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Booking</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.php">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="#">Home</a>
									<ul class="sub-menu">
									<li><a href="customer-profile.php">My Profile</a></li>
									<li><a href="Logout.php">Logout</a></li>
									</ul>
								</li>
								<li><a href="about-cs.php">About</a></li>
								<!--<li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="404.html">404 page</a></li>
										<li><a href="about.html">About</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Check Out</a></li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="shop.html">Shop</a></li>
									</ul>
								</li>-->
								<!--<li><a href="news.php">News</a>
									<ul class="sub-menu">
										<li><a href="news.php">News</a></li>
										<li><a href="single-news.php">Single News</a></li>
									</ul>
								</li>-->
								
								<!--<li><a href="shop.php">Shop</a>
									<ul class="sub-menu">
										<li><a href="shop.php">Shop</a></li>
										<li><a href="checkout.php">Check Out</a></li>
										<li><a href="single-product.php">Single Product</a></li>
										<li><a href="cart.php">Cart</a></li>
									</ul>
								</li>-->
								<li><a href="#">More</a>
									<ul class="sub-menu">
										<li><a href="feedback.php">Feedback</a></li>
										<li><a href="reserve.php">Reservation</a></li>
										<li><a href="menu">Menu</a></li>
										<li><a href="cart.php"> Order History</a></li>
									</ul>
								</li>
								<li>
									<?php
									if($_SESSION['bio']['Gender']=="female")
									{
									?>
									<a href="#"><i class="fas fa-female a-lg">   </i> <?php echo $_SESSION['bio']['Name']?></a></li>
									<?php
									}
									
									else
									{
									?>
									<a href="#"><i class="fas fa-male">   </i> <?php echo $_SESSION['bio']['Name']?></a></li>
									<?php
									}
									?>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>RMS</p>
						<h1>BOOK A TABLE</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									
								</tr>
							</thead>
							<input type="hidden" id="ttd1" value="Tb1">
							<input type="hidden" id="ttd2" value="Tb2">
							<input type="hidden" id="ttd3" value="Tb3">
							<input type="hidden" id="ttd4" value="Tb4">
							<input type="hidden" id="ttd5" value="Tb5">
							<input type="hidden" id="ttd6" value="Tb6">
							<input type="hidden" id="ttd7" value="Tb7">
							<input type="hidden" id="ttd8" value="Tb8">

							<tbody>
								<tr class="table-body-row">
									<?php
									if($x['Date']==$Date && $x['Time']==$t && $tb=="Tb1")
									{
									
									?>
									<td class="product-image"><button class="btn btn-light"  ><img src="assets/img/T1.png" alt=""></button></td>
									<?php
										
									}
									else
									{
										?>
										<td class="product-image"><button class="btn btn-light" onclick="func1()" data-toggle="modal" data-target="#exampleModalCenter"><img src="assets/img/T1success.png" alt=""></button></td>
										
									
									
									<?php
									}
									?>

									<?php
									if($x['Date']==$Date && $x['Time']==$t && $tb=="Tb2")
									{
									
									?>
									<td class="product-image"><button class="btn btn-light" ><img src="assets/img/T2.png" alt=""></button></td>
                                   <?php
										
									}
									else
									{
										?>
										<td class="product-image"><button class="btn btn-light" onclick="func2()" data-toggle="modal" data-target="#exampleModalCenter"><img src="assets/img/T2success.png" alt=""></button></td>
                                   
									
									<?php
									}
									?>

									
									<?php
									if($x['Date']==$Date && $x['Time']==$t && $tb=="Tb3")
									{
									
									?>
									 <td class="product-image"><button class="btn btn-light"><img src="assets/img/T3.png" alt=""></button></td>
                                    <?php
										
									}
									else
									{
										?>
										 <td class="product-image"><button class="btn btn-light" onclick="func3()" data-toggle="modal" data-target="#exampleModalCenter"><img src="assets/img/T3success.png" alt=""></button></td>
                                    
									
									<?php
									}
									?>

									
								</tr>
								<tr class="table-body-row">
                                <td class="product-image"></td>

								<?php
									if($x['Date']==$Date && $x['Time']==$t && $tb=="Tb4")
									{
									
									?>
									<td class="product-image"><button class="btn btn-light"> <img src="assets/img/T4.png" alt=""></button></td>
                                <?php
										
									}
									else
									{
										?>
										 <td class="product-image"><button class="btn btn-light" onclick="func4()" data-toggle="modal" data-target="#exampleModalCenter"><img src="assets/img/T4success.png" alt=""></button></td>
                                
									
									<?php
									}
									?>


									<?php
									if($x['Date']==$Date && $x['Time']==$t && $tb=="Tb5")
									{
									
									?>
									<td class="product-image"><button class="btn btn-light"><img src="assets/img/T5.png" alt=""></button></td>
                                 <?php
										
									}
									else
									{
										?>
										<td class="product-image"><button class="btn btn-light" onclick="func5()"  data-toggle="modal" data-target="#exampleModalCenter"><img src="assets/img/T5success.png" alt=""></button></td>
                                
									
									<?php
									}
									?>

                                
								</tr>
								<tr class="table-body-row">

								<?php
									if($x['Date']==$Date && $x['Time']==$t && $tb=="Tb6")
									{
									
									?>
									<td class="product-image"><button class="btn btn-light" ><img src="assets/img/T6.png" alt=""></td>
                                     <?php
										
									}
									else
									{
										?>
										<td class="product-image"><button class="btn btn-light" onclick="func6()"  data-toggle="modal" data-target="#exampleModalCenter"><img src="assets/img/T6success.png" alt=""></td>
                                    
									<?php
									}
									?>


									
								<?php
									if($x['Date']==$Date && $x['Time']==$t && $tb=="Tb7")
									{
									
									?>
									<td class="product-image"><button class="btn btn-light"><img src="assets/img/T7.png" alt=""></button></td>
                                     <?php
										
									}
									else
									{
										?>
										<td class="product-image"><button class="btn btn-light" onclick="func7()" data-toggle="modal" data-target="#exampleModalCenter"><img src="assets/img/T7success.png" alt=""></button></td>
                                    
									<?php
									}
									?>

									<?php
									if($x['Date']==$Date && $x['Time']==$t && $tb=="Tb8")
									{
									
									?>
									<td class="product-image"><button class="btn btn-light"><img src="assets/img/T8.png" alt=""></button></td>
								 <?php
										
									}
									else
									{
										?>
										<td class="product-image"><button class="btn btn-light" onclick="func8()" data-toggle="modal" data-target="#exampleModalCenter"><img src="assets/img/T8success.png" alt=""></button></td>
								
									<?php
									}
									?>

									</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Booking Correct Format:</th>
									<th>X:00 <i class="fas fa-check"></i> x:30 <i class="fas fa-check"></i><br> X:45 <i class="fas fa-times"></i> X:31 <i class="fas fa-times"></i></th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Max. Booking:</strong></td>
									<td>1 seat</td>
								</tr>
								
								<tr class="total-data">
									<td><strong>Duration:</strong></td>
									<td>30 minutes</td>
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
	<!-- end cart -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Booking Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form action="reserve_submit.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Table</label>
	
    <input type="text" class="form-control" name="tbn" id="table2" aria-describedby="emailHelp" readonly>
	<p><script></script></p>
      </div>
	  
  <div class="form-group">
    <label for="exampleInputPassword1">Date</label>
    <input type="date" class="form-control" id="txtDate" name="dte" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Timing:</label>
    <input type="time" class="form-control" min="12:30" max="21:00" name="tm" id="exampleInputPassword1">
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Booking Charges:<strong style="color:red;">₹100</strong> (refundable)**</label>
  </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Proceed & Pay</button>
      </div>
	  </form> 
    </div>
  </div>
</div>
<script>
		
	function func1()
	{
		document.getElementById("table2").value=document.getElementById("ttd1").value;

	}
	function func2()
	{
		document.getElementById("table2").value=document.getElementById("ttd2").value;

	}
	function func3()
	{
		document.getElementById("table2").value=document.getElementById("ttd3").value;

	}
	function func4()
	{
		document.getElementById("table2").value=document.getElementById("ttd4").value;

	}
	function func5()
	{
		document.getElementById("table2").value=document.getElementById("ttd5").value;

	}
	function func6()
	{
		document.getElementById("table2").value=document.getElementById("ttd6").value;

	}
	function func7()
	{
		document.getElementById("table2").value=document.getElementById("ttd7").value;

	}
	function func8()
	{
		document.getElementById("table2").value=document.getElementById("ttd8").value;

	}

	</script>
	<!-- end logo carousel -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>Old Brigade Road</li>
							<li>rmsservices@gmail.com</li>
							<li>+91 9831445423</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Shop</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script>
		$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var minDate= year + '-' + month + '-' + day;
    
    $('#txtDate').attr('min', minDate);
});
	</script> 