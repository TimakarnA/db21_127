<p>Welcome to our homepage</p>
<p>จำนวนผู้ป่วยคงเหลือแต่ละสีในโรงพยาบาลสนามแต่ละแห่ง</p>
<table border = 1>
    <!--new patientinfh <a href="?controller=patientinfh&action=newPatientinfh">click</a><br>
    <form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="patientinfh"/>
        <button type="submit" name="action" value="search">Search</button>
    </form>
    <br>-->
    <tr>
        <td><b>โรงพยาบาลสนาม</b></td>
        <td><b>จำนวนเตียงสีเขียวคงเหลือ</b></td>
        <td><b>จำนวนเตียงสีเหลืองคงเหลือ</b></td>
        <td><b>จำนวนเตียงสีแดงคงเหลือ</b></td>
    </tr>
    <br>
 <?php foreach($fieldhospital_list as $field_hospital)
 {
     echo "<tr><td>$field_hospital->FHName</td>
     <td>$field_hospital->greenbed</td>
     <td>$field_hospital->yellowbed</td>
     <td>$field_hospital->redbed</td>
     </tr> ";
 }
 echo "</table>";
 ?>