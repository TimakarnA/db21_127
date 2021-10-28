<?php
class patientinfh{
    public $patient_id;
    public $id_card;
    public $NamePeople;
    public $LastnameP;
    public $color_name;
    public $FHID;
    public $fieldhospital;
    public $datefh;

    public function __construct($patient_id,$id_card,$NamePeople,$LastnameP,$color_name,$FHID,$fieldhospital,$datefh)
    {
        $this->patient_id = $patient_id;
        $this->id_card = $id_card;
        $this->NamePeople = $NamePeople;
        $this->LastnameP = $LastnameP;
        $this->color_name = $color_name;
        $this->FHID = $FHID;
        $this->fieldhospital = $fieldhospital;
        $this->datefh = $datefh;
    }

    public static function getAll(){
        echo "55555";
        $patientinfh_list=[];
        require("connection_connect.php");
        $sql ="SELECT pfh.patient_id,pfh.NamePeople,pfh.LastnameP,pfh.color_name,field_hospital.FHName,pfh.datefh 
        FROM(SELECT p.patient_id,p.NamePeople,p.LastnameP,p.color_name,Patientinfh.datefh,Patientinfh.FHID
        FROM (SELECT Patient.patient_id,Patient.id_card,People.NamePeople,People.LastnameP,Patient.color_name 
        FROM Patient NATURAL JOIN People) As p NATURAL JOIN Patientinfh) As pfh NATURAL JOIN field_hospital" ;
        //$sql="SELECT * from Patientinfh";
        $result=$conn->query($sql);
        
        while($my_row=$result->fetch_assoc())
        {
            $patient_id = $my_row[patient_id];
            echo $patient_id;
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
   /*public static function get($FHID)
    {
        //echo $AID;
        require("connection_connect.php");
        $sql ="SELECT field_hospital.FHID,field_hospital.FHName,field_hospital.FHaddress,field_hospital.FHdate,field_hospital.greenbed,field_hospital.yellowbed,field_hospital.redbed,agency.name as Agency
        FROM field_hospital INNER JOIN agency ON agency.id=field_hospital.AID WHERE FHID = '$FHID' " ;
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $FHID = $my_row[FHID];
        $FHName = $my_row[FHName];
        $FHaddress = $my_row[FHaddress];
        $FHdate = $my_row[FHdate];
        $greenbed =$my_row[greenbed];
        $yellowbed = $my_row[yellowbed];
        $redbed =$my_row[redbed];
        $Agency = $my_row[Agency];
        //echo $AID;
        require("connection_close.php");
        return new field_hospital($FHID,$FHName,$FHaddress,$FHdate,$greenbed,$yellowbed,$redbed,$Agency);
    }
    public static function search($key)
    {
        require("connection_connect.php");
        $sql ="SELECT Patient.card_id,Patient.name_P,Patient.lastname_P,Patient.color_name,field_hospital.FHName,Patient.datefh 
        FROM Patient NATURAL JOIN field_hospital
        Where (Patient.card_id LIKE '%$key%' OR Patient.name_P LIKE '%$key%' OR Patient.lastname_P LIKE '%$key%' OR Patient.color_name LIKE '%$key%' OR field_hospital.FHName LIKE '%$key%' OR 
        Patient.datefh LIKE '%$key%')" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $card_id = $my_row[card_id];
            $name_P = $my_row[name_P];
            $lastname_P = $my_row[lastname_P];
            $color_name = $my_row[color_name];
            $FHID = $my_row[FHID];
            $fieldhospital=$my_row[FHName];
            $datefh = $my_row[datefh];
            $patient_list[]= new patient($card_id,$name_P,$lastname_P,$color_name,$FHID,$fieldhospital,$datefh);
        }

        require("connection_close.php");
        return $patient_list ;
    }
    public static function Add($card_id,$name_P,$lastname_P,$color_name,$FHID,$datefh)
    {
        require("connection_connect.php");
        $sql ="INSERT INTO Patient(card_id,name_P,lastname_P,color_name,FHID,datefh) VALUES ('$card_id','$name_P','$lastname_P','$color_name','$FHID','$datefh')";
        $result=$conn->query($sql);
        //echo $result;
        require("connection_close.php");
        return "Add success $result rows";
    }
    
    /*public static function update($FHID,$FHName,$FHaddress,$FHdate,$greenbed,$yellowbed,$redbed,$Agency,$NEWID)
    {
        //echo "00000";
        require("connection_connect.php");
        $sql ="UPDATE field_hospital
        SET FHID='$FHID',FHName='$FHName',FHaddress='$FHaddress',FHdate='$FHdate',greenbed='$greenbed',yellowbed='$yellowbed',redbed='$redbed',AID='$Agency'
        WHERE FHID = '$NEWID'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }
    public static function delete($FHID)
    {
        //echo "00000";
        require("connection_connect.php");
        $sql ="DELETE from field_hospital WHERE FHID='$FHID' ";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }*/
}?>