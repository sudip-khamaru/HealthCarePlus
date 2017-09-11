<?php
include 'db_connect.php';
session_start();
if(isset($_POST['reg2']) && isset($_POST['reg3']) && $_POST['dob'] )
{
	/*$conn=mysql_connect('localhost','root','');
	mysql_select_db('hcplus');*/

	$reg=$_POST['reg2'];
	$_SESSION['reg_pass']=$reg;
	$ph=$_POST['reg3'];
	$dob=$_POST['dob'];
	$sql="select * from user_info where Reg_no='$reg' and Phone='$ph' and Dob='$dob'";
	$res=mysql_query($sql);
	if($res>0)
	{
		$row=mysql_fetch_array($res);
		$_SESSION['photo']=$row[7];

	}
	else
	{
		$_SESSION['forget']="Invalid details provided";
		header("location:forgotton.php");
	}
}
else
{
	$_SESSION['forget']="Invalid details provided";
	header("location:forgotton.php");
}
?>
<html>
<head>
		<Title>HEALTHCARE+ We are here for your health</title>
	</head>

	<body bgcolor="#f7f7f7">


		<table height=100% width=100%>

			<tr height=15% bgcolor="#0599c9"><td><font color="white" size=11 style='position:absolute;left:12%;top:3.7%'><b>HEALTHCARE+</b><br><font size=4 color=white>Under University of Kalyani</font></font></td></tr>


			<tr><td></tr>
		</table>
<body><form method='POST' action='pchng.php'>
<table style='position:absolute;left:32%;top:30%;color:0599c9;border:1px solid;height:57%;width:35%'>
<tr bgcolor=white><td><font style='position:absolute;left:40%;top:6%;color:black' size=5><img src="<?php echo $_SESSION['photo'];?>"  style='border-radius:120px' height=100 width=100></font>
<font style='position:absolute;left:26%;top:41.5%'>New Password<br></font><font style='position:absolute;left:26%;top:48%'> <input type='password' maxlength=10 style='height:32;width:250'name='pass1'></font>
<font style='position:absolute;left:26%;top:59.5%'>Confirm Password<br></font><font style='position:absolute;left:26%;top:66%'> <input type='password' maxlength=10 style='height:32;width:250'name='pass2'><br></font>
<font style='position:absolute;left:26%;top:80%'> <input type='submit' style='height:32;width:250;background-color:0599c9;border:2px;color:white;font-size:16'></font>

</tr>
<font style="position:absolute;left:47%;top:95%;"><a href="login2.php">Back to home</a></font>
	<table width=136.5% style="position:absolute;left:-16%;top:131.5%;color:white">
		<tr bgcolor="#0599c9"><td><center><br><strong>Copyright @ 2016-17<br>Department of Computer Science & Engineering<br>University of Kalyani</strong></center><br></tr>
	</table>
</form>
</body>
<?php
if(isset($_SESSION['p_ntchngd']))
{
	echo "<font style='position:absolute;left:30%;top:70%'>Password not matched</font>";
	unset($_SESSION['p_ntchngd']);
}
?>
