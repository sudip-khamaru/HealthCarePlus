<?php
include 'db_connect.php';
if(isset($_POST['sub']))
{
	if(isset($_POST['name']) && isset($_POST['pass']) && !empty($_POST['name']) && !empty($_POST['pass']))
	{
		session_start();
		$_SESSION['username']=$_POST['name'];
		$user=$_POST['name'];
		$password=$_POST['pass'];
		/*$con=mysql_connect('localhost','root','');
		mysql_select_db('hcplus');*/
		if($query="select Phone, Password, Email from user_info where Phone='$user' or Email='$user'")
		{
			$result=mysql_query($query);
			$result1=mysql_fetch_array($result);

			if($result1[0]==$user || $result1[2]==$user && $result1[1]==$password)
			 {
				 $_SESSION['log']=1;
				 header('location:main_home.php');

			 }
			else
			{
				$_SESSION['blank_up']="Invalid Email or Phone number";
				header('location:login2.php');
			}
			mysqli_close();
		}
		else
		{
			$_SESSION['blank_up']="Invalid Email or Phone number";
			header('location:login2.php');
		}
	}
	else
	{
		session_start();
		$_SESSION['blank_up']="Invalid Email or Phone number";
		header('location:login2.php');
	}
}
else if(isset($_POST['sub2']))
{
	session_start();
	//$_SESSION['mob']=$_POST['mob'];
	if(!empty($_POST['reg']) && !empty($_POST['mob']) && !empty($_POST['email']) && !empty($_POST['pass2']))
	{
		if($_POST['cap']==$_SESSION['secure'])
		{
			$reg_no=$_POST['reg'];
			/*$con=mysql_connect('localhost','root','');
			mysql_select_db('hcplus');*/
			if($query="select * from user_info where Reg_no='$reg_no'")
			{
				$result=mysql_query($query);
				$result1=mysql_fetch_array($result);
				session_start();
					if($result1[10]=='Yes')
					{
						$_SESSION['blank_error2']="User already exists";
						header('location:admin.php');
					}
					else
					{
						$_SESSION['reg']=$result1[0];
						$_SESSION['name']=$result1[1];
						$_SESSION['dob']=$result1[2];
						$_SESSION['ph']=$_POST['mob'];
						$_SESSION['dept']=$result1[4];
						$_SESSION['add']=$result1[5];
						$_SESSION['password']=$_POST['pass2'];
						$_SESSION['photo']=$result1[7];
						$_SESSION['sex']=$result1[8];
						$_SESSION['email']=$_POST['email'];
						$_SESSION['validate']=$result1[10];
						$_SESSION['log']=1;
						header('location:form.php');
					}
			}
			else
			{
				$_SESSION['blank_error2']="Sorry! data is not found";
				header('location:doc.php');
			}
		}
		else
		{
			$_SESSION['blank_error']="Please give proper data";
			header('location:doc.php');
		}
	}
	else
	{
		$_SESSION['blank_error']="Please give proper data";
		header('location:doc.php');
	}
}
?>
