<html>
<body>
	<head>
		<Title>HEALTHCARE+ We are here for your health</title>
	</head>

	<body bgcolor="#f7f7f7">


		<table height=100% width=100%>

			<tr height=15% bgcolor="#0599c9"><td><font color="white" size=11 style='position:absolute;left:12%;top:3.7%'><b>HEALTHCARE+</b><br><font size=4 color=white>Under University of Kalyani</font></font></td></tr>


			<tr><td></tr>
		</table>
<form method='POST' action='pass.php'>
<table style='position:absolute;left:32%;top:26%;color:0599c9;border:1px solid;height:57%;width:35%'>
<tr bgcolor=white><td><font style='position:absolute;left:26%;top:5%;color:black' size=5>Give your proper details</font><font style='position:absolute;left:26%;top:22%'>Registration / Identification No :<br></font><font style='position:absolute;left:26%;top:29.5%'> <input type='text' maxlength=10 style='height:32;width:250'name='reg2'></font>
<font style='position:absolute;left:26%;top:41.5%'>Phone Number :<br></font><font style='position:absolute;left:26%;top:48%'> <input type='text' maxlength=10 style='height:32;width:250' name='reg3'></font>
<font style='position:absolute;left:26%;top:59.5%'>Date of Birth:<br></font><font style='position:absolute;left:26%;top:66%'> <input type='text' maxlength=10 style='height:32;width:250' name='dob'><br>
<font style='position:absolute;top:104%;color:black' size=2>(Format : DD/MM/YYYY &nbsp;&nbsp;&nbsp;&nbspEx : 06/02/1992)</font></font>
<font style='position:absolute;left:26%;top:84%'> <input type='submit' style='height:32;width:250;background-color:0599c9;border:2px;color:white;font-size:16'></font>

</tr>
<font style="position:absolute;left:47%;top:95%;"><a href="login2.php">Back to home</a></font>
	<table width=136.5% style="position:absolute;left:-16%;top:131.5%;color:white">
		<tr bgcolor="#0599c9"><td><center><br><strong>Copyright @ 2016-17<br>Department of Computer Science & Engineering<br>University of Kalyani</strong></center><br></tr>
	</table>
</form>

</body>
</html>
<?php
session_start();
if(isset($_SESSION['forget']))
{
	echo "<font style='position:absolute;left:43%;top:33.5%;color:red'>".$_SESSION['forget']."</font>";
	unset($_SESSION['forget']);
}
?>
