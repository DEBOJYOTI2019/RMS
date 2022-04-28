<h2>Add an Employee</h2>
<form action="registration-connect.php" method="post" enctype="multipart/form-data">
    <div style="width:50%; margin:auto; position:center; margin-top:10%;">
    
    <div class="mt-3 px-3"> <input class="form-control" placeholder="Name" name="Name" required> </div>
                            <div class="mt-3 px-3"> 
                                <select class="form-control" placeholder="Gender"  name="Gender" required>
                                <option>Select</option>   
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                                 </div>
                            <div class="mt-3 px-3"> <input class="form-control" type="email" placeholder="Email" name="Email" required> </div>
                            <div class="mt-3 px-3"> <input class="form-control" type="text" placeholder="Phone" name="Phone" required> </div>
                            <div class="mt-3 px-3"> <input class="form-control" type="text" placeholder="Address" name="Address" required> </div>
                            <div class="mt-3 px-3"> <input class="form-control" type="text" placeholder="City" name="City" required> </div>
                            <div class="mt-3 px-3"> <input class="form-control" type="text" placeholder="State" name="State" required> </div>
                            <div class="mt-3 px-3"> <input class="form-control" type="password" placeholder="Password" name="password" required> </div>
                            <div class="mt-3 px-3">   <input type="file" name="photo1" class="form-control" placeholder="Photo"> </div>
        <input type="hidden" name="usertype" value="employee">
        
        <div class="mt-3 d-grid px-3"> 
            <button type="submit" class="btn btn-primary btn-block btn-signup text-uppercase"><span>Add Employee</span></button> 
        </div>
    </div>
</form>