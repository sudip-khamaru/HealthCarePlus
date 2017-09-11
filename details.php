 <?php
 include 'homeorg.php';
 include 'db_connect.php';
 $id=$_GET['id'];
 /*$conn=mysql_connect('localhost','root','');
 mysql_select_db('hcplus');*/
 $myquery="select * from disease where serial='$id'";
 $var=mysql_query($myquery);
 if($row=mysql_fetch_array($var))
 {
	 echo "<font style='position:absolute;left:45%;top:22%;font-size:26;color:#0599c9'>".$row[1]."</font>";
	 echo "<font style='position:absolute;left:13%;top:28%;font-size:20px;color:#0599c9'><table style='width:74.5%'><tr><td><font style='font-size:19px;color:#0599c9'>".$row[4]."</font></tr></table></font>";
	 echo "<img src=".$row[2]." height=90 width=150 style='position:absolute;left:42.5%;top:40%'>";

	 echo "<font style='position:absolute;left:13%;top:54%;font-size:22px;color:#0599c9;font-weight:bold'>Causes :</font>";
	 echo "<font style='position:absolute;left:13%;top:60%;font-size:20px;color:#0599c9'><table width=80% height=60%><tr><td><font style='font-size:18px;color:#0599c9'>".$row[5]."</font></tr></table></font>";
	 echo "<font style='position:absolute;left:13%;top:82%;font-size:22px;color:#0599c9;font-weight:bold'>Symptoms :</font>";
	 echo "<font style='position:absolute;left:13%;top:88%;font-size:19px;color:#0599c9'><table height=50% width=80%><tr><td><font style='font-size:18px;color:#0599c9'>".$row[6]."</font></tr></table></font>";
	 echo "<font style='position:absolute;left:13%;top:100%;font-size:22px;color:#0599c9;font-weight:bold'>Preventations :</font>";
   echo "<font style='position:absolute;left:13%;top:104%;font-size:19px;color:#0599c9'><table height=50% width=80%><tr><td><font style='font-size:18px;color:#0599c9'>".$row[7]."</font></tr></table></font>";

 }
 ?>
 <table style="position:absolute;left:12%;top:22%;border:1px solid;color:0599c9" height=100% width=979>
 <tr><td></tr>
 </table>
 <table height=10% width=100% style="position:absolute;left:0%;top:121.5%;color:white">
 		<tr bgcolor="#0599c9"><td><center><br><strong>Copyright @ 2016-17<br>Department of Computer Science & Engineering<br>University of Kalyani</strong></center><br></tr>
 </table>
