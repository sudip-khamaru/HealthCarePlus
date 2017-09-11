<?php
	include 'homeorg.php';
	//session_start();

	//$_SESSION['disease'];//=$result;

	echo "<table style='position:absolute;left:14%;top:64%;font-size:20px;color:0599c9'><tr><td>";
						echo "<center>Mr./Mrs./Miss <b><font style='font-size:30px'>".$_SESSION['patient']."</font></b>" ;
						echo "</br></br>Your Appointment No.: <b><font style='font-size:30px'>".$_SESSION['rand_num']."</font></b></br></br>You will be notified regarding your appointment details in your profile very soon. Keep checking your account.</center></tr></table>";

?>
<body>
<font style="position:absolute;left:12%;top:22%"><img src="doc4.jpg" height=210 width=982/></font>
<table style="position:absolute;left:12%;top:22%;border:1px solid;color:0599c9;width:982" height=120% >
<tr><td></tr>
</table>
</font>
<table height=10% width=100% style="position:absolute;left:0%;top:139.55%;color:white">
		<tr bgcolor="#0599c9"><td><center><br><strong>Copyright @ 2016-17<br>Department of Computer Science & Engineering<br>University of Kalyani</strong></center><br></tr>
</table></font>
