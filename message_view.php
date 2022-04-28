<?php 
session_start();
include('session_check.php');
if($_SESSION['bio']['usertype']=='user')
header('location:welcome2.php?');
elseif($_SESSION['bio']['usertype']=='employee')
header('location:employee.php?');


?>
<?php 
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','ccjitterss');
$q="select * from message where id=$id";
$x=mysqli_query($conn,$q);

$r=mysqli_fetch_array($x);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_teacher2.css">
   
    <link rel="stylesheet" type="" href="message-style.css">
    <link rel="stylesheet" type="" href="message_show.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Message View</title>
    <link rel="shortcut icon" href="../../images/logo.png" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri&family=Great+Vibes&family=Raleway:wght@300&display=swap" rel="stylesheet">
    
</head>
<body class="bg-logo">
    
    <!-- <div class="back">
      <h2><a href="index.php">Go to Database</a></h2>
    </div> -->
   
    <div class="sc-header">
      
      <div class="sc-header-name">
        
      </div>
    </div>
  <div class="container" style="padding-top:90px;">
    <div class="container d-flex justify-content-center mt-5">
    <div class="card p-4">
        <form action="email_message.php" method="post">
        <div>
            <h5 class="mb-0"><?php echo $r['Name']; ?></h5> <small class="text-black-50"><?php echo $r['email']; ?></small>
          
            <div class="form mt-3"> <label>Message</label> <div style="border:1px solid black;margin-bottom:10px;"><h6><?php echo $r['message']; ?></h6></div> <label>Reply</label><textarea class="form-control mt-2 text-area" name="meg" rows="4" placeholder="Type a Reply..."></textarea> </div>

                
            </div>
            <div class="mt-3" style="text-align:center;"> <button class="btn btn-success" type="submit" name="submit">Send</button> </div>
        </div>
        <input type="hidden" name="a1" value="<?php echo $r['id'];?>">
</form>
    </div>
</div>



    <script src="admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>