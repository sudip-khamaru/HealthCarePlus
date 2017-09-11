<?php
session_start();
$_SESSION['log']=0;
setcookie('lastseen',$_SESSION['lseen']);
$time=time();
$_SESSION['tm']=date('d-m-Y -- h:i:s ',strtotime('+5 hours 30 minutes'));
//$_SESSION['tm']=date('H:i:s  20y-m-d ',$date);
header('location:admin.php');
?>
