<?php class QuatationDetail{
    public $No,$ProductName,$CusOrder,$CusScreenOrder;
    public function _construct($No,$CusOrder,$CusScreenOrder)
    {
        this->No = $No;
        this->CusOrder = $CusOrder;
        this->CusScreenOrder = $CusScreenOrder;
    }
    public static function getAll(){
        $QuatationList = [];
        require("connection_connect.php");
        $sql = "select No,CusOrder,CusScreenOrder from Quatation";
        $result = $conn->query($sql);
        while($my_row == $result->fetch_assoc()){
            $QuatationID = $my_row[$QuatationID];
            $OrderNumber = $my_row[$OrderNumber];
            $ScreenNumber = $my_row[$ScreenNumber];
            $QuatationList[] = new QuatationDetail($QuatationID,$OrderNumber,$ScreenNumber);
        }
        require("connection_close.php");
        return $QuatationList;
    }
}
?>