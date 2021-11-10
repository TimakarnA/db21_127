<?php
class PagesController
{
    public function home()
    { //echo "5555";
        $summarize_list = summarize::getAll();
        $fieldhospital_list = field_hospital::getsum($summarize_list) ;
        require_once("views/pages/home.php");
    }
    public function error()
    { require_once("views/pages/error.php");}
}
?>