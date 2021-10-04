<?php class ProductDetailController{
    public function index()
    {
        $ProductDetail_list=ProductDetail::getAll();
        require_once('views/ProductDetail/index_ProductDetail.php');
    }
    public function newProductDetail()
    {
        $ProductDetail_list = ProductDetail::getAll();
        require_once('views/ProductDetail/newProductDetail.php');
    }
    public function addProductDetail()
    {
        $ProductID=$_GET["ProductID"];
        $ProductName=$_GET["ProductName"];
        $MinQuantity=$_GET["MinQuantity"];
        $Price=$_GET["Price"];
        $Screen=$_GET["Screen"];
        $MaxQuantity=$_GET["MaxQuantity"];
        
        ProductDetail::Add($ProductID,$ProductName,$MinQuantity,$MaxQuantity,$Screen,$Price);
        ProductDetailController::index();
    }
    public function search()
    {
        $key = $_GET['key'];
        $ProductDetail_list = ProductDetail::search($key);
        require_once('views/ProductDetail/Index_ProductDetail.php');
    }
    public function update_quatation()
    {
        $ProductID = $_GET['ProductID'];
        echo $ProductID;
        $ProductDetail= ProductDetail::getAll($ProductID);
        $ProductDetail_list = ProductDetail::getAll();
        require_once('views/ProductDetail/update_ProductDetail.php');
    }
    public function update()
    {
        $ProductID=$_GET["ProductID"];
        $ProductName=$_GET["ProductName"];
        $MinQuantity=$_GET["MinQuantity"];
        $Price=$_GET["Price"];
        $Screen=$_GET["Screen"];
        $MaxQuantity=$_GET["MaxQuantity"];
        ProductDetail::update($ProductID,$ProductName,$MinQuantity,$MaxQuantity,$Screen,$Price);
        ProductDetailController::index();
    }
    public function delete_quatation()
    {
        $ProductName = $_GET['ProductName'];
        echo $ProductName;
        $ProductDetail_list = ProductDetail::getAll($ProductName);
        require_once('views/ProductDetail/delete_ProductDetail.php');
    }
    public function delete()
    {
        $ProductName = $_GET['ProductName'];
        ProductDetail::delete($ProductName);
        ProductDetailController::index();
    }

}?>