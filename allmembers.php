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
    $cemployee->show_data();

    if(isset($_GET['id'])){
        $id= $_GET['id'];
        $cemployee->delete_data($id);
        header('location:allmembers.php');
    }
   
    ?>
    <section class="container mt-5 ">
        
            <div class="d-flex justify-content-end mb-2">
                <a href="index.php" class="btn btn-success me-2">Add New</a>
            </div>
            <div class=" p-4">
               <table class="table ">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>

                    <tbody class="table-info table-striped">
                        <?php
                        
                        $obj = $cemployee->show_data();
                        
                        while($array = $obj->fetch_assoc()){

                        ?>

                            <tr>
                                <td><?php echo $array['id'] ?></td>
                                <td><?php echo $array['name'] ?></td>
                                <td><?php echo $array['address'] ?></td>
                                <td><?php echo $array['phone'] ?></td>
                                <td><?php echo $array['email'] ?></td>
                                <td>
                                    <?php 
                                        if ($array['status']==1){
                                            echo '<span class="badge text-bg-success p-2">Active</span>';
                                    }else{
                                        echo '<span class="badge text-bg-warning p-2">Inactive</span>';
                                    }
                                    
                                    ?>
                                </td>
                                
                                <td>
                                    <a href="edit.php?id=<?php echo $array['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="allmembers.php?id=<?php echo $array['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>

                        <?php
                        }
                        
                        ?>
                        
                    </tbody>
               </table>
            </div>
            
    </section>




<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>