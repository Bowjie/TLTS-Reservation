<?php
include "header.php";
$eqsql = "SELECT * FROM equipment WHERE eqstatus ='Available' ORDER BY 'eqtype'";
$eqres = $mysqli->query($eqsql);

$cds = "SELECT * FROM cd";
$cdss = $mysqli->query($cds);

?>

<?php
	if(isset($_GET['search'])) {
	
	$frtm=$_GET['from'];
	$totm=$_GET['to'];

	$fm=strtotime($frtm);
	$fms=strtotime($totm);

	$timerestrict="07:00";
	$timerestrict2="20:00";
	$timerestrict3="19:30";

	$trst=strtotime($timerestrict);
	$trst1=strtotime($timerestrict2);
	$trst2=strtotime($timerestrict3);

	if($fm >= $trst && $fm <= $trst2 && $fms <= $trst1){


?>
  <div class="content-wrapper">
   <div class="container-fluid">
	 <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Make a Reservation</li>
      </ol>
	
<form action="resfunc.php" method="post">

	<div class="col d-flex justify-content-center">
	<div class="col-lg-12">
	<div class="card mb-4">
	<div class="card-header"><h4 align="center">Information</h4></div>
	<div class="card-body">
	
	<?php
		if(isset($_GET['dates'], $_GET['from'], $_GET['to'])) {
			
				?>
				<input type="hidden" name="dates" value="<?php echo $_GET['dates']?>" />
				<input type="hidden" name="from" value="<?php echo $_GET['from']?>" />
				<input type="hidden" name="to" value="<?php echo $_GET['to']?>" />
				<?php
			
			
		}
	
	?>
	
	<div class=row>
	
	<div class="col-sm-4">
		<h5>Nature of Services</h5>
	<select name="nos" id="nature of services" class="form-control"    required="">
    <option value="">--Choose--</option>
	<option value="academic">Academic</option>
	<option value="Co-curricular/Extra-curricular">Co-curricular/Extra-curricular</option>
	<option value="Others">Others</option>
	</select>
	</div>

	<div class="col-sm-4">
	<h5>Purpose</h5>
	<select name="purpose" id="purpose" class="form-control"   required="">
    <option value="">--Choose--</option>
	<option value="Preserntation/Lecture">Preserntation/Lecture</option>
	<option value="Senior/Meeting/Orientation">Senior/Meeting/Orientation</option>
	<option value="Viewing">Viewing</option>
	<option valu="Other">Other</option>
	</select>
	</div>

	<div class="col-sm-4">
	<h5>Department</h5>
	<select name="department" id="department" class="form-control"  required="">
    <option value="">--Choose--</option>	
	<option value="Business Ad.">Business Ad.</option>
	<option value="CEIS">CEIS</option>
	<option value="CSIT">CSIT</option>
	<option value="Dentistry">Dentistry</option>
	<option value="General Education">General Education</option>
	<option value="Graduate School">Graduate School</option>
	<option value="HRM">HRM</option>
	<option value="Med. Tech">Med. Tech</option>
	<option value="Non-academic">Non-Academic</option>
	<option value="Nursing">Nursing</option>
	<option value="Pharmacy">Pharmacy</option>
	<option value="Psychology">Psychology</option>
	<option value="School of law">School of Law</option>
	<option value="Senior high">Senior High School</option>
	<option value="Tourism">Tourism</option>
	</select>
	</div>

	</div><br>

	<div class="form-group">
	<h5>Numbers of Students:</h5>
	<select name="noofstudents" id="noofstudents" onchange="populate(this.id,'qty7')" class="form-control" required="">
	<option value="">--Choose--</option>
	<option value="1-99">1-100</option>
	<option value="100-199">101 and above</option>
	</select>
	</div>

	<div class=row>
		<div class="col-sm-6 form-group">
		<h5>Campus:</h5>	
		 <select id="campus" name="campus" class="form-control" onchange="populate(this.id,'room')">
              <option value=""></option>
              <option value="GP">GP</option>
              <option value="LV">LV</option>
            </select><br>
			<small><font color=red>Note:</font> select a campus first before choosing a room</small>
		</div>

		<div class="col-sm-6 form-group">
		<h5>Room:</h5> 
		 <select id="room" name="room" class="form-control" onchange="alert(buildUrl(url,parameters))">
              
            </select>
		</div>
	</div>

</div>
</div>
</div>
</div>
</div>
	
              <script>
              function populate(s1,s2){
                  var s1 = document.getElementById(s1);
                  var s2 = document.getElementById(s2);
                  s2.innerHTML = "";
                  if(s1.value == "GP"){
                      var optionArray = ["|","101|101","102|102","103|103","104|104","105|105","106|106","201|201","202|202","203|203","204|204","205|205","206|206","207|207","SAC|SAC","301|301","302|302","303|303","304|304","305|305","306|306","307|307","308|308","309|309","401|401","402|402","403|403","404|404","405|405","406|406","407|407","408|408","409|409","501|501","502|502","503|503","504|504","505|505","506|506","507|507","508|508","509|509"];
                  } else if(s1.value == "LV"){
                      var optionArray = ["|","101|101","102|102","103|103","104|104","201|201","202|202","203|203","204|204","301|301","302|302","303|303","304|304","401|401","402|402","403|403","404|404","501|501","502|502","503|503","504|504","601|601","602|602","603|603","604|604","701|701","702|702","703|703","704|704","801|801","802|802","803|803","804|804","901|901","902|902","903|903","904|904","1001|1001","1002|1002","1003|1003","1004|1004","1101|1101","1102|1102","1103|1103","1104|1104","1201|1201","1202|1202","1203|1203","1204|1204","1301|1301","1302|1302","1303|1303","1304|1304","1401|1401","1402|1402","1403|1403","1404|1404"];
                  }
                  for(var option in optionArray){
                      var pair = optionArray[option].split("|");
                      var newOption = document.createElement("option");
                      newOption.value = pair[0];
                      newOption.innerHTML = pair[1];
                      s2.options.add(newOption);
                  }

               }
              </script>

<div class="col-lg-12">
	<div class="card mb-3">
	<div class="card-header"><h4 align="center">Equipment and Venue</h4></div>
	<div class="card-body">
	<table border="0" cellspacing="5" cellpadding="5" align="center" >
 <tr>
  <?php 
	if(isset($_GET['dates']) && $_GET['dates'] !=""){
		$datess = $_GET['dates'];
		$datet = preg_replace('/\s+/','',$datess);
				
		$explodedate=explode(',',$datet);
		$arrayform = array(); 
		
			$counter=1;
			
	$equipmentResult = array();		
	if ( $eqres->num_rows > 0 ){
	
	foreach($eqres->fetch_all() as $getrow1){
		
		$equipment_id = $getrow1[0];
		$stock_quantity =$getrow1[4];
		$compute = 0;
		
		$equipmentResult[] = $getrow1;
	
	foreach($explodedate as $date){
			$exdate=$date;
		// $date
		$rsql1 = "SELECT COUNT(equipment_id) AS countreserved FROM reservation WHERE equipment_id='".$equipment_id."' AND dates = '$exdate' AND status ='approved' OR status = 'borrowed' ";
		$eqres1 = $mysqli->query($rsql1);
		$eqres2= $eqres1->fetch_assoc();
		$totalres = $eqres2['countreserved'];
		$compute = ($stock_quantity - $totalres);
	
	$arrayform[$equipment_id][]=$compute;
	}
	}}
		// foreach($explodedate as $date){
			$exdate=implode("','",$explodedate);
			$exdate="'".$exdate."'";
			$counter=1;
			
	if ( $eqres->num_rows > 0 ){
		
	foreach($equipmentResult as $getrow){
		// $date
		// print_r("asdasd");
		$rsql1 = "SELECT COUNT(equipment_id) AS countreserved FROM reservation WHERE equipment_id='".$getrow[0]."' AND dates IN($exdate) AND status ='approved' OR status = 'borrowed'";  
		$eqres1 = $mysqli->query($rsql1);
		$eqres2= $eqres1->fetch_assoc();
		$totalres = $eqres2['countreserved'];
		$stock_quantity =$getrow[4];
		$computex=0;
		
		if(array_key_exists($getrow[0],$arrayform)){
			$computex = min($arrayform[$getrow[0]]);
			$computex = min($arrayform[$getrow[0]]);
		// print_r(min($arrayform[$getrow[0]]));
		}	
	
			?>
		
			<td>
		<img src="<?php echo $getrow[5];?>" width="230" height="200" class="img-responsive"/>
    
	
			<p align="center"> <?php echo $getrow[2]; ?> </p>
      <p align="center">Quantity:
        <select name="qty[<?php echo $getrow[0]; ?>]">
          <option value="">0</option>
         
			<?php 
			for($r=1; $r <=$computex; $r++){
				?>
				<option value="<?php echo$r;?>"><?php  echo$r; ?></option>
				<?php
			}
			?>
        </select>
      </p>
    <p align="center">&nbsp;</p></td>
			<?php 
		if($counter==4){
			$counter=1;
			echo"</tr>";
			echo"<tr>";
		}else{
			$counter++;
		}
	}}
	
		}
		// print_r($explodedate);
	
  ?>
  </tr> 
  </table>
</div>
</div>
</div>
	<div align="center">
	<div class="col-lg-12">
	<div class="card mb-3 ">
	<div class="card-header"><center><h4>Others</h4></center></div>
	<div class="card-body">
<?php

$notif="SELECT * from cd";
$result=$mysqli->query($notif); 

?>

Instructional Materials: <select id=e1 name="ins[]" multiple style="width: 150px;">
		<?php
		while($row=$result->fetch_assoc())
                          {  
    echo "<option value=".$row['cdid'].">".$row['cdname']."</option>";
    }
    ?>

</select>

</div>
</div>
</div>
</div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   
	<center>
		<button type="submit" class="btn btn-success" name="submit" style="width: 350px; height: 50px;"/><h3>FINISH RESERVATION</h3></button>
	</center>
	<br><br><br><br>
   

	<script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
	
	<!-- loads jquery and jquery ui -->
		<!-- -->
		<!-- <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.11.1.js"></script>
		
		
		
		<script type="text/javascript" src="jquery-ui.multidatespicker.js"></script>
		 -->
		
	<!-- 	<script type="text/javascript">
	
			var latestMDPver = $.ui.multiDatesPicker.version;
			var lastMDPupdate = '2014-09-19';
			
			
		</script> -->

		<link href="select2/select2.css" rel="stylesheet"/>

    <script src="select2/select2.js"></script>

		<script>
        $(document).ready(function() { $("#e1").select2(); });
		</script>

		<!-- <link rel="stylesheet" type="text/css" href="css/mdp.css">
		<link rel="stylesheet" type="text/css" href="css/prettify.css">
		<script type="text/javascript" src="js/prettify.js"></script>
		<script type="text/javascript" src="js/lang-css.js"></script>

		<script type="text/javascript">
		$(function() {
			prettyPrint();
		});
		</script> -->
							
			</div>
		</form>	
		
		<?php
	}else{ 

	?>

	<div class="content-wrapper">
   <div class="container-fluid">
	 <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Make a Reservation</li>
      </ol>

      <div class="container"><h3>Warning: Reservation is only 7am to 8pm</h3><br>
      	<a href="rform2.php">Back to checking of date</a>
      </div>

  </div>
</div>
</div>
	<?php
	}
}
?>	
<?php
   include "footer.php";
   ?>