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
       $staffinfh = $_GET['staffinfh'];
       telemedicine::Add($teleID,$patient_id,$symptom,$temperature,$teledate,$staffinfh);
       TelemedicineController::index();
    }
    public function search()
    {
        $key = $_GET['key'];
        $telemedicine_list = telemedicine::search($key);
        require_once("./views/telemedicine/index_telemedicine.php");
    }
    public function updateForm()
    {
        //echo $teleID;
        $teleID = $_GET['teleID'];
        $telemedicine = telemedicine::get($teleID);
        $patientinfh_list = patientinfh::getAll();
        //$patient_list = patient::getAll();
        $people_list = people::getAll();
        require_once("./views/telemedicine/updateForm.php");
    }
    public function update()
    {
        $teleID = $_GET['teleID'];
        $patient_id = $_GET['patient_id'];
        $NEWID = $_GET['ID'];
        $symptom = $_GET['symptom'];
        $temperature = $_GET['temperature'];
        $teledate = $_GET['teledate'];
        $staffinfh = $_GET['staffinfh'];
        telemedicine::update($teleID,$patient_id,$symptom,$temperature,$teledate,$staffinfh,$NEWID);
        TelemedicineController::index();
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