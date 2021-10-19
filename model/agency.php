<?php class agency{
    public $AID,$AName;
    public function __construct($AID,$AName){
        $this->AID = $AID;
        $this->AName = $AName;
    }
    public static function getAll(){
        $agency_list=[];
        require("connection_connect.php");
        $sql ="SELECT * FROM agency" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $AID = $my_row[id];
            $AName = $my_row[name];
            $agency_list[]= new agency($AID,$AName);
        }
    
        require("connection_close.php");
        return $agency_list ;
    }
}
?>