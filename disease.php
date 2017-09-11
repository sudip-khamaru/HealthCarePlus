<?php
	include 'homeorg.php';
	include 'db_connect.php';
	$s1=$_REQUEST['s1'];
	$s2=$_REQUEST['s2'];
	$s3=$_REQUEST['s3'];
	$result="";
	$flag=0;
	$query="select * from symptom where symptom1='$s1' and symptom2='$s2' and symptom3='$s3'";
	$var=mysql_query($query);
	while($row=mysql_fetch_array($var))
	{
		$result=$result.$row[0];
		if($row[0]!='')
		{$flag=1;}
	}if($flag==1){
	?><font style="position:absolute;left:13%;top:30%">
	<table style="color:0599c9;width:979" height=60% >
<tr><td valign="top"><center><?php
	echo "<h3>You may suffuring from the following disease: </h3>";
	echo "<h2>".$result."</h2>";?> <br/>*It may happen that you may or may not suffuring from these disease. <br/>For furthur details please consult with the doctor.</center></td></tr>

</table></font><?php } else{ ?>

<font style="position:absolute;left:13%;top:30%">
	<table style="color:0599c9;width:979" height=60% >
<tr><td valign="top"><center>
	<h3>No disease found</h3>
	</td></tr>

</table>
 </font> <?php } ?>

<body>
<form method="GET" action="">
<font color='#0599c9'>
<table style="position:absolute;left:12%;top:22%;border:1px solid;color:0599c9;width:979" height=100% >
<tr><td></tr>
</table>
</font>
<table height=10% width=100% style="position:absolute;left:0%;top:110%;color:white">
   <tr bgcolor="#0599c9"><td><center><br><strong>Copyright @ 2016-17<br>Department of Computer Science & Engineering<br>University of Kalyani</strong></center><br></tr>
</table>
</form>
</body>
