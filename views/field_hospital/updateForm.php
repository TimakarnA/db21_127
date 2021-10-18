<form method="get" action="">
    <label>ID <input type="text" name="FHID"
            value="<?php echo $field_hospital->FHID; ?>" /> </label><br>
    <label>ชื่อโรงพยาบาลสนาม <input type="text" name="FHName"
            value="<?php echo $field_hospital->FHName; ?>" /> </label><br>
    <label>address <input type="text" name="FHaddress"
            value="<?php echo $field_hospital->FHaddress; ?>" /> </label><br>
    <label>วันที่เปิดรับ <input type="date" name="FHdate" 
            value="<?php echo $field_hospital->FHdate; ?>" /> </label><br> 
    <label>จำนวนเตียงสีเขียว <input type="text" name="greenbed" 
            value="<?php echo $field_hospital->greenbed; ?>" /> </label><br>
    <label>จำนวนเตียงสีเหลือง <input type="text" name="yellowbed" 
            value="<?php echo $field_hospital->yellowbed; ?>" /> </label><br>
    <label>จำนวนเตียงสีแดง <input type="text" name="redbed" 
            value="<?php echo $field_hospital->redbed; ?>" /> </label><br>
    
    <label>หน่วยงาน <select name="AID">
        <?php foreach($agency_list as $agency)
            {echo "<option value= $agency->AID";
                if($agency->AName=$field_hospital->AID){echo " selected='selected'";}
                echo ">$agency->AName</option>";
            }?>
        </select></label><br>  

    <input type="hidden" name="controller" value="fieldhospital"/>
    <input type="hidden" name="ID" value="<?php echo $field_hospital->FHID;?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="update">update</button>
</form>
    