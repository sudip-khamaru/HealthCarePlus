<?php
 include 'homeorg.php';
 include 'db_connect.php';
?>

<body link="#0599c9" onLoad="blinkFont()";>
<table style="position:absolute;left:12%;top:22%;border:1px solid;color:0599c9;height:170%" width=979>
<tr><td><font style="position:absolute;left:0.0%;top:0.0%"><img src="doc4.jpg" height=210 width=977/>
<font style="position:absolute;left:0%;top:99.2%;color:black">
<?php

$id=$_SESSION['username'];
/*$conn=mysql_connect('localhost','root','');
mysql_select_db('hcplus');*/
$myquery="select * from user_info where phone='$id' or email='$id'";
$var=mysql_query($myquery);
if($row=mysql_fetch_array($var)){
	$_SESSION['reg']=$row[0];
	$_SESSION['name']=$row[1];
	$_SESSION['dept']=$row[4];
	$_SESSION['ph']=$row[3];
	$_SESSION['email']=$row[9];
	$_SESSION['dob']=$row[2];
	$_SESSION['add']=$row[5];
	$_SESSION['abt']=$row[11];
	$_SESSION['photo']=$row[7];


	echo '<table bgcolor="white" style="position:absolute;height:100%;width:80%;color:0599c9">';
	echo '<tr bgcolor="#0599c9" style="position:absolute;height:3.7%;width:99%"  align="center"><td colspan=2><font size=5 color=white>Your Details</font></tr>';
	echo "<tr><td><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<img src=".$row[7]." height=150 style='border-radius:100px;border:1px solid #0599c9' width=200>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp<br><br>
	<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<font style='font-size:21px'>".$row[1]."</strong></font><br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<strong>Department of<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp".$row[4]."<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
	University of Kalyani, Nadia<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspWest Bengal - 741235<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspPhone - ".$row[3]."<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspEmail - ".$row[9]."<br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspAddress-<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp".$row[5]."<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspAbout Me -<br><font style='position:absolute;left:11%'>".
	$row[11]."</font><br><br><br>
	<br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a href='eprofile.php'>Edit your profile</a>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a href='upload_report.php' style='text-decoration:none'><font id='blink1'>Upload your test report</font></a>
	<font size=4 color='0599c9'><br><br><br><br>&nbsp;&nbsp;&nbsp<a href='doc.php'>Dr. Ramprasad Sharma's profile</a><br><br><br>&nbsp;&nbsp;&nbsp<a href='doc.php'>Dr. Asutosh Shah's profile</a><br><br><br><br><br></font></strong>
	<td></tr>";

	echo "</table></font>";

	echo '<td><table style="position:absolute;left:28.5%;top:19.7%;height:90.5%;width:71.7%;color:0599c9">';
	echo '<tr height=3.7% bgcolor="0599c9"><td valign="top">';
	if(!isset($_SESSION['tm']))
	{
		$time=time();
		$_SESSION['tm']=date('d-m-Y -- h:i:s ',strtotime('+5 hours 30 minutes'));

	}

	echo '<font size=5 color=white>&nbspRecent Activity</font>&nbsp;&nbsp<img src="activity.png" height=20 width=25><font style="position:absolute;left:66%;top:1%;color:white">Last Seen: &nbsp '.$_SESSION['tm'].'</font></tr>';
    echo "<tr><td></tr>"	;

	echo '</table>';
}
else
{
	echo "error";
}
?>
</tr>
<tr><td>
<?php
$reg_no=$_SESSION['reg'];
$conn=mysql_connect('localhost','root','');
mysql_select_db('hcplus');
$myquery="select * from activity where reg_no='$reg_no' order by a_id desc limit 6";
$var=mysql_query($myquery);
echo '<table style="position:absolute;left:29%;top:22.8%;height:76%;width:71%;color:0599c9">';
$str="You have recently updated your profile picture";
$str5="Click on Prescription to download your last Prescription";
while($row=mysql_fetch_array($var))
{

	$str2=$row[2];
	$str3=substr($str2,0,46);
	$str7=substr($str2,0,56);
	$str4=substr($str2,48);

	if($str==$str3)
	{

		echo '<tr><tr bgcolor="white"><td><img src="icon.png" height=20 width=20>&nbsp;&nbsp<font size=4>'.$str.'</font><br><br><center><img src='.$str4.' height=145 style="border-radius:80px" width=190></center><font style="position:absolute;left:75%"><img src="right.png" height=12 width=13>&nbsp;&nbsp'.$row[3].'</tr><br>';
	}
	elseif($str7==$str5)
	{
		$file=substr($str2,87);
		echo '<tr bgcolor="white"><td><img src="icon.png" height=20 width=20>&nbsp;&nbsp<font size=4><a href="download.php?nama='.$file.'">Prescription</a>&nbsp;&nbsp'.substr($str2,0,87).'</font><br><br><br><br><br><font style="position:absolute;left:75%"><img src="right.png" height=12 width=13>&nbsp;&nbsp'.$row[3].'</tr><br>';

	}
	else
	{
		echo '<tr bgcolor="white"><td><img src="icon.png" height=20 width=20>&nbsp;&nbsp<font size=4>'.$row[2].'</font><br><br><br><font style="position:absolute;left:75%"><img src="right.png" height=12 width=13>&nbsp;&nbsp'.$row[3].'</tr><br>';
	}

}
echo "</table>";
?>
<td></tr>
</table>
<table width=110% style="position:absolute;left:-6%;top:191%;color:white">
		<tr bgcolor="#0599c9"><td><center><br><strong>Copyright @ 2016-17<br>Department of Computer Science & Engineering<br>University of Kalyani</strong></center><br></tr>
</table>
<script src="js/blink.js"></script>
</body>
