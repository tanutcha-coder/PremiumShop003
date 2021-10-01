<?php
class Customer
{
    public $CusID, $CusName, $CusTel, $CusAddress;
    public function __construct($CusID, $CusName, $CusTel, $CusAddress)
    {
        $this->CusID = $CusID;
        $this->CusName = $CusName;
        $this->CusTel = $CusTel;
        $this->CusAddress = $CusAddress;
    }
    public static  function getAll()
    {
        $customerList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `customer`";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $CusID = $my_row["CusID"];
            $CusName = $my_row["CusName"];
            $CusTel = $my_row["CusTel"];
            $CusAddress = $my_row["CusAddress"];


            $customerList[] = new Customer($CusID, $CusName, $CusTel, $CusAddress);
        }

        require("connection_close.php");
        return $customerList;
    }
}
