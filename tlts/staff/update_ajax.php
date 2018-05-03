<?php
include'db.php';
if(isset($_POST["reservation_id"]))
{
 foreach($_POST["reservation_id"] as $key => $value)
 {

  $query = "UPDATE reservation SET status='borrowed' WHERE reservation_id = '".$value."' ";
  $mysqli->query($query);
 }
}
?>