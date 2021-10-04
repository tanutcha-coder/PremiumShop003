<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>New Quatation Detail Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    
<div class="container">
    <h1 class="mt-5">New Quatation Detail Page</h1><br>
    <form method="get" action="">
        
        <div class="mb-3">
            <label for="ProductName" class="form-label">ชื่อสินค้า (ProductName)</label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="CusOrder" class="form-label">จำนวนที่สั่ง (CusOrder)</label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="CusScreenOrder" class="form-label">จำนวนสีที่ต้องการสกรีน (CusScreenOrder)</label>
            <input type="text" class="form-control">
        </div>
        <label for="ColorID" class="form-label">สี (ColorName)</label> <br>
        <<select name="ColorID">
                            <?php foreach ($QuationDetail_list as $QD) {
                                echo "<option value='$QD->ColorID'>$QD->ColorName</option>";
                            } ?>
                        </select><br>
        
        <input type="hidden" name="controller" value="quationdetail">
        <button type="submit" class="btn-btn-primary" name="action" value="index">Back</button>
        <button type="submit" class="btn-btn-primary" name="action" value="addQuationDetail">Save</button>

    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
crossorigin="anonymous"></script>
</body>