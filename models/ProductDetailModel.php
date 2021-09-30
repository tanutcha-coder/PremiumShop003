<?php class ProductDetail{
    public $MinQuantity,$Price,$Screen,$MaxQuantity;
    public function_construct($ProductID,$ProductName,$MinQuantity,$Price,$Screen,$MaxQuantity){
        $this->ProductID=$ProductID;
        $this->ProductName=$ProductName;
        $this->MinQuantity=$MinQuantity;
        $this->Price=$Price;
        $this->Screen=$Screen;
        $this->MaxQuantity=$MaxQuantity;
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
        require("connection_close.php");
        return $ProductDetailList;
    }
}?>