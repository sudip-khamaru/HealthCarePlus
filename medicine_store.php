<?php
include 'common_admin.php';
include 'db_connect.php';
if(isset($_POST['submit'])){
  $batch=$_POST['batch'];
  $name=$_POST['name'];
  $brand=$_POST['brand'];
  $composition=$_POST['composition'];
  $mfd=$_POST['mfd'];
  $exp=$_POST['exp'];

  $sql="insert into medicine_status(batch_no,name,brand,composition,mfd,exp) values('$batch','$name','$brand','$composition','$mfd','$exp')";
  $var=mysql_query($sql);
  if($var){
    echo '<script>alert("Succesfully Submit")</script>';
  }

}
?>

<body>
<font style="position:absolute;left:72.5%;top:20.5%">
 <a href="admin_home.php">Click to admin home</a>
 </font>
<form method="POST">
<font style="position:absolute;left:32%;top:30%;font-size:20px">
<p>Batch No : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="height:28;width:200" name="batch" required><br></p>
<p>Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="height:28;width:200" name="name" required><br></p>
<p>Brand : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="height:28;width:200" name="brand" required><br></p>
<p>Composition : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="height:28;width:200" name="composition" required><br></p>
<p>Manufacture Date : &nbsp;&nbsp;&nbsp;<input type="date" style="height:28;width:200" name="mfd" required><br></p>
<p>Expire Date : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" style="height:28;width:200" name="exp" required><br></p>
<input type="submit" name="submit" style="position:absolute;left:44%;height:32;width:100;border:1px solid #0599c9"></form>
</font>

</body>
