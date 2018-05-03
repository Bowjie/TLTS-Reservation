<?php
/* Displays user information and some useful messages */
include "header.php"

?>
<style>
.modal-dialog{
    overflow-y: initial !important
}
.modal-body{
    height: 500px;
    overflow-y: auto;
}

</style>

  <div class="content-wrapper">
<div class  = "col-lg-12">
<div class = "card mb-3">
<div class = "card-header"><center><h4>Reservation List</center></h4></div>
<div class = "card-body">
<?php
$mdl="SELECT * FROM user INNER JOIN reservation ON  user.id = reservation.user_id  where reservation_id=433";
$mdlquery=$mysqli->query($mdl);
$mdlfet=mysqli_fetch_array($mdlquery);  
 
 $query ="SELECT * FROM reservation ORDER BY reservation_id ASC";  
 $result = mysqli_query($mysqli, $query);  
 
 if(isset($_POST['status'])){
 

  $UpdateQuery = "UPDATE reservation SET status ='returned' WHERE reservation_id='$_POST[reservation_id]'";
  $UpdateQuery2=$mysqli->query($UpdateQuery);
  

  date_default_timezone_set('Asia/Manila');
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

    $compute=round(($st - $et)/3600,1);
    $fine=100;
    $fine1=($compute * $fine);
    
    if($compute < 0){
      $charges="No"."&nbsp;"."charges";
    }else{
       $charges="Overdue,"."&nbsp;"."P$fine1";
    }
$fine = "UPDATE reservation SET status ='returned', received_datetime='$datetoday', fine='$charges' WHERE reservation_id='$_POST[reservation_id]'";
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

           <div class="container">
                <div class="table-responsive">
                     <table id="employee_data" class="table table-hover table-bordered" >  
                          <thead>  
                                <tr>  
                                    <td align=center>Reservation Id</td>  
                                    <td align=center>Borrower's Id Number</td>  
                                    <td align=center>Equipment ID</td>  
                                    <td align=center>Date of Reservation</td>  
                  									<td align=center>Status</td>
                  									<td align=center>Received Date</td>
                  									<td align=center>Fine</td>
                                    <td></td>
                                    <td></td>
                               </tr>  
                          </thead>  
                          <?php  
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
                 echo "<td>" ."<center><input type=text style=width:50px name=reservation_id value= ".$row['reservation_id']." readonly style=width:75px></center>". " </td>" ; 
                 echo "<td>" . "<center>". $row['user_id']."</center>"."</td>" ;
                 echo "<td>" . "<center>". $row['equipment_id']."</center>"."</td>" ;
							 	 echo "<td>" . "<center>". $row['dates']."</center>". " </td>" ;  
							 	 echo "<td>" . "<input type=text readonly style=width:72px name=status[".$row['reservation_id']." value=".$row['status'].">"."</td>" ; 
							 	 echo "<td>" . "<center><input type=text readonly style=width:90px name=received_datetime[".$row['reservation_id']." value=".$row['received_datetime']."></center>"."</td>" ; 
								 echo "<td>" . "<input type=text readonly style=width:121px name=fine[".$row['reservation_id']." value=".$row['fine'].">"."</td>" ;  
							   echo "<td>" . "<button type=button tool=tooltip title='update the status to returned' class=btn readonly name=update onClick=Update('".$row['reservation_id']."')>"."Update"."</button>" . " </td>" ;
                 echo "<td>" . "<button title='view complete info' type=button data-toggle=modal tool=tooltip class=btn data-target=#exampleModal>View</button". " </td>" ;
                echo "</tr>"; 
							   
                          }  
						  
                          ?>  
    
                     </table>
    </div> </div>

    <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><?php echo $mdlfet['first_name'], $mdlfet['last_name']; ?></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">

            <div class="container">
                <div class="table-responsive">
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
        <td>Venue:</td>
        <td><?php echo $mdlfet['venue'];?></td>
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
        <td>Others:</td>
        <td><?php echo $mdlfet['others'];?></td>
      </tr>
      <tr>
        <td>Status</td>
        <td><?php echo $mdlfet['status'];?></td>
      </tr>
      <tr>
        <td>Admin ID:</td>
        <td><?php echo $mdlfet['admin_id'];?></td>
      </tr>
    </table>
  </div>
</div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-info" type="button" style="width: 70px;" data-dismiss="modal">Ok</button>
     
          </div>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function(){
    $('[tool="tooltip"]').tooltip();   
});
    </script>
                    <form action="" id='updatefrm' method='post'>
                      <input type=hidden  name=reservation_id id=reservation_id>
                      <input type=hidden  name=status id=status>
                      <input type=hidden  name=received_datetime id=received_datetime>
                      <input type=hidden  name=fine id=fine>
                     </form>
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
