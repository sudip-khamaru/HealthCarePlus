<?php
		include 'common_admin.php';
		include 'db_connect.php';
		//session_start();
		/*$con=mysql_connect('localhost','root','');
		mysql_select_db('hcplus');*/

		if(isset($_POST['file']))
		{
			$_SESSION['photo']=$_POST['pic'];
		}
		$reg=$_SESSION['reg'];
		$name=$_POST['uname'];
		$dob=$_POST['dob'];
		$phone=$_SESSION['ph'];
		$dept=$_POST['dept'];
		$addrs=$_POST['addrs'];
		$pass=$_SESSION['password'];
		$photo=$_SESSION['photo'];
		$sex=$_POST['sex'];
		$email=$_SESSION['email'];
		$query="update user_info set Name='$name',Dob='$dob', Phone='$phone', Dept='$dept', Address='$addrs', Password='$pass', Sex='$sex', Email='$email', Validate='Yes' where Reg_no='$reg'";

		if($result=mysql_query($query))
		{
			echo '<font style="position:absolute;left:39%;top:32%;color:0599c9"><h2>Successfully submitted&nbsp;&nbsp<img src="images2.jpg" height=20 weight=30></h2><center><a href="login2.php">Login Now</a></center></font>';
		}
		else
		{
			echo "<font style='position:absolute;left:39%;top:32%;color:0599c9'><h2>Something wrong</h2></font>";
		}
?>
