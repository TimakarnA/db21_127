<?php class FieldhospitalController
{
    public function index()
    {
        $fieldhospital_list = price_detail::getAll();
        require_once("./views/price_detail/index_pricedetail.php");
    }
}