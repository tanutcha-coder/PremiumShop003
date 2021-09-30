<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>New Quatation Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    
<div class="container">
    <h1 class="mt-5">New Quotation Page</h1><br>
    <form method="get" action="">
        <div class="mb-3">
            <label for="No" class="form-label">หมายเลขใบเสนอราคา (No)</label>
            <input type="text" class="form-control" name="No">
        </div>
        <div class="mb-3">
            <label for="Date" class="form-label">วันที่ (Date)</label>
            <input type="DATE" class="form-control" name="Date">
        </div>
        <div class="mb-3">
            <label for="EmID" class="form-label">รหัสลูกค้า (EmployeeID)</label>
            <select name="EmID">
                <?php foreach($quatation_List as $qua){
                    echo "<option value=$qua->CusID>
                    $qua->name</option>";}?>
            </select><br>
        </div>
        <input type="hidden" name="controller" value="quatation">
        <button type="submit" class="btn-btn-primary">Submit</button>

    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
crossorigin="anonymous"></script>
</body>