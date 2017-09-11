<?php
  include 'serial.php';
	include 'homeorg.php';
  include 'db_connect.php';
	if(isset($_GET["blood"]))
	{
		if(isset($_GET["s1"]))
		{
			$grp=$_GET['group'];
			$bt=$_GET['s1'];
			/*$con=mysql_connect('localhost','root','');
			mysql_select_db('hcplus');*/
			$conn="select * from blood where bgroup='$grp'";
			$var=mysql_query($conn);
			if($res=mysql_fetch_array($var))
			{
				if($_GET['s1']=='gainer')
				{
					echo "<table style='position:absolute;left:31%;top:80%;font-size:20px;color:white' bgcolor=#4f94cd><tr><td>";
					echo "You are having ".$grp." blood group in your body.<br>";
					echo "You can receive blood from <b>".$res[2]."</b> blood groups.</tr></table>";
					echo "<font style='position:absolute;left:44%;top:60%;font-size:100px;color:#4f94cd'><b>".$grp."</b></font>";
				}
				else
				{
					echo "<table style='position:absolute;left:31%;top:80%;font-size:20px;color:white' bgcolor=#4f94cd><tr><td>";
					echo "You are having ".$grp." blood group in your body.<br>";
					echo "You can donate blood to <b>".$res[2]."</b> blood groups.</tr></table>";
					echo "<font style='position:absolute;left:44%;top:60%;font-size:100px;color:#4f94cd'><b>".$grp."</b></font>";

				}
			}
			else
			{
				echo "wrong";
			}
		}
		else
		{

				session_start();
				$_SESSION["btype"]="Please select gain/donate";
				header("location:doc.php");
		}
	}
	elseif(isset($_GET['symptoms']))
	{
		$s11=$_GET['s11'];
		$s22=$_GET['s22'];
		$s33=$_GET['s33'];
		header("location:disease.php?s1=$s11&s2=".$s22."&s3=".$s33."");
	}
	else
	{

				$patient=$_GET['patient'];
				$_SESSION['patient']=$patient;
				$issue=$_GET['issue'];
				$age=$_GET['age'];
				$contact=$_GET["contact"];
				$_SESSION['rand_num']=$rand_num;

				$conn="insert into appoinment values('$patient','$issue','$age','$contact','$rand_num')";
				$var=mysql_query($conn);
				header("location:appointment.php");
	}
?>
<body>
<font style="position:absolute;left:12%;top:22%"><img src="doc4.jpg" height=210 width=979 /></font>
<table style="position:absolute;left:12%;top:22%;border:1px solid;color:0599c9" height=80% width=72.7%>
<tr><td></tr>
</table>
<table height=10% width=100% style="position:absolute;left:0%;top:100.6%;color:white">
		<tr bgcolor="#0599c9"><td><center><br><strong>Copyright @ 2016-17<br>Department of Computer Science & Engineering<br>University of Kalyani</strong></center><br></tr>
</table>
</body>
