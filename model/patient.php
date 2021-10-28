<?php
class patient{
    public $patient_id;
    public $id_card;
    public $NamePeople;
    public $LastnameP;
    public $color_name;

    public function __construct($patient_id,$id_card,$NamePeople,$LastnameP,$color_name)
    {
        $this->patient_id = $patient_id;
        $this->id_card = $id_card;
        $this->NamePeople = $NamePeople;
        $this->Lastname = $LastnameP;
        $this->color_name = $color_name;
    }

    public static function getAll(){
        //echo "55555";
        $patient_list=[];
        require("connection_connect.php");
        $sql ="SELECT Patient.patient_id,Patient.id_card,People.NamePeople,People.LastnameP,Patient.color_name
        FROM Patient NATURAL JOIN People" ;
        //$sql="SELECT * from field_hospital";
        $result=$conn->query($sql);
        //echo $result;
        while($my_row=$result->fetch_assoc())
        {
            $patient_id = $my_row[patient_id];
            $id_card = $my_row[id_card];
            $NamePeople = $my_row[NamePeople];
            $LastnameP = $my_row[LastnameP];
            $color_name = $my_row[color_name];
            $patient_list[]= new patient($patient_id,$id_card,$NamePeople,$LastnameP,$color_name);
        }

        require("connection_close.php");
        return $patient_list ;
    }
}?>