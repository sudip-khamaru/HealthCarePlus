<?php
  include 'homeorg.php';
  include 'db_connect.php';
 echo '<table style="position:absolute;left:12%;top:22%;border:1px solid;color:0599c9;width:979" height=100% >';
echo "<tr><td></tr></table>";

  $reg_no=$_SESSION['reg_no'];
  $status="unseen";
  $sql="select * from notification where reg_no='$reg_no' and status='$status'";
  $var=mysql_query($sql);
  $count=0;
?>
  <script>
      if($("#count").val()>0){
  </script>
    <?php
    echo "<div><table border=2 style='position:absolute;left:12%;top:30%;width:72.4%;color:#0599c9' id='medicine'>";
    echo "<tr><th>Notification</th><th>Download</th></tr>";

    while($row=mysql_fetch_array($var)){
      $notice=$row[2];
      $date=$row[3];
      $status="seen";

      if($notice=="Prescription Uploaded."){
        $download="<a href='#'>Download</a>";
      }
      else{
        $download="";
      }
      echo "<tr align='center'><td><font>".$row[2]."</font></td><td><font>".$download."</font></td>";

      $sql1="update notification set status='$status' where reg_no='$reg_no'";
      $var1=mysql_query($sql1);
      $count=1;
    }
  ?>
  <script>
}
else{
  </script>
    <?php
      echo "No current notification available.";
    ?>
  <script>
}
  </script>
