<?php
if(isset($_GET["blood"]))
{
	if(isset($_GET["s1"]))
	{
	$grp=$_GET['group'];
	$bt=$_GET['s1'];
	header("location:bgroup.php?grp=$grp&bt=$bt");
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
	header("location:deseas.php");
}
else
{
	header("location:appointment.php");
}
?>