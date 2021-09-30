<?php
class Quatation
{
    public $No, $Date, $EmID, $CusID, $Deposit, $Credit, $ColorID, $CusOrder, $CusscreenOrder;
    public function __construct($No, $Date, $EmID, $CusID, $Deposit, $Credit, $ColorID, $CusOrder, $CusScreenOrder)
    {
        $this->No = $No;
        $this->Date = $Date;
        $this->EmID = $EmID;
        $this->CusID = $CusID;
        $this->Deposit = $Deposit;
        $this->Credit = $Credit;
        $this->ColorID = $ColorID;
        $this->CusOrder = $CusOrder;
        $this->CusScreenOrder = $CusScreenOrder;
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
            $Credit = $my_row["Credit"];
            $ColorID = $my_row["ColorID"];
            $CusOrder = $my_row["CusOrder"];
            $CusScreenOrder = $my_row["CusScreenOrder"];

            $quatationList[] = new Quatation($No, $Date, $EmID, $CusID, $Deposit, $Credit, $ColorID, $CusOrder, $CusScreenOrder);
        }

        require("connection_close.php");
        return $quatationList;
    }

    public static function get($CusID)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM quatation,customer WHERE quatation.CusID=customer.CusID";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $No = $my_row["No"];
        $Date = $my_row["Date"];
        $EmID = $my_row["EmID"];
        $CusID = $my_row["CusID"];
        $Deposit = $my_row["Deposit"];
        $Credit = $my_row["Credit"];
        $ColorID = $my_row["ColorID"];
        $CusOrder = $my_row["CusOrder"];
        $CusScreenOrder = $my_row["CusScreenOrder"];
        return new Quatation($No, $Date, $EmID, $CusID, $Deposit, $Credit, $ColorID, $CusOrder, $CusscreenOrder);
    }
}
