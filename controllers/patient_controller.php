<?php class PatientController
{
    public function index()
    {
        //echo "00000";
        $patient_list = patient::getAll();
        require_once("./views/patient/index_patient.php");
    }
}