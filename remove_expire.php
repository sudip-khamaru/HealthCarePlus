<?php
    include 'db_connect.php';
    $med_name=$_GET['id'];
    $sql="delete from expire_medicine where name='$med_name'";
    $var=mysql_query($sql);
    if($var){
      header('location:medicine_status.php');
    }
?>
