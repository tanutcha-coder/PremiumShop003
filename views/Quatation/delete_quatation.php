<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

        <div class="container">
            <main class="px-3">
                <h1 class="text-center">Are you sure to delete this colum</h1><br>
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



                        ?>
                        <tr>
                            <td><?php echo $quatation_list->No ?></td>
                            <td><?php echo $quatation_list->Date ?></td>
                            <td><?php echo $quatation_list->EmID  ?></td>
                            <td><?php echo $quatation_list->CusID ?></td>
                            <td><?php echo $quatation_list->Deposit ?></td>
                            <td><?php echo $quatation_list->Credit ?></td>

                        </tr>
                        <?php

                        ?>

                    </tbody>
                </table>
                <br>
                <form method="get" action="">
                    <input type="hidden" name="controller" value="quataion" />
                    <input type="hidden" name="No" value="<?php echo $quatation_list->No; ?>" />
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button class="btn btn-lg btn-secondary  border-dark bg-dark " type="submit" name="action" value="index">Back</button>
                    <button class="btn btn-lg btn-secondary  border-danger bg-danger" type="submit" name="action" value="delete">Delete</button>
                    </div>
                </form>
            </main>
        </div>
        <footer class="mt-auto text-white-50">
            <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
        </footer>
    </div>
    \
</body>