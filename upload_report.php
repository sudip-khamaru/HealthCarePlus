<?php
    include 'homeorg.php';
    include 'db_connect.php';
    /*$conn=mysql_connect('localhost','root','');
	mysql_select_db('hcplus');*/
    $id=$_SESSION['reg'];

    if(isset($_POST['report'])){
        if(isset($_POST['issue'])){
            $issue=$_POST['issue'];
            $photo=$_FILES['img']['name'];
            //if(isset($_POST['img']) && !empty($POST['img'])){
                $targer_dir="report/";
                $target_file=$targer_dir.basename($_FILES['img']['name']);
                $uploadok=1;
                $imgexten=pathinfo($target_file,PATHINFO_EXTENSION);
                $chk=getimagesize($_FILES["img"]["tmp_name"]);
                if($chk!==false)
                {
                    echo "<font style='position:absolute;left:39%;top:111%;font-size:20px;color:0599c9'>File is an image - ".$chk['mime'].".</font>";
                    $uploadok=1;
                }
                else
                {
                    echo "<font style='position:absolute;left:39%;top:108%;font-size:20px;color:0599c9'>file not is an image.</font>";
                    $uploadok=0;
                }

                if(file_exists($target_file))
                {
                    echo "<font style='position:absolute;left:39%;top:114%;font-size:20px;color:0599c9'>Sorry, file already exists.</font>";
                    $uploadok=0;
                }
                else
                {
                    if($_FILES["img"]["size"]>500000)
                    {
                        echo "<font style='position:absolute;left:39%;top:108%;font-size:20px;color:0599c9'>Sorry, your file is too large</font>";
                        $uploadok=0;
                    }
                    else
                    {
                        if($imgexten!="jpg" && $imgexten!="png" && $imgexten!="jpeg")
                        {
                            echo "<font style='position:absolute;left:39%;top:114%;font-size:20px;color:0599c9'>Sorry, only JPG,JPEG,PNG files are allowed</font>";
                            $uploadok=0;
                        }
                        if($uploadok==0)
                        {
                            echo "<font style='position:absolute;left:39%;top:108%;font-size:20px;color:0599c0'>Sorry, your file was not uploaded</font>";
                        }
                        else
                        {
                            if(move_uploaded_file($_FILES["img"]["tmp_name"],$target_file))
                            {
                                echo "<font style='position:absolute;left:39%;top:114%;font-size:20px;color:0599c9'>Report has been uploaded Successfully</font>";
                            }

                            $date=time();
                            $adate=date('20y-m-d',$date);
                            $query2="insert into report(`reg_no`,`issue`,`photo`,`date`) values('$id','$issue','$photo','$adate')";
                            $var=mysql_query($query2);
                            if($var){
                              $text="You have recently uploaded your ".$issue." report.";
                            	$date=time();
                            	$adate=date('20y-m-d',$date);
                            	$query2="insert into activity(`reg_no`,`text`,`date`) values('$id','$text','$adate')";
                            	mysql_query($query2);
                              echo "<font style='position:absolute;left:39%;top:108%;font-size:18px;color:0599c9'>Successfully Uploded.</font>";
                            }
                            else{
                              echo "<font style='position:absolute;left:39%;top:108%;font-size:18px;color:0599c9'>Error</font>";
                            }
                        }
                    }
                }
            /*}
            else{
                echo "Please upload report.";
            }*/
        }
        else{
            echo "<font style='position:absolute;left:39%;top:108%;font-size:18px;color:0599c9'>Please choose isuue.</font>";
        }
    }

?>

<html>
<head>
  <script>
  function report1()
  {
    if($("#file").val()=='')
    {
      alert('Please Upload Your Report');
      $("#file").focus();
      return false;
    }
  }

  function pic_upload(input){
    if (input.files && input.files[0]){
      var reader=new FileReader();
      reader.onload=function(e){
      $('#blah')
        .attr('src',e.target.result)
        .width(350)
        .height(420);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
  </script>
</head>
<body>
      <form action="upload_report.php" method="POST" enctype="multipart/form-data" onsubmit="return report1();">
        <table width=979 height=100% style="position:absolute;left:12%;top:22%;color:0599c9">
            <tr height=43%><td>
            <font size=4 style="position:absolute;left:0.0%;top:0.0%"><img src="doc4.jpg" height=210 width=978/></font><br>
            </td></tr>
        </table>
        <table style="position:absolute;left:12%;top:22%;border:1px solid;color:0599c9;width:979" height=120%>
        <tr><td><td></tr>
        </table>
        <table style="position:absolute;left:28%;top:60%;color:#0599c9" width=22%>
            <tr height=190><td>
            <h3>Select your issue:</h3><br><select name="issue" style="position:absolute;top:35%;height:32;width:258;color:#0599c9"><option value="Blood Test">Blood Test</option>
            <option value="Sugar Test">Sugar Test</option><option value="MRI">MRI</option><option value="CT Scan">CT Scan</option></select><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
            <br>
            <input type="file" name="img" id="file" value="upload_file" onChange="pic_upload(this);"><br>
            <input type="submit" style="position:absolute;top:104%;height:28;width:259;background-color:0599c9;border:2px;color:white;font-size:15" name="report" value="Upload Report">
            </font>
            </tr>
        </table>
        <img id="blah" src="images/report.jpg" style="position:absolute;left:56%;top:65%">
        <!--<img id="blah" style="position:absolute;left:40%;top:100%"/>-->
        <table height=10% width=100% style="position:absolute;left:0%;top:140%;color:white">
        		<tr bgcolor="#0599c9"><td><center><br><strong>Copyright @ 2016-17<br>Department of Computer Science & Engineering<br>University of Kalyani</strong></center><br></tr>
        </table>
    </form>
  </body>
</html>
