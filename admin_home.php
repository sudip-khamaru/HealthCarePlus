<?php
	session_start();
	$u_n=$_SESSION['username'];
?>

<html>
	<head>
		<Title>HEALTHCARE+ We are here for your health</title>
	</head>

<body bgcolor="#f7f7f7">
		<font style="position:absolute;left:78.6%;top:8.6%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout_admin.php" style="text-decoration:none;color:white">Log Out</a></font>
		<table height=100% width=100%>
			<tr height=15% bgcolor="#0599c9"><td><font color="white" size=11 style='position:absolute;left:12%;top:4%'><b>HEALTHCARE+</b><br><font size=4 color=white>Under University of Kalyani</font></td></tr>

			<tr><td></tr>
		</table>
<table style="position:absolute;left:12%;top:15.6%;border:1px solid;color:0599c9" height=110% width=72.8%>
<tr><td></tr>
</table>
<font style="position:absolute;left:12.2%;top:20%;font-size:18"><a href="send_pres.php">Click here to send prescription to the patient account</a></font>
<table height=40% width=38% style="position:absolute;left:12%;top:27%;color:white">
		<tr height=12% bgcolor="#0599c9"><td valign=top><font style="position:absolute;font-size:20">&nbsp User information table</font></tr>
		<tr height=16%><td><font style="position:absolute;font-size:18"><a href="user_det.php">Click here to see user details</a><br><br>
		<a href="user_del.php">Click here to remove user details</a></font>
		</tr>
		<tr><td></tr>

    </table>
	<table height=50% width=38% style="position:absolute;left:12%;top:48%;color:white">
		<tr height=12% bgcolor="#0599c9"><td valign=top><font style="position:absolute;font-size:20">&nbsp Doctor details table</font></tr>
		<tr height=45%><td><font style="position:absolute;top:17%;font-size:18">
		<a href="user_d.php">Click here to chat with patient</a><br><br>
		<a href="doc_det.php">Click here to see doctor details</a><br><br>
		<a href="doc_del.php">Click here to remove doctor details</a><br><br>
		<a href="doc_in.php">Click here to insert doctor details</a></font><br><br><br>
		</tr>
		<tr><td></tr>
    </table>

	<table height=40% width=38% style="position:absolute;left:12%;top:82%;color:white">
		<tr height=12% bgcolor="#0599c9"><td valign=top><font style="position:absolute;font-size:20">&nbsp User feedback details table</font></tr>
		<tr height=16%><td><font style="position:absolute;font-size:18">
		<a href="user_fb.php">Click here to see user feedback details</a><br><br>
		<a href="user_fb_del.php">Click here to remove user feedback details</a></font>
		</tr>
		<tr><td></tr>
    </table>

		<table height=40% width=38% style="position:absolute;left:12%;top:102.5%;color:white">
		<tr height=12% bgcolor="#0599c9"><td valign=top><font style="position:absolute;font-size:20">&nbsp Medicines Status</font></tr>
		<tr height=16%><td><font style="position:absolute;font-size:18">
		<a href="medicine_store.php">Click here to store medicines details</a><br><br>
		<a href="medicine_status.php">Click here to see medicines status</a></font>
		</tr>
		<tr><td></tr>
    </table>
	<table height=10% width=100% style="position:absolute;left:0%;top:125%;color:white">
		<tr bgcolor="#0599c9"><td><center><br><strong>Copyright @ 2016-17<br>Department of Computer Science & Engineering<br>University of Kalyani</strong></center><br></tr>
</table>
</body>
</html>
