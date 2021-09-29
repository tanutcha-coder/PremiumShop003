<?php
    class Quatation{
        public $No,$Date,$EmID,$CusID,$Deposit,$Credit,$ColorID,$CusOrder,$CusscreenOrder;
        public function __construct($No,$Date,$EmID,$CusID,$Deposit,$Credit,$ColorID,$CusOrder,$CusscreenOrder)
        {
            $this->No = $No;
            $this->Date = $Date;
            $this->EmployeeID = $EmID;
            $this->CustomerID = $CusID;
            $this->Deposit = $Deposit;
            $this->Credit = $Credit;
            $this->ColorID = $ColorID;
            $this->CustomerOrder = $CusOrder;
            $this->CustomerScreenOrder = $CusscreenOrder;

        }
        public static  function getAll()
        {
            $quatationList = [];
            require("connection_connect.php");
            $sql = "select * from Quatation";
            $result=$conn->query($sql);
            require("connection_close.php");
            return $result;
        }
    }