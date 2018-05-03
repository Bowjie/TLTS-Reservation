<?php
$connect = mysqli_connect("localhost", "root", "root", "wbs");  
 $query ="SELECT * FROM equipment";  
 $result = mysqli_query($connect, $query);  
 
?>

<html>
<body>
	<form action="1b.php" method="post">
	<select name="sem">
	<option>First Sem</option>
	<option>Second Sem</option>
	</select>
<select name=equip>
	<?php  
                          while($row=mysqli_fetch_array($result))
                          {
                         
	echo "<option value=".$row['eqid'].">".$row['eqtype']."</option>";
	
                          }  

                          	?>
                          		
                          	</select>
 	<input type="number" name="year" placeholder="Enter Year" min="2018" max="10000">
 	<input type="submit" value="Go!">
</form>
</body>
</html>

