<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Quatation Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    
<table id="QTtable" class="table table-bordered table-striped">
    <thead>
        <th>#</th>
        <th>No</th>
        <th>Date</th>
        <th>EmployeeID</th>
        <th>CustomerID</th>
        <th>Deposit</th>
        <th>Credit</th>
        <th>ColorID</th>
        <th>CustomerOrder</th>
        <th>CustomerScreenOrder</th>
        <th>Edit</th>
        <th>Delete</th>
    </thead>

    <tbody>
        <?php
        include_once('quatationModel.php');
        $sql = $getAll->getAll();
        while($row=mysqli_fetch_array($sql)){

        ?>
        <tr>
                <td><?php echo $row['No'];?></td>
                <td><?php echo $row['Date'];?></td>
                <td><?php echo $row['EmployeeID'];?></td>
                <td><?php echo $row['CustomerID'];?></td>
                <td><?php echo $row['Deposit'];?></td>
                <td><?php echo $row['Credit'];?></td>
                <td><?php echo $row['ColorID'];?></td>
                <td><?php echo $row['CustomerOrder'];?></td>
                <td><?php echo $row['CustomerScreenOrder'];?></td>
                <td><a href="update.php?No=<?php echo $row['No'];?>" class="btn btn-primary">Edit</td>
                <td><a href="delete.php?No=<?php echo $row['No'];?>" class="btn btn-danger">Delete</td>
            </tr>
        <?php

        }
        ?> 

    </tbody>
</table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
crossorigin="anonymous"></script>
</body>