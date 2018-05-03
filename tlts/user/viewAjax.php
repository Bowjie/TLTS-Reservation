<?php

include 'db.php';
$mdl="SELECT * FROM reservation
INNER JOIN user ON user.id = reservation.user_id
INNER JOIN equipment ON equipment.eqid = reservation.equipment_id
where reservation_id='$_POST[resid]'";
$mdl2="SELECT * FROM reservation
INNER JOIN user ON user.id = reservation.user_id
INNER JOIN cd ON cd.cdid = reservation.equipment_id
where reservation_id='$_POST[resid]'";
$mdlquery=$mysqli->query($mdl);
if ($mdlquery->num_rows > 0){
	$tfetch=$mysqli->query($mdl);
}
else{
	$tfetch=$mysqli->query($mdl2);
}


$mdlfet=mysqli_fetch_array($tfetch);  

// $mdl1="SELECT * FROM equipment INNER JOIN reservation ON  equipment.eqid = reservation.equipment_id  where reservation_id='$_POST[resid]'";
// $mdlquery1=$mysqli->query($mdl1);
// $mdlfet1=mysqli_fetch_array($mdlquery1);  

?>

 <table class="table table-hover table-bordereds">
              <th>DESCRIPTION</th>
              <th></th>
      <tr>
        <td>User ID:</td>
        <td><?php echo $mdlfet['user_id']; ?></td>
      </tr>
      <tr>
        <td>First Name:</td>
        <td><?php echo $mdlfet['first_name']; ?></td>
      </tr>
      <tr>
        <td>Last Name:</td>
        <td><?php echo $mdlfet['last_name']; ?></td>
      </tr>
      <tr>
        <td>Equipment ID:</td>
        <td><?php echo $mdlfet['equipment_id']; ?></td>
      </tr>
	  <tr>
        <td>Equipment Type:</td>
        <td><?php echo $mdlfet['eqtype']; ?></td>
      </tr>
      <tr>
        <td>Nature of Serives:</td>
        <td><?php echo $mdlfet['nos']; ?></td>
      </tr>
      <tr>
        <td>Purpose:</td>
        <td><?php echo $mdlfet['purpose']; ?></td>
      </tr>
      <tr>
        <td>Department:</td>
        <td><?php echo $mdlfet['department']; ?></td>
      </tr>
      <tr>
        <td>No. of Students:</td>
        <td><?php echo $mdlfet['num_stud']; ?></td>
      </tr>
      <tr>
        <td>Date of Reservation:</td>
        <td><?php echo $mdlfet['dates']; ?></td>
      </tr>
      <tr>
        <td>Start Time:</td>
        <td><?php echo $mdlfet['start_time']; ?></td>
      </tr>
      <tr>
        <td>End Time:</td>
        <td><?php echo $mdlfet['end_time']; ?></td>
      </tr>
      <tr>
        <td>Campus:</td>
        <td><?php echo $mdlfet['campus'];?></td>
      </tr> 
      <tr>
        <td>Room:</td>
        <td><?php echo $mdlfet['room'];?></td>
      </tr>
      <tr>
        <td>Admin ID:</td>
        <td><?php echo $mdlfet['admin_id'];?></td>
      </tr>
    </table>
