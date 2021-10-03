<?php
$controllers = array(
    'pages' => ['home', 'error'],
<<<<<<< HEAD
    'quataion' => ['index','newQuatation'],
    'ProductDetail'=>['index']
=======
    'quataion' => ['index', 'newQuatation', 'addQuatation', 'search', 'update_quatation', 'update','delete_quatation', 'delete'],
    'product' => ['index', 'newProduct', 'addProduct', 'search', 'update_product', 'update','delete_product', 'delete']
>>>>>>> 36e9486ec80f502aa3cfce54c0c0cd29579f32a5
);

function call($controller, $action)
{
    echo "routes to " . $controller . "-" . $action . "<br>";
    require_once("controllers/" . $controller . "_controller.php");
    switch ($controller) {
        case "pages":
            $controller = new PagesController();
            break;
        case "quataion":
            require_once("models/quatationModel.php");
            require_once("models/customerModel.php");
            require_once("models/employeeModel.php");
            $controller = new QuataionController();
            break;
<<<<<<< HEAD
        case "ProductDetail":
            require_once("models/ProductDetailModel.php");
            $controller=new ProductDetailController();
=======

        case "product":
            require_once("models/quatationModel.php");
            require_once("models/productModel.php");
            $controller = new ProductController();
>>>>>>> 36e9486ec80f502aa3cfce54c0c0cd29579f32a5
            break;
    }
    $controller->{$action}();
}
if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}
