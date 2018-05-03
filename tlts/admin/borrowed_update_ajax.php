<?php
include'db.php';
if(isset($_POST["reservation_id"]))
{
  $stat = $_REQUEST['status'];
  
 foreach($_POST["reservation_id"] as $key => $value)
 {
  date_default_timezone_set('Asia/Manila');
  $timeofres="SELECT end_time from reservation where reservation_id='".$value."' ";
  $result2=mysqli_query($mysqli,$timeofres);
  $rowtime=mysqli_fetch_array($result2);
        
  $dateofres="SELECT dates from reservation where reservation_id='".$value."'";
  $result3=mysqli_query($mysqli,$dateofres);
  $rowdate=mysqli_fetch_array($result3);


  $dt=($rowdate['dates']);
  $tm=($rowtime['end_time']);

  $date_reservation=date("$dt $tm:00");

      
    $datetoday2=date("m/d/Y");
    $datetoday=date("m/d/Y H:i:s");
    $date_reservation=date("$dt $tm:00");

    $st=strtotime($datetoday);
    $et=strtotime($date_reservation);

    $compute=round(($st - $et)/3600,1);
    $fine=100;
    $fine1=($compute * $fine);
    
    if($compute < 0){
      $charges="No"."&nbsp;"."charges";
    }else{
       $charges="Overdue,"."&nbsp;"."P"."&nbsp;"."$fine1";
    }
  $query = "UPDATE reservation SET status ='".$stat."' , received_datetime='$datetoday2', fine='$charges' WHERE reservation_id = '".$value."' ";
  $mysqli->query($query);
 }
}
 ?>