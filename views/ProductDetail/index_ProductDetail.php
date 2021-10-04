<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>ProductDetail Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    
<div class="container">
    <h1 class="mt-5">ProductDetail Page</h1>
    new ProductDetail<a href=?controller=ProductDetail&action=newProductDetail>Click</a><br>
    
<table id="ProductDetailtable" class="table table-bordered table-striped">
    <thead>
        
        <th>ProductID</th>
        <th>ProductName</th>
        <th>MinQuantity</th>
        <th>MaxQuantity</th>
        <th>Screen</th>
        <th>Price</th>
        <th>Edit</th>
        <th>Delete</th>
    </thead>

    <tbody>
        <?php
        
        
        foreach($ProductDetail_list as $pd)
        {

        ?>
            <tr>
                
                <td><?php echo $pd->ProductDID?></td>
                <td><?php echo $pd->ProductName?></td>
                <td><?php echo $pd->MinQuantity?></td>
                <td><?php echo $pd->MaxQuantity?></td>
                <td><?php echo $pd->Screen?></td>
                <td><?php echo $pd->Price?></td>
                
                <td><a href="?controller=ProductDetail&action=update_ProductDetail&ProductID=<?php echo $pd->ProductID ?>" class="btn btn-primary">Edit</td>
                <td><a href="?controller=ProductDetail&action=delete_ProductDetail&ProductID=<?php echo $pd->ProductID ?>" class="btn btn-danger">Delete</td>
            </tr>
        <?php

        }
        ?> 

    </tbody>
</table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
crossorigin="anonymous"></script>
</body>