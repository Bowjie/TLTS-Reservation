<?php
include "header.php";
?>
  <div class="content-wrapper">
  
	
<div class  = "col-lg-12">
<div class = "card mb-3">
<div class = "card-header"><center><h4>Equipment List</center></h4></div>
<div class = "card-body">

<?php  
$connect = mysqli_connect("localhost", "root", "root", "wbs");  
 $query ="SELECT * FROM equipment ORDER BY eqid DESC";
  $result=$mysqli->query($query); 
 	 
if(isset($_POST['eqqty'])){
	print_r($_POST);
	$UpdateQuery = "UPDATE equipment SET eqqty='$_POST[eqqty]' WHERE eqid='$_POST[eqid]'";
	mysqli_query($connect, $UpdateQuery);
?>
<script type="text/javascript">
 window.location="http://localhost/tlts/admin/addequip.php";
</script>

  <?php

 };
 ?>  <a href="Equipmentlist.php">Back to Equipment Lists</a><br><br>
           <div class="container">  
             
                <div class="table-responsive">  
                     <table id="employee_data" class= 'table table-hover table-bordered table style= width: 100%;'  >  
                          <thead>  
                               <tr>  
                                    <td>Equipment Id</td>  
                                    <td>Equipment name</td>  
                                    <td>Type</td>  
                                    <td>Quantity</td>  
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
                                echo  "<td>"."<center><input type= text readonly  style=width:100px name=eqid value= ".$row['eqid']."></center>"."</td>" ; 
                                echo  "<td>".$row['eqdesc']."</td>";  
                                echo  "<td>".$row['eqtype']."</td>";  
                                echo "<td>"."<input type=number name=eqqty[".$row['eqid']."] value=".$row['eqqty']." min=1 max=100000>"."</td>";
								echo "<td>" . "<input type=button name=update tool=tooltip title='Update Quantity' class=btn value=Update onClick=Update('".$row['eqid']."')>" . " </td>" ;
								 
                              echo "</tr>";
                          }  
                          ?>   
						 
                     <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
  function Update(eqid){
  var conf=confirm('Are you sure do you want to update?');

  $('#eqid').val(eqid);
 
 var eqqty=$('input[name="eqqty['+eqid+']"]').val();

 $('#eqqty').val(eqqty);
 $('#updatefrm').submit();
 


 }
   $(document).ready(function(){
    $('[tool="tooltip"]').tooltip();   
});
 </script>  
							 
 
                     </table> 
				<form action='addequip.php' id='updatefrm' method='post'>
                      <input type=hidden  name=eqid id=eqid>
                      <input type=hidden  name=eqqty id=eqqty>

                     </form> 					 
                </div>  
           </div>  
    
  </div>
  </div>
  </div><br><br><br>
<?php include'footer.php';?>