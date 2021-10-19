<?php echo "<br>Are you sure to delete this Field Hospital? <br>
            <br> $field_hospital->FHID $field_hospital->FHName <br>";?>
<br>
<form method="get" action="">
    <input type="hidden" name="controller" value="fieldhospital"/>
    <input type="hidden" name="FHID" value="<?php echo $field_hospital->FHID;?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">delete</button>
</form>