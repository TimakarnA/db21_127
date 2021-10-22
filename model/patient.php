<?php
class patient{
    public $card_id;
    public $name_P;
    public $lastname_P;
    public $color_name;
    public $FHID;
    public $fieldhospital;
    public $datefh;

    public function __construct($card_id,$name_P,$lastname_P,$color_name,$FHID,$fieldhospital,$datefh)
    {
        $this->card_id = $card_id;
        $this->name_P = $name_P;
        $this->lastname_P = $lastname_P;
        $this->color_name = $color_name;
        $this->FHID = $FHID;
        $this->fieldhospital = $fieldhospital;
        $this->datefh = $datefh;
    }

    public static function getAll(){
        //echo "55555";
        $patient_list=[];
        require("connection_connect.php");
        $sql ="SELECT Patient.card_id,Patient.name_P,Patient.lastname_P,Patient.color_name,field_hospital.FHName,Patient.datefh 
        FROM Patient NATURAL JOIN field_hospital WHERE Patient.FHID=field_hospital.FHID" ;
        //$sql="SELECT * from field_hospital";
        $result=$conn->query($sql);
        //echo $result;
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
        $sql ="SELECT field_hospital.FHID,field_hospital.FHName,field_hospital.FHaddress,field_hospital.FHdate,field_hospital.greenbed,field_hospital.yellowbed,field_hospital.redbed,agency.name as Agency
        FROM field_hospital INNER JOIN agency ON agency.id=field_hospital.AID
        Where (field_hospital.FHID LIKE '%$key%' OR field_hospital.FHName LIKE '%$key%' OR field_hospital.FHaddress LIKE '%$key%' OR field_hospital.FHdate LIKE '%$key%' OR field_hospital.greenbed LIKE '%$key%' OR 
        field_hospital.yellowbed LIKE '%$key%' OR field_hospital.redbed LIKE '%$key%' OR agency.name LIKE '%$key%')" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $FHID = $my_row[FHID];
            $FHName = $my_row[FHName];
            $FHaddress = $my_row[FHaddress];
            $FHdate = $my_row[FHdate];
            $greenbed =$my_row[greenbed];
            $yellowbed = $my_row[yellowbed];
            $redbed =$my_row[redbed];
            $Agency = $my_row[Agency];
            $fieldhospital_list[]= new field_hospital($FHID,$FHName,$FHaddress,$FHdate,$greenbed,$yellowbed,$redbed,$Agency);
        }

        require("connection_close.php");
        return $fieldhospital_list ;
    }
    public static function Add($FHID,$FHName,$FHaddress,$FHdate,$greenbed,$yellowbed,$redbed,$Agency)
    {
        //echo "00000";
        require("connection_connect.php");
        $sql ="INSERT INTO field_hospital (FHID,FHName,FHaddress,FHdate,greenbed,yellowbed,redbed,AID) VALUES ('$FHID','$FHName','$FHaddress','$FHdate','$greenbed','$yellowbed','$redbed','$Agency')";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "Add success $result rows";
    }
    
    public static function update($FHID,$FHName,$FHaddress,$FHdate,$greenbed,$yellowbed,$redbed,$Agency,$NEWID)
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