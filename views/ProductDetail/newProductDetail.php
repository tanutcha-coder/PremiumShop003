<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>New ProductDetail Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container">

        <div class="row ">
            <div class="col">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="col-sm-9  p-3 ">
                    <img alt="" class="img-fluid" src="https://i.postimg.cc/dV0M4nZM/undraw-Add-files-re-v09g.png">
                </div>
            </div>
            <div class="col">
                <h1 class="mt-5">New ProductDetail Page</h1><br>
                <form method="get" action="">
                    <div class="mb-3">
                        <label for="ProductID" class="form-label"> รหัสสินค้า(ProductID)</label>
                        <input type="text" class="form-control" name="ProductID">
                    </div>
                    <div class="mb-3">
                        <label for="ProductDID" class="form-label"> รหัสรายละเอียดสินค้า(ProductDID)</label>
                        <input type="text" class="form-control" name="ProductDID">
                    </div>
                    <div class="mb-3">
                        <label for="ProductName" class="form-label"> ชื่อสินค้า(ProductName)</label>
                        <input type="text" class="form-control" name="ProductName">
                    </div>
                    </select><br>
                    <div class="mb-3">
                        <label for="MinQuantity" class="form-label">จำนวนชิ้นขั้นต่ำ(MinQuantity)</label>
                        <select name="MinQuantity">
                            <?php foreach ($ProductDetail_list as $pd) {
                                echo "<option value='$pd->MinQuantity'>$pd->MinQuantity</option>";
                            } ?>
                        </select><br>
                        <label for="MaxQuantity" class="form-label">จำนวนชิ้นสูงสุด(MaxQuantity)</label>
                        <select name="MaxQuantity">
                            <?php foreach ($ProductDetail_list as $pd) {
                                echo "<option value='$pd->MaxQuantity'>$pd->MaxQuantity</option>";
                            } ?>
                        </select><br>
                        <div class="mb-3">
                            <label for="Screen" class="form-label">ราคาสกรีน(Screen)</label>
                            <input type="float" class="form-control" name="Credit">
                        </div>
                        <div class="mb-3">
                            <label for="Screen" class="form-label">ราคาต่อชิ้น(Price)</label>
                            <input type="float" class="form-control" name="Credit">
                        </div>

                        <input type="hidden" name="controller" value="ProductDetail" />
                        <div class="d-grid gap-3">
                            <button class="w-100 btn btn-success btn-lg" type="submit" name="action" value="addProductDetail">Save</button>
                            <button class="w-100 btn btn-danger btn-lg" type="submit" name="action" value="index">Back</button>
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