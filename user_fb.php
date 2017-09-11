   <?php
  include 'common_admin.php';
  include 'db_connect.php';
  echo "<font style='position:absolute;left:40%;top:22%;font-size:24px;color:#0599c9'>Details of all user's feedback</font>";
  echo "<font style='position:absolute;left:13%;top:32%'>";
  /*$conn=mysql_connect('localhost','root','');
  mysql_select_db('hcplus');*/
  $sql="select * from fb";
  $var=mysql_query($sql);
  echo "<table border=2 width=81.4% height=16%>";
  while($row=mysql_fetch_array($var))
  {
	  echo "<tr><td>".$row[0]."<td>".$row[1]."<td>".$row[2]."<td>".$row[3]."<td>".$row[4]."<td>".$row[5]."<td>".$row[6]."</tr>";

  }

  echo "</table></font>";

  ?>
  <font style="position:absolute;left:74.5%;top:20.5%">
  <a href="admin_home.php">Click to admin home</a>
  </font>
