<?php
$str5="Click here to download your last prescription given by Dr. Ramprasad Sharma elec.php";
$str6="Click here to download your last prescription";
$str7=substr($str5,0,45);
$file=substr($str5,76);
if($str6==$str7)
{
	echo "<a href='download.php?nama=".$file."'>download</a> ";
}
?>
