<?php
include 'db_connect.php';
/*$conn=mysql_connect("localhost",'root','');
mysql_select_db("hcplus");*/
session_start();
$apass1=$_POST['apass1'];
$apass2=$_POST['apass2'];
$areg3=$_SESSION['reg_pass1'];
if($apass1==$apass2)
{
	$sql="update admin set apass='$apass1' where aid='$areg3'";
	$var=mysql_query($sql);
	if($var>0)
	{
		echo "<table style='position:absolute;left:12%;top:16%;height:20%;width:71.5%;border:1px solid;color:0599c9'>";
		echo "<tr bgcolor=white><td><font size=5 color=#0599c9 style='position:absolute;left:4%;top:30%'>You have successfully changed your password</font><font style='position:absolute;left:70%;top:20%'><img src='images2.jpg' height=46% width=30%/></font>";
        echo "<font style='position:absolute;left:45.6%;top:80%'><a href='login2.php'>Log In</a></font>";
		echo "</tr></table>";

	}
	else
	{

		echo "<table style='position:absolute;left:12%;top:16%;height:20%;width:71.5%;border:1px solid;color:0599c9'>";
		echo "<tr bgcolor=white><td><font size=5 color=#0599c9 style='position:absolute;left:4%;top:30%'>Sorry! Unable to change your password. Please try again later.</font><font style='position:absolute;left:70%;top:20%'></font>";
        echo "<font style='position:absolute;left:45.6%;top:80%'><a href='login2.php'>Log In</a></font>";
		echo "</tr></table>";
	}

}
else
{
		echo "<table style='position:absolute;left:12%;top:16%;height:20%;width:71.5%;border:1px solid;color:0599c9'>";
		echo "<tr bgcolor=white><td><font size=5 color=#0599c9 style='position:absolute;left:4%;top:30%'>Sorry! Unable to change your password. Please try again later.</font><font style='position:absolute;left:70%;top:20%'></font>";
        echo "<font style='position:absolute;left:45.6%;top:80%'><a href='login2.php'>Log In</a></font>";
		echo "</tr></table>";

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

</body>
</html>
