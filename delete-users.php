<?php
include 'connection.php';
$id=$_GET['id'];
$q = "delete from registration where id='$id'";
$query = mysqli_query($conn,$q);
if($query){
    echo ' <script type="text/javascript">
    alert("User Removed :)");
    history.back();
    </script>';  
}
else{
    echo ' <script type="text/javascript">
    alert("Error Occured :)");
    history.back();
    </script>';  
}


?>