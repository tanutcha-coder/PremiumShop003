<?php
class Product{
    public $ProductID;
    public $ProductName;
    public $Size;
    public $Detail;
    public $MinimumOrder;
    public $CatID;

    public function _construct($ProductID,$ProductName,$Size,$Detail,$MinimumOrder,$CatID){
        $this->ProductID=$ProductID;
        $this->ProductName=$ProductName;
        $this->Size=$Size;
        $this->Detail=$Detail;
        $this->MinimumOrder=$MinimumOrder;
        $this->CatID=$CatID;
        
    }
    public static function getAll(){
        $ProductList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `product`";
        $result = $conn->query($sql);
        while($my_row=$result->fetch_assoc()){
            $ProductID=$my_row["ProductID"];
            $ProductName=$my_row["ProductName"];
            $Size=$my_row["Size"];
            $MinimumOrder=$my_row["MinimumOrder"];
            $CatID=$my_row["CatID"];
            $Detail=$my_row["Detail"];
            $ProductList[]=new Product($ProductID,$ProductName,$Size,$Detail,$MinimumOrder,$CatID);
        }
        require("connection_close.php");
        return $ProductList;   
    }
    
    public static function search($key){
        require("connection_connect.php");
        $sql="SELECT Quatation.No,Product.ProductName,Color.ColorName,Quatation.CusOrder From Quatation NATURAL JOIN Product NATURAL JOIN Color";
        $result= $conn ->query($sql);
        while($my_row==$result->fetch_assoc()){
            $ProductID=$my_row["ProductID"];
            $ProductName=$my_row["ProductName"];
            $Size=$my_row["Size"];
            $MinimumOrder=$my_row["MinimumOrder"];
            $CatID=$my_row["CatID"];
            $Product[]=new Product($ProductID,$ProductName,$Size,$Detail,$MinimumOrder,$CatID);
        }
        require("connect_close.php");
        return $ProductList;   
    }

    public static function add($ProductID,$ProductName,$Size,$Detail,$MinimumOrder,$CatID){
        require("connection_connect.php");
        $sql = "insert into Product (ProductID,ProductName,Size,Detail,MinimumOrder,CatID) values ('$ProductID','$ProductName','$Size','$Detail','$MinimumOrder','$CatID')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }

    public static function update($ProductID,$ProductName,$Size,$Detail,$MinimumOrder,$CatID){
        require("connection_connect.php");
        $sql = "UPDATE Product SET ProductName = '$ProductName',Size = '$Size',Detail = '$Detail',MinimumOrder = '$MinimumOrder',CatID = '$CatID' WHERE ProductID = '$ProductID'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($ProductID){
        require_once("connection_connect.php");
        $sql = "Delete from Product Where ProductID = '$ProductID'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }
}
?>