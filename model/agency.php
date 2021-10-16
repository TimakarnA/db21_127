<?php class Agency{
    public $AID,$AName;
    public function __construct($AID,$AName){
        $this->AID = $AID;
        $this->AName = $AName;
    }
    public static function getAll(){
        $AgencyList=[];
        require("connection_connect.php");
        $sql ="SELECT * FROM agency" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $AID = $my_row[ID];
            $AName = $my_row[Name];
            $AgencyList[]= new Agency($AID,$AName);
        }
    
        require("connection_close.php");
        return $AgencyList ;
    }
}
?>