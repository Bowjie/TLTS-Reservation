<?php 
	if(isset($_GET['inm']) && $_GET['inm'] !=""){
		$inm1 = $_GET['inm'];
		$inm2 = preg_replace('/\s+/','',$inm1);//Trim all spaces
				
		$explodedate=explode(',',$inm2);//array output
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
		$rsql1 = "SELECT COUNT(equipment_id) AS countreserved FROM reservation WHERE equipment_id='".$equipment_id."' AND dates = '$exdate' AND status ='approved'";
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
		$rsql1 = "SELECT COUNT(equipment_id) AS countreserved FROM reservation WHERE equipment_id='".$getrow[0]."' AND dates IN($exdate) AND status ='approved'";  
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