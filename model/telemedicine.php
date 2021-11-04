<?php
class telemedicine{
    public $teleID;
    public $patient_id;
    public $id_card;
    public $NamePeople;
    public $LastnameP;
    public $symptom;
    public $temperature;
    public $teledate;
    public $type_P;

    public function __construct($teleID,$patient_id,$id_card,$NamePeople,$LastnameP,$symptom,$temperature,$teledate,$type_P)
    {
        $this->teleID = $teleID;
        $this->patient_id = $patient_id;
        $this->id_card = $id_card;
        $this->NamePeople = $NamePeople;
        $this->LastnameP = $LastnameP;
        $this->symptom = $symptom;
        $this->temperature = $temperature;
        $this->teledate = $teledate;
        $this->type_P = $type_P;
    }

    public static function getAll(){
        //echo "55555";
        $telemedicine_list=[];
        require("connection_connect.php");
        $sql ="SELECT teleID,patient_id,NamePeople,LastnameP,symptom,temperature,teledate
        FROM(SELECT patient_id,id_card,NamePeople,LastnameP FROM Patient NATURAL JOIN People WHERE type_P = 'field_hospital') As P NATURAL JOIN telemedicine" ;
        //$sql="SELECT * from Patientinfh";
        $result=$conn->query($sql);
        
        while($my_row=$result->fetch_assoc())
        {
            $teleID = $my_row[teleID];
            $patient_id = $my_row[patient_id];
            //echo $patient_id;
            $id_card = $my_row[id_card];
            $NamePeople = $my_row[NamePeople];
            $LastnameP = $my_row[LastnameP];
            $symptom = $my_row[symptom];
            $temperature = $my_row[temperature];
            $teledate = $my_row[teledate];
            $type_P = $my_row[type_P];
            $telemedicine_list[]= new telemedicine($teleID,$patient_id,$id_card,$NamePeople,$LastnameP,$symptom,$temperature,$teledate,$type_P);
        }

        require("connection_close.php");
        return $telemedicine_list ;
    }
    /*public static function Add($patient_id,$FHID,$datefh)
    {
        require("connection_connect.php");
        $sql ="INSERT INTO Patientinfh(patient_id,FHID,datefh) VALUES ('$patient_id','$FHID','$datefh')";
        $result=$conn->query($sql);
        //echo $result;
        require("connection_close.php");
        return "Add success $result rows";
    }
    public static function search($key)
    {
        require("connection_connect.php");
        $sql ="SELECT pfh.patient_id,pfh.NamePeople,pfh.LastnameP,pfh.color_name,field_hospital.FHName,pfh.datefh 
        FROM(SELECT p.patient_id,p.NamePeople,p.LastnameP,p.color_name,Patientinfh.datefh,Patientinfh.FHID
        FROM (SELECT Patient.patient_id,Patient.id_card,People.NamePeople,People.LastnameP,Patient.color_name 
        FROM Patient NATURAL JOIN People) As p NATURAL JOIN Patientinfh) As pfh NATURAL JOIN field_hospital
        Where (pfh.patient_id LIKE '%$key%' OR pfh.NamePeople LIKE '%$key%' OR pfh.LastnameP LIKE '%$key%' OR pfh.color_name LIKE '%$key%' OR field_hospital.FHName LIKE '%$key%' OR 
        pfh.datefh LIKE '%$key%')" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $patient_id = $my_row[patient_id];
            //echo $patient_id;
            $id_card = $my_row[id_card];
            $NamePeople = $my_row[NamePeople];
            $LastnameP = $my_row[LastnameP];
            $color_name = $my_row[color_name];
            $FHID = $my_row[FHID];
            $fieldhospital=$my_row[FHName];
            $datefh = $my_row[datefh];
            $patientinfh_list[]= new patientinfh($patient_id,$id_card,$NamePeople,$LastnameP,$color_name,$FHID,$fieldhospital,$datefh);
        }

        require("connection_close.php");
        return $patientinfh_list ;
    }
    
   public static function get($patient_id)
    {
        //echo "5555555";
        echo $FHID ;
        require("connection_connect.php");
        $sql ="SELECT pfh.patient_id,pfh.NamePeople,pfh.LastnameP,pfh.color_name,field_hospital.FHID,field_hospital.FHName,pfh.datefh 
        FROM(SELECT p.patient_id,p.NamePeople,p.LastnameP,p.color_name,Patientinfh.datefh,Patientinfh.FHID
        FROM (SELECT Patient.patient_id,Patient.id_card,People.NamePeople,People.LastnameP,Patient.color_name 
        FROM Patient NATURAL JOIN People) As p NATURAL JOIN Patientinfh) As pfh NATURAL JOIN field_hospital 
        WHERE patient_id = '$patient_id' " ;
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $patient_id = $my_row[patient_id];
        //echo $patient_id;
        $id_card = $my_row[id_card];
        $NamePeople = $my_row[NamePeople];
        $LastnameP = $my_row[LastnameP];
        $color_name = $my_row[color_name];
        $FHID = $my_row[FHID];
        $fieldhospital=$my_row[FHName];
        //echo $fieldhospital;
        $datefh = $my_row[datefh];
        
        require("connection_close.php");
        return new patientinfh($patient_id,$id_card,$NamePeople,$LastnameP,$color_name,$FHID,$fieldhospital,$datefh);
    }
    
   
    public static function update($patient_id,$color_name,$FHID,$datefh,$NEWID)
    {
        //echo "00000";
        require("connection_connect.php");
        $sql ="UPDATE Patientinfh Natural Join Patient
        SET patient_id='$patient_id',Patient.color_name='$color_name',FHID='$FHID',datefh='$datefh'
        WHERE patient_id = '$NEWID'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }
    public static function delete($patient_id)
    {
        //echo "00000";
        require("connection_connect.php");
        $sql ="DELETE from Patientinfh WHERE patient_id='$patient_id' ";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }*/
}?>