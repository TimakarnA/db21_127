<form method="get" action="">
    <br>
    <label>รหัสคนไข้ <select name="patient_id">
        <?php foreach($patient_list as $patient){echo "<option value= $patient->patient_id>$patient->patient_id</option>";}?></select></label><br>
    <label>โรงพยาบาลสนาม <select name="FHID">
        <?php foreach($fieldhospital_list as $fieldhospital){echo "<option value= $fieldhospital->FHID>$fieldhospital->FHName</option>";}?></select></label><br>
    <label>วันที่เข้าโรงพยาบาล <input type="date" name="datefh" /> </label><br>
    <br>
    <input type="hidden" name="controller" value="patientinfh"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addPatientinfh">Save</button>
</form>