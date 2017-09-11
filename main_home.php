<?php
   include 'homeorg.php';
   include 'db_connect.php';
    if ($_SESSION['log']==0)
	{
		header('location:login2.php');
		$_SESSION['blank_up']="Please login or register first";
	}

	/*$conn=mysql_connect('localhost','root','');
	mysql_select_db('hcplus');*/
	//$con=mysqli_connect("localhost","root","","hcplus");
	$email=$_SESSION['username'];
	$conn1="select Name,Photo,Email from user_info where Email='$email'";
	$conn2="select * from disease";
	//$result = mysqli_query($con,"SELECT * FROM disease");
	$con1=mysql_query($conn1);
	$con2=mysql_query($conn2);

	while($row1=mysql_fetch_array($con1))
	{
		$u_n=$row1[0];
		$ph=$row1[1];
	}

	$i=22;
	$j=22;
	$val=0;
	while($row2=mysql_fetch_array($con2))
	{

		if($row2[0]%2!=0)
		{
			//$val=$row2[0];
			//$_SESSION['value']=$val;
			echo "<table style='position:absolute;left:12%;top:$i%;border:1px solid #0599c9;background-color:white;width:23%'>
				<tr height=15% style='background-color:#0599c9;color:white;text-shadow:1px 1px #000000;' align='middle' ><td colspan='2'><b>".$row2[1]."</b></tr>
				<tr><td><img src=".$row2[2]." height=115 width=135/>
				<td><font style='position:absolute;left:46%;top:20%' color='#0599c9'>".$row2[3]."</font>
				<a href=details.php?id=".$row2[0]." style='position:absolute;left:69.5%;top:87.5%;text-decoration:none;color:#0599c9'><strong>see more>></strong></a>
				</tr></table>";
		$i=$i+25;
		$val=$val+1;
		//$_SESSION['value1']=$val;
		}
		else
		{
			//$val=$row2[0];
			//$_SESSION['value']=$val;
			echo "<table style='position:absolute;left:37.5%;top:$j%;border:1px solid #0599c9;background-color:white;width:23%'>
				<tr style='background-color:#0599c9;color:white;text-shadow:1px 1px #000000;' align='middle'><td colspan='2'><b>".$row2[1]."</b></tr>
				<tr><td><img src=".$row2[2]." height=115 width=135/>
				<td><font style='position:absolute;left:46%;top:20%;' color='#0599c9'>".$row2[3]."</font>
				<a href=details.php?id=".$row2[0]." style='position:absolute;left:69.5%;top:87.5%;text-decoration:none;color:#0599c9'><strong>see more>></strong></a>
				</tr></table>";
		$j=$j+25;
		$val=$val+1;
		//$_SESSION['value2']=$val;
		}
		//$i=$i+15;
	}

?>
<html>
<body link="#0599c9" onLoad="blinkFont();">
<table style="position:absolute;left:62.4%;top:22%;background-color:white;border:1px solid #0599c9;font-size:18px;height:60%;width:22.3%" id="rightside">
						<tr style='background-color:#0599c9;color:white;font-weight:bold;text-shadow:1px 1px #000000;' align='middle'><td>Important Links</td></tr>
						<tr><td><a href="http://www.mciindia.org" style="text-decoration:none;font-weight:bold;font-size:16px;">Medical Council of India</a></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
						<tr><td><a href="http://www.aiims.edu" style="text-decoration:none;font-weight:bold;font-size:16px">All India Institute of Medical Science</a></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
						<tr><td><a href="http://www.medicalcollegekolkata.org" style="text-decoration:none;font-weight:bold;font-size:16px">Kolkata Medical College</a></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
						<tr><td><a href="http://www.nrsmc.edu.in" style="text-decoration:none;font-weight:bold;font-size:16px">Nilratan Sircar Medical College</a></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
						<tr><td><a href="http://www.rgkarmedicalcollege.org" style="text-decoration:none;font-weight:bold;font-size:16px">RG Kar Medical College</a></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
						<tr><td><a href="http://www.cnmckolkata.in" style="text-decoration:none;font-weight:bold;font-size:16px">Calcutta National Medical College</a></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
						<tr><td><a href="http://www.ipgmer.gov.in" style="text-decoration:none;font-weight:bold;font-size:16px">SSKM Hospital</a></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
						<tr><td><a href="http://www.bsmedicalcollege.org.in" style="text-decoration:none;font-weight:bold;font-size:16px">Bankura Sammilani Medical College</a></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
						<tr><td><a href="http://www.burdwanmedicalcollege.com" style="text-decoration:none;font-weight:bold;font-size:16px">Burdwan Medical College</a></li></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
						<tr><td><a href="http://www.wbuhs.ac.in/comjnmkalyani" style="text-decoration:none;font-weight:bold;font-size:16px">College of Medicine and JNM Hospital</a></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
						<tr><td><a href="http://www.maldamedicalcollege.com" style="text-decoration:none;font-weight:bold;font-size:16px">Malda Medical College & Hospital</a></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
						<tr><td><a href="http://www.midnaporemmc.ac.in" style="text-decoration:none;font-weight:bold;font-size:16px">Midnapore Medical College</a></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
						<tr><td><a href="http://www.murshidabadmedicalcollege.in" style="text-decoration:none;font-weight:bold;font-size:16px">Murshidabad Medical College & Hospitals</a></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
						<tr><td><a href="http://www.nbmch.org" style="text-decoration:none;font-weight:bold;font-size:16px">North Bengal Medical College</a></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
						</table>
						<table style="position:absolute;left:62.4%;top:102%;background-color:white;border:1px solid #0599c9;font-size:18px;height:16.7%;width:22.3%">
						<tr><td><CENTER><font color="red" id="blink1"><strong>WARNING!!</strong></CENTER></tr>
						<tr><td><center>Please be careful from <font style="color:red;font-weight:bold;font-size:26px">Dengue</font><center></tr>
						<tr><td><a href="details.php?id=2" style="text-decoration:none;color:#0599c9"><center>Click to know more<center></tr>
						</table>
						<table height=10% width=100% style="position:absolute;left:0%;top:139.55%;color:white">
		<tr bgcolor="#0599c9"><td><center><br><strong>Copyright @ 2016-17<br>Department of Computer Science & Engineering<br>University of Kalyani</strong></center><br></tr>
</table></font>
<script src="js/blink.js"></script>
</body>
</html>
