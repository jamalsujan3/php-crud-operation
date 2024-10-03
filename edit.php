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
    $id=$_GET['id'];
    $obj = $cemployee->find_data($id);
    $array= $obj->fetch_assoc();

    if(isset($_POST['update'])){
        $cemployee->update_data($_POST,$id);
        header('location:allmembers.php');
    }
    
    
    ?>


    <section class="container mt-5 ">
        <div class="row offset-3 ">
           
            <div class="col-8 border p-4 rounded-3 bg-secondary">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <label class="input-group-text pe-4" >Name</label>
                        <input type="text" class="form-control" placeholder="Insert Your Name" name="name" value="<?php echo $array['name']?>">
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" >Address</label>
                        <input type="text" class="form-control" placeholder="Insert Your Address" name="address" value="<?php echo $array['address']?>">
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text pe-4" >Phone</label>
                        <input type="text" class="form-control" placeholder="Insert Your Phone Number" name="phone" value="<?php echo $array['phone']?>">
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text pe-4" >Email </label>
                        <input type="email" class="form-control" placeholder="Insert Your Email" name="email" value="<?php echo $array['email']?>">
                    </div>
        
                    <div class="input-group mb-3">
                        <label class="input-group-text pe-4" >Status</label>
                        <select class="form-select" name="status" value="<?php echo $array['status']?>">
                          <option selected><?php if($array['status']==1){
                            echo "Active";
                          }else{
                            echo "Inactive";
                          }
                          
                          ?></option>
                          <option value="1">Active</option>
                          <option value="2">Inactive</option>
                        </select>
                    </div>
        
                    <button type="button" class="btn btn-primary" name="update">Update</button>
        
                </form>
            </div>
        </div>

    </section>




<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>