    <?php
  include 'common_admin.php';
  include 'db_connect.php';
  echo "<font style='position:absolute;left:40%;top:19%;font-size:24px;color:#0599c9'>Details of all doctors</font>";
  echo "<font style='position:absolute;left:13%;top:32%'>";
  /*$conn=mysql_connect('localhost','root','');
  mysql_select_db('hcplus');*/
  $sql="select * from doctor_info";
  $var=mysql_query($sql);
  echo "<table border=2 width=81.4% height=16%>";
  echo "<tr><th>Name<th>Age<th>Qualification<th>Address<th>Phone 1<th>Phone 2<th>Email<th>Photo<th>Reg.No</tr>";
  while($row=mysql_fetch_array($var))
  {
	  echo "<tr><td>".$row[0]."<td>".$row[1]."<td>".$row[2]."<td>".$row[3]."<td>".$row[4]."<td>".$row[5]."<td>".$row[6]."<td><img src='$row[7]' height=40 width=40><td>".$row[8]."</tr>";

  }

  echo "</table></font>";

  ?>
  <font style="position:absolute;left:74.5%;top:19%">
  <a href="admin_home.php">Click to admin home</a>
  </font>
