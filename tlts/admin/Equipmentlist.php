
<?php
include "header.php";
?>
  <div class="content-wrapper">
<div class  = "col-lg-12">
<div class = "card mb-3">
<div class = "card-header"><center> <h4>Equipment List </center></h4></div>
<div class = "card-body">

<form action="Equipmentlist.php" method="post" enctype="multipart/form-data">

<div class=container >

<div class="row">
<div class="col-sm-4 form-group">
Equipment Id: <input type="text" class="form-control" name="equipmentnum" required="" maxlength="50">
Equipment Description: <input type="text" class="form-control" name="equipmentname"   maxlength="50" required/>
</div>
<div class="col-sm-4 form-group">
Type: <input type="text" name="equipmenttype" class="form-control"  maxlength="50" required/>
Quantity: <input type="text" name="quantity" class="form-control" maxlength="50" required/>

</div>
</div>
<input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" /><br><br>
<input type="submit" class='btn btn-primary' name="send" value="Submit">
<div align="right">
<a href="addequip.php"><button type='button' class='btn btn-primary' align="right" tool=tooltip title='Add Quantity of a Registered Equipment'>Add Quantity</button></a>
</div>
</div>
</form>


<script>
  $(document).ready(function(){
    $('[tool="tooltip"]').tooltip();   
});

 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  
<?php  
 $query ="SELECT * FROM equipment ORDER BY eqid DESC";
  $result=$mysqli->query($query); 
 if(isset($_POST['send'])){
   $id=$_POST['equipmentnum'];
   $nm=$_POST['equipmentname'];
   $tp=$_POST['equipmenttype'];
   $st= "Available";
   $qt=$_POST['quantity'];
   
   $image = "images/".$_FILES['image']['name'];
   $tmp_name = $_FILES["image"]["tmp_name"];
 $image2 = "equipment/".basename($_FILES["image"]["name"]);
        move_uploaded_file($tmp_name, $image2);

    // image file directory
    $target = "images/".basename($image);
   
   
   $sql="INSERT INTO equipment (eqid, eqdesc, eqtype, eqstatus, eqqty, eq_img) 
   VALUES ('$id','$nm','$tp','$st','$qt', '$image2')";
 $mysqli->query($sql) ;

 ?>
<script type="text/javascript">
window.location="http://localhost/tlts/admin/Equipmentlist.php";
</script>

  <?php

 };
 ?>   <div class="container">
                <br>  
                <div class="table-responsive">  
                     <table id="employee_data" class= 'table table-hover table-bordered table style= width: 100%;'  >  
                          <thead>  
                               <tr>  
                                    <td>Equipment Id</td>  
                                    <td>Equipment name</td>  
                                    <td>Type</td>  
                                    <td>Status</td>  
                  
                                      
                               </tr>  
                          </thead>  
                          <?php  
                         while($row=mysqli_fetch_array($result))
                          {   
                                echo   
                               '<tr>
                                    <td>'.$row['eqid'].'</td>  
                                    <td>'.$row['eqdesc'].'</td>  
                                    <td>'.$row['eqtype'].'</td>  
                                    <td>'.$row['eqstatus'].'</td> 
                               </tr>';
                          }  
                          ?>   
                     <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  

 </script>  
                     </table>  
                </div> 
                </div> 

  </div> 
  </div>
  </div>
  <br><br><br>
  <?php include'footer.php'; ?>
  