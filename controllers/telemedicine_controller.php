<?php class TelemedicineController
{
    public function index()
    {
        //echo "00000";
        $telemedicine_list = telemedicine::getAll();
        //echo "marklee";
        require_once("./views/telemedicine/index_telemedicine.php");
    }
    /*public function newPatientinfh()
    {
        $color_list = color::getAll();
        $fieldhospital_list = field_hospital::getAll();
        $people_list = people::getAll();
        $patient_list = patient::getAll();
        require_once("./views/patientinfh/newPatientinfh.php");
    }
    public function addPatientinfh()
    {
       //echo "000000";
       $patient_id = $_GET['patient_id'];
       //$id_card = $_GET['id_card'];
       //$color_name = $_GET['color_name'];
       $FHID = $_GET['FHID'];
       $datefh = $_GET['datefh'];
       patientinfh::Add($patient_id,$FHID,$datefh);
       PatientinfhController::index();
    }
    public function search()
    {
        $key = $_GET['key'];
        $patientinfh_list = patientinfh::search($key);
        require_once("./views/patientinfh/index_patientinfh.php");
    }
    
    public function deleteConfirm()
    {
        //echo " tttttt ";
        $patient_id = $_GET['patient_id'];
        $patientinfh = patientinfh::get($patient_id);
        require_once("./views/patientinfh/deleteConfirm.php");
    }
    public function delete()
    {
       //echo "000000";
       $patient_id = $_GET['patient_id'];
        patientinfh::delete($patient_id);
        PatientinfhController::index();
    }*/
}
?>