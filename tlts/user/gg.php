<?php
/* Displays user information and some useful messages */
include "header.php"

?>

  <div class="content-wrapper">
  
	
<div class  = "col-lg-12">
<div class = "card mb-3">
<div class = "card-header"><center><h4>Reservation List</center></h4></div>
<div class = "card-body">
<?php  
 
 $query ="SELECT * FROM reservation ORDER BY reservation_id ASC";  
 $result = mysqli_query($mysqli, $query);  
 
 if(isset($_POST['status'])){
  print_r($_POST);

  $UpdateQuery = "UPDATE reservation SET status ='returned' WHERE reservation_id='$_POST[reservation_id]'";
  $UpdateQuery2=$mysqli->query($UpdateQuery);
  

  date_default_timezone_set('Asia/Manila');
  $datetoday=date("m/d/Y H:i:s");

  
  //para sa time
  $timeofres="SELECT end_time from reservation where reservation_id='$_POST[reservation_id]'";
  $result2=mysqli_query($mysqli,$timeofres);
  $rowtime=mysqli_fetch_array($result2);
        
  //para sa date
  $dateofres="SELECT dates from reservation where reservation_id='$_POST[reservation_id]'";
  $result3=mysqli_query($mysqli,$dateofres);
  $rowdate=mysqli_fetch_array($result3);


  $dt=($rowdate['dates']);
  $tm=($rowtime['end_time']);

  $date_reservation=date("$dt $tm:00");

      
    $datetoday=date("m/d/Y H:i:s");
    $date_reservation=date("$dt $tm:00");

    $st=strtotime($datetoday);
    $et=strtotime($date_reservation);

    $compute=round(($et - $st)/3600,1);
    $fine=100;
    $fine1=($compute * $fine);

    if($compute < 0){
      $charges="No charges";
    }else{
       $charges="Overdue, P$fine1";
    }
$fine = "UPDATE reservation SET status ='returned' received_datetime='$datetoday', fine='$charges' WHERE reservation_id='$_POST[reservation_id]'";
 $fine2=$mysqli->query($fine);
  // if(mysqli_query($mysqli, $UpdateQuery)){
  
  // }
  // else{
  //   echo"shit";
  // }
 ?>
<script type="text/javascript">
 window.location="http://localhost/tlts/admin/reserlist.php";
</script>

  <?php

 };
 ?>

      <body>  
    
           <div class="container">
                <div class="table-responsive">
                     <table id="employee_data" class="table table-hover table-bordered" >  
                          <thead>  
                                <tr>  
                                    <td>Reservation Id</td>  
                                    <td>Borrower's Id Number</td>  
                                    <td>Date of Reservation</td>  
                  									<td>Status</td>
                  									<td>Received Date</td>
                  									<td>Fine</td>
                                    <td></td>
                                    <td></td>
                                    
                               </tr>  
                          </thead>  
                          <?php  

                          $mdl="SELECT * FROM user INNER JOIN reservation ON  user.id = reservation.user_id  where reservation_id=408";
                           $mdlquery=$mysqli->query($mdl);
                            $mdlfet=$mdlquery->fetch_assoc();

                          while($row=mysqli_fetch_array($result))
                          {  
					  // echo "<form action = reserlist.php method= post>";  
                    echo"<style>
                        input{
                            border: 0;
                        }
                    </style>
                    "     ;      
							   echo "<tr>";
                 echo "<td>" ."<input type=text  name=reservation_id value= ".$row['reservation_id']." readonly style=width:80px>". " </td>" ; 
                 echo "<td>" .  $row['user_id']. " </td>" ;
							 	 echo "<td>" .  $row['dates']. " </td>" ;  
							 	 echo "<td>" . "<input type=type name=status[".$row['reservation_id']." value=".$row['status'].">"."</td>" ; 
							 	 echo "<td>" . "<input type=type name=received_datetime[".$row['reservation_id']." value=".$row['received_datetime'].">"."</td>" ; 
								 echo "<td>" . "<input type=type name=fine[".$row['reservation_id']." value=".$row['fine'].">"."</td>" ;  
							   echo "<td>" . "<input type=button name=update value=Update onClick=Update('".$row['reservation_id']."')>" . " </td>" ;
                  echo "<td>".

                    '<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    ..
    <table>
      <tr>
        <td>User ID:</td>
        <td><?php echo $mdlfet[user_id]; ?></td>
      </tr>
      <tr>
        <td>First Name:</td>
        <td><?php echo $mdlfet[first_name]; ?></td>
      </tr>
      <tr>
        <td>Last Name:</td>
      </tr>
      <tr>
        <td>Equipment ID:</td>
        <td><?php  ?></td>
      </tr>
      <tr>
        <td>Nature of Serives:</td>
      </tr>
      <tr>
        <td>Purpose:</td>
      </tr>
      <tr>
        <td>Department:</td>
      </tr>
      <tr>
        <td>No. of Students:</td>
      </tr>
      <tr>
        <td>Date of Reservation:</td>
      </tr>
      <tr>
        <td>Start Time:</td>
      </tr>
      <tr>
        <td>End Time:</td>
      </tr>
      <tr>
        <td>Venue:</td>
      </tr>
      <tr>
        <td>Campus:</td>
      </tr>
      <tr>
        <td>Room:</td>
      </tr>
      <tr>
        <td>Others:</td>
      </tr>
      <tr>
        <td>Status</td>
      </tr>
      <tr>
        <td>Admin ID:</td>
      </tr>
    </table>

    </div>'



             ."<input type=button>"     ."</td>";
                echo "</tr>"; 
							   
                          }  
						  
                          ?>  
    
                     </table>

                    <form action="" id='updatefrm' method='post'>
                      <input type=hidden  name=reservation_id id=reservation_id>
                      <input type=hidden  name=status id=status>
                      <input type=hidden  name=received_datetime id=received_datetime>
                      <input type=hidden  name=fine id=fine>
                     </form

					 <input type="button" value="Reload Page" onClick="document.location.reload(true)">
                    <p> <center><a href="registration.php"><button type="button" class="btn btn-primary">Add Employee</button></center></a> </p>
                     <p> <center><a href="disable.php"><button type="button" class="btn btn-primary">Disable an Employee</button></center></a></p>
                </div>  
           </div>  
      </body> 
 
  </div>

<script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
function Update(reservation_id){
  var conf=confirm('Are you sure do you want to update?');
 if (conf){
  $('#reservation_id').val(reservation_id);
 
        var status=$('input[name="status['+reservation_id+']"]').val();
        $('#status').val(status);
                

        var received_datetime=$('input[name="received_datetime['+reservation_id+']"]').val();
        $('#received_datetime').val(received_datetime);
     

        var fine=$('input[name="fine['+reservation_id+']"]').val();
        $('#fine').val(fine);
        $('#updatefrm').submit();
 }


 }
 </script>
</body>
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
                    
 
</html>
