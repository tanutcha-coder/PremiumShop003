<?php
class ProductDetail
{
    public $ProductID,  $ProductDID, $ProductName, $MinQuantity, $MaxQuantit, $Screen, $Price;

    public function __construct($ProductID, $ProductDID, $ProductName, $MinQuantity, $MaxQuantity, $Screen, $Price)
    {
        $this->ProductID = $ProductID;
        $this->ProductDID = $ProductDID;
        $this->ProductName = $ProductName;
        $this->MinQuantity = $MinQuantity;
        $this->MaxQuantity = $MaxQuantity;
        $this->Screen = $Screen;
        $this->Price = $Price;
    }
    public static function getAll()
    {
        $ProductDetail_list = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `ProductDetail` INNER JOIN `Product`
                ON `Product`.`ProductID` = `ProductDetail`.`ProductID`";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $ProductID = $my_row["ProductID"];
            $ProductDID = $my_row["ProductDID"];
            $ProductName = $my_row["ProductName"];
            $MinQuantity = $my_row["MinQuantity"];
            $MaxQuantity = $my_row["MaxQuantity"];
            $Screen = $my_row["Screen"];
            $Price = $my_row["Price"];

            $ProductDetail_list[] = new ProductDetail($ProductID, $ProductDID,  $ProductName, $MinQuantity,  $MaxQuantity, $Screen, $Price);
        }
        require("connection_close.php");
        return $ProductDetail_list;
    }
    public static function get($ProductDID)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM `ProductDetail` INNER JOIN `Product`
        ON `Product`.`ProductID` = `ProductDetail`.`ProductID`";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $ProductID = $my_row["ProductID"];
        $ProductDID = $my_row["ProductDID"];
        $ProductName = $my_row["ProductName"];
        $MinQuantity = $my_row["MinQuantity"];
        $MaxQuantity = $my_row["MaxQuantity"];
        $Screen = $my_row["Screen"];
        $Price = $my_row["Price"];

        require("connection_close.php");
        return new ProductDetail($ProductID, $ProductDID,  $ProductName, $MinQuantity,  $MaxQuantity, $Screen, $Price);
    }

    public static function search($key)
    {
        require("connection_connect.php");
        $sql = "SELECT *FROM Product,ProductDetail 
        WHERE (ProductDID like'%$key%'or ProductID like'%$key%'or ProductName like '%$key%'or MinQuantity like'%$key%'or 
        Price like'%$key%'or Screen like'%$key%' or MaxQuantity like'%$key%' )";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $ProductID = $my_row["ProductID"];
            $ProductDID = $my_row["ProductDID"];
            $ProductName = $my_row["ProductName"];
            $MinQuantity = $my_row["MinQuantity"];
            $Price = $my_row["Price"];
            $Screen = $my_row["Screen"];
            $MaxQuantity = $my_row["MaxQuantity"];
            $ProductDetail_list[] = new ProductDetail($ProductID, $ProductDID,  $ProductName, $MinQuantity,  $MaxQuantity, $Screen, $Price);
        }
        require("connection_close.php");

        return $ProductDetail_list;
    }
    public static function add($ProductID, $ProductDID, $MinQuantity, $MaxQuantity, $Price)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO ProductDetail(ProductDID,MinQuantity,MaxQuantity,Screen,Price)
        values ('$ProductDID','$MinQuantity','$MaxQuantity','$Screen','$Price')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }
    public static function update($ProductDID, $MinQuantity, $MaxQuantity, $Screen, $Price)
    {
        require("connection_connect.php");
        $sql =   "UPDATE `ProductDetail` SET    
                    `MinQuantity`='$MinQuantity',
                    `Maxquantity`='$MaxQuantity',
                    `Screen`='$Screen',
                    `Price`='$Price',
                   
                WHERE `ProductDID`='$ProductDID'";

        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($ProductDID)
    {
        require_once("connection_connect.php");
        $sql = "DELETE FROM ProductDetail WHERE ProductDID='$ProductDID'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }
}
