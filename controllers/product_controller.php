<?php
class ProductController
{
    public function index()
    {
        $Product_list = Product::getAll();
        require_once('views/Product/Index_product.php');
    }

    public function newProduct()
    {
        $product_list = Product::getAll();
        require_once('views/Product/newProduct.php');
    }

    public function addProduct()
    {
        $ProductID = $_GET['ProductID'];
        $ProductName = $_GET['ProductName'];
        $Size = $_GET['Size'];
        $Detail = $_GET['Detail'];
        $MinimumOrder = $_GET['MinimumOrder'];
        $CatID = $_GET['CatID'];
        
        Product::Add ($ProductID,$ProductName,$Size,$Detail,$MinimumOrder,$CatID);
        ProductController::index();
    }

    public function search()
    {
        $key = $_GET['key'];
        $Product_list = Product::search($key);
        require_once('views/Product/Index_product.php');
    }
    public function update_product()
    {
        $ProductID = $_GET['ProductID'];
        echo $ProductID;
        $Product_list = Product::getAll($ProductID);
        $ProductName_list = Product::getAll();
        require_once('views/Product/update_product.php');
    }
    public function update()
    {
        $ProductID = $_GET['ProductID'];
        $ProductName = $_GET['ProductName'];
        $Size = $_GET['Size'];
        $Detail = $_GET['Detail'];
        $MinimumOrder = $_GET['MinimumOrder'];
        $CatID = $_GET['CatID'];
        Product::update($ProductID,$ProductName,$Size,$Detail,$MinimumOrder,$CatID);
        ProductController::index();
    }

    public function delete_quatation()
    {
        $ProductName = $_GET['ProductName'];
        echo $ProductName;
        $Product_list = Product::getAll($ProductName);
        require_once('views/Product/delete_product.php');
    }
    public function delete()
    {
        $ProductName = $_GET['ProductName'];
        Product::delete($ProductName);
        ProductController::index();
    }
}
?>