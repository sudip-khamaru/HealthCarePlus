<?php
session_start();
if(isset($_SESSION['ablank_up']))
{
	echo "<font style=position:absolute;left:42.6%;top:36.6%;color:red>".$_SESSION['ablank_up']."</font>";

	unset($_SESSION['ablank_up']);
}
?>
<html>
	<head>
		<Title>HEALTHCARE+ We are here for your health</title>
	</head>

	<body bgcolor="#f7f7f7"><form method="POST" action="valid_admin.php">
		<table height=102% width=100%>
			<tr height=15% bgcolor="#0599c9"><td><font color="white" size=11 style='position:absolute;left:12%;top:4%'><b>HEALTHCARE+</b><br><font size=4 color=white>Under University of Kalyani</font></td></tr>
			<tr><td></tr>
		</table>
		<table style="position:absolute;left:38%;top:28%;border:1px solid;color:0599c9" height=53% width=25%>
			<tr><td><center><font size=5 color=black>Sign In into your account</font><br><br><br><br>
				<font color=black size=3 style="position:absolute;left:8.4%;top:22.6%">Email or Phone:</font>
					<input type="text" name="aname" size=17 style="height:38px;width:280px"><br><br>
				<font size=3 color=black style="position:absolute;left:8.4%;top:45%">Password:</font><br>
					<input type="password" name="apass" size=17 style="height:38px;width:280px"><br><br>
					<input type="submit" name="add" value="Sign In" style="position:absolute;left:8%;background-color:#0599c9;color:white;border:2px;height:40px;width:280px"><br><br><br>
					<a href="aforgotton.php">Forgotton your password?</a>
				</center></tr>
		</table>
		<font style="position:absolute;left:47%;top:90%;"><a href="login2.php">Back to home</a></font>
		<table width=136.5% style="position:absolute;left:-16%;top:131.5%;color:white">
			<tr bgcolor="#0599c9"><td><center><br><strong>Copyright @ 2016-17<br>Department of Computer Science & Engineering<br>University of Kalyani</strong></center><br></tr>
		</table>
		</form>
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	</body>
</html>
