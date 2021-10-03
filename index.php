<?php
if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'pages';
    $action = 'home';
}
?>
<html>
<<<<<<< HEAD
    <head></head>
        <body>
            <?php echo "controller =".$controller.",action = ".$action;?>
            <br>[<a href="?controller=pages&action=home">HOME</a>]
            [<a href="?controller=quataion&action=index">Quatation</a>]<br>
            [<a href="?controller=quataion&action=index">QuatationDetail</a>]<br>
            [<a href = "?controller=ProductDetail&action=index">ProductDetail]</a>
            <?php require_once("routes.php"); ?>
        </body>
    
</html>
    
=======
<header class="p-3 bg-dark text-white">

    <div class="container-fluid">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            Premium Shop
            
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">

                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="?controller=pages&action=home" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="?controller=quataion&action=index" class="nav-link px-2 text-white">Quotation</a></li>
                <li><a href="?controller=quataion&action=index" class="nav-link px-2 text-white">QuotationDetail</a></li>
                <li><a href="?controller=product&action=index" class="nav-link px-2 text-white">Product</a></li>
                <li><a href="#" class="nav-link px-2 text-white">About</a></li>
            </ul>




        </div>
    </div>
</header>

<body>
    <?php require_once("routes.php"); ?>
</body>

</html>
>>>>>>> 36e9486ec80f502aa3cfce54c0c0cd29579f32a5
