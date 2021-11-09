<?php
class summarize{
    public $FHID;
    public $field_hospital;
    public $color_name;
    public $sumpatient;

    public function __construct($FHID,$field_hospital,$color_name,$sumpatient)
    {
        $this->FHID = $FHID;
        $this->field_hospital = $field_hospital;
        $this->color_name = $color_name;
        $this->sumpatient = $sumpatient;
    }

    public static function getAll(){
        //echo "55555";
        $summarize_list=[];
        require("connection_connect.php");
        $sql ="SELECT field_hospital.FHName,ptfh.color_name,ptfh.จำนวนผู้ป่วย FROM (SELECT   Patientinfh.FHID ,Patient.color_name,COUNT(*) As จำนวนผู้ป่วย
        FROM Patient INNER JOIN Patientinfh ON Patient.patient_id = Patientinfh.patient_id
        GROUP BY Patientinfh.FHID , Patient.color_name) As ptfh NATURAL JOIN field_hospital" ;
        //$sql="SELECT * from field_hospital";
        $result=$conn->query($sql);
        //echo $result;
        while($my_row=$result->fetch_assoc())
        {
            $FHID = $my_row[FHID];
            $field_hospital = $my_row[FHName];
            $color_name = $my_row[color_name];
            $sumpatient = $my_row[จำนวนผู้ป่วย];
            $summarize_list[]= new summarize($FHID,$field_hospital,$color_name,$sumpatient);
        }

        require("connection_close.php");
        return $summarize_list ;
    }
}?>