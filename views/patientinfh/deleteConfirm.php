<?php echo "<br>Are you sure to delete this Patient in field hospital? <br>
            <br> $patientinfh->patient_id $patientinfh->NamePeople $patientinfh->LastnameP <br>";?>
<br>
<form method="get" action="">
    <input type="hidden" name="controller" value="patientinfh"/>
    <input type="hidden" name="patient_id" value="<?php echo $patientinfh->patient_id;?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">delete</button>
</form>