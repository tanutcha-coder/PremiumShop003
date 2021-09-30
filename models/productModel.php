<?php class Product{
    public $ProductName;
    public function_construct($ProductName)
    {
        this->ProductName = $ProductName;
    }
    public static fuction getAll(){
        $ProductList = [];
        require("connection_connect.php");
        $sql = "select ProductName from Product";
        $result = $conn->query($sql);
        while($my_row == $result->fetch_assoc()){
            $ProductName = $my_row[$ProductName];
            $ProductList[] = new Prodect($ProductName);
        }
        require("connection_close.php");
        return $ProductList;
    }
}
?>