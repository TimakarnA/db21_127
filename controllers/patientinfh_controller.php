<?php class PatientinfhController
{
    public function index()
    {
        //echo "00000";
        $patientinfh_list = patientinfh::getAll();
        echo "marklee";
        require_once("./views/patientinfh/index_patientinfh.php");
    }
    /*public function newPatient()
    {
        $color_list = color::getAll();
        $fieldhospital_list = field_hospital::getAll();
        require_once("./views/patient/newPatient.php");
    }
    public function addPatient()
    {
       //echo "000000";
       $card_id = $_GET['card_id'];
       $name_P = $_GET['name_P'];
       $lastname_P = $_GET['lastname_P'];
       $color_name = $_GET['color_name'];
       $FHID = $_GET['FHID'];
       $datefh = $_GET['datefh'];
       patient::Add($card_id,$name_P,$lastname_P,$color_name,$FHID,$datefh);
       PatientController::index();
    }
    public function search()
    {
        $key = $_GET['key'];
        $patient_list = patient::search($key);
        require_once("./views/patient/index_patient.php");
    }*/
}
?>