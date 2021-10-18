<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'] ;
    $action = $_GET['action'] ;
}else{
    $controller = 'pages' ;
    $action = 'home' ; 
}?>
<html>
<head></head>
<body>
    <?php echo "controller = ".$controller.",action=".$action; ?>
    <br>
    [<a href="?controller=pages&action=home">Home</a>]
    [<a href="?controller=fieldhospital&action=index">field_hospital</a>]
    [<a href="?controller=patient&action=index">patient</a>]
    [<a href="?controller=telemedicine&action=index">telemedicine</a>]
    <br>
    <?php require_once("./routes.php") ; ?>
</body>
</html>


    
