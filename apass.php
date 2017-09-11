<?php
include 'db_connect.php';
/*$conn=mysql_connect('localhost','root','');
mysql_select_db('hcplus');*/
session_start();
$reg=$_POST['aid'];
$_SESSION['reg_pass1']=$reg;
$email=$_POST['aemail'];
$sql="select * from admin where aid='$reg' and aname='$email'";
$res=mysql_query($sql);
$var=mysql_fetch_array($res);
if($var>0)
{

}
else
{
	echo "<font style='position:absolute;left:40%;top:76%'>Sorry! Given data is not found.&nbsp<a href=aforgotton.php>Go Back</a></font>";
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
<body><form method='POST' action='apchng.php'>
<table style='position:absolute;left:34%;top:28%;color:0599c9;border:1px solid;height:47%;width:30%'>
<tr bgcolor=white><td><font style="position:absolute;left:20.6%;top:10%;font-size:18px">Hi Admin! Change Your Password</font>
<font style='position:absolute;left:21%;top:26%'>New Password:<br></font><font style='position:absolute;left:21%;top:34%'> <input type='password' maxlength=20 style='height:32;width:250' name='apass1'></font>
<font style='position:absolute;left:21%;top:47%'>Confirm Password:<br></font><font style='position:absolute;left:21%;top:56%'> <input type='password' maxlength=15 style='height:32;width:250' name='apass2'><br></font>
<font style='position:absolute;left:21%;top:74%'> <input type='submit' style='height:32;width:250;background-color:0599c9;border:2px;color:white;font-size:16'></font>

</tr>
<table></form>
</body>
<?php
if(isset($_SESSION['p_ntchngd']))
{
	echo "<font style='position:absolute;left:30%;top:70%'>Password not matched</font>";
	unset($_SESSION['p_ntchngd']);
}
?>
