<html>
	<head>
		<Title>HEALTHCARE+ We are here for your health</title>
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/form-validation.js"></script>
	</head>

	<body bgcolor="#f7f7f7">
	<form method="POST" action="valid.php" name="home">

		<table height=100% width=100%>
			<tr height=15% bgcolor="#0599c9"><td><font color="white" size=11 style='position:absolute;left:12%;top:4%'><b>HEALTHCARE+</b><br><font size=4 color=white>Under University of Kalyani</font></td></tr>
				<tr><td><font size=4 face="mongolian baiti" color="#0599c9" style="position:absolute;left:12%; top:21.5%">HEALTHCARE+ Helps you how to take care of your health in<br>a easy way. To know more please sign up or log in here.
			</tr>
		</table>

		<table style="position:absolute;left:12%;top:33%;border:1px solid;color:0599c9" height=53% width=25%>
			<tr><td><center><font size=5 color=black>Sign In into your account</font><br><br><br><br>
				<font color=black size=3 style="position:absolute;left:8.4%;top:22.6%">Email or Phone:</font>
					<input type="text" name="name" id="name" size=17 style="height:38px;width:280px"><br><br>
				<font size=3 color=black style="position:absolute;left:8.4%;top:45%">Password:</font><br>
					<input type="password" name="pass" id="pass" size=17 style="height:38px;width:280px"><br><br>
					<input type="submit" name="sub" value="Sign In" onClick="return validation1()" style="position:absolute;left:8%;background-color:#0599c9;color:white;border:2px;height:40px;width:280px"><br><br><br>
					<a href="forgotton.php">Forgotten your password?</a>
				</center></tr>
		</table>
		<table>
			<tr><td>
				<font size=6.5 face="arial" style="position:absolute;left:58%; top:21%;color:0599c9">Create your account</font>
				<font size=4 style="position:absolute;left:58%; top:28%;">It's free to sign up</font>
				<input type="text" name="reg" id="reg" placeholder="Registration No or Identification No" size="52" maxlength="15" class="inputbox" style="height:40px;position:absolute;left:58%; top:32.5%">
				<input type="text" name="mob" id="mob" onKeyUp="mobile_check()" placeholder="Mobile number" size="52" maxlength="10" class="inputbox" style="height:40px;position:absolute;left:58%; top:40%">
				<input type="email" name="email" id="email" placeholder="E-Mail Id" size="52" maxlength="30" class="inputbox" style="height:40px;position:absolute;left:58%; top:47%">
				<input type="password" name="pass2" id="pass2" placeholder="New password" size="52" maxlength="10" class="inputbox" style="height:40px;position:absolute;left:58%; top:54%"><br>
					<font style="position:absolute;left:58%;top:60.8%;"><b>Prove that you are not a robot-</b><br><br>
					<img src="captche.php"/></font><br><br>
						<?php

							session_start();
							$_SESSION['validate']="true";
							$_SESSION['secure']=rand(1000,9999);
							if(!empty($_SESSION['blank_up']))
							{
								echo "<font style=position:absolute;left:17%;top:42%;color:red>".$_SESSION['blank_up']."</font>";
								unset($_SESSION['blank_up']);
							}
							if(!empty($_SESSION['blank_error']))
							{
								echo "<font style=position:absolute;left:58%;top:91%;color:red>".$_SESSION['blank_error']."</font>";
								unset(	$_SESSION['blank_error']);
							}
							if(!empty($_SESSION['blank_error']))
							{
								echo "<font style=position:absolute;left:58%;top:91%;color:red>".$_SESSION['blank_error2']."</font>";
								unset(	$_SESSION['blank_error2']);
							}


						?>


						<input type="text" placeholder="Type the text" name="cap" id="cap" maxlength=10 size=14 style="height:40px;position:absolute;left:58%;top:75.5%">
					</font>
					<input type="submit" name="sub2" value="Sign Up" onClick="return validation2()" style="position:absolute;left:58%; top:83.8%;height:40px;width:180px;background-color:#0599c9;border:2px;color:white;font-size:15;" color="green"></tr>
		</table>

		<table height=10% width=100% style="position:absolute;left:0%;top:105%;color:white">
			<tr bgcolor="#0599c9"><td><center><br><strong>Copyright @ 2016-17<br>Department of Computer Science & Engineering<br>University of Kalyani</strong><br><a href="admin.php">Admin Login</a></center><br></tr>
    </table>
	</body>


</html>
