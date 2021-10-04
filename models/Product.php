<?php class Product{
    public $Product,$ProductName,$Size,$Detail,$MinimumOrder;
    public function _construct( $Product,$ProductName,$Size,$Detail,$MinimumOrder)
    {
        $this->ProducrID=$ProductID;
        $this->$ProductName=$ProductName;
        $this->$Size=$Size;
        $this->CusOrder = $Detail;
        $this->MinimumOrder = $MinimumOrder;
    }
    public static function getAll(){
        $Product_list = [];
        require("connection_connect.php");
        $sql = "SELECT * from `Product`";
        $result = $conn->query($sql);
        while($my_row == $result->fetch_assoc()){
            $ProductName=$my_row["ProductName"];
            $Product_list[] = new Product($ProductName);
        }
        require("connection_close.php");
        return $Product_list;
    }
}