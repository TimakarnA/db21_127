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
    public $staffinfh;
    //public $type_P;

    public function __construct($teleID,$patient_id,$id_card,$NamePeople,$LastnameP,$symptom,$temperature,$teledate,$staffinfh)
    {
        $this->teleID = $teleID;
        $this->patient_id = $patient_id;
        $this->id_card = $id_card;
        $this->NamePeople = $NamePeople;
        $this->LastnameP = $LastnameP;
        $this->symptom = $symptom;
        $this->temperature = $temperature;
        $this->teledate = $teledate;
        $this->staffinfh = $staffinfh;
        //$this->type_P = $type_P;
    }

    public static function getAll(){
        //echo "55555";
        $telemedicine_list=[];
        require("connection_connect.php");
        $sql ="SELECT teleID,patient_id,NamePeople,LastnameP,symptom,temperature,teledate,staffinfh
        FROM(SELECT patient_id,id_card,NamePeople,LastnameP FROM Patient NATURAL JOIN People WHERE type_P = 'field_hospital') As P NATURAL JOIN telemedicine
        ORDER BY teleID" ;
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
            $staffinfh = $my_row[staffinfh];
            //$type_P = $my_row[type_P];
            $telemedicine_list[]= new telemedicine($teleID,$patient_id,$id_card,$NamePeople,$LastnameP,$symptom,$temperature,$teledate,$staffinfh);
        }

        require("connection_close.php");
        return $telemedicine_list ;
    }
    public static function Add($teleID,$patient_id,$symptom,$temperature,$teledate,$staffinfh)
    {
        require("connection_connect.php");
        $sql ="INSERT INTO telemedicine (teleID,patient_id,symptom,temperature,teledate,staffinfh) VALUES ('$teleID','$patient_id','$symptom','$temperature','$teledate','$staffinfh')";
        $result=$conn->query($sql);
        //echo $result;
        require("connection_close.php");
        return "Add success $result rows";
    }
    public static function search($key)
    {
        require("connection_connect.php");
        $sql ="SELECT telemedicine.teleID,P.patient_id,P.NamePeople,P.LastnameP,telemedicine.symptom,telemedicine.temperature,telemedicine.teledate,staffinfh
        FROM(SELECT patient_id,id_card,NamePeople,LastnameP FROM Patient NATURAL JOIN People WHERE type_P = 'field_hospital') As P NATURAL JOIN telemedicine
        WHERE (telemedicine.teleID LIKE '%$key%' OR P.patient_id LIKE '%$key%' OR P.NamePeople LIKE '%$key%' OR P.LastnameP LIKE '%$key%' OR telemedicine.symptom LIKE '%$key%' OR telemedicine.temperature LIKE '%$key%' OR 
        telemedicine.teledate LIKE '%$key%' OR telemedicine.staffinfh LIKE '%$key%')" ;
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
            $staffinfh = $my_row[staffinfh];
            //$type_P = $my_row[type_P];
            $telemedicine_list[]= new telemedicine($teleID,$patient_id,$id_card,$NamePeople,$LastnameP,$symptom,$temperature,$teledate,$staffinfh);
        }

        require("connection_close.php");
        return $telemedicine_list ;
    }
    
  public static function get($teleID)
    {
        //echo "5555555";
        echo $teleID ;
        require("connection_connect.php");
        $sql ="SELECT telemedicine.teleID,P.patient_id,P.NamePeople,P.LastnameP,telemedicine.symptom,telemedicine.temperature,telemedicine.teledate,telemedicine.staffinfh
        FROM(SELECT patient_id,id_card,NamePeople,LastnameP FROM Patient NATURAL JOIN People WHERE type_P = 'field_hospital') As P NATURAL JOIN telemedicine 
        WHERE teleID = '$teleID' " ;
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        
        $teleID = $my_row[teleID];
        $patient_id = $my_row[patient_id];
        //echo $patient_id;
        $id_card = $my_row[id_card];
        $NamePeople = $my_row[NamePeople];
        $LastnameP = $my_row[LastnameP];
        $symptom = $my_row[symptom];
        $temperature = $my_row[temperature];
        $teledate = $my_row[teledate];
        $staffinfh = $my_row[staffinfh];
        //$type_P = $my_row[type_P];
        
        require("connection_close.php");
        return new telemedicine($teleID,$patient_id,$id_card,$NamePeople,$LastnameP,$symptom,$temperature,$teledate,$staffinfh);
    }
    
   
    public static function update($teleID,$patient_id,$symptom,$temperature,$teledate,$staffinfh,$NEWID)
    {
        //echo "00000";
        require("connection_connect.php");
        $sql ="UPDATE telemedicine
        SET teleID='$teleID',patient_id='$patient_id',symptom='$symptom',temperature='$temperature',teledate='$teledate',staffinfh='$staffinfh'
        WHERE teleID = '$NEWID'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }
     /*public static function delete($patient_id)
    {
        //echo "00000";
        require("connection_connect.php");
        $sql ="DELETE from Patientinfh WHERE patient_id='$patient_id' ";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }*/
}?>