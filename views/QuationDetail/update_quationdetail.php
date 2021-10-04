<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Update Quatation Detail Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <h1 class="mt-5">Update Quatation Detail Page</h1><br>
        <form method="get" action="">
            <div class="mb-3">
                <label for="ProductID" class="form-label">รหัสสินค้า (ProductID)</label>
                <input type="text" class="form-control" value="<?php echo $QuationDetail->ProductID; ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="ProDuctName" class="form-label">ขื่อสินค้า (ProductName)</label>
                <input type="text" class="form-control" value="<?php echo $QuationDetail->ProductName; ?>">
            </div>
            <div class="mb-3">
                <label for="ProDuctName" class="form-label">สี (ColorName)</label> <br>
                <select name="color">
                    <?php foreach ($QuationDetail_list as $quationdetail) {
                        if ($QuationDetail->ProductID == $quationdetail->ProductID) {
                            echo "<option value='$quationdetail->ColorID'";
                            if ($quationdetail->ColorID == $QuationDetail->ColorID) {
                                echo " selected";
                            }
                            echo ">$quationdetail->ColorName</option>";
                        }
                    } ?>
                </select>
                <!-- <input type="text" class="form-control" value="<?php echo $QuationDetail->ProductName; ?>"> -->
            </div>


            <input type="hidden" name="controller" value="quationdetail">
            <button type="submit" class="btn-btn-primary" name="action" value="index">Back</button>
            <button type="submit" class="btn-btn-green" name="action" value="update">Update</button>

        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>