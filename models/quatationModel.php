<?php
class Quatation
{
    public $No, $Date, $EmID, $CusID, $Deposit, $Credit;
    public function __construct($No, $Date, $EmID, $CusID, $Deposit, $Credit)
    {
        $this->No = $No;
        $this->Date = $Date;
        $this->EmID = $EmID;
        $this->CusID = $CusID;
        $this->Deposit = $Deposit;
        $this->Credit = $Credit;
    }
    public static  function getAll()
    {
        $quatationList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `Quatation`";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $No = $my_row["No"];
            $Date = $my_row["Date"];
            $EmID = $my_row["EmID"];
            $CusID = $my_row["CusID"];
            $Deposit = $my_row["Deposit"];
            $Credit = $my_row["Credit"];;

            $quatationList[] = new Quatation($No, $Date, $EmID, $CusID, $Deposit, $Credit);
        }

        require("connection_close.php");
        return $quatationList;
    }

    public static function get($No)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM `quatation` WHERE `No`= '$No'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $No = $my_row["No"];
        $Date = $my_row["Date"];
        $EmID = $my_row["EmID"];
        $CusID = $my_row["CusID"];
        $Deposit = $my_row["Deposit"];
        $Credit = $my_row["Credit"];
        require("connection_close.php");
        return new Quatation($No, $Date, $EmID, $CusID, $Deposit, $Credit);
    }

    public static function add($No, $Date, $EmID, $CusID, $Deposit, $Credit)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `quatation`(`No`, `Date`, `EmID`, `CusID`, `Deposit`, `Credit`) 
                VALUES ('$No','$Date','$EmID','$CusID','$Deposit','$Credit')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }
    public static function search($key)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM quatation WHERE 
                    `No` like '%$key%'
                    OR `Date` like '%$key%' 
                    OR `EmID` like '%$key%' 
                    OR `CusID` like '%$key%'
                    OR `Deposit` like '%$key%' 
                    OR `Credit` like '%$key%'";
        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {
            $No = $my_row["No"];
            $Date = $my_row["Date"];
            $EmID = $my_row["EmID"];
            $CusID = $my_row["CusID"];
            $Deposit = $my_row["Deposit"];
            $Credit = $my_row["Credit"];
            $search[] = new Quatation($No, $Date, $EmID, $CusID, $Deposit, $Credit);
        }
        require("connection_close.php");
        return $search;
    }
    public static function update($No, $Date, $EmID, $CusID, $Deposit, $Credit)
    {
        require("connection_connect.php");
        $sql = "UPDATE `quatation` SET    
                    `Date`='$Date',
                    `EmID`='$EmID',
                    `CusID`='$CusID',
                    `Deposit`='$Deposit',
                    `Credit`='$Credit' 
                WHERE `No`='$No'";

        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }
    public static function delete($No)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM quatation WHERE `No`='$No'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }
}
