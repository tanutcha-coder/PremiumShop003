<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Quatation Detail Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <h1 class="mt-5">Quatation Detail Page</h1>
        new quatation detail <a href="?controller=quationdetail&action=newQuationDetail">Click</a><br>
        
        <form method="get" action="">
            <input type="text" name="key">
            <input type="hidden" name="controller" value="quationdetail" />
            <button type="submit" name="action" value="search">Search</button>
        </form>

        <table id="QTtable" class="table table-bordered table-striped" style="text-align: center;">
            <thead>
                <th>QuatationID</th>
                <th>ProductID</th>
                <th>ProductName</th>
                <th>ColorName</th>
                <th>CusOrder</th>
                <th>CusScreenOrder</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>

            <tbody>
                <?php
                // print_r($Product_list);

                foreach ($QuationDetail_list as $quationdetail) {
                    
                ?>
                    <tr>
                        <td><?php echo $quationdetail->No ?></td>
                        <td><?php echo $quationdetail->ProductID ?></td>
                        <td><?php echo $quationdetail->ProductName ?></td>
                        <td><?php echo $quationdetail->ColorName ?></td>
                        <td><?php echo $quationdetail->CusOrder ?></td>
                        <td><?php echo $quationdetail->CusScreenOrder ?></td>

                        <td><a href="?controller=quationdetail&action=update_quationdetail&QID=<?php echo $quationdetail->QID ?>" class="btn btn-primary">Edit</td>
                        <td><a href="?controller=quationdetail&action=delete_quationdetail&QID=<?php echo $quationdetail->QID ?>" class="btn btn-danger">Delete</td>
                    </tr>
                <?php

                }
                ?>

            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>