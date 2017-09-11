 <?php
 include 'db_connect.php';
  if(isset($_POST['aname']) && isset($_POST['apass']) && !empty($_POST['aname']) && !empty($_POST['apass']))
	{
		session_start();
		$auser=$_POST['aname'];
		$apassword=$_POST['apass'];
		/*$con=mysql_connect('localhost','root','');
		mysql_select_db('hcplus');*/
		$query="select aname, apass from admin where aname='$auser' and apass='$apassword'";
		$result=mysql_query($query);
		if($result>0)
		{
          $_SESSION['username']=$auser;
          header('location:admin_home.php');
		}
		else
		{
			$_SESSION['ablank_up']="Invalid User name and password";
			header('location:admin.php');
		}
		mysql_close();
	}
?>
