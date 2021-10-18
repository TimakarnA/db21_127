<table border = 1>
    <br>
    new field_hospital <a href="?controller=fieldhospital&action=newFieldhospital">click</a><br>
    <form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="fieldhospital"/>
        <button type="submit" name="action" value="search">Search</button>
    </form>
    <br>
    <tr>
        <td>ID</td>
        <td>โรงพยาบาลสนาม</td>
        <td>address</td>
        <td>วันที่เปิดรับ</td>
        <td>จำนวนเตียงสีเขียว</td>
        <td>จำนวนเตียงสีเหลือง</td>
        <td>จำนวนเตียงสีแดง</td>
        <td>หน่วยงาน</td>
        <td>update</td>
        <td>delete</td>
    </tr>
    <br>
 <?php foreach($fieldhospital_list as $field_hospital)
 {
     echo "<tr><td>$field_hospital->FHID</td>
     <td>$field_hospital->FHName</td>
     <td>$field_hospital->FHaddress</td>
     <td>$field_hospital->FHdate</td>
     <td>$field_hospital->greenbed</td>
     <td>$field_hospital->yellowbed</td>
     <td>$field_hospital->redbed</td>
     <td>$field_hospital->AID</td>
     <td><a href=?controller=fieldhospital&action=updateForm&FHID=$field_hospital->FHID>update</a></td>
     <td>delete</td> </tr> ";
 }
 echo "</table>";
 ?>