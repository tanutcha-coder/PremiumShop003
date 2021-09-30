<?php
    class Quatation{
        public $No,$Date,$EmID,$CusID,$Deposit,$Credit,$ColorID,$CusOrder,$CusscreenOrder;
        public function __construct($No,$Date,$EmID,$CusID,$Deposit,$Credit,$ColorID,$CusOrder,$CusscreenOrder)
        {
            $this->No = $No;
            $this->Date = $Date;
            $this->EmID = $EmID;
            $this->CusID = $CusID;
            $this->Deposit = $Deposit;
            $this->Credit = $Credit;
            $this->ColorID = $ColorID;
            $this->CusOrder = $CusOrder;
            $this->CusscreenOrder = $CusscreenOrder;

        }
        public static  function getAll()
        {
            $quatationList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM `Quatation`"; 
            $result=$conn->query($sql);
            while($my_row=$result->fetch_assoc()){
                $No=$my_row["No"];
                $Date=$my_row["Date"];
                $EmID=$my_row["EmID"];
                $CusID=$my_row["CusID"];
                $Deposit=$my_row["Deposit"];
                $Credit=$my_row["Credit"];
                $ColorID=$my_row["ColorID"];
                $CusOrder=$my_row["CusOrder"];
                $CusscreenOrder=$my_row["CusscreenOrder"];
                
                $quatationList[]= new Quatation($No,$Date,$EmID,$CusID,$Deposit,$Credit,$ColorID,$CusOrder,$CusscreenOrder);
            }
            
            require("connection_close.php");
            return $quatationList;
        }
    }
