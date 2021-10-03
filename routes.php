<?php
$controllers = array(
    'pages' => ['home', 'error'],
    'quataion' => ['index','newQuatation'],
    'ProductDetail'=>['index']
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
            $controller=new ProductDetailController();
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
