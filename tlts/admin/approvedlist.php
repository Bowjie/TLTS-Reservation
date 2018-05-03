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
<div class = "card-header"><center><h4>Approved List</center></h4></div>
<div class = "card-body">
<?php 
$result=$mysqli->query("SELECT reservation_id, user_id, equipment_id, dates, purpose, status FROM reservation WHERE status ='approved' ");
?>
  <div class="container-fluid">
    <div align="right">
      <button type="button" class="btn btn-danger btn-sm" id="btn_update" name="btn_update">UPDATE SELECTED</button>
      </div><br> 
                <div class="table-responsive"> 
                     <table id="employee_data" class="table table-hover table-bordered" >  
                          <thead>  
                               <tr>  
                                    <th>Reservation Id</th>  
                                    <th>Borrower's Id Number</th>  
                                    <th>Equipment Id</th>  
                                    <th>Date of Reservation</th>  
                                    <th>Purpose</th>
								                  	<th>Status</th>
									                  <th></th>
									                  <th></th>
                               </tr>  
                          </thead>  
                          <?php  
                          while($row=mysqli_fetch_array($result))
						  {  ?>    
                <tr id="<?php echo $row['reservation_id']; ?>" >
               <td><?php echo $row["reservation_id"]; ?></td>
               <td><?php echo $row["user_id"]; ?></td>
               <td><?php echo $row["equipment_id"]; ?></td>
               <td><?php echo $row["dates"]; ?></td>
               <td><?php echo $row["purpose"]; ?></td> 
               <td><?php echo $row["status"]; ?></td>
               <?php
                 echo "<td>" . "<button title='view complete info' onClick=View('".$row['reservation_id']."') type=button tool=tooltip class='btn btn-sm'>View</button> ". " </td>" ;?>
               <td align="center"><input type="checkbox" name="check_status" value="<?php echo $row['reservation_id']; ?>"></td>						
            </tr>
              <?php
                          }  
                          ?>  
                     </table>					 
                </div>  
           </div>
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
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 $('#employee_data').DataTable( {
    responsive: true
} );

$(document).ready(function(){

 $('#btn_update').click(function(){
  
  if(confirm("Are you sure you want to update?"))
  {
   var reservation_id = [];
   var purpose = $('#purpose').val();
   
   $(':checkbox:checked').each(function(i){
    reservation_id[i] = $(this).val();
   });
   
   if(reservation_id.length === 0)
   {
    alert("Please Select atleast one checkbox");
   }
   else
   {
    $.ajax({
     url:'update_ajax.php',
     method:'POST',
     data:{reservation_id:reservation_id, purpose:purpose},
     success:function()
     {
      for(var i=0; i<reservation_id.length; i++)
      {
       $('tr#'+reservation_id[i]+'').css('background-color', '#ccc');
       $('tr#'+reservation_id[i]+'').fadeOut('slow');
      }
     }

    });
   }
  }
  else
  {
   return false;
  }
 });
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
  </div>
  </div>
  </div>
  </div>
<?php include'footer.php'; ?>
