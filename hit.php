<?php
function hit_count()
{
	$ip=getHostByName(php_uname('n'));

	$handle=file('ip.txt');
	foreach($handle as $cur_ip)
	{
		$ip_single=$cur_ip;
		if($ip==$ip_single)
		{
			$case=1;
			break;
		}
		else
		{
			$case=0;
		}
	}
	if($case==0)
	{
		$fname='count.txt';
		$handle1=fopen($fname,'r');
		$ip_count=fread($handle1,filesize('count.txt'));
		fclose($handle1);
		$upip=$ip_count+1;
		echo $upip;
		$handle2=fopen($fname,'w');
		fwrite($handle2,$upip);
		fclose($handle2);
		$handle3=fopen('ip.txt','a');
		fwrite($handle3,$ip);
		fclose($handle3);
		
	}
	else
	{
		$fname='count.txt';
		$handle1=fopen($fname,'r');
		$ip_count=fread($handle1,filesize('count.txt'));
		echo $ip_count;
		fclose($handle1);
	}
}
?>