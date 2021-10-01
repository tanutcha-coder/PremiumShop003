<?php class ProductDetail{
    public $MinQuantity,$Price,$Screen,$MaxQuantity,$ProductDID,$ProductID,$ProductName;
    public function _construct($ProductID,$ProductDID,$MinQuantity,$Price,$Screen,$MaxQuantity,$ProductName){
        $this->ProductID=$ProductID;
        $this->ProductDID=$ProductDID;
        $this->MinQuantity=$MinQuantity;
        $this->Price=$Price;
        $this->Screen=$Screen;
        $this->MaxQuantity=$MaxQuantity;
        $this->ProductName=$ProductName;
    }
    public static function getAll(){
        $ProductDetailList = [];
        require("connection_connect.php");
        $sql="SELECT * FROM `productdetail`";
        $result = $conn->query($sql);
        while($my_row=$result->fetch_assoc()){
            $ProductID=$my_row["ProductID"];
           
            $MinQuantity=$my_row["MinQuantity"];
            $Price=$my_row["Price"];
            $Screen=$my_row["Screen"];
            $MaxQuantity=$my_row["MaxQuantity"];
            $ProductDetailList[]=new ProductDetail($ProductID,$MinQuantity,$Price,$Screen,$MaxQuantity);
        }
        require("connection_close.php");
        return $ProductDetailList;
    }
    public static function get($ProductID){
        require("connection_connect.php");
        $sql = "SELECT Product.ProductID,Product.ProductName,productdetail.MinQuantity,
        productdetail.MaxQuantity,productdetail.Screen,productdetail.Price FROM productdetail,product";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $ProductID=$my_row["ProductID"];
        $ProductName=$my_row["ProductName"];
        $MinQuantity=$my_row["MinQuantity"];
        $Price=$my_row["Price"];
        $Screen=$my_row["Screen"];
        $MaxQuantity=$my_row["MaxQuantity"];
        return new ProductDetail($ProductID,$ProductName,$MinQuantity,$Price,$Screen,$MaxQuantity);

    }
    public static function search($key){
        require("connection_connect.php");
        $sql="SELECT *FROM Product,ProductDetail 
        WHERE (ProductID like'%$key%'or ProductName like '%$key%'or MinQuantity like'%$key%'or 
        Price like'%$key%'or Screen like'%$key%' or MaxQuantity like'%$key%' )";
        $result= $conn->query($sql);
        while($my_row=$result->fetch_assoc()){
            $ProductID=$my_row["ProductID"];
            $ProductName=$my_row["ProductName"];
            $MinQuantity=$my_row["MinQuantity"];
            $Price=$my_row["Price"];
            $Screen=$my_row["Screen"];
            $MaxQuantity=$my_row["MaxQuantity"];
            $ProductDetailList[]=new ProductDetail($ProductID,$ProductName,$MinQuantity,$Price,$Screen,$MaxQuantity);
        }
        require("connection_close.php");

        return $ProductDetailList;
    }
    public static function add($ProductID,$ProductName,$MinQuantity,$Price,$Screen,$MaxQuantity){
        require("connection_connect.php");
        $sql="UPDATE ProductDetail SET ProductName='$ProductName', MinQuantity= '$MinQuantity',Price='$Price',
        Screen='$Screen',MaxQuantity='$MaxQuantity'WHERE ProductID='$ProductID' ";
        $result= $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }
    public static function delete($ProductID){
        require_once("connection_connect.php");
        $sql = "DELETE FROM ProductDetail WHERE ProductID='$ProductID'";
        $result=conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }
}?>