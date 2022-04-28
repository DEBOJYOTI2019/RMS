<?php 
session_start();
include('session_check.php');
if($_SESSION['bio']['usertype']=='admin')
header('location:admin.php?');
elseif($_SESSION['bio']['usertype']=='employee')
header('location:employee.php?');
$r=$_SESSION['bio']['id'];
?>
<?php 
include 'connection.php';
$q="select * from registration where id='$r'";
$x=mysqli_query($conn,$q);
$k=mysqli_fetch_array($x);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Account</title>
  </head>
  <body>

  <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" height="250px" width="auto" src="<?php echo $k['file'] ?>"><span class="font-weight-bold"><?php echo  $k['Name']; ?></span><span class="text-black-50">CUSTOMER ID:CC000<?php echo  $k['id']; ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4>
                </div>
                <form action="customer-profile-submit.php" method="post">
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" name="Name" class="form-control" value="<?php echo  $k['Name']; ?>" placeholder="surname">  </div>
                     </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">PhoneNumber</label><input type="text" name="Ph" class="form-control" placeholder="enter phone number" value="<?php echo  $k['Phone']; ?>"></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" name="Address" class="form-control" placeholder="enter address" value="<?php echo  $k['Address']; ?>"></div>
                    <div class="col-md-12"><label class="labels">City</label><input type="text" name="City" class="form-control" placeholder="city" value="<?php echo  $k['City']; ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">State</label><input type="text" name="State" class="form-control" value="<?php echo  $k['State']; ?>" placeholder="state"></div>
                    
                
                </div>
                <div class="mt-5 text-center"><button class="btn btn-success profile-button" type="submit">Submit</button></div>
            </div>
        </form>
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