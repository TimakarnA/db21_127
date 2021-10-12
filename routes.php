<?php
$controllers = array('pages'=>['home','error'],
'fieldhospital' =>['index'],
'patient' =>['index'],
'telemedicine' =>['index']) ; 

 

function call($controller ,$action){
    //echo "routes to ".$controller."-".$action."<br>" ;
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages" : $controller = new PagesController() ; break ;

        case "fieldhospital" :  require_once("./models/fieldhospital.php"); 
                            //require_once("./models/staff.php"); 
                            //require_once("./models/customer.php"); 
                            //require_once("./models/paymenttype.php");
        $controller = new FieldhospitalController(); break ;

        
        case "patient" : require_once("./models/patient.php") ; 
                                 //require_once("./models/quotation.php"); 
                                 //require_once("./models/product.php"); 
                                 //require_once("./models/productcolor.php"); 
        $controller = new PatientController(); break ;

        case "telemedicine" : require_once("./models/telemedicine.php"); 
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