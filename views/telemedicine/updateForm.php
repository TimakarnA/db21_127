<form method="get" action="">
        <br>
    <label>teleID <input type="text" name="teleID" 
            value="<?php echo $telemedicine->teleID; ?>" /> </label><br> 
    <label>รหัสผู้ป่วย <select name="patient_id">
        <?php foreach($patientinfh_list as $patient)
            {echo "<option value= $patient->patient_id";
                if($patient->patient_id==$telemedicine->patient_id){echo " selected='selected'";}
                echo ">$patient->patient_id</option>";
            }?>
        </select></label><br>  
    <label>อาการ <input type="text" name="symptom" 
            value="<?php echo $telemedicine->symptom; ?>" /> </label><br>
    <label>อุณหภูมิ <input type="text" name="temperature" 
            value="<?php echo $telemedicine->temperature; ?>" /> </label><br>
    <label>วันที่ตรวจ <input type="date" name="teledate" 
            value="<?php echo $telemedicine->teledate; ?>" /> </label><br>
    <label>ผู้ตรวจ <input type="text" name="staffinfh" 
            value="<?php echo $telemedicine->staffinfh; ?>" /> </label><br>    
        <br>

    <input type="hidden" name="controller" value="telemedicine"/>
    <input type="hidden" name="ID" value="<?php echo $telemedicine->teleID;?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="update">update</button>
</form>
    