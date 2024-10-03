<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crud Operation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>
    <?php

    include "class.php";
    
    $cemployee= new employee();
    
    if(isset($_POST['save'])){
        $name= $_POST['name'];
        $address= $_POST['address'];
        $phone= $_POST['phone'];
        $email= $_POST['email'];
        $status= $_POST['status'];
        $cemployee->insert_data($name,$address,$phone,$email,$status);
    }
    ?>



    <section class="container mt-5 ">
        <div class="row offset-3 ">
            <div class="col-8 d-flex justify-content-end mb-2">
                <a href="allmembers.php" class="btn btn-success">All Members</a>
            </div>
            <div class="col-8 border p-4 rounded-3 bg-secondary">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <label class="input-group-text pe-4" >Name</label>
                        <input type="text" class="form-control" placeholder="Insert Your Name" name="name">
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" >Address</label>
                        <input type="text" class="form-control" placeholder="Insert Your Address" name="address">
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text pe-4" >Phone</label>
                        <input type="text" class="form-control" placeholder="Insert Your Phone Number" name="phone">
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text pe-4" >Email </label>
                        <input type="email" class="form-control" placeholder="Insert Your Email" name="email">
                    </div>
        
                    <div class="input-group mb-3">
                        <label class="input-group-text pe-4" >Status</label>
                        <select class="form-select" name="status">
                          <option selected>Select Status</option>
                          <option value="1">Active</option>
                          <option value="2">Inactive</option>
                        </select>
                    </div>
        
                    <button type="submit" class="btn btn-primary" name="save">Save</button>
        
                </form>
            </div>
        </div>

    </section>




<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>