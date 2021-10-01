<?php class ProductDetailController{
    public function index(){
        $ProductDetail_list=ProductDetail::getAll();
        require_once('views/ProductDetail/index_ProductDetail.php');
    }
}?>