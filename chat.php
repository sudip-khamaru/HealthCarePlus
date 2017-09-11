<?php include 'homeorg.php';

?>
<html>
	<head>
	
		<Title>HEALTHCARE+ We are here for your health</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<style>
	.button{
		text-align:center;
		background-color:#0599c9;
		border-width:2px;
		border-style:solid;
		border-color:#0599c9;
		color:white;
		text-decoration:none;
		
	}
	</style>
		<script>
		
		function message()
		{
			if(form1.rnm.value=='' || form1.msg.value=='')
			{
				alert("Please Enter Receiver Name and Message");
				return;
			}
			
			var rname=form1.rnm.value;
			var msg=form1.msg.value;
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("data").innerHTML = this.responseText;
				
				
            }
           };
			xmlhttp.open('GET','insert.php?rname='+rname+'&msg='+msg, true);
			xmlhttp.send();
			
		}
		
		</script>
		
	</head>
<?php 
	if($_GET['id']=="as"){
		$name="Dr.&nbsp;Asutosh";
	}
	else{
		$name="Dr.&nbsp;Ramprasad";
	}
?>

	<body bgcolor="#f7f7f7">
	<script>
	$.ajax({
		url:'insert2.php',
		type:'GET',
		success: function(data){
       $('#data').html(data);
		}
		});
		
	
  setInterval(function(){
    $.ajax({
		url:'insert2.php',
		type:'GET',
		success: function(data){
       $('#data').html(data);
		}
		});
  }, 1000);
  

	</script>			
		<form name="form1" method="POST">
		<table width=100% height=100% cellspacing="5" cellpadding="5">
		<tr height=80%><td width=11.5%>
		</td><td style="white;width:78%">
		<textarea style="position:absolute;left:35%;top:25%;height:10%;width:24%" placeholder="Type Your Message Here..." name="msg" id="msg"></textarea><br>
		<a href="#" style="position:absolute;left:35%;top:35.5%;height:5%;width:23.8%" name="send" onClick="message()" class="button">Send Message</a>
		<div style="position:absolute;left:35%;top:45%;width:24%;background-color:white" id="data" name="data"></div>
		<input type="hidden" name="rnm" value=<?php echo $name; ?>>			
		</td><td></td></tr>
		<tr><td colspan=3></td></tr>
		</table></form>
</body>
</html>
