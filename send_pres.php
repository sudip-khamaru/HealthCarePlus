 <?php
 include 'common_admin.php';
 include 'db_connect.php';
 if(isset($_POST['submit'])){
  $photo=$_FILES['img']['name'];
  //$count=1;
  $targer_dir="prescription/";
	$target_file=$targer_dir.basename($_FILES['img']['name']);
	$uploadok=1;
	$imgexten=pathinfo($target_file,PATHINFO_EXTENSION);

	if(file_exists($target_file))
	{
		echo "<font style='position:absolute;left:35%;top:65%;font-size:19px;color:red'>Sorry, file already exists</font>";
		$uploadok=0;
	}

		if($_FILES["img"]["size"]>500000)
		{
			echo "<font style='position:absolute;left:35%;top:68%;font-size:19px;color:red'>Sorry, your file is too large</font>";
			$uploadok=0;
		}

	if($uploadok==0)
	{
		echo "<font style='position:absolute;left:35%;top:71%;font-size:19px;color:red'>Sorry, your file was not uploaded</font>";
	}
	else
	{
		if(move_uploaded_file($_FILES["img"]["tmp_name"],$target_file))
		{
		//echo "The file ".basename($_FILES["img"]["name"])." has been uploaded";
    echo "<font style='position:absolute;left:35%;top:65%;font-size:19px;color:0599c9'>Prescription uploaded</font>";
		}

	}

  $reg=$_POST['reg'];
  $date=time();
  $adate=date('20y-m-d',$date);
  @$name=$_FILES['img']['name'];
  $dr=$_POST['dr'];
  $text="Click on Prescription to download your last Prescription"." given by ".$dr.".".$name;
  /*$con=mysql_connect('localhost','root','');
   mysql_select_db('hcplus');*/
   $sql1="insert into prescription(`reg_no`,`prescription`,`doctor`) values('$reg','$photo','$dr')";
   $res1=mysql_query($sql1);
   /*if($res1){
     echo "<font style='position:absolute;left:35%;top:65%;font-size:19px'>Prescription uploaded</font>";
   }*/

   $sql="insert into activity(`reg_no`,`text`,`date`) values('$reg','$text','$adate')";
   $res=mysql_query($sql);
   if($res)
   {
     echo "<font style='position:absolute;left:35%;top:75%;font-size:19px;color:0599c9'>Prescription is sent</font>";
     //$count=0;
   }
   else
   {
	   echo "<font style='position:absolute;left:35%;top:75%;font-size:19px;color:red'>Sorry! Prescription is not sent</font>";
   }
   $text1="Prescription Uploaded.";
   $status="unseen";
   $sql2="insert into notification(`reg_no`,`notice`,`date`,`status`) values('$reg','$text1','$adate','$status')";
   $res2=mysql_query($sql2);
 }
 ?>
 <body>
 <font style="position:absolute;left:72.5%;top:20.5%">
  <a href="admin_home.php">Click to admin home</a>
  </font>
 <form method="POST" enctype="multipart/form-data">
 <font style="position:absolute;left:32%;top:24%;font-size:20px">
 <p>Patient's Reg. No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:&nbsp;&nbsp<input type="text" style="height:28;width:200" name="reg"><br></p>
 <p>Upload Prescription : &nbsp;&nbsp<input type="file" name="img"/></p>
 <p>Doctor's Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: &nbsp<input type="text" style="height:28;width:200" name="dr"/></p>
 <input type="submit" name="submit" style="position:absolute;left:44%;height:32;width:100;border:1px solid #0599c9"></form>
 </font>

 </body>
