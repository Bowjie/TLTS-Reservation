<?php require'header.php';?>

 <div class="content-wrapper">
   <div class="container-fluid">
   
	 <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Make a Reservation</li>
      </ol>
<!--.............-->
<form method="get" action="rform.php">
		<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.11.1.js"></script>
		<script type="text/javascript" src="jquery-ui.multidatespicker.js"></script>
		<link rel="stylesheet" type="text/css" href="css/mdp.css">
		<script type="text/javascript">
		$(function() {
			prettyPrint();
		});
		</script>

		<div class="container">
		Note:<br>
		<small>Before reserving equipments you must check first <br>the date if the equipments is available</small>
		<br><br>
	</div>

	<div class="col d-flex justify-content-center">
	<div class="col-lg-15">
	<div class="col-lg-19">
	<div class="card mb-3" >
	<div class="card-header"><center><h4>Set Date & Time</h4></center></div>
	<div class="card-body">
		<small><center><font color="red">*You may select Multitple Dates for Reservation*</font></center></small>
						<div id="withAltField" class="box" align="center">
							<div id="with-altField"></div></br>
							<textarea rows="3" cols="30" id="altField" value="" name='dates' required="" ></textarea>
						</div>
<link rel="stylesheet" type="text/css" href="css/jquery-clockpicker.css">
<script type="text/javascript" src="js/jquery-clockpicker.js"></script>	
<div class="card-body">	
FROM:
<div class="input-group clockpicker" data-placement="right" data-align="top" data-autoclose="true">
       
    <input type="text" name="from" class="form-control"  size="5" placeholder="Start time" required> 
    <span class="input-group-addon">
        <span class="glyphicon glyphicon-time"></span>
    </span>
</div>
TO:
<div class="input-group clockpicker" data-placement="right" data-align="top" data-autoclose="true">
    <input type="text" name="to" class="form-control"  size="15" placeholder="End time" required>
    <span class="input-group-addon">
        <span class="glyphicon glyphicon-time"></span>
    </span>
</div>
<p><small><center><font color="red">*Reservations is only 7am to 8pm* </font></center></small></p>

<script type="text/javascript">
$('.clockpicker').clockpicker();
</script>

		</div>


<!--.............-->
	  </div>
	</div>
</div>	

<div class="code-box">
<script class="code prettyprint">
							
$('#with-altField').multiDatesPicker({
	minDate: 1,
	altField: '#altField'
});
$("#with-altField").multiDatesPicker({
    beforeShowDay: function(date) {
        var day = date.getDay();
        return [(day != 0), ''];
    }
});</script>
</div>				
							</div>
							</div>
							
		<div align="center"> <button type="submit" name="search" class="btn-lg btn-success">Search</button></div> <br>	<br><br>
		</form>
  </div>

 </div>
 </div> 
<?php require'footer.php';?>