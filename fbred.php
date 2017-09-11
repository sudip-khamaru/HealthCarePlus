<?php
include 'homeorg.php';
include 'db_connect.php';
if($_SESSION['comment']=="valid")
{
	if(isset($_GET['submit'])&&isset($_GET['fb'])&!empty($_GET['fb'])||isset($_GET['submit'])&&isset($_GET['exten'])&&!empty($_GET['exten']))
	{
		/*$conn=mysql_connect("localhost",'root','');
		mysql_select_db("hcplus");*/
		$id=$_SESSION['username'];
		$cmt=$_GET['fb'];
		$date=time();
		$adate=date('20y-m-d',$date);
		$suggestion=$_GET['exten'];
		$myquery="select Name,Photo from user_info where Phone='$id' or Email='$id'";
		$var=mysql_query($myquery);
		$result1=mysql_fetch_array($var);
		$name=$result1[0];
		$photo=$result1[1];
		$myquery3="insert into `fb`(`ph/email`,`name`,`photo`,`comment`,`suggestion`,`date`) values('$id','$name','$photo','$cmt','$suggestion','$adate')";
		$var=mysql_query($myquery3);
		$_SESSION['comment']="not valid";
		if($var>0)
		{
			$_SESSION['fbcomment']="Feedback has been received succesfully";
			header('location:fb1.php');
		}
		else
		{
			$_SESSION['fbcomment']="Feedback hasn't been sent please try again";
			header('location:fb.php');

		}

	}
	else
	{
		$_SESSION['fbcomment']="To send feedback please give your opinion";
		header('location:fb1.php');
	}
}

?>
