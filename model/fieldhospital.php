<?php
class field_hospital{
    public $FHID;
    public $FHName;
    public $FHaddress;
    public $FHdate;
    public $greenbed;
    public $yellowbed;
    public $redbed;
    public $AID;

    public function __construct($FHID,$FHName,$FHaddress,$FHdate,$greenbed,$yellowbed,$redbed,$AID)
    {
        $this->FHID = $FHID;
        $this->FHName = $FHName;
        $this->FHaddress = $FHaddress;
        $this->FHdate = $FHdate;
        $this->greenbed = $greenbed;
        $this->yellowbed = $yellowbed;
        $this->redbed = $redbed;
        $this->AID = $AID;
    }

    public static function getAll(){
        //echo "55555";
        $fieldhospital_list=[];
        require("connection_connect.php");
        $sql ="SELECT field_hospital.FHID,field_hospital.FHName,field_hospital.FHaddress,field_hospital.FHdate,field_hospital.greenbed,field_hospital.yellowbed,field_hospital.redbed,agency.name as AID
        FROM field_hospital INNER JOIN agency ON agency.id=field_hospital.AID" ;
        //$sql="SELECT * from field_hospital";
        $result=$conn->query($sql);
        //echo $result;
        while($my_row=$result->fetch_assoc())
        {
            $FHID = $my_row[FHID];
            $FHName = $my_row[FHName];
            $FHaddress = $my_row[FHaddress];
            $FHdate = $my_row[FHdate];
            $greenbed =$my_row[greenbed];
            $yellowbed = $my_row[yellowbed];
            $redbed =$my_row[redbed];
            $AID = $my_row[AID];
            $fieldhospital_list[]= new field_hospital($FHID,$FHName,$FHaddress,$FHdate,$greenbed,$yellowbed,$redbed,$AID);
        }

        require("connection_close.php");
        return $fieldhospital_list ;
    }
   public static function get($FHID)
    {
        //echo"iiiiii";
        require("connection_connect.php");
        $sql ="SELECT field_hospital.FHID,field_hospital.FHName,field_hospital.FHaddress,field_hospital.FHdate,field_hospital.greenbed,field_hospital.yellowbed,field_hospital.redbed,agency.name as AID
        FROM field_hospital INNER JOIN agency ON agency.id=field_hospital.AID" ;
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $FHID = $my_row[FHID];
        $FHName = $my_row[FHName];
        $FHaddress = $my_row[FHaddress];
        $FHdate = $my_row[FHdate];
        $greenbed =$my_row[greenbed];
        $yellowbed = $my_row[yellowbed];
        $redbed =$my_row[redbed];
        $AID = $my_row[AID];
        require("connection_close.php");
        return new field_hospital($FHID,$FHName,$FHaddress,$FHdate,$greenbed,$yellowbed,$redbed,$AID);
    }
    public static function search($key)
    {
        require("connection_connect.php");
        $sql ="SELECT field_hospital.FHID,field_hospital.FHName,field_hospital.FHaddress,field_hospital.FHdate,field_hospital.greenbed,field_hospital.yellowbed,field_hospital.redbed,agency.name as AID
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
            $AID = $my_row[AID];
            $fieldhospital_list[]= new field_hospital($FHID,$FHName,$FHaddress,$FHdate,$greenbed,$yellowbed,$redbed,$AID);
        }

        require("connection_close.php");
        return $fieldhospital_list ;
    }
    public static function Add($FHID,$FHName,$FHaddress,$FHdate,$greenbed,$yellowbed,$redbed,$AID)
    {
        //echo "00000";
        require("connection_connect.php");
        $sql ="INSERT INTO field_hospital (FHID,FHName,FHaddress,FHdate,greenbed,yellowbed,redbed,AID) VALUES ('$FHID','$FHName','$FHaddress','$FHdate','$greenbed','$yellowbed','$redbed','$AID')";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "Add success $result rows";
    }
    
    public static function update($FHID,$FHName,$FHaddress,$FHdate,$greenbed,$yellowbed,$redbed,$AID,$NEWID)
    {
        //echo "00000";
        require("connection_connect.php");
        $sql ="UPDATE field_hospital
        SET FHID='$FHID',FHName='$FHName',FHaddress='$FHaddress',FHdate='$FHdate',greenbed='$greenbed',yellowbed='$yellowbed',redbed='$redbed',AID='$AID'
        WHERE FHID = '$NEWID'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    /*public static function delete($PriceDetailID)
    {
        //echo "00000";
        require("connection_connect.php");
        $sql ="DELETE from Price_detail WHERE PriceDetailID='$PriceDetailID' ";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }*/
}?>