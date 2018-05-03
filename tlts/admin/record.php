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
<div class = "card-header"><center><h4>Record List</center></h4></div>
<div class = "card-body">
  
<?php  
$connect = mysqli_connect("localhost", "root", "root", "wbs");
 $query ="SELECT * FROM wbs.reservation where status='finished' OR status='declined' OR status='damaged' OR status='missing' ORDER BY reservation_id ASC";  
 $result = mysqli_query($mysqli, $query);  

 
 if(isset($_POST['status'])){
	 print_r($_POST);
	$UpdateQuery = "UPDATE reservation SET status ='borrowed' where reservation_id='$_POST[reservation_id]'";
	mysqli_query($connect, $UpdateQuery);
?>
<script type="text/javascript">
 window.location="http://localhost/tlts/admin/Approvedlist.php";
</script>

  <?php

 };
 ?>  

           <div class="container">
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-hover table-bordered" >  
                          <thead>  
                               <tr>  
                                    <td>Reservation Id</td>  
                                    <td>Borrower's Id Number</td>  
                                    <td>Equipment Id</td>  
                                    <td>Date of Reservation</td>  
                                    <td>Purpose</td>
									<td>Status</td>
									<td></td>
                               </tr>  
                          </thead>  
                          <?php  
                          while($row=mysqli_fetch_array($result))
						  {       
							echo "<tr>";
                               echo "<td>".$row['reservation_id']."</td>" ; 
                               echo "<td>" .  $row['user_id']. " </td>" ; 
                               echo "<td>" .  $row['equipment_id']. " </td>" ; 
								echo "<td>" .  $row['dates']. " </td>" ; 
							    echo "<td>" .  $row['purpose']. " </td>" ; 
								 echo "<td>".$row['status']."</td>";
							    							   echo "<td>" . "<button title='view complete info' onClick=View('".$row['reservation_id']."') type=button tool=tooltip class='btn btn-sm' >View</button> ". " </td>" ;
               
								echo "</tr>";
                          }  
                          ?>  
                     <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  

$(document).ready(function(){
    $('[tool="tooltip"]').tooltip();   
});
  function View(reservation_id){

  $.ajax({
  method: "POST",
  url: "viewAjax.php",
  data: { resid: reservation_id}
}).done(function( msg ) {
   $('#modal_view').html(msg);
   $('#exampleModal').modal();
  });
 }
 </script>  
 
                     </table>
					 <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">View</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">

            <div class="container">
                <div class="table-responsive" id="modal_view">
           
  </div>
    </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-info" type="button" style="width: 70px;" data-dismiss="modal">Ok</button>
     
          </div>
        </div>
      </div>
    </div>
                </div>  
           </div>  
  </div>
  </div>
  </div>
  </div><br><br><br>
<?php  include'footer.php';?>