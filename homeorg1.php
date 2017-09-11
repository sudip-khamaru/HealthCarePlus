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

	$i=23;
	$j=23;
	$val=0;
	while($row2=mysql_fetch_array($con2))
	{

		if($row2[0]%2!=0)
		{
			//$val=$row2[0];
			//$_SESSION['value']=$val;
			echo "<div style='position:absolute;left:9.3%;top:$i%;border:1px solid black;background-color:khaki;width:22%'>
				<h2 style='background-color:#0599c9;color:white' align='middle'>".$row2[1]."</h2>
				<img src=".$row2[2]." height=115 width=135/>
				<font style='position:absolute;left:46%;top:20%'>".$row2[3]."</font>
				<a href='details1.php' style='position:absolute;left:69.5%;top:88%;text-decoration:none'><strong>see more>></strong></a>
				</div>";
		$i=$i+25;
		$val=$val+1;
		//$_SESSION['value1']=$val;
		}
		else
		{
			//$val=$row2[0];
			//$_SESSION['value']=$val;
			echo "<div style='position:absolute;left:35.3%;top:$j%;border:1px solid black;background-color:khaki;width:22%'>
				<h2 style='background-color:#0599c9;color:white' align='middle'>".$row2[1]."</h2>
				<img src=".$row2[2]." height=115 width=135/>
				<font style='position:absolute;left:46%;top:20%'>".$row2[3]."</font>
				<a href='details2.php' style='position:absolute;left:69.5%;top:88%;text-decoration:none'><strong>see more>></strong></a>
				</div>";
		$j=$j+25;
		$val=$val+1;
		//$_SESSION['value2']=$val;
		}
		//$i=$i+15;
	}

?>
<html>
	<head>
		<Title>HEALTHCARE+ We are here for your health</title>
		<link href="sty.css" rel="stylesheet" type="text/css"/>
	</head>

	<body bgcolor="#f7f7f7">
			<div id="contentarea">
				<div id="rightside">
					<h2>Links</h2>
					<ul>
						<li><a href="http://www.mciindia.org">Medical Council of India, Delhi</a></li>
						<li><a href="http://www.aiims.edu">All India Institute of Medical Science, Delhi</a></li>
						<li><a href="http://www.klyuniv.ac.in">University of Kalyani, Kalyani</a></li>
						<li><a href="http://www.medicalcollegekolkata.org">Kolkata Medical College, Kolkata</a></li>
						<li><a href="http://www.nrsmc.edu.in">Nilratan Sircar Medical College, Kolkata</a></li>
						<li><a href="http://www.rgkarmedicalcollege.org">RG Kar Medical College, Kolkata</a></li>
						<li><a href="http://www.cnmckolkata.in">Calcutta National Medical College, Kolkata</a></li>
						<li><a href="http://www.ipgmer.gov.in">SSKM Hospital, Kolkata</a></li>
						<li><a href="http://www.bsmedicalcollege.org.in">Bankura Sammilani Medical College, Bankura</a></li>
						<li><a href="http://www.burdwanmedicalcollege.com">Burdwan Medical College, Burdwan</a></li>
						<li><a href="http://www.wbuhs.ac.in/comjnmkalyani">College of Medicine and JNM Hospital,Kalyani</a></li>
						<li><a href="http://www.maldamedicalcollege.com">Malda Medical College & Hospital, Malda</a></li>
						<li><a href="http://www.midnaporemmc.ac.in">Midnapore Medical College, Midnapore</a></li>
						<li><a href="http://www.murshidabadmedicalcollege.in">Murshidabad Medical College & Hospitals, Murshidabad</a></li>
						<li><a href="http://www.nbmch.org">North Bengal Medical College, Darjeeling</a></li>
						<li><a href="http://www.icaremedicalcollege.in">ICARE Institute of Medical Sciences & Research, Haldia</a></li>
						<li><a href="http://www.kpcmedicalcollege.org">KPC Medical College,Jadavpur, Kolkata</a></li>
					</ul>
				</div>
			</div>

			<div id="footer">
				<b>copyrights 2016 @ Department of Computer Science & Engineering, University of Kalyani.</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<i>Designed by - Md Washi Ul Hoque & Sudip Khamaru</i></br>
			</div>
		</div>
</body>
</html>
