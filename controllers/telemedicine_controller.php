<?php class TelemedicineController
{
    public function index()
    {
        //echo "00000";
        $telemedicine_list = telemedicine::getAll();
        //echo "marklee";
        require_once("./views/telemedicine/index_telemedicine.php");
    }
    public function newTelemedicine()
    {
        $patientinfh_list = patientinfh::getAll();
        $people_list = people::getAll();
        require_once("./views/telemedicine/newTelemedicine.php");
    }
    public function addTelemedicine()
    {
       //echo "000000";
       $teleID = $_GET['teleID'];
       $patient_id = $_GET['patient_id'];
       //$id_card = $_GET['id_card'];
       //$color_name = $_GET['color_name'];
       $symptom = $_GET['symptom'];
       $temperature = $_GET['temperature'];
       $teledate = $_GET['teledate'];
       telemedicine::Add($teleID,$patient_id,$symptom,$temperature,$teledate);
       TelemedicineController::index();
    }
    public function search()
    {
        $key = $_GET['key'];
        $telemedicine_list = telemedicine::search($key);
        require_once("./views/telemedicine/index_telemedicine.php");
    }
    
    /*public function deleteConfirm()
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