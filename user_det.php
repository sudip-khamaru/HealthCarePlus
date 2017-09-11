  <?php
  include 'common_admin.php';
  include 'db_connect.php';
  echo "<font style='position:absolute;left:40%;top:19%;font-size:24px;color:#0599c9'>Details of all users</font>";
  echo "<font style='position:absolute;left:12%;top:31%'>";
  /*$conn=mysql_connect('localhost','root','');
  mysql_select_db('hcplus');*/
  $limit=12;
  if(isset($_GET["page"])){
    $page=$_GET["page"];
  }
  else{
    $page=1;
  };

  $record_index=($page-1)*$limit;

  $sql="select * from user_info limit $record_index,$limit";
  $var=mysql_query($sql);
  echo "<table border=2 width=82.8% height=16%>";
  echo "<tr><th>Reg. No<th>Name<th>DOB<th>Mobile<th>Dept<th>Address<th>Password<th>Photo<th>Sex<th>Email<th>Validate</tr>";
  if($page>0){
    if(mysql_num_rows($var)>0){
      while($row=mysql_fetch_array($var))
      {
    	  echo "<tr><td>".$row[0]."<td>".$row[1]."<td>".$row[2]."<td>".$row[3]."<td>".$row[4]."<td>".$row[5]."<td>".$row[6]."<td><img src='$row[7]' height=40 width=40><td>".$row[8]."<td>".$row[9]."<td>".$row[10]."</tr>";

      }
    }
    else{
       echo "<tr style='text-align:center'><td colspan='11'>No records</td></tr>";
    }
  }
  else{
     echo "<tr style='text-align:center'><td colspan='11'>No records</td></tr>";
  }
  echo "</table></font>";

  $sql="select count(*) from user_info";
  $retval1=mysql_query($sql);
  $row=mysql_fetch_row($retval1);
  $total_records=$row[0];
  $total_pages=ceil($total_records / $limit);

  echo "<a href='user_det.php?page=".($page+1)."' class='button' style='position:absolute;left:71.5%;top:114%;background:#0599c9;color:white;width:6%;text-align:center;text-decoration:none;'>Next</a></li>";
  echo "<a href='user_det.php?page=".($page-1)."' class='button' style='position:absolute;left:78.5%;top:114%;background:#0599c9;color:white;width:6%;text-align:center;text-decoration:none;'>Previous</a></li>";

  ?>
  <font style="position:absolute;left:74.5%;top:19%">
  <a href="admin_home.php">Click to admin home</a>
  </font>
