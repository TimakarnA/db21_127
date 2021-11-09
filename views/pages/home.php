<p>Welcome to our homepage</p>
<p>จำนวนผู้ป่วยแต่ละสีในโรงพยาบาลสนามแต่ละแห่ง</p>
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
        <td><b>color</b></td>
        <td><b>จำนวนผู้ป่วย</b></td>
    </tr>
 <?php foreach($summarize_list as $summarize)
 {
     echo "<tr><td>$summarize->field_hospital</td>
     <td>$summarize->color_name</td>
     <td>$summarize->sumpatient</td>
     </tr> ";
 }
 echo "</table>";
 ?>