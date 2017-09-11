<?php
include 'homeorg.php';
include 'db_connect.php';
/*$conn=mysql_connect('localhost','root','');
mysql_select_db('hcplus');*/
$photo=$_FILES['img']['name'];
$name=$_POST['uname'];
$reg=$_SESSION['reg'];
$dept=$_POST['dept'];
$ph1=$_POST['ph'];
$email1=$_POST['email'];
$dob=$_POST['dob'];
$add=$_POST['add'];
$about=$_POST['text1'];
if( $_SESSION['name'] !=$name)
{
	$query="update user_info set Name = '$name' where Reg_no = '$reg'";
	mysql_query($query);
	$text="You have recently changed your name from ".$_SESSION['name']." to ".$name;
	$date=time();
	$adate=date('20y-m-d',$date);
	$query2="insert into activity(`reg_no`,`text`,`date`) values('$reg','$text','$adate')";
	mysql_query($query2);
	echo '<font style="position:absolute;left:39%;top:32%;color:0599c9"><h2>Successfully Updated&nbsp;&nbsp<img src="images2.jpg" height=20 weight=30></h2></font></center>';
}
if( $_SESSION['dept'] !=$_POST['dept'])
{
	$query="update user_info set Dept = '$dept' where Reg_no = '$reg'";
	mysql_query($query);
	$text="You have recently changed your department name from ".$_SESSION['dept']." to ".$dept;
	$date=time();
	$adate=date('20y-m-d',$date);
	$query2="insert into activity(`reg_no`,`text`,`date`) values('$reg','$text','$adate')";
	mysql_query($query2);
	echo '<font style="position:absolute;left:39%;top:32%;color:0599c9"><h2>Successfully Updated&nbsp;&nbsp<img src="images2.jpg" height=20 weight=30></h2><center></font>';
}
if($_SESSION['ph'] !=$_POST['ph']  && $ph1!=0)
{
	$query="update user_info set Phone = '$ph1' where Reg_no = '$reg'";
	mysql_query($query);
	$text="You have recently changed your phone number from ".$_SESSION['ph']." to ".$ph;
	$date=time();
	$adate=date('20y-m-d',$date);
	$query2="insert into activity(`reg_no`,`text`,`date`) values('$reg','$text','$adate')";
	mysql_query($query2);
	echo '<font style="position:absolute;left:39%;top:32%;color:0599c9"><h2>Successfully Updated&nbsp;&nbsp<img src="images2.jpg" height=20 weight=30></h2></font>';
}
if($_SESSION['dob'] !=$_POST['dob'])
{
	$query="update user_info set Dob = '$dob' where Reg_no = '$reg'";
	mysql_query($query);
	$text="You have recently changed your date of birth from ".$_SESSION['dob']." to ".$dob;
	$date=time();
	$adate=date('20y-m-d',$date);
	$query2="insert into activity(`reg_no`,`text`,`date`) values('$reg','$text','$adate')";
	mysql_query($query2);
	echo '<font style="position:absolute;left:39%;top:32%;color:0599c9"><h2>Successfully Updated&nbsp;&nbsp<img src="images2.jpg" height=20 weight=30></h2></font>';
}
if($_SESSION['add'] !=$_POST['add'])
{
	$query="update user_info set Address = '$add' where Reg_no = '$reg'";
	mysql_query($query);
	$text="You have recently changed your address from ".$_SESSION['add']." to ".$add;
	$date=time();
	$adate=date('20y-m-d',$date);
	$query2="insert into activity(`reg_no`,`text`,`date`) values('$reg','$text','$adate')";
	mysql_query($query2);
	echo '<font style="position:absolute;left:39%;top:32%;color:0599c9"><h2>Successfully Updated&nbsp;&nbsp<img src="images2.jpg" height=20 weight=30></h2></font>';
}

if($_SESSION['abt'] !=$_POST['text1'])
{
	$query="update user_info set about_me = '$about' where Reg_no = '$reg'";
	mysql_query($query);
	$text="You have recently changed about you in your profile. That is- ".$about;
	$date=time();
	$adate=date('20y-m-d',$date);
	$query2="insert into activity(`reg_no`,`text`,`date`) values('$reg','$text','$adate')";
	mysql_query($query2);
	echo '<font style="position:absolute;left:39%;top:32%;color:0599c9"><h2>Successfully Updated&nbsp;&nbsp;<img src="images2.jpg" height=20 weight=30></h2></font>';
}
if($_SESSION["photo"]!=$photo && $photo!='')
{
	$targer_dir="";
	$target_file=$targer_dir.basename($_FILES['img']['name']);
	$uploadok=1;
	$imgexten=pathinfo($target_file,PATHINFO_EXTENSION);
	$chk=getimagesize($_FILES["img"]["tmp_name"]);
	if($chk!==false)
	{
		echo "<font style='position:absolute;left:14%;top:22%;font-size:18px;color:0599c9'>File is an image - ".$chk["mime"].".</font>";
		$uploadok=1;
	}
	else
	{
		echo "<font style='position:absolute;left:14%;top:22%;font-size:18px;color:0599c9'>file not is an image.</font>";
		$uploadok=0;
	}

	if(file_exists($target_file))
	{
		echo "<font style='position:absolute;left:14%;top:28%;font-size:18px;color:0599c9'>Sorry, file already exists.</font>";
		$uploadok=0;
	}
	else
	{
		if($_FILES["img"]["size"]>500000)
		{
			echo "<font style='position:absolute;left:14%;top:28%;font-size:18px;color:0599c9'>Sorry, your file is too large</font>";
			$uploadok=0;
		}
		else
		{
			if($imgexten!="jpg" && $imgexten!="png" && $imgexten!="jpeg")
			{
				echo "<font style='position:absolute;left:14%;top:28%;font-size:18px;color:0599c9'>Sorry, only JPG,JPEG,PNG files are allowed</font>";
				$uploadok=0;
			}
			if($uploadok==0)
			{
				echo "<font style='position:absolute;left:14%;top:32%;font-size:18px;color:0599c0'>Sorry, your file was not uploaded</font>";
			}
			else
			{
				if(move_uploaded_file($_FILES["img"]["tmp_name"],$target_file))
				{
					echo "<font style='position:absolute;left:14%;top:32%;font-size:18px;color:0599c9'>The file ".basename($_FILES["img"]["name"])." has been uploaded</font>";
				}

				$query="update user_info set Photo = '$photo' where Reg_no = '$reg'";
				mysql_query($query);
				$text="You have recently updated your profile picture - ".$photo;
				$date=time();
				$adate=date('20y-m-d',$date);
				$query2="insert into activity(`reg_no`,`text`,`date`) values('$reg','$text','$adate')";
				mysql_query($query2);

			}
		}
	}
}

?>
<table style="position:absolute;left:12%;top:22%;border:1px solid;color:0599c9" height=100% width=72.6%>
<tr><td></tr>
</table>
<table width=136.5% style="position:absolute;left:-16%;top:110%;color:white">
		<tr bgcolor="#0599c9"><td><center><br><strong>Copyright @ 2016-17<br>Department of Computer Science & Engineering<br>University of Kalyani</strong></center><br></tr>
</table>
