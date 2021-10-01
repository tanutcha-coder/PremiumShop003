<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Quatation Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <h1 class="mt-5">Quotation Page</h1>
        new quotation<a href="?controller=quataion&action=newQuatation">Click</a><br>
        
        <form method="get" action="">
            <input type="text" name="key">
            <input type="hidden" name="controller" value="quataion" />
            <button type="submit" name="action" value="search">Search</button>
        </form>

        <table id="QTtable" class="table table-bordered table-striped">
            <thead>

                <th>No</th>
                <th>Date</th>
                <th>EmployeeID</th>
                <th>CustomerID</th>
                <th>Deposit</th>
                <th>Credit</th>

            </thead>

            <tbody>
                <?php


                foreach ($quatation_list as $q) {

                ?>
                    <tr>
                        <td><?php echo $q->No ?></td>
                        <td><?php echo $q->Date ?></td>
                        <td><?php echo $q->EmID ?></td>
                        <td><?php echo $q->CusID ?></td>
                        <td><?php echo $q->Deposit ?></td>
                        <td><?php echo $q->Credit ?></td>

                        <td><a href="?controller=quataion&action=update_quatation&No=<?php echo $q->No ?>" class="btn btn-primary">Edit</td>
                        <td><a href="?controller=quataion&action=delete_quatation&No=<?php echo $q->No ?>" class="btn btn-danger">Delete</td>
                    </tr>
                <?php

                }
                ?>

            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>