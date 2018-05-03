<?php

  include "header.php";
?>

<style>
input[type=number]{
    width: 180px;
} 
</style>
<?php
 $query ="SELECT * FROM equipment";  
 $result = mysqli_query($mysqli, $query);  
 ?>
 <div class="content-wrapper">
<div class  = "col-lg-12">
<div class = "card mb-3">
<div class = "card-header"><center><h4>Reports</center></h4></div>
<div class = "card-body">
<CENTER>CHOOSE SEMESTER, EQUIPMENT AND YEAR TO CHECK THE REPORTS</CENTER><BR><BR>
	<form action="1.php" method="post">
	
<center>
		<select name="sem">
	<option>First Sem</option>
	<option>Second Sem</option>
	</select>
<select name="equip">
	<?php  
                          while($row=mysqli_fetch_array($result))
                          {
                         
	echo "<option value=".$row['eqid'].">".$row['eqtype']."</option>";
	
                          }  

                          	?>
                          		
                          	</select>
 	<input type="number" required name="year" placeholder="Enter Year" min="2018" max="10000" size=50px>
 	<input type="submit" value="Go!">

 </center>
</form>
</div><br>
</div>
</div>
</div>
<?php include'footer.php'; ?>

