<?php
include "header.php";

?>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['one'])) { //user logging in

        require 'one.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>

  <div class="content-wrapper">
  
	
<div class  = "col-lg-12">
<div class = "card mb-3">
<div class = "card-header"><center><h4>Change Role</center></h4></div>
<div class = "card-body">

<?php  
 $query ="SELECT * FROM user ORDER BY id DESC";
 $result= mysqli_query($mysqli,$query);
 
 if(isset($_POST['type'])){
  print_r($_POST);
	$UpdateQuery = "UPDATE user SET type='$_POST[type]' WHERE id='$_POST[id]'";
	mysqli_query($mysqli, $UpdateQuery);
  //header("Refresh:0");
  ?>
<script type="text/javascript">
  window.location="http://localhost/tlts/admin/pass.php";
</script>

  <?php

 };
 ?>         
     
       <style>
         input {
    border: 0;
}
       </style>
           <div class="container">  
           
                <div class="table-responsive">  
                     <table id="employee_data" class= 'table table-hover table-bordered table style= width: 100%;'  >  
                          <thead>  
                               <tr>  
                                    <td>ID</td>  
                                    <td>First Name</td>  
                                    <td>Last Name</td>  
                                    <td>type</td> 
								    <td>Status</td>
                               </tr>
															   
                          </thead>
					
                           <?php  
                          while($row=mysqli_fetch_array($result))
                          {  
                             
                              echo "<tr>";
                              echo "<td>" ."<input type=text readonly name=id value= " .$row['id'].">". " </td>" ; 
                               echo "<td>" .  $row['first_name']. " </td>" ; 
                               echo "<td>" .  $row['last_name']. " </td>" ; 
                               echo "<td>"."<select name=type[".$row['id']."]>";
                        echo  "<option value='none' disabled selected='true'>".$row['type']."</option>";
                       echo   "<option value='admin'>Admin</option>";
                         echo " <option value='staff'>Staff</option>";
                         echo " <option value='user'>User</option></select>";
                       echo" </td>";
                               
                 
                 echo "<td>" . "<input type=button tool=tooltip class=btn title='Update Status' name=update value=Update onClick=Update(".$row['id'].")>" . " </td>" ;
                
                  
                             echo  "</tr>"; 
               
                          }
              
                          ?>   
								
                     <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  

 function Update(id){
  var conf=confirm('Are you sure do you want to update?');
 if (conf){
  $('#id').val(id);
 
 var type=$('select[name="type['+id+']"]').val();
 $('#type').val(type);
 $('#updatefrm').submit();
 }
 }
   $(document).ready(function(){
    $('[tool="tooltip"]').tooltip();   
});
 </script>  
                     </table> 
                     
                     <form action='pass.php' id='updatefrm' method='post'>
                      <input type=hidden  name=id id=id>
                      <input type=hidden  name=type id=type>

                     </form> 
                </div>  
           </div>  
   
 
  </div>
  </div> 
  </div>
  <?php include'footer.php';?>