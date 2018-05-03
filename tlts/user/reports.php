<?php
/* Displays user information and some useful messages */
include "header.php";
?>

  <div class="content-wrapper">
  
  
<div class  = "col-lg-12">
<div class = "card mb-3">
<div class = "card-header"><center><h4>Basta Reports To</center></h4></div>
<div class = "card-body">
<?php  
  
 $query ="SELECT * FROM user ORDER BY id DESC";  
 $result = mysqli_query($mysqli, $query);  
 ?>      
      <body>  
     
           <div class="container">  
                
                <br />  
                
                <div class="table-responsive"> 
                  <div id="HTMLtoPDF">
 
                     <table id="employee_data" class="table table-hover table-bordered" >  
                          <thead>  
                               <tr>  
                                    <td>Mock Data</td>  
                                    <td>Mock Data</td>  
                                    <td>Mock Data</td>  
                                    <td>Mock Data</td>
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
                     </div>
                </div>  
           </div> <center><a a href="#" onclick="HTMLtoPDF()"><button type="button" class="btn btn-primary">PDF FILE</button></a></center>

      </body> 
 
  </div>
</body>
<script src="js/jspdf.js"></script>
  <script src="js/jquery-2.1.3.js"></script>
  <script src="js/pdfFromHTML.js"></script>
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
</html>
