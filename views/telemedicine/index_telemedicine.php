<table border = 1>
    <br>
    new telemedicine <a href="?controller=telemedicine&action=newTelemedicine">click</a><br>
    <form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="telemedicine"/>
        <button type="submit" name="action" value="search">Search</button>
    </form>
    <br>
    <tr>
        <td><b>No.</b></td>
        <td><b>รหัสคนไข้</b></td>
        <td><b>ชื่อ</b></td>
        <td><b>นามสกุล</b></td>
        <td><b>อาการ</b></td>
        <td><b>อุณหภูมิ</b></td>
        <td><b>วันที่ตรวจ</b></td>
        <td><b>update</b></td>
        <td><b>delete</b></td>
    </tr>
    <br>
 <?php foreach($telemedicine_list as $telemedicine)
 {
     echo "<tr><td>$telemedicine->teleID</td>
     <td>$telemedicine->patient_id</td>
     <td>$telemedicine->NamePeople</td>
     <td>$telemedicine->LastnameP</td>
     <td>$telemedicine->symptom</td>
     <td>$telemedicine->temperature</td>
     <td>$telemedicine->teledate</td>
     <td>update</td>
     <td>delete</td></tr> ";
 }
 echo "</table>";
 ?>