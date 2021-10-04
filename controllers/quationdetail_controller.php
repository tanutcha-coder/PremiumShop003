<?php
class QuationDetailController
{
    public function index()
    {
        $QuationDetail_list = QuationDetail::getAll();
        require_once('views/QuationDetail/Index_quationdetail.php');
    }

    public function newQuationDetail()
    {
        $QuationDetail_list = QuationDetail::getAll();
        require_once('views/QuationDetail/newQuationDetail.php');
    }

    public function addQuationDetail()
    {
        $ProductID = $_GET['ProductID'];
        $ProductName = $_GET['ProductName'];
        $No = $_GET['No'];
        $CusOrder = $_GET['CusOrder'];
        $ColorName = $_GET['ColorName'];
        $CusScreenOrder = $_GET['CusScreenOrder'];
        
        QuationDetail::Add ($ProductID,$ProductName,$No,$CusOrder,$ColorName,$CusScreenOrder);
        QuationDetailController::index();
    }

    public function search()
    {
        $key = $_GET['key'];
        
        $QuationDetail_list = QuationDetail::search($key);
        require_once('views/QuationDetail/Index_quationdetail.php');
    }
    public function update_quationdetail()
    {
        $QID = $_GET['QID'];
        $QuationDetail = QuationDetail::get($QID);
        $QuationDetail_list = QuationDetail::getAll();
        require_once('views/QuationDetail/update_quationdetail.php');
    }
    public function update()
    {
        $ProductID = $_GET['ProductID'];
        $ProductName = $_GET['ProductName'];
        $Size = $_GET['Size'];
        $Detail = $_GET['Detail'];
        $MinimumOrder = $_GET['MinimumOrder'];
        $CatID = $_GET['CatID'];
        QuationDetail::update($ProductID,$ProductName,$Size,$Detail,$MinimumOrder,$CatID);
        QuationDetailController::index();
    }

    public function delete_quationdetail()
    {
        $ProductName = $_GET['ProductName'];
        echo $ProductName;
        $QuationDetail_list = QuationDetail::getAll($ProductName);
        require_once('views/QuationDetail/delete_quationdetail.php');
    }
    public function delete()
    {
        $ProductName = $_GET['ProductName'];
        QuationDetail::delete($ProductName);
        QuationDetailController::index();
    }
}
?>