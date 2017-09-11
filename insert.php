 <?php
 include 'db_connect.php';
 session_start();
 $send=$_SESSION['username'];
 $receiver=$_REQUEST['rname'];
 $msg=$_REQUEST['msg'];
 /*$con=mysql_connect('localhost','root','');
 mysql_select_db('hcplus');*/
 $sql="select Name from user_info where Phone='$send' or Email='$send'";
 $var=mysql_query($sql);
 if($row=mysql_fetch_array($var)){
   $sender=$row['Name'];
 }
 $query="insert into chat(id,sender,receiver,message) values('','$sender','$receiver','$msg')";
 mysql_query($query);
 $query1="select * from chat where sender='$sender' or sender='$receiver' and receiver='$receiver' or receiver='$sender' order by id desc limit 10";
 $exc=mysql_query($query1);
 echo "<table>";
 while($row=mysql_fetch_array($exc))
 {
	 echo "<tr><td>".$row[1]." : ". $row[3]."</tr>";

 }
 echo "</table>";

 ?>
