<?php
include'db.php';
if(isset($_POST["reservation_id"]))
{

  $stat = $_REQUEST['status'];
 foreach($_POST["reservation_id"] as $key => $value)
 {

  $query = "UPDATE reservation SET status='".$stat."' WHERE reservation_id = '".$value."' ";
  $mysqli->query($query);
 }
}
?>