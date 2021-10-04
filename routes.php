<?php
$controllers = array(
    'pages' => ['home', 'error'],
    'ProductDetail' => ['index', 'newProductDetail', 'addProductDetail', 'search', 'update_ProductDetail', 'update', 'delete_ProductDetail', 'delete'],
    'quataion' => ['index', 'newQuatation', 'addQuatation', 'search', 'update_quatation', 'update', 'delete_quatation', 'delete'],
    'quationdetail' => ['index', 'newQuationDetail', 'addQuationDetail', 'search', 'update_quationdetail', 'update', 'delete_quationdetail', 'delete']
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
        case "ProductDetail":
            require_once("models/ProductDetailModel.php");
            $controller = new ProductDetailController();
            break;
        case "quationdetail":
            require_once("models/quatationModel.php");
            require_once("models/quationdetailModel.php");
            $controller = new QuationDetailController();
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
