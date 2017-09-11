<?php
  include 'common_admin.php';
  include 'db_connect.php';
?>

  <script>
  function medicine_search(){
    var med=document.getElementById('search').value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
      if (this.readyState==4 && this.status==200){
        document.getElementById("medicine_status").innerHTML = this.responseText;
      }
    };
    xmlhttp.open('GET','medicine.php?mbatch='+med, true);
    xmlhttp.send();
  }
  </script>

  <?php
    echo "<font style='position:absolute;left:40%;top:19%;font-size:24px;color:#0599c9'>Details of all Medicine</font>";
    echo "<font style='position:absolute;left:12%;top:50%'></font>";
    /*$conn=mysql_connect('localhost','root','');
    mysql_select_db('hcplus');*/
    medicine();

    $limit=12;
    if(isset($_GET["page"])){
      $page=$_GET["page"];
    }
    else{
      $page=1;
    };

    $record_index=($page-1)*$limit;
    $sql="select * from medicine_status limit $record_index,$limit";
    $retval=mysql_query($sql);
    echo "<div id='medicine_status'><table border=2 style='position:absolute;left:12%;top:60%;width:72.8%;color:#0599c9' id='medicine'>";
    echo "<tr><th>Batch No</th><th>Name</th><th>Brand</th><th>Composition</th><th>Mfd</th><th>Exp</th></tr>";

    //$str="";

    if($page>0){
      if(mysql_num_rows($retval)>0){
        while($row = mysql_fetch_array($retval)){
          $color="";
          $font="";
          $current_date=date("Y-m-d");
          $action_date=date("Y-m-d", strtotime("$current_date +7 day"));
          if($action_date>=$row[6]){
            //$str=$str."&nbsp;&nbsp;&nbsp;<b>".$row[2]."</b>(".$row[1].") || ";
            $color='#ff4d4d';
            $font='black';
          }
          echo "<tr bgcolor='$color' align='center'><td><font color='$font'>".$row[1]."</font></td><td><font color='$font'>".$row[2]."</font></td><td><font color='$font'>".$row[3]."</font></td><td><font color='$font'>".$row[4]."</font></td><td><font color='$font'>".$row[5]."</font></td><td><font color='$font'>".$row[6]."</font></td></tr>";
        }
      }
	    else{
	       echo "<tr style='text-align:center'><td colspan='6'>No records</td></tr>";
      }
    }
    else{
	     echo "<tr style='text-align:center'><td colspan='6'>No records</td></tr>";
    }
    echo "</table></div>";

    $sql_mar="select * from medicine_status";
    $var_mar=mysql_query($sql_mar);
    $str="";
    while($row2=mysql_fetch_array($var_mar))
    {
      $current_date1=date("Y-m-d");
      $action_date1=date("Y-m-d", strtotime("$current_date1 +7 day"));
      if($action_date1>=$row2[6])
      {
        $str=$str."&nbsp;&nbsp;&nbsp;<b>".$row2[2]."</b>(".$row2[1].") || ";
      }
    }

    $sql4="select * from expire_medicine";
    $var4=mysql_query($sql4);
    $str1="";
    while($row1=mysql_fetch_array($var4)){
      $str1=$str1."&nbsp;&nbsp;&nbsp;<b>".$row1[2]."</b>(".$row1[1].") <font style=font-size:16px><a href='remove_expire.php?id=".$row1[2]."'>remove</a></font> || ";
    }

    if($str1==""){
      $str1="<b>Nothing in list.</b>";
      echo "<font id='blink' style='color:red;position:absolute;left:12%;top:32%;width:72.8%;font-size:20px'><marquee>Already expire: ".$str1."</marquee></font></br></br></br>";
    }
    else{
      echo "<font id='blink' style='color:red;position:absolute;left:12%;top:32%;width:72.8%;font-size:20px'><marquee>Already expire: ".$str1."</marquee></font></br></br></br>";
    }

    if($str==""){
      $str="<b>Nothing in list.</b>";
      echo "<font id='blink1' style='color:red;position:absolute;left:12%;top:40%;width:72.8%;font-size:20px'><marquee>Going to expire soon: ".$str."</marquee></font></br></br></br>";
    }
    else{
      echo "<font id='blink1' style='color:red;position:absolute;left:12%;top:40%;width:72.8%;font-size:20px'><marquee>Going to expire soon: ".$str."</marquee></font></br></br></br>";
    }
    echo "<input type='text' id='search' name='search' onKeyUp='medicine_search();' placeholder='Search by Batch ID' style='position:absolute;left:35%;top:50%;height:6%;width:28%;text-align:center'></br></br></br>";

    function medicine(){
      $today=date("Y-m-d");
      $sql3="select * from medicine_status where exp<='$today'";
      $var3=mysql_query($sql3);
      $count=0;
      //echo $today;
      if($var3){
        while($row=mysql_fetch_array($var3)){
          $batch=$row[1];
          $name=$row[2];
          $brand=$row[3];
          $composition=$row[4];
          $mfd=$row[5];
          $exp=$row[6];
          $count=1;
        //}
          if($count==1){
         	$sql1="insert into expire_medicine(batch_no,name,brand,composition,mfd,exp) values('$batch','$name','$brand','$composition','$mfd','$exp')";
           	$var1=mysql_query($sql1);
          }
          $sql2="delete from medicine_status where exp<='$today'";
          $var2=mysql_query($sql2);
          $count=0;
        }
      }
    }

    $sql="select count(*) from medicine_status";
    $retval1=mysql_query($sql);
    $row=mysql_fetch_row($retval1);
    $total_records=$row[0];
    $total_pages=ceil($total_records / $limit);

    echo "<a href='medicine_status.php?page=".($page+1)."' class='button' style='position:absolute;left:71.5%;top:114%;background:#0599c9;color:white;width:6%;text-align:center;text-decoration:none;'>Next</a></li>";
    echo "<a href='medicine_status.php?page=".($page-1)."' class='button' style='position:absolute;left:78.5%;top:114%;background:#0599c9;color:white;width:6%;text-align:center;text-decoration:none;'>Previous</a></li>";
  ?>
  <body onLoad="blinkFont1();">
  <font style="position:absolute;left:74.5%;top:19%">
  <a href="admin_home.php">Click to admin home</a>
  </font>
  <script src="js/blink.js"></script>
  </body>
