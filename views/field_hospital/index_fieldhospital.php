<table border = 1>
    <tr>
        <td>FHID</td>
        <td>ชื่อโรงพยาบาล</td>
        <td>วันที่เปิดรับ</td>
        <td>จำนวนเตียงสีเขียว</td>
        <td>จำนวนเตียงสีเหลือง</td>
        <td>จำนวนเตียงสีแดง</td>
        <td>หน่วยงาน</td>
        <td>update</td>
        <td>delete</td>
    </tr>
 <?php foreach($fieldhospital_list as $field_hospital)
 {
     echo "<tr><td>$field_hospital->FHID</td>
     <td>$field_hospital->FHName</td>
     <td>$field_hospital->FHdate</td>
     <td>$field_hospital->greenbed</td>
     <td>$field_hospital->yellowbed</td>
     <td>$field_hospital->redbed</td>
     <td>$field_hospital->AID</td>
     <td>update</td>
     <td>delete</td> </tr> ";
 }
 echo "</table>";
 ?>