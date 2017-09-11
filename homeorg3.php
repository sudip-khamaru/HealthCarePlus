<?php
include 'db_connect.php';
	session_start();
    if ($_SESSION['log']==0)
	{
		header('location:login2.php');
		$_SESSION['blank_up']="Please login or register first";
	}

	/*$conn=mysql_connect('localhost','root','');
	mysql_select_db('hcplus');

	$conn=mysql_connect('localhost','root','');
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
		echo '<font style="position:absolute;top:30%">';
		while($row2=mysql_fetch_array($con2))
		{
			if($row2[0]%2==0)
			{
				echo '<table style="position:absolute;left:15%;border:1px solid">';
				echo "<tr style='position:absolute;left:9.3%;top:40%;border:1px solid black' height=200 width=250><td>$row2[1]</td></br>
								<td><img src='$row2[2]' style='position:absolute;left:20%;top:34.4%;border:0.2px' height=167 width=220/></td></br>
								<td><article style='position:absolute;left:50%;top:34.4%;font-size:11.8px;height:14%;width:15%'>.$row2[3].</atricle></td></tr>";
			}
		}
		echo "</font>";
		/*while($row2=mysql_fetch_array($con2))
		{

			if($row2[0]%2==0)
			{

						echo "<tr style='position:absolute;left:9.3%;top:40%;border:1px solid black' height=200 width=250><td>$row2[1]</td></br>
								<td><img src='$row2[2]' style='position:absolute;left:20%;top:34.4%;border:0.2px' height=167 width=220/></td></br>
								<td><article style='position:absolute;left:50%;top:34.4%;font-size:11.8px;height:14%;width:15%'>.$row2[3].</atricle></td></tr>";
			}
			/*else
			{

						echo "<div class='thumbs2'>
							<h2 style='position:absolute;left:70%;top:30%'>".$row2[1]."</h2>
							<img src=".$row2[2]." style='position:absolute;left:60%;top:34.4%;border:0.2px' height=167 width=220/>
							<article style='position:absolute;left:86.5%;top:34.4%;font-size:11.8px;height:14%;width:15%'>".$row2[3]."</article>
							<a href='malaria.php' style='position:absolute;left:55%;top:50%;text-decoration:none;color:#0599c9;font-size:14px'><strong>see more>></strong></a>
						</div>";
			}*/



?>
<html>
	<head>
		<Title>HEALTHCARE+ We are here for your health</title>
		<link href="sty.css" rel="stylesheet" type="text/css"/>
	</head>

	<body bgcolor="#f7f7f7">
	<!--<img src="<?php echo $ph; ?>" style="position:absolute;left:75%;top:1.5%;border:0.2px solid gray;border-radius:50%;background:lightgray" height=50 width=50/>
		<font style="position:absolute;left:80%;top:4%;color:white"><b><?php echo $u_n; ?></b></font>-->
	<font style="position:absolute;left:76%;top:10.5%"><a href="message.php"><img src="message.png" height=15 width=25></a>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php" style="text-decoration:none;color:white"><strong>Logout</strong></a></font>
		<table height=100% width=100%>

			<tr id="text">
				<td >
					<font id="head" style="position:absolute;left:5.7%">HEALTHCARE+</font><br>
					<font id="sub" style="position:absolute;left:5.8%;top:10%">under University of Kalyani</font>
				</td>
			</tr>

			<tr id="header">

				<td style='position:absolute;left:6%'>
					<a href="homeorg.php" class="active"><strong>HOME</strong></a>
					<a href="doc.php" class="active"><strong>DOCTOR</strong></a>
					<a href="facility.php" class="active"><strong>FACILITY</strong></a>
					<a href="profile.php" class="active"><strong>PROFILE</strong></a>
					<a href="fb.php" class="active"><strong>FEEDBACK</strong></a>
					<a href="contact_us.php" class="active"><strong>CONTACT US</strong></a>
					<a href="about_us.php" class="active"><strong>ABOUT US</strong></a>
			</tr>
		</table>

</body>
</html>
