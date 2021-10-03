<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Update Quotation Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row ">
            <div class="col">
                <br><br> <br> <br> <br><br>

                <div class="col-sm-9  p-3 ">
                    <img alt="" class="img-fluid" src="https://i.postimg.cc/9f4RvvNy/undraw-Updated-resume-re-q1or.png">
                </div>
            </div>
            <div class="col">
                <h1 class="mt-5">Update Quotation Page</h1><br>
                <form method="get" action="">
                    <div class="mb-3">
                        <label for="No" class="form-label">หมายเลขใบเสนอราคา (No)</label>
                        <input type="text" class="form-control" name="No" value="<?php echo $quatation_list->No; ?>" readonly />
                    </div>
                    <div class="mb-3">
                        <label for="Date" class="form-label">วันที่ (Date)</label>
                        <input type="DATE" class="form-control" name="Date" value="<?php echo $quatation_list->Date; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="EmID" class="form-label">ชื่อพนักงาน (EmployeeName)</label>
                        <select name="EmID">
                            <?php foreach ($employee_list as $em) {
                                echo "<option value='$em->EmID'";
                                if ($quatation_list->EmID == $em->EmID) {
                                    echo " selected='selected'";
                                }
                                echo ">$em->EmName</option>";
                            } ?>

                        </select><br>
                        <div class="mb-3">
                            <label for="CusID" class="form-label">ชื่อลูกค้า (CustomerName)</label>
                            <select name="CusID">
                                <?php foreach ($customer_list as $cus) {
                                    echo "<option value='$cus->CusID'";
                                    if ($quatation_list->CusID == $cus->CusID) {
                                        echo " selected='selected'";
                                    }
                                    echo ">$cus->CusName</option>";
                                } ?>
                            </select><br>
                        </div>
                        <div class="mb-3">
                            <label for="Deposit" class="form-label">จำนวนมัดจำ(%)</label>
                            <input type="int" class="form-control" name="Deposit" value="<?php echo $quatation_list->Deposit; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="Credit" class="form-label">จำนวนเครดิต(วัน)</label>
                            <input type="int" class="form-control" name="Credit" value="<?php echo $quatation_list->Credit; ?>">
                        </div>

                        <input type="hidden" name="controller" value="quataion">
                        <div class="d-grid gap-3">
                            <button type="submit" class="w-100 btn btn-success btn-lg" name="action" value="update">Update</button>
                            <button type="submit" class="w-100 btn btn-danger btn-lg" name="action" value="index">Back</button>

                        </div>

                </form>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
<footer class="py-10 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Database Management sec 701 Group 3</a></li>
    </ul>
    <p class="text-center text-muted">© 2021 Computer Engineering</p>
</footer>