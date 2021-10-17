<form method="get" action="">
    <label>ID <input type="text" name="FHID" /> </label><br>
    <label>ชื่อโรงพยาบาลสนาม <input type="text" name="FHName" /> </label><br>
    <label>วันที่เปิดรับ <input type="date" name="FHdate" /> </label><br>
    <label>จำนวนเตียงสีเขียว <input type="text" name="greenbed" /> </label><br>
    <label>จำนวนเตียงสีเหลือง <input type="text" name="yellowbed" /> </label><br>
    <label>จำนวนเตียงสีแดง <input type="text" name="redbed" /> </label><br>
    <label>หน่วยงาน <select name="AID">
        <?php foreach($agency_list as $agency){echo "<option value= $agency->AID>$agency->AName</option>";}?></select></label><br>
    
    <input type="hidden" name="controller" value="fieldhospital"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addFieldhospital">Save</button>
</form>
