<form method="get" action="">
        <br>
    <label>รหัสผู้ป่วย <select name="patient_id">
        <?php foreach($patient_list as $patient)
            {echo "<option value= $patient->patient_id";
                if($patient->patient_id==$patientinfh->patient_id){echo " selected='selected'";}
                echo ">$patient->patient_id</option>";
            }?>
        </select></label><br>  
    <label>color <select name="color_name">
        <?php foreach($color_list as $color)
            {echo "<option value= $color->color_name";
                if($color->color_name==$patientinfh->color_name){echo " selected='selected'";}
                echo ">$color->color_name</option>";
            }?>
        </select></label><br> 
    <label>โรงพยาบาลสนาม <select name="FHID">
        <?php foreach($fieldhospital_list as $field_hospital)
            {echo "<option value= $field_hospital->FHID";
                if($field_hospital->FHID==$patientinfh->FHID){echo " selected='selected'";}
                echo ">$field_hospital->FHName</option>";
            }?>
        </select></label><br> 
    <label>วันที่เข้า <input type="date" name="datefh" 
            value="<?php echo $patientinfh->datefh; ?>" /> </label><br> 
        <br>

    <input type="hidden" name="controller" value="patientinfh"/>
    <input type="hidden" name="ID" value="<?php echo $patientinfh->patient_id;?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="update">update</button>
</form>
    