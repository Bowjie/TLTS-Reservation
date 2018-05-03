h<?php
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
<div class = "card-header"><center><h4>Approved List</center></h4></div>
<div class = "card-body">
<?php  
 $query ="SELECT * FROM wbs.reservation where status='approved' ORDER BY reservation_id ASC";  
 $result = mysqli_query($mysqli, $query);  

 
 if(isset($_POST['status'])){
	
	$UpdateQuery = "UPDATE reservation SET status ='borrowed' where reservation_id='$_POST[reservation_id]'";
	mysqli_query($mysqli, $UpdateQuery);
?>
<script type="text/javascript">
 window.location="http://localhost/tlts/admin/ApprovedList.php";
</script>

  <?php

 };
 ?>  
    <div class="container">
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-hover table-bordereds" >  
                          <thead>  
                               <tr>  
                                    <td>Reservation Id</td>  
                                    <td>Borrower's Id Number</td>  
                                    <td>Date of Reservation</td>  
                                    <td>Purpose</td>
									<td>Status</td>
									<td></td>
									<td></td>
                               </tr>  
                          </thead>  
                          <?php  
                          while($row=mysqli_fetch_array($result))
						  {      
                echo"<style>
                        input{
                            border: 0;
                        }
                    </style>
                    "     ;      
							echo "<tr>";
                               echo "<td>" ."<center><input style=width:100px type=text readonly name=reservation_id value= " .$row['reservation_id']."></center>". "</td>" ; 
                               echo "<td>" .  $row['user_id']. " </td>" ; 
								echo "<td>" .  $row['dates']. " </td>" ; 
							    echo "<td>" .  $row['purpose']. " </td>" ; 
								 echo "<td>"."<input type=text style=width:80px name=status[".$row['reservation_id']."] value=".$row['status'].">"."</td>";
							   echo "<td>" . "<input type=button title='update status to borrowed' tool=tooltip name=update class=btn value=Update onClick=Update('".$row['reservation_id']."')>" . " </td>" ;
							   echo "<td>" . "<button title='view complete info' onClick=View('".$row['reservation_id']."') type=button tool=tooltip class=btn>View</button> ". " </td>" ;
               echo "</tr>";
                          }  
                          ?>  
                       
 
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
    <script>
      $(document).ready(function(){
    $('[tool="tooltip"]').tooltip();   
});
    </script>
					<form action='Approvedlist.php' id='updatefrm' method='post'>
                      <input type=hidden  name=reservation_id id=reservation_id>
                      <input type=hidden  name=status id=status>

                     </form> 					 
                </div>  
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
 $('#updatefrm').submit();
 }


 }
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
  </div>
  </div>
  </div>
<?php include'footer.php'; ?>
