<?php
class Product{
    public $ProductID;
    public $ProductName;

    public function_construct($ProductID,$ProductName){
        $this->ProductID=$ProductID;
        $this->ProductName=$ProductName;
        
    }

    public static function getAll(){
        $ProductDetailList = [];
        require("connection_connect.php");
        $result = $conn->query($sql);
        while($my_row==$result->fetch_assoc()){
            $ProductID=$my_row[ProductID];
            $ProductName=$my_row[ProductName];
            $MinQuantity=$my_row[MinQuantity];
            $Price=$my_row[Price];
            $Screen=$my_row[Screen];
            $MaxQuantity=$my_row[MaxQuantity];
            $ProductDetailList[]=new ProductDetail($ProductID,$ProductName,$MinQuantity,$Price,$Screen,$MaxQuantity);
        } 

}