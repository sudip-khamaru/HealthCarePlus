<?php
session_start();
?>

<html>
	<head>
		<Title>HEALTHCARE+ We are here for your health</title>
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script>

		function mobile_check()
		{

        var numbers=/^[0-9]+$/;
	    if($("#ph").val().match(numbers))
        {
            return true;
        }
        else
        {
                 alert("Please Enter a Valid Mobile Number");
                 document.getElementById("ph").value='';
                 document.getElementById("ph").focus();
        }

		}

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

			if($("#ph").val()=="" || $("#ph").val().length<10 )
			{

				alert("Please Enter a Valid Mobile Number");
				document.getElementById("ph").focus();
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
		}
		</script>

	</head>
	<body bgcolor="#f7f7f7">
		<table height=100% width=100%>
			<tr height=15% bgcolor="#0599c9"><td><font color="white" size=11 style='position:absolute;left:12%;top:4%'><b>HEALTHCARE+</b><br><font size=4 color=white>Under University of Kalyani</font></td></tr>

			<tr><td></tr>
		</table>
</table>


<form method=post action="final_confirm.php">
<table style="position:absolute;left:12%;top:35%">
<tr><td><font style="position:absolute"><img src="reg.png" height=100 width=250></font>
</tr>
</table>
<table style="position:absolute;left:40%;top:28%;height:65%;width:45%;background-color:white">
<tr><td><font style="position:absolute;left:14%;top:4%">Registration No : <input type="text" name="reg" disabled value=<?php echo $_SESSION['reg']; ?> style="height:28;width:250"><br><br>
User Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="uname" id="uname" value='<?php echo $_SESSION['name']; ?>'  style="height:28;width:250"><br><br>
Department: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="dept" id="dept" value='<?php echo $_SESSION['dept']; ?>' style="height:28;width:250"><br><br>
Phone No: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="ph" id="ph" onKeyUp="mobile_check()" maxlength="10" value=<?php echo $_SESSION['ph']; ?> style="height:28;width:250"><br><br>
E-mail Id: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" disabled name="email" value=<?php echo $_SESSION['email']; ?> style="height:28;width:250" ><br><br>
Date of Birth: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="dob" id="dob" value=<?php echo $_SESSION['dob']; ?> style="height:28;width:250"><br><br>
Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="add" id="add" value='<?php echo $_SESSION['add']; ?>' style="height:48;width:250"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
<input type="submit" name="sub3" onclick="return form_valid()" style="height:32;width:120;border:2px;background-color:0599c9;color:white;font-size:13">
</font>
</tr>
</table>
<table width=136.5% style="position:absolute;left:-16%;top:131.5%;color:white">
	<tr bgcolor="#0599c9"><td><center><br><strong>Copyright @ 2016-17<br>Department of Computer Science & Engineering<br>University of Kalyani</strong></center><br></tr>
</table>
</form>
</body>
