<?php

class QuataionController
{
    public function index()
    {
        $quatation_list = Quatation::getAll();
        require_once('views/Quatation/Index_quatation.php');
    }

    public function newQuatation()
    {
        $employee_list = Employee::getAll();
        $customer_list = Customer::getAll();
        require_once('views/Quatation/newQuatation.php');
    }

    public function addQuatation()
    {
        $No = $_GET['No'];
        $Date = $_GET['Date'];
        $EmID = $_GET['EmID'];
        $CusID = $_GET['CusID'];
        $Deposit = $_GET['Deposit'];
        $Credit = $_GET['Credit'];

        Quatation::Add($No, $Date, $EmID, $CusID, $Deposit, $Credit);
        QuataionController::index();
    }

    public function search()
    {
        $key = $_GET['key'];
        $quatation_list = Quatation::search($key);
        require_once('views/Quatation/Index_quatation.php');
    }
    public function update_quatation()
    {
        $No = $_GET['No'];
        echo $No;
        $quatation_list = Quatation::get($No);
        // $quatation_list = Quatation::getAll();
        $customer_list = Customer::getAll();
        $employee_list = Employee::getAll();
        require_once('views/Quatation/update_quatation.php');
    }
    public function update()
    {
        $No = $_GET['No'];
        $Date = $_GET['Date'];
        $EmID = $_GET['EmID'];
        $CusID = $_GET['CusID'];
        $Deposit = $_GET['Deposit'];
        $Credit = $_GET['Credit'];
        Quatation::update($No, $Date, $EmID, $CusID, $Deposit, $Credit);
        QuataionController::index();
    }

    public function delete_quatation()
    {
        $No = $_GET['No'];
        echo $No;
        $quatation_list = Quatation::get($No);
        // $quatation_list = Quatation::getAll();
        require_once('views/Quatation/delete_quatation.php');
    }
    public function delete()
    {
        $No = $_GET['No'];
        Quatation::delete($No);
        QuataionController::index();
    }
}
