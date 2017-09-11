<?php
    include 'db_connect.php';

    $batch=$_REQUEST['mbatch'];
    $count=0;

    /*$con=mysql_connect('localhost','root','');
    mysql_select_db('hcplus');*/
    $limit=12;
    if(isset($_GET["page"])){
      $page=$_GET["page"];
    }
    else{
      $page=1;
    };

    $record_index=($page-1)*$limit;

    $sql1="select * from medicine_status where batch_no like '%$batch%' limit $record_index, $limit";
    $var1=mysql_query($sql1);
    echo "<table border=2 style='position:absolute;left:12%;top:60%;width:72.8%;color:#0599c9' id='medicine'>";
    echo "<tr><th>Batch No</th><th>Name</th><th>Brand</th><th>Composition</th><th>Mfd</th><th>Exp</th></tr>";

    if($batch==''){
 		   $str="";
       while($row=mysql_fetch_array($var1)){
     	   $color="";
         $font="";
         $current_date=date("Y-m-d");
         $action_date=date("Y-m-d", strtotime("$current_date +7 day"));
         if($action_date>=$row[6]){
           $str=$str."&nbsp;&nbsp;&nbsp;<b>".$row[2]."</b>(".$row[1].") || ";
           $color='#ff4d4d';
           $font='black';
     		   $count=1;
         }
         echo "<tr bgcolor='$color' align='center'><td><font color='$font'>".$row[1]."</font></td><td><font color='$font'>".$row[2]."</font></td><td><font color='$font'>".$row[3]."</font></td><td><font color='$font'>".$row[4]."</font></td><td><font color='$font'>".$row[5]."</font></td><td><font color='$font'>".$row[6]."</font></td></tr>";
       }
 	   }
 		 else{
       while($row=mysql_fetch_array($var1)){
         $color='#47d147';
 		     $font='black';
         echo "<tr bgcolor='$color' align='center'><td><font color='$font'>".$row[1]."</font></td><td><font color='$font'>".$row[2]."</font></td><td><font color='$font'>".$row[3]."</font></td><td><font color='$font'>".$row[4]."</font></td><td><font color='$font'>".$row[5]."</font></td><td><font color='$font'>".$row[6]."</font></td></tr>";
         $count=1;
 		   }
     }
     echo "</table>";
     if($count==0){
       echo "<table border=2 style='position:absolute;left:12%;top:60%;width:72.8%;color:#0599c9' id='medicine'>";
       echo "<tr><th>Batch No</th><th>Name</th><th>Brand</th><th>Composition</th><th>Mfd</th><th>Exp</th></tr>";
       echo "<tr><th colspan='6'>No search data found.</th></tr></table>";
     }
?>
