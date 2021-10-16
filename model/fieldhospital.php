<?php
class field_hospital{
    public $FHID;
    public $FHName;
    public $FHdate;
    public $greenbed;
    public $yellowbed;
    public $redbed;
    public $AID;

    public function __construct($FHID,$FHName,$FHdate,$greenbed,$yellowbed,$redbed,$AID)
    {
        $this->FHID = $FHID;
        $this->FHName = $FHName;
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
        $sql ="SELECT field_hospital.FHID,field_hospital.FHName,field_hospital.FHdate,field_hospital.greenbed,field_hospital.yellowbed,field_hospital.redbed,agency.name as AID
        FROM field_hospital INNER JOIN agency ON agency.id=field_hospital.AID" ;
        //$sql="SELECT * from field_hospital";
        $result=$conn->query($sql);
        //echo $result;
        while($my_row=$result->fetch_assoc())
        {
            $FHID = $my_row[FHID];
            $FHName = $my_row[FHName];
            $FHdate = $my_row[FHdate];
            $greenbed =$my_row[greenbed];
            $yellowbed = $my_row[yellowbed];
            $redbed =$my_row[redbed];
            $AID = $my_row[AID];
            $fieldhospital_list[]= new field_hospital($FHID,$FHName,$FHdate,$greenbed,$yellowbed,$redbed,$AID);
        }

        require("connection_close.php");
        return $fieldhospital_list ;
    }
   /*public static function get($PriceDetailID)
    {
        //echo"iiiiii";
        require("connection_connect.php");
        $sql = "SELECT Price_detail.PriceDetailID,Product.PRID,Product.Name,Price_detail.จำนวนเริ่มต้น,Price_detail.จำนวนสุดท้าย,Price_detail.price,Price_detail.สกรีนเพิ่มสีละ 
        FROM Price_detail NATURAL JOIN Product WHERE PriceDetailID = '$PriceDetailID'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $PriceDetailID = $my_row[PriceDetailID];
        $PRID = $my_row[PRID];
        $Name = $my_row[Name];
        $จำนวนเริ่มต้น =$my_row[จำนวนเริ่มต้น];
        $จำนวนสุดท้าย = $my_row[จำนวนสุดท้าย];
        $price =$my_row[price];
        $สกรีนเพิ่มสีละ = $my_row[สกรีนเพิ่มสีละ];
        require("connection_close.php");
        return new price_detail($PriceDetailID,$PRID,$Name,$จำนวนเริ่มต้น,$จำนวนสุดท้าย,$price,$สกรีนเพิ่มสีละ);
    }
    public static function Add($PriceDetailID,$PRID,$จำนวนเริ่มต้น,$จำนวนสุดท้าย,$price,$สกรีนเพิ่มสีละ)
    {
        //echo "00000";
        require("connection_connect.php");
        $sql ="INSERT INTO Price_detail (PriceDetailID,PRID,จำนวนเริ่มต้น,จำนวนสุดท้าย,price,สกรีนเพิ่มสีละ) VALUES ('$PriceDetailID','$PRID','$จำนวนเริ่มต้น','$จำนวนสุดท้าย','$price','$สกรีนเพิ่มสีละ')";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "Add success $result rows";
    }
    public static function search($key)
    {
        require("connection_connect.php");
        $sql ="SELECT Price_detail.PriceDetailID,Product.PRID,Product.Name,Price_detail.จำนวนเริ่มต้น,Price_detail.จำนวนสุดท้าย,Price_detail.price,Price_detail.สกรีนเพิ่มสีละ FROM Price_detail NATURAL JOIN Product
        Where (Price_detail.PriceDetailID LIKE '%$key%' OR Price_detail.PRID LIKE '%$key%' OR Product.Name LIKE '%$key%' OR Price_detail.จำนวนเริ่มต้น LIKE '%$key%' OR 
        Price_detail.จำนวนสุดท้าย LIKE '%$key%' OR Price_detail.price LIKE '%$key%' OR Price_detail.สกรีนเพิ่มสีละ LIKE '%$key%')" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $PriceDetailID = $my_row[PriceDetailID];
            $PRID = $my_row[PRID];
            $Name = $my_row[Name];
            $จำนวนเริ่มต้น =$my_row[จำนวนเริ่มต้น];
            $จำนวนสุดท้าย = $my_row[จำนวนสุดท้าย];
            $price =$my_row[price];
            $สกรีนเพิ่มสีละ = $my_row[สกรีนเพิ่มสีละ];
            $pricedetailList[]= new price_detail($PriceDetailID,$PRID,$Name,$จำนวนเริ่มต้น,$จำนวนสุดท้าย,$price,$สกรีนเพิ่มสีละ);
        }

        require("connection_close.php");
        return $pricedetailList ;
    }
    public static function update($PriceDetailID,$PRID,$จำนวนเริ่มต้น,$จำนวนสุดท้าย,$price,$สกรีนเพิ่มสีละ,$NEWID)
    {
        //echo "00000";
        require("connection_connect.php");
        $sql ="UPDATE `Price_detail` SET `PriceDetailID`='$PriceDetailID',`PRID`='$PRID',
        `จำนวนเริ่มต้น`=$จำนวนเริ่มต้น,`จำนวนสุดท้าย`=$จำนวนสุดท้าย,`price`=$price,`สกรีนเพิ่มสีละ`=$สกรีนเพิ่มสีละ 
        WHERE `PriceDetailID` = '$NEWID'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($PriceDetailID)
    {
        //echo "00000";
        require("connection_connect.php");
        $sql ="DELETE from Price_detail WHERE PriceDetailID='$PriceDetailID' ";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }*/
}?>