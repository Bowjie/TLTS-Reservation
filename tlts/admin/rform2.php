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
	
			var latestMDPver = $.ui.multiDatesPicker.version;
			var lastMDPupdate = '2014-09-19';
			
			$(function() {
				// Version //
				//$('title').append(' v' + latestMDPver);
				$('.mdp-version').text('v' + latestMDPver);
				$('#mdp-title').attr('title', 'last update: ' + lastMDPupdate);
				
				// Documentation //
				$('i:contains(type)').attr('title', '[Optional] accepted values are: "allowed" [default]; "disabled".');
				$('i:contains(format)').attr('title', '[Optional] accepted values are: "string" [default]; "object".');
				$('#how-to h4').each(function () {
					var a = $(this).closest('li').attr('id');
					$(this).wrap('<'+'a href="#'+a+'"></'+'a>');
				});
				$('#demos .demo').each(function () {
					var id = $(this).find('.box').attr('id') + '-demo';
					$(this).attr('id', id)
						.find('h3').wrapInner('<'+'a href="#'+id+'"></'+'a>');
				});
				
				// Run Demos
				$('.demo .code').each(function() {
					eval($(this).attr('title','NEW: edit this code and test it!').text());
					this.contentEditable = true;
				}).focus(function() {
					if(!$(this).next().hasClass('test'))
						$(this)
							.after('<button class="test">test</button>')
							.next('.test').click(function() {
								$(this).closest('.demo').find('.hasDatepicker').multiDatesPicker('destroy');
								eval($(this).prev().text());
								$(this).remove();
							});
				});
			});
		</script>
		<!-- loads some utilities (not needed for your developments) -->
		<link rel="stylesheet" type="text/css" href="css/mdp.css">
		<link rel="stylesheet" type="text/css" href="css/prettify.css">
		<script type="text/javascript" src="js/prettify.js"></script>
		<script type="text/javascript" src="js/lang-css.js"></script>
		<script type="text/javascript">

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