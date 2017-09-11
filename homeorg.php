
<?php
	include 'db_connect.php';
	session_start();
    if ($_SESSION['log']==0)
	{
		header('location:login2.php');
		$_SESSION['blank_up']="Please login or register first";
	}

	/*$conn=mysql_connect('localhost','root','');
	mysql_select_db('hcplus');*/

	$email=$_SESSION['username'];
	$conn="select Name,Photo,Reg_no from user_info where Email='$email' or Phone='$email'";
	$con=mysql_query($conn);

	if($row=mysql_fetch_array($con))
	{
		$u_n=$row[0];
		$ph=$row[1];
		$reg_no=$row[2];
		$_SESSION['reg_no']=$reg_no;
    $status="unseen";
	}
	$sql_notice="select * from notification where reg_no='$reg_no' and status='$status'";
  $var_notice=mysql_query($sql_notice);
  $cnt=mysql_num_rows($var_notice);

?>
<html>
	<head>
		<Title>HEALTHCARE+ We are here for your health</title>
		<link href="sty.css" rel="stylesheet" type="text/css"/>
	</head>

	<body bgcolor="#f7f7f7">
	<img src="<?php echo $ph; ?>" style="position:absolute;left:72%;top:2.5%;border:0.2px solid gray;border-radius:50%;background:lightgray" height=42 width=45/>
		<font style="position:absolute;left:76%;top:4.5%;color:white;text-shadow: 1px 1px #000000;"><b><?php echo $u_n; ?></b></font>

	<font style="position:absolute;left:78.6%;top:8.6%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php" style="text-decoration:none;color:white">Log Out</a></font>
	<?php
		if($cnt>0){
			echo '<font style="position:absolute;left:72.5%;top:11%"><a href="message.php"><img src="message.png" height=17 width=25><font style="position:absolute;left:80%;top:-60%;color:yellow;font-size:20px"><b>'.$cnt.'</b></font></a></font>';
		}
		else{
			echo '<font style="position:absolute;left:72.5%;top:11%"><img src="message.png" height=17 width=25></font>';
		}
	?>
	<input type="hidden" id="count" value='<?php echo $cnt; ?>'>
		<table height=100% width=100%>

			<tr height=15% bgcolor="#0599c9"><td><font color="white" size=11 style='position:absolute;left:11.9%;top:2%'><b>HEALTHCARE+</b><br><font size=4 color=white>Under University of Kalyani</font></font></td></tr>

			<tr id="header"><td height=4% style='position:absolute;top:15.1%'>

				<td style='position:absolute;left:9.2%'>
					<a href="main_home.php" class=>HOME</a>
					<a href="doc.php">DOCTOR</a>
					<a href="facility.php">FACILITY</a>
					<a href="pro.php">PROFILE</a>
					<a href="fb.php">FEEDBACK</a>
					<a href="contact_us.php">CONTACT US</a>
					<a href="about_us.php">ABOUT US</a>
			</tr>

			<tr><td></tr>
		</table>
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
</body>
</html>
