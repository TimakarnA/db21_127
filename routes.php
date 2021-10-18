<?php
$controllers = array('pages'=>['home','error'],
'fieldhospital' =>['index','newFieldhospital','addFieldhospital','search','updateForm','update'],
'patient' =>['index'],
'telemedicine' =>['index']) ; 

 

function call($controller ,$action){
    //echo "routes to ".$controller."-".$action."<br>" ;
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages" : $controller = new PagesController() ; break ;

        case "fieldhospital" :  require_once("./model/fieldhospital.php"); 
                                require_once("./model/agency.php"); 
        $controller = new FieldhospitalController(); break ;

        
        case "patient" : require_once("./model/patient.php") ; 
                                 //require_once("./model/quotation.php"); 
                                 //require_once("./models/product.php"); 
                                 //require_once("./models/productcolor.php"); 
        $controller = new PatientController(); break ;

        case "telemedicine" : require_once("./model/telemedicine.php"); 
                              //require_once("./models/product.php"); 
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