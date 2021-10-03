<?php
class Product{
    public $ProductID;
    public $ProductName;
    public $Size;
    public $Detail;
    public $MinimumOrder;
    public $CatID;

    public function __construct($ProductID,$ProductName,$No,$CusOrder,$ColorName){
        $this->ProductID=$ProductID;
        $this->ProductName=$ProductName;
        $this->No=$No;
        $this->CusOrder=$CusOrder;
        $this->ColorName=$ColorName;
        
    }
    public static function getAll(){
        $ProductList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `Product` INNER JOIN `Color`
        ON `Product`.`ProductID` = `Color`.`ProductID`
        INNER JOIN `Quatation` ON `Color`.`ColorID` = `Quatation`.`ColorID`";
        $result = $conn->query($sql);
        while($my_row=$result->fetch_assoc()){
            $ProductID=$my_row["ProductID"];
            $ProductName=$my_row["ProductName"];
            $No=$my_row["No"];
            $CusOrder=$my_row["CusOrder"];
            $ColorName=$my_row["ColorName"];
            $ProductList[]=new Product($ProductID,$ProductName,$No,$CusOrder,$ColorName);
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
            $No=$my_row["No"];
            $CusOrder=$my_row["CusOrder"];
            $ColorName=$my_row["ColorName"];
            $Product[]=new Product($ProductID,$ProductName,$No,$CusOrder,$ColorName);
        }
        require("connect_close.php");
        return $ProductList;   
    }

    public static function add($ProductID,$ProductName){
        require("connection_connect.php");
        $sql = "insert into Product (ProductID,ProductName) values ('$ProductID','$ProductName')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }

    public static function update($ProductID,$ProductName){
        require("connection_connect.php");
        $sql = "UPDATE Product SET ProductName = '$ProductName' WHERE ProductID = '$ProductID'";
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