<?php
include 'connection.php';
$q="select * from registration where usertype='employee'";
$query=mysqli_query($conn,$q);
?>
<h2>Employees List</h2>
<table class="table table-hover">
<thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Phone</th>
    </tr>
</thead>
<tbody>
    <?php
        if(mysqli_num_rows($query)>0){
            $n=1;
            while($row=mysqli_fetch_assoc($query)){
    ?>
                <tr>
                <th scope="row"><?php echo $n; ?></th>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['Phone']; ?></td>
                <td><a href="delete-users.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-danger">Remove</button></a></td>
                </tr>
    <?php
                $n=$n+1;
            }
        }
        else
            echo "No Data Found";
    ?>
</tbody>
</table>
