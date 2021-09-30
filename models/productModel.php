<<<<<<< Updated upstream
<?php
class Product{
    public $ProductID;
=======
<?php 
class Product{
>>>>>>> Stashed changes
    public $ProductName;

    public function_construct($ProductID,$ProductName){
        $this->ProductID=$ProductID;
        $this->ProductName=$ProductName;
        
    }
<<<<<<< Updated upstream

    public static function getAll(){
        $ProductDetailList = [];
=======
    public static function getAll(){
        $ProductList = [];
>>>>>>> Stashed changes
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