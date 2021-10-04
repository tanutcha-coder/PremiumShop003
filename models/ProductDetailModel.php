<?php class ProductDetail
{

    public $MinQuantity, $Price, $Screen, $MaxQuantity, $ProductDID, $ProductID, $ProductName;
    public function __construct($ProductID, $ProductDID, $MinQuantity, $Price, $Screen, $MaxQuantity, $ProductName)
    {
        $this->ProductID = $ProductID;
        $this->ProductDID = $ProductDID;
        $this->MinQuantity = $MinQuantity;
        $this->Price = $Price;
        $this->Screen = $Screen;
        $this->MaxQuantity = $MaxQuantity;
        $this->ProductName = $ProductName;
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
            $ProductName = $my_row["ProductName"];
            $ProductDID = $my_row["ProductDID"];
            $MinQuantity = $my_row["MinQuantity"];
            $Price = $my_row["Price"];
            $Screen = $my_row["Screen"];
            $MaxQuantity = $my_row["MaxQuantity"];
            $ProductDetail_list[] = new ProductDetail($ProductID, $ProductDID, $MinQuantity, $Price, $Screen, $MaxQuantity, $ProductName);
        }
        require("connection_close.php");
        return $ProductDetail_list;
    }
    public static function get($ProductID)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM `ProductDetail` INNER JOIN `Product`
        ON `Product`.`ProductID` = `ProductDetail`.`ProductID`";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $ProductID = $my_row["ProductID"];
        $ProductName = $my_row["ProductName"];
        $MinQuantity = $my_row["MinQuantity"];
        $Price = $my_row["Price"];
        $Screen = $my_row["Screen"];
        $MaxQuantity = $my_row["MaxQuantity"];
        require("connection_close.php");
        return new ProductDetail($ProductID, $ProductDID, $MinQuantity, $Price, $Screen, $MaxQuantity, $ProductName);
    }

    public static function search($key)
    {
        require("connection_connect.php");
        $sql = "SELECT *FROM Product,ProductDetail 
        WHERE (ProductID like'%$key%'or ProductName like '%$key%'or MinQuantity like'%$key%'or 
        Price like'%$key%'or Screen like'%$key%' or MaxQuantity like'%$key%' )";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $ProductID = $my_row["ProductID"];
            $ProductName = $my_row["ProductName"];
            $MinQuantity = $my_row["MinQuantity"];
            $Price = $my_row["Price"];
            $Screen = $my_row["Screen"];
            $MaxQuantity = $my_row["MaxQuantity"];
            $ProductDetail_list[] = new ProductDetail($ProductID, $ProductDID, $MinQuantity, $Price, $Screen, $MaxQuantity, $ProductName);
        }
        require("connection_close.php");

        return $ProductDetail_list;
    }
    public static function add($ProductID, $ProductName, $MinQuantity, $Price, $Screen, $MaxQuantity)
    {
        require("connection_connect.php");
        $sql = "SELECT (INSERT INTO ProductDetail(ProductID,MinQuantity,MaxQuantity,Screen,Price)
        values ('$ProductID','$MinQuantity','$MaxQuantity','$Screen','$Price'),INSERT INTO Product(ProductName)Value '$ProductName')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }
    public static function update($ProductID, $MinQuantity, $MaxQuantity, $Screen, $Price)
    {
        require("connection_connect.php");
        $sql =   "UPDATE `ProductDetail` SET    
                    `MinQuantity`='$MinQuantity',
                    `Maxquantity`='$MaxQuantity',
                    `ProductID`='$ProductID',
                    `Screen`='$Screen',
                    `Price`='$Price',
                   
                WHERE `ProductID`='$ProductID'";

        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($ProductID)
    {
        require_once("connection_connect.php");
        $sql = "DELETE FROM ProductDetail WHERE ProductID='$ProductID'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }
}
