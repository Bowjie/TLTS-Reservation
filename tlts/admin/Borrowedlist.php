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
<div class = "card-header"><center><h4>Borrowed List</center></h4></div>
<div class = "card-body">
<?php
 
 $result =$mysqli->query("SELECT reservation_id, user_id, equipment_id, dates, status, received_datetime, fine FROM reservation where status ='borrowed' OR status='finished' OR status='damaged' OR status ='missing' ORDER BY reservation_id ASC");  
 ?>

        <div class="container">
          <div align="right">
      <button type="button" class="btn btn-danger btn-sm" id="btn_update" name="btn_update">UPDATE SELECTED</button>
      </div><br>
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
					       ?>
							  <tr id="<?php echo $row['reservation_id']; ?>" >
               <td><?php echo $row["reservation_id"]; ?></td>
               <td><?php echo $row["user_id"]; ?></td>
               <td><?php echo $row["equipment_id"]; ?></td>
               <td><?php echo $row["dates"]; ?></td>
               <td><select style="border-radius: 5px; padding: 3px;" id="status">
                 <option value='none' disabled selected='true'><?php echo $row['status'] ?></option>
                 <option value='finished'>Finished</option>
                 <option value='damaged'>Damaged</option>
                 <option value='missing'>Missing</option></select>
               </select></td>
               <td><?php echo $row["received_datetime"]; ?></td> 
               <td><?php echo $row["fine"]; ?></td>
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
                    
                </div>  
           </div>  
 
  </div>

<script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
    $(document).ready(function(){
    $('[tool="tooltip"]').tooltip();   
});

$(document).ready(function(){

 $('#btn_update').click(function(){
  
  if(confirm("Are you sure you want to update?"))
  {
   var reservation_id = [];
   var status = $('#status').val();
   
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
     url:'borrowed_update_ajax.php',
     method:'POST',
     data:{reservation_id:reservation_id, status:status},
     success:function()
     {
      for(var i=0; i<reservation_id.length; i++)
      {
       window.location.reload();
       // $('tr#'+reservation_id[i]+'').css('background-color', '#ccc');
       // $('tr#'+reservation_id[i]+'').fadeOut('slow');
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

<?php include'footer.php'; ?>