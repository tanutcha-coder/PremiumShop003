<?php
class Employee
{
    public $EmID, $EmPrefix, $EmName, $Department, $Username, $Password;
    public function __construct($EmID, $EmPrefix, $EmName, $Department, $Username, $Password)
    {
        $this->EmID = $EmID;
        $this->EmPrefix = $EmPrefix;
        $this->EmName = $EmName;
        $this->Department = $Department;
        $this->Username = $Username;
        $this->Password = $Password;
    }
    public static  function getAll()
    {
        $employeeList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `employee`";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $EmID = $my_row["EmID"];
            $EmPrefix = $my_row["EmPrefix"];
            $EmName = $my_row["EmName"];
            $Department = $my_row["Department"];
            $Username = $my_row["Username"];
            $Password = $my_row["Password"];

            $employeeList[] = new Employee($EmID, $EmPrefix, $EmName, $Department, $Username, $Password);
        }

        require("connection_close.php");
        return $employeeList;
    }
}
