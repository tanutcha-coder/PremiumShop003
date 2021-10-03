<?php
class Product{
    public $ProductID;
    public $ProductName;
    public $Size;
    public $Detail;
    public $MinimumOrder;
    public $CatID;

<<<<<<< Updated upstream
    public function _construct($ProductID,$ProductName,$Size,$Detail,$MinimumOrder,$CatID){
=======
    public function __construct($ProductID,$ProductName,$Size,$Detail,$MinimumOrder,$CatID){
>>>>>>> Stashed changes
        $this->ProductID=$ProductID;
        $this->ProductName=$ProductName;
        $this->Size=$Size;
        $this->Detail=$Detail;
        $this->MinimumOrder=$MinimumOrder;
        $this->CatID=$CatID;
        
    }
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
    public static function getAll(){
        $ProductList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `Product`";
        $result = $conn->query($sql);
        while($my_row==$result->fetch_assoc()){
            $ProductID=$my_row["ProductID"];
            $ProductName=$my_row["ProductName"];
            $Size=$my_row["Size"];
            $MinimumOrder=$my_row["MinimumOrder"];
            $CatID=$my_row["CatID"];
            $ProductList[]=new Product($ProductID,$ProductName,$Size,$Detail,$MinimumOrder,$CatID);
        }
        require("connect_close.php");
        return $ProductList;   
    }
    
    public static function search($key){
        require("connection_connect.php");
<<<<<<< Updated upstream
        $sql="SELECT Quatation.No,Product.ProductName,Color.ColorName,Quatation.CusOrder From Quatation NATURAL JOIN Product NATURAL JOIN Color";
        $result= $conn ->query($sql);
        while($my_row==$result->fetch_assoc()){
=======
        $sql = "SELECT Quatation.No,Product.ProductID,Product.ProductName,Quatation.CusOrder From Quatation NATURAL JOIN Product NATURAL JOIN Color";
        $result= $conn -> query($sql);
        while($my_row=$result->fetch_assoc())
        {
>>>>>>> Stashed changes
            $ProductID=$my_row["ProductID"];
            $ProductName=$my_row["ProductName"];
            $Size=$my_row["Size"];
            $MinimumOrder=$my_row["MinimumOrder"];
            $CatID=$my_row["CatID"];
<<<<<<< Updated upstream
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
=======
            $ProductList[]=new Product($ProductID,$ProductName,$Size,$Detail,$MinimumOrder,$CatID);
        }
        require("connect_close.php");
        return $ProductList; 
    }

>>>>>>> Stashed changes
}
?>