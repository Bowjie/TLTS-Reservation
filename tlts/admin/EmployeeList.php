<?php
/* Displays user information and some useful messages */
include "header.php"
?>
     <body>  
<div class="content-wrapper">
  
	
<div class  = "col-lg-12">
<div class = "card mb-3">
<div class = "card-header"><center><h4>Employee List</center></h4></div>
<div class = "card-body">
<?php  
 $query ="SELECT * FROM user ORDER BY id DESC";  
 $result = mysqli_query($mysqli, $query);  
 ?>  
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
 
     
           <div class="container">  
                
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-hover table-bordered" >  
                          <thead>  
                               <tr>  
                                    <td>Employee No.</td>  
                                    <td>First Name</td>  
                                    <td>Last Name</td>  
                                    <td>Email Address</td>
									<td>Status</td>
								
                               </tr>  
                          </thead>  
                          <?php  
                          while($row=mysqli_fetch_array($result))
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["id"].'</td>  
                                    <td>'.$row["first_name"].'</td>  
                                    <td>'.$row["last_name"].'</td> 
									<td>'.$row["email"].'</td> 
									<td>'.$row["type"].'</td>  
                               </tr>  
                               ';  
                          }  
                          ?>  
                     <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  
 
                     </table>
                    <p> <center><a href="registration.php"><button type="button" class="btn btn-primary">Add Employee</button></a></center> </p>
                     <p> <center><a href="disable.php"><button type="button" class="btn btn-danger">Disable an Employee</button></a></center></p>
                      <p> <center><a href="pass.php"><button type="button" class="btn btn-primary">Change role of an Employee</button></a></center></p>
                </div>  
           </div>  
      
 
  </div>
  </div>
  </div>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<?php require'footer.php';?>