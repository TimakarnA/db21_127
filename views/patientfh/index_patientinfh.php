<table border = 1>
    <br>
    <!--new patient <a href="?controller=patient&action=newPatient">click</a><br>
    <form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="patient"/>
        <button type="submit" name="action" value="search">Search</button>
    </form>
    <br>-->
    <tr>
        <td><b>รหัสคนไข้</b></td>
        <td><b>ชื่อ</b></td>
        <td><b>นามสกุล</b></td>
        <td><b>color</b></td>
        <td><b>โรงพยาบาลสนาม</b></td>
        <td><b>วันที่เข้า</b></td>
        <td><b>update</b></td>
        <td><b>delete</b></td>
    </tr>
    <br>
 <?php foreach($patientinfh_list as $patientinfh)
 {
     echo "<tr><td>$patientinfh->patient_id</td>
     <td>$patientinfh->NamePeople</td>
     <td>$patientinfh->LastnameP</td>
     <td>$patientinfh->color_name</td>
     <td>$patientinfh->fieldhospital</td>
     <td>$patientinfh->datefh</td>
     <td>update</td>
     <td>delete</td> </tr> ";
 }
 echo "</table>";
 ?>