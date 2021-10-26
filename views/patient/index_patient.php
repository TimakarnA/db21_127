<table border = 1>
    <br>
    new patient <a href="?controller=patient&action=newPatient">click</a><br>
    <form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="patient"/>
        <button type="submit" name="action" value="search">Search</button>
    </form>
    <br>
    <tr>
        <td><b>เลขประจำตัว</b></td>
        <td><b>ชื่อ</b></td>
        <td><b>นามสกุล</b></td>
        <td><b>color</b></td>
        <td><b>โรงพยาบาลสนาม</b></td>
        <td><b>วันที่เข้า</b></td>
        <td><b>update</b></td>
        <td><b>delete</b></td>
    </tr>
    <br>
 <?php foreach($patient_list as $patient)
 {
     echo "<tr><td>$patient->card_id</td>
     <td>$patient->name_P</td>
     <td>$patient->lastname_P</td>
     <td>$patient->color_name</td>
     <td>$patient->fieldhospital</td>
     <td>$patient->datefh</td>
     <td>update</td>
     <td>delete</td> </tr> ";
 }
 echo "</table>";
 ?>