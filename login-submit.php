
<?php
$conn=mysqli_connect('localhost','root','','ccjitterss');
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$var="SELECT * from registration where Email='$email'";
$query=mysqli_query($conn,$var);
$res=mysqli_fetch_array($query);
$pass_check=password_verify($password,$res['password']);
$_SESSION['bio']=$res;
if($res['Name']=='admin' && $res['password']=="admin@ccjitterss2022")
    header("location:Admin.php?msg=done");
elseif(mysqli_num_rows($query))
{
    
   if($pass_check==1 && $res['usertype']=='employee')
   header("location:Employee.php?");
    elseif($pass_check==1)
    header("location:welcome2.php?");

else
{
    echo ' <script type="text/javascript">
    alert(" Bad Credentials :(");
    location="index.php";
    </script>';
}
}
?>