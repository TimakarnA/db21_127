<form method="get" action="">
    <br>
    <label>เลขประจำตัวประชาชน <input type="text" name="card_id" /> </label><br>
    <label>ชื่อ <input type="text" name="name_P" /> </label> 
    <label>นามสกุล <input type="text" name="lastname_P" /> </label><br>
    <label>color <select name="color_name">
        <?php foreach($color_list as $color){echo "<option value= $color->color_name>$color->color_name</option>";}?></select></label><br>
    <label>โรงพยาบาลสนาม <select name="FHID">
        <?php foreach($fieldhospital_list as $fieldhospital){echo "<option value= $fieldhospital->FHID>$fieldhospital->FHName</option>";}?></select></label><br>
    <label>วันที่เข้าโรงพยาบาล <input type="date" name="datefh" /> </label><br>
    <br>
    <input type="hidden" name="controller" value="patient"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addPatient">Save</button>
</form>
