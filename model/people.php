<?php
class people{
    public $id_card;
    public $NamePeople;
    public $LastnameP;

    public function __construct($id_card,$NamePeople,$LastnameP)
    {
        $this->id_card = $id_card;
        $this->NamePeople = $NamePeople;
        $this->Lastname = $LastnameP;
    }

    public static function getAll(){
        //echo "55555";
        $people_list=[];
        require("connection_connect.php");
        $sql ="SELECT id_card,NamePeople,LastnameP FROM People" ;
        //$sql="SELECT * from field_hospital";
        $result=$conn->query($sql);
        //echo $result;
        while($my_row=$result->fetch_assoc())
        {
            $id_card = $my_row[id_card];
            $NamePeople = $my_row[NamePeople];
            $LastnameP = $my_row[LastnameP];
            $people_list[]= new people($id_card,$NamePeople,$LastnameP);
        }

        require("connection_close.php");
        return $people_list ;
    }
}?>