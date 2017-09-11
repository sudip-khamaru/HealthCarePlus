<?php
include 'homeorg.php';
include 'db_connect.php';
?>
<body>

		<script>

		function form_valid()
		{
			if($("#uname").val()=="")
			{
				alert("Please Enter Your Name");
				document.getElementById("uname").focus();
				return false;
			}

			if($("#dept").val()=="")
			{
				alert("Please Enter Your Department");
				document.getElementById("dept").focus();
				return false;
			}

			if($("#dob").val()=="")
			{
				alert("Please Enter Your Date of Birth");
				document.getElementById("dob").focus();
				return false;
			}


			if($("#add").val()=="")
			{
				alert("Please Enter Your Proper Address");
				document.getElementById("add").focus();
				return false;
			}

			if($("#text1").val()=="")
			{
				alert("Please Enter something about you");
				document.getElementById("text1").focus();
				return false;
			}
		}

		function pic_upload(input){
    	if (input.files && input.files[0]){
      	var reader=new FileReader();
        reader.onload=function(e){
        $('#blah')
        	.attr('src',e.target.result)
          .width(200)
          .height(160);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
		</script>

<table style="position:absolute;left:12%;top:22%;border:1px solid;color:0599c9" height=150% width=979>
<tr><td></tr>
</table>
<font style="position:absolute;left:11.9%;top:21.8%">
<table width=99% height=100%>
<tr><td><img src="doc4.jpg" height=210 width=977/>
</tr>
<tr><td><font style="position:absolute;left:32%;top:100%;font-size:26;color:0599c9">EDIT PROFILE ( <?php echo $_SESSION['reg']; ?>)</font></tr>
</table>

<form method="POST" action="edata.php" enctype="multipart/form-data">
<table style="position:absolute;left:12%;top:130%">
<tr><td><img src=<?php echo $_SESSION['photo']; ?> id="blah" src="#" style="border-radius:100px" height=160 width=200>
</tr>
<tr><td><br><input type="file" name="img" style="position:absolute;left:10%;color:0599c9" onChange="pic_upload(this);">
</tr>
</table>
<table style="position:absolute;left:62%;top:120%;color:#0599c9">
<tr><td><font style="position:absolute;left:14%;top:4%;" font-size:4>Registration No : <input type="text" name="reg" disabled value=<?php echo $_SESSION['reg']; ?> style="height:28;width:250;color:#0599c9"><br><br>
User Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<Input type="text" name="uname" id="uname" value='<?php echo $_SESSION['name']; ?>'  style="height:28;width:250;color:#0599c9"><br><br>
Department: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="dept" id="dept" value='<?php echo $_SESSION['dept']; ?>' style="height:28;width:250;color:#0599c9"><br><br>
Phone No: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="ph" id="ph" value='<?php echo $_SESSION['ph']; ?>' style="height:28;width:250;color:#0599c9"><br><br>
E-mail Id: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="email" id="email" value='<?php echo $_SESSION['email']; ?>' style="height:28;width:250;color:#0599c9"><br><br>
Date of Birth: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="dob" id="dob" value='<?php echo $_SESSION['dob']; ?>'style="height:28;width:250;color:#0599c9"><br><br>
Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="add" id="add" value='<?php echo $_SESSION['add']; ?>' style="height:48;width:250;color:#0599c9"><br><br>
About Me: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<textarea name="text1" id="text1" cols="40" rows="8" style="height:80;width:250;color:#0599c9;resize:none"><?php echo $_SESSION['abt']; ?></textarea><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
<input type="submit" name="sub3" onclick="return form_valid()" style="height:32;width:120;border:2px;background-color:0599c9;color:white;font-size:13">
</font>
</tr>
</table>
</form>
<table width=136.5% style="position:absolute;left:-16%;top:441.5%;color:white">
		<tr bgcolor="#0599c9"><td><center><br><strong>Copyright @ 2016-17<br>Department of Computer Science & Engineering<br>University of Kalyani</strong></center><br></tr>
</table>
</body>
