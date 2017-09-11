 <?php
  include 'common_admin.php';
  include 'db_connect.php';
    /*echo "<font style='position:absolute;left:14%;top:29%'>";*/
  //$conn=mysql_connect('localhost','root','');
  $reg=$_POST['reg_no'];
  //mysql_select_db('hcplus');
  if(isset($_POST['show']))
  {
	$sql="select * from user_info where Reg_no='$reg'";
	$var=mysql_query($sql);
	if($row=mysql_fetch_array($var))
	{
	  echo "<table style='position:absolute;left:13%;top:60%' border=2 width=71% height=10%>";
	  echo "<tr><th>Reg. No<th>Name<th>DOB<th>Mobile<th>Dept<th>Address<th>Password<th>Photo<th>Sex<th>Email<th>Validate</tr>";
	  echo "<tr><td>".$row[0]."<td>".$row[1]."<td>".$row[2]."<td>".$row[3]."<td>".$row[4]."<td>".$row[5]."<td>".$row[6]."<td><img src='$row[7]' height=40 width=40><td>".$row[8]."<td>".$row[9]."<td>".$row[10]."</tr>";
	  echo "</table>";

	}
	else
	{
	  echo "<font style='position:absolute;left:45%;top:70%'>Data is not found</font>";

	}
  }
  elseif(isset($_POST['delete']))
  {
	  $sql2="delete from user_info where Reg_no='$reg'";
	  $var2=mysql_query($sql2);
	  if($var2>0)
	  {
		  echo "<font style='position:absolute;left:41.6%;top:70%'>Data is successfully removed</font>";
	  }
	  else
	  {
		  echo "<font style='position:absolute;left:45%;top:70%'>Data is not found</font>";
	  }
  }
  ?>
  <body>
  <font style="position:absolute;left:74.5%;top:19%">
  <a href="admin_home.php">Click to admin home</a>
  </font>
  <form method="post" action="user_del.php">
  <table style="position:absolute;left:36%;top:33%;border:1px solid #0599c9" height=20% width=25%>
  <tr><th><font style="font-size:21px;color:#0599c9"> Enter Registration No</tr>
  <tr><td><center><input type="text" style="position:absolute;left:20%;top:39.8%;height:27;width:200;;font-size:14px;color:0599c9" name="reg_no"></center></tr>
  <tr><td><center><input type="submit" style="height:25;width:96;background-color:#0599c9;border:2px;color:white" name="show" value="Show">&nbsp;&nbsp

  <input type="submit" style="height:25;width:96;background-color:#0599c9;border:2px;color:white" name="delete" value="Delete">
  </font></center></tr>
  </table>
  </form>
  </body>
