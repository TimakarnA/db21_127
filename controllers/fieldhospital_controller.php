<?php class FieldhospitalController
{
    public function index()
    {
        //echo "00000";
        $fieldhospital_list = field_hospital::getAll();
        require_once("./views/field_hospital/index_fieldhospital.php");
    }
}?>