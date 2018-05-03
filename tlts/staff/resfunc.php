<?php 
require 'header.php';
?>
<body>
 <div class="content-wrapper">
   <div class="container-fluid">
   
	 <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Make a Reservation</li>
      </ol>
	  
	  <!--Content start -->
<?php 		
			
?>

	  <?php 
	  
	if(isset($_POST['submit'])){
		error_reporting(E_ERROR);
	
	$nat = $_POST['nos'];
	$pur = $_POST['purpose'];
	$dep = $_POST['department'];
	$nost = $_POST['noofstudents'];	
	$cam = $_POST['campus'];
	$ro  = $_POST['room'];
	$equip = $_POST['qty'];
	$dates = $_POST['dates'];
	$f = $_POST['from'];
	$t = $_POST['to'];
	$n=$_POST['ins'];



			$dates1 = explode(',',trim($dates)); 
			
				foreach($dates1 as $key1 => $valued){

					$datem = trim($valued);
					
				foreach($equip as $key2 => $value){
					
					$equipment_id = $key2;

					if($value >= 1){

				for($e=1; $e<=$value; $e++){
					
$sqli=("INSERT INTO reservation (user_id, equipment_id, nos, purpose, department, num_stud, dates, start_time, end_time, campus, room, status, fine) 
VALUES ('$id','$equipment_id','$nat','$pur','$dep','$nost','$datem','$f','$t','$cam','$ro','pending','')");   
		  mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
		
		}}}  

		foreach($n as $key3 => $value2){
			$in=trim($value2);

$others=("INSERT INTO reservation (user_id, equipment_id, nos, purpose, department, num_stud, dates, start_time, end_time, campus, room, status, fine) 
VALUES ('$id','$in','$nat','$pur','$dep','$nost','$datem','$f','$t','$cam','$ro','pending','')");   
		  mysqli_query($mysqli,$others) or die(mysqli_error($mysqli));
		 

		}
	}}

	  ?>
  <!--Content End  -->
  <?php echo"<script type='text/javascript'>alert('You have successfully Reserved');</script>"; ?>
	<a href="index.php"><h1>Home</h1></a>
	  </div>
 </div>
</body>
<?php require 'footer.php'?>