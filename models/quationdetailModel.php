<?php
class QuationDetail{
    public $ProductID;
    public $ProductName;
    public $Size;
    public $Detail;
    public $MinimumOrder;
    public $CatID;
    public $CusScreenOrder;
    public $QID;
    public $ColorID;

    public function __construct($ProductID,$ProductName,$No,$CusOrder,$ColorName,$CusScreenOrder,$QID,$ColorID){
        $this->ProductID=$ProductID;
        $this->ProductName=$ProductName;
        $this->No=$No;
        $this->CusOrder=$CusOrder;
        $this->ColorName=$ColorName;
        $this->CusScreenOrder=$CusScreenOrder;
        $this->QID=$QID;
        $this->ColorID=$ColorID;
    }
    public static function getAll(){
        $QuationDetail_list = [];
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
            $CusScreenOrder=$my_row["CusScreenOrder"];
            $QID=$my_row["QID"];
            $ColorID=$my_row["ColorID"];
            $QuationDetail_list[]=new QuationDetail($ProductID,$ProductName,$No,$CusOrder,$ColorName,$CusScreenOrder,$QID,$ColorID,$ColorID);
        }
        require("connection_close.php");
        return $QuationDetail_list;   
    }

    public static function get($QID)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM `Product` INNER JOIN `Color`
        ON `Product`.`ProductID` = `Color`.`ProductID`
        INNER JOIN `Quatation` ON `Color`.`ColorID` = `Quatation`.`ColorID`
        WHERE 
        `Quatation`.`QID` = '$QID'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $ProductID=$my_row["ProductID"];
        $ProductName=$my_row["ProductName"];
        $No=$my_row["No"];
        $CusOrder=$my_row["CusOrder"];
        $ColorName=$my_row["ColorName"];
        $CusScreenOrder=$my_row["CusScreenOrder"];
        $QID=$my_row["QID"];
        $ColorID=$my_row["ColorID"];
        require("connection_close.php");
        return new QuationDetail($ProductID,$ProductName,$No,$CusOrder,$ColorName,$CusScreenOrder,$QID,$ColorID);
    }
    
    public static function search($key){
        require("connection_connect.php");
        $sql="SELECT * FROM `Product` INNER JOIN `Color`
        ON `Product`.`ProductID` = `Color`.`ProductID`
        INNER JOIN `Quatation` ON `Color`.`ColorID` = `Quatation`.`ColorID`
        WHERE 
        `Product`.`ProductID` like '%$key%' or
        `ProductName` like '%$key%' or
        `No` like '%$key%' or
        `CusOrder` like '%$key%' or
        `ColorName` like '%$key%' or
        `CusScreenOrder` like '%$key%'";

        $result= $conn ->query($sql);
        // die($conn->error); //ไว้เช็ค error fetch_assoc()
        
        while($my_row=$result->fetch_assoc()){
            $ProductID=$my_row["ProductID"];
            $ProductName=$my_row["ProductName"];
            $No=$my_row["No"];
            $CusOrder=$my_row["CusOrder"];
            $ColorName=$my_row["ColorName"];
            $CusScreenOrder=$my_row["CusScreenOrder"];
            $QID=$my_row["QID"];
            $ColorID=$my_row["ColorID"];
            $QuationDetail_list[]=new QuationDetail($ProductID,$ProductName,$No,$CusOrder,$ColorName,$CusScreenOrder,$QID,$ColorID);
        }
        
        require("connection_close.php");
        return $QuationDetail_list;   
    }

    public static function add($ProductID,$ProductName){
        require("connection_connect.php");
        $sql = "INSERT INTO `quatationdetail`(`ProductID`, `ProductName`, `No`, `CusOrder`, `ColorName`, `CusScreenOrder`) 
                VALUES ($ProductID,$ProductName,$No,$CusOrder,$ColorName,$CusScreenOrder)";
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