<form method="get" action="">
    <br>
    <label>No. <input type="text" name="teleID" /> </label><br>
    <label>รหัสคนไข้ <select name="patient_id">
        <?php foreach($patientinfh_list as $patient){echo "<option value= $patient->patient_id>$patient->patient_id</option>";}?></select></label><br>
    <label>อาการ <input type="text" name="symptom" /> </label><br>
    <label>อุณหภูมิ <input type="text" name="temperature" /> </label><br>
    <label>วันที่ตรวจ <input type="date" name="teledate" /> </label><br>
    <label>ผู้ตรวจ <input type="text" name="staffinfh" /> </label><br>
    <br>
    <input type="hidden" name="controller" value="telemedicine"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addTelemedicine">Save</button>
</form>