<?php

class QuataionController
    {
        public function index()
        {
            $quatation_list=Quatation::getAll();
            require_once('views/Quatation/Index_quatation.php');
        }
        public function newQuatation()
        {
            $quatation_List=Quatation::getAll();
            require_once('views/Quatation/newQuatation.php');
        }
    }
?>