<?php class ProductDetailController
{
    public function index()
    {
        $ProductDetail_list = ProductDetail::getAll();
        require_once('views/ProductDetail/index_ProductDetail.php');
    }
    public function newProductDetail()
    {
        $ProductDetail_list = ProductDetail::getAll();
        require_once('views/ProductDetail/newProductDetail.php');
    }
    public function addProductDetail()
    {
        $ProductID = $_GET["ProductID"];
        $ProductDID = $_GET["ProductDID"];
        $ProductName = $_GET["ProductName"];
        $MinQuantity = $_GET["MinQuantity"];
        $MaxQuantity = $_GET["MaxQuantity"];
        $Screen = $_GET["Screen"];
        $Price = $_GET["Price"];

        ProductDetail::Add($ProductID, $ProductDID, $ProductName, $MinQuantity, $MaxQuantity, $Screen, $Price);
        ProductDetailController::index();
    }
    public function search()
    {
        $key = $_GET['key'];
        $ProductDetail_list = ProductDetail::search($key);
        require_once('views/ProductDetail/Index_ProductDetail.php');
    }
    public function update_ProductDetail()
    {
        $ProductDID = $_GET['ProductDID'];
        echo $ProductDID;
        $ProductDetail = ProductDetail::getAll($ProductDID);
        $ProductDetail_list = ProductDetail::getAll();
        require_once('views/ProductDetail/update_ProductDetail.php');
    }
    public function update()
    {
        $ProductID = $_GET["ProductID"];
        $ProductDID = $_GET["ProductDID"];
        $ProductName = $_GET["ProductName"];
        $MinQuantity = $_GET["MinQuantity"];
        $Price = $_GET["Price"];
        $Screen = $_GET["Screen"];
        $MaxQuantity = $_GET["MaxQuantity"];
        ProductDetail::update($ProductID, $ProductDID, $ProductName, $MinQuantity, $MaxQuantity, $Screen, $Price);
        ProductDetailController::index();
    }
    public function delete_quatation()
    {
        $ProductDID = $_GET['ProductDID'];
        echo $ProductDID;
        $ProductDetail_list = ProductDetail::getAll($ProductDID);
        require_once('views/ProductDetail/delete_ProductDetail.php');
    }
    public function delete()
    {
        $ProductDID = $_GET['ProductDID'];
        ProductDetail::delete($ProductDID);
        ProductDetailController::index();
    }
}
