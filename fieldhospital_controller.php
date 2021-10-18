<?php class FieldhospitalController
{
    public function index()
    {
        //echo "00000";
        $fieldhospital_list = field_hospital::getAll();
        require_once("./views/field_hospital/index_fieldhospital.php");
    }
    public function newFieldhospital()
    {
        $agency_list = Agency::getAll();
        require_once("./views/field_hospital/newFieldhospital.php");
    }
    public function addFieldhospital()
    {
       //echo "000000";
       $FHID = $_GET['FHID'];
       $FHName = $_GET['FHName'];
       $FHaddress = $_GET['FHaddress'];
       $FHdate = $_GET['FHdate'];
       $greenbed = $_GET['greenbed'];
       $yellowbed = $_GET['yellowbed'];
       $redbed = $_GET['redbed'];
       $AID = $_GET['AID'];
       field_hospital::Add($FHID,$FHName,$FHaddress,$FHdate,$greenbed,$yellowbed,$redbed,$AID);
       
       FieldhospitalController::index();
    }
    public function search()
    {
        $key = $_GET['key'];
        $fieldhospital_list = field_hospital::search($key);
        require_once("./views/field_hospital/index_fieldhospital.php");
    }
    public function updateForm(){
        echo $FHID;
        $FHID = $_GET['FHID'];
        $field_hospital = field_hospital::get($FHID);
        $agency_list = Agency::getAll();
        require_once("./views/field_hospital/updateForm.php");
    }
    public function update()
    {
       $FHID = $_GET['FHID'];
       $NEWID = $_GET['ID'];
       $FHName = $_GET['FHName'];
       $FHaddress = $_GET['FHaddress'];
       $FHdate = $_GET['FHdate'];
       $greenbed = $_GET['greenbed'];
       $yellowbed = $_GET['yellowbed'];
       $redbed = $_GET['redbed'];
       $AID = $_GET['AID'];
       field_hospital::update($FHID,$FHName,$FHaddress,$FHdate,$greenbed,$yellowbed,$redbed,$AID,$NEWID);
       FieldhospitalController::index();
    }
}?>