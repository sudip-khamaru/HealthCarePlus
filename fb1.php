<?php
	include 'homeorg.php';
	include 'db_connect.php';
	$id=$_SESSION['username'];
	/*$conn=mysql_connect("localhost",'root','');
	mysql_select_db("hcplus");*/

	$myquery2="select name,photo,comment,suggestion,date from fb order by id desc limit 10";
	$var1=mysql_query($myquery2);
	echo "<table width=979 height=120% style='position:absolute;left:12%;top:22%;border:1px solid;color:0599c9'><tr><td><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></tr><tr align='center'><td><br><br><br><br><br><br><br><br><br><br><br><br>";
	echo "<table width=70% style='color:0599c9'>";
	while($result2=mysql_fetch_array($var1))
	{
		$nm=$result2[0];
		$photo=$result2[1];
		$cmt=$result2[2];
		$suggestion=$result2[3];
		$dt=$result2[4];


		echo "<tr bgcolor=#f7f7e0><td><img src='$photo' border=1px solid height=80 width=80>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<td valign='top'><br><img src='1.jpg' height=50 width=70>";
		echo "<td valign='top'><br><b> &nbsp;&nbsp<< &nbsp".$nm."&nbsp >></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<strong><font style='position:absolute;left:68%'>Posted On- ".$dt."</font></strong><br><strong>&nbsp;&nbsp>>>".$cmt."<<<<</strong><br><br><strong>&nbsp".$suggestion."</strong><br><font color=#f7f7e0>.</font></tr>";

		echo "<tr><td><font color=#f7f7e0>.</font><td></tr>";
	}
	$_SESSION['comment']="valid";
	echo "</table></tr><tr><td></tr></table>";

?>

<html>
<body link="white"><form method="get" action="ex.php">
<!--<font style="position:absolute;left:76.4%;top:3%"><a href="message.php"><img src="message.png" height=17 width=25></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a href="logout">Log Out</a></font>-->
<table width=979 height=190% style="position:absolute;left:12%;top:22%;color:0599c9">
<tr height=43%><td><font style="position:absolute;left:0.1%;top:19%"><img src="fb.png" height=250 width=33></font>
<font style="position:absolute;left:14%;top:25%"><img src="1.jpg" height=50 width=70></font><br>
<font size=4 style="position:absolute;left:0.1%;top:0.1%"><img src="doc4.jpg" height=210 width=977/></font><br>
<font size=4 style="position:absolute;left:42%;top:19%">Overall, how did you feel about the service you received today?<br><br>
<input type="radio" name="fb" value="Very satisfied">Very satisfied<br><input type="radio" name="fb" value="Satisfied">Satisfied<br>
<input type="radio" name="fb" value="Neither satisfied or dissatisfied">Neither satisfied or dissatisfied<br><input type="radio" name="fb" value="Dissatisfied">Dissatisfied</font><br><br>
<font style="position:absolute;left:42%;top:29.5%" size=4>How could we improve the service?<br>
<textarea rows="5" cols="20" name="exten" style="position:absolute;height:70;width:460" maxlength="200" ></textarea><br><br><br><br><br><font style="position:absolute;left:2;top:75%" size=2>(Maximum 200 words)</font>
<font style="position:absolute;left:2;top:95%"><input type="submit" value="Send feedback" name="submit" style="position:absolute;height:35;width:150;background-color:#0599c9;border:2px;color:white;font-size:15">
	<?php
	if(isset($_SESSION['fbcomment']))
	{
		echo "<br><br><font color='red' size=3>".$_SESSION['fbcomment']."</font>";
		unset($_SESSION['fbcomment']);
	}?>
</font></font>
</tr>
</table>
<table width=136.5% style="position:absolute;left:-16%;top:320%;color:white">
		<tr bgcolor="#0599c9"><td><center><br><strong>Copyright @ 2016-17<br>Department of Computer Science & Engineering<br>University of Kalyani</strong></center><br></tr>
</table>
</form>
</html>
