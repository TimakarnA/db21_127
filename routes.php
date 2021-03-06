<?php
$controllers = array('pages'=>['home','error'],
'fieldhospital' =>['index','newFieldhospital','addFieldhospital','search','updateForm','update','deleteConfirm','delete'],
'patientinfh' =>['index','newPatientinfh','addPatientinfh','search','deleteConfirm','delete'],
'telemedicine' =>['index','newTelemedicine','addTelemedicine','search','updateForm','update']) ; 

 

function call($controller ,$action){
    //echo "routes to ".$controller."-".$action."<br>" ;
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages" : require_once("./model/summarize.php");
                       require_once("./model/fieldhospital.php");
                       require_once("./model/patientinfh.php") ; 
                        require_once("./model/color.php");
                        require_once("./model/patient.php");
            $controller = new PagesController() ; break ;

        case "fieldhospital" :  require_once("./model/fieldhospital.php"); 
                                require_once("./model/agency.php"); 
        $controller = new FieldhospitalController(); break ;

        
        case "patientinfh" : require_once("./model/patientinfh.php") ; 
                         require_once("./model/color.php"); 
                         require_once("./model/fieldhospital.php"); 
                         require_once("./model/people.php"); 
                         require_once("./model/patient.php");
        $controller = new PatientinfhController(); break ;

        case "telemedicine" : require_once("./model/telemedicine.php"); 
                              require_once("./model/people.php"); 
                              require_once("./model/patient.php");
                              require_once("./model/patientinfh.php") ;
        $controller = new TelemedicineController(); break ;
    }
$controller->{$action}(); 
}
if(array_key_exists($controller,$controllers))
{   if(in_array($action,$controllers[$controller]))
    {call($controller,$action) ;}
    else
    {call('page','error') ;}
}
else
{ call('page','error') ;}
?>