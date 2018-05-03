<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Make A Reservation</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/bootstrap-datetimepicker.css" rel="stylesheet" media="screen">
  <script>
function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "GP"){
		var optionArray01 = ["|","1o1|101","1o2|102","1o3|103","1o4|104","1o5|105","1o6|106","2o1|201","2o2|202","2o3|203","2o4|204","2o5|205","2o6|206","2o7|207","3o1|301","3o2|302","3o3|303","3o4|304","3o5|305","3o6|306","3o7|307","3o8|308","3o9|309","4o1|401","4o2|402","4o3|403","4o4|404","4o5|405","4o6|406","4o7|407","4o8|408","4o9|409","5o1|501","5o2|502","5o3|503","5o4|504","5o5|505","5o6|506","5o7|507","5o8|508","5o9|509"];
	} else if(s1.value == "LV"){
		var optionArray01 = ["|","1oone|101","1otwo|102","1othree|103","1ofour|104","2oone|201","2otwo|202","2othree|203","2ofour|204","3oone|301","3otwo|302","3othree|303","3ofour|304","4oone|401","4otwo|402","4othree|403","4ofour|404","5oone|501","5otwo|502","5othree|503","5ofour|504","6oone|601","6otwo|602","6othree|603","6ofour|604","7oone|701","7otwo|702","7othree|703","7ofour|704","8oone|801","8otwo|802","8othree|803","8ofour|804","9oone|901","9otwo|902","9othree|903","9ofour|904","10oone|1001","10otwo|1002","10othree|1003","10ofour|1004","11oone|1101","11otwo|1102","11othree|1103","11ofour|1104","12oone|1201","12otwo|1202","12othree|1203","12ofour|1204","13oone|1301","13otwo|1302","13othree|1303","13ofour|1304","14oone|1401","14otwo|1402","14othree|1403","14ofour|1404"];
	}
	for(var option01 in optionArray01){
		var pair01 = optionArray01[option01].split("|");
		var newOption01 = document.createElement("option");
		newOption01.value = pair01[0];
		newOption01.innerHTML = pair01[1];
		s2.options01.add(newOption01);
	}
}
function populate(q1,q2){
	var q1 = document.getElementById(q1);
	var q2 = document.getElementById(q2);
	q2.innerHTML = "";
	if(q1.value == "1-99"){
		var optionArray = ["zero|0","one|1"];
	} else if(q1.value == "100-199"){
		var optionArray = ["0|0","1|1","2|2"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		q2.options.add(newOption);
	}
}
</script>
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html" >CEU Equipment & Venue Reservation System</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	</br>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" class="responsive" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Make a Reservation">
          <a class="nav-link" href="resform/reservation form.html">
            <i class="fa fa-calendar-plus-o"></i>
            <span class="nav-link-text">Make a Reservation</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reports">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-line-chart"></i>
            <span class="nav-link-text">Reports</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Lists">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-list-ul"></i>
            <span class="nav-link-text">List
			</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar.html">Equipment List</a>
            </li>
			<li>
              <a href="navbar.html">Approved List</a>
            </li>
			<li>
              <a href="navbar.html">Overdue List</a>
            </li>
			<li>
              <a href="navbar.html">Reservation List</a>
            </li>
          </ul>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Employee List">
          <a class="nav-link" href="charts.html">
            <i class="fa fa-user"></i>
            <span class="nav-link-text">Employee List</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-hand-o-left" style="color: pink;"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="accntDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hi,
			<?php 
			echo $first_name?>
			
<!--start here.................................................... --
        
<!--End here.................................................... -->
			<span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            </span>
          </a>
			<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
				    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>

							</ul>
						</li>
					</ul>
				</div>
		
  </nav>
  <div class="content-wrapper">
  <center><div class="col-md-14" style="background-color: #ffbbb7"><h2>Reservation Form</h2></div></center>
	<form class="form-inline">
	<div class="col-lg-5">
	<div class="card mb-3 ">
	<div class="card-header"><h4>Information</h4></div>
	<div class="card-body">
	<p>
	Nature of Services
	<label for="nature of services"></label>
	<select name="nature of services" id="nature of services">
    <option>--Choose--</option>
	<option>Academic</option>
	<option>Co-curricular/Extra-curricular</option>
	<option>Others</option>
	</select>
	</p>
	<p>
	Purpose
	<label for="purpose"></label>
	<select name="purpose" id="purpose">
    <option>--Choose--</option>
	<option>Preserntation/Lecture</option>
	<option>Senior/Meeting/Orientation</option>
	<option>Viewing</option>
	<option>Other</option>
	</select>
	</p>
	<p>
	Department
	<label for="department"></label>
	<select name="department" id="department">
    <option>--Choose--</option>
	<option>Business Ad.</option>
	<option>CEIS</option>
	<option>CSIT</option>
	<option>Dentistry</option>
	<option>General Education</option>
	<option>Graduate School</option>
	<option>HRM</option>
	<option>Med. Tech</option>
	<option>Non-Academic</option>
	<option>Nursing</option>
	<option>Pharmacy</option>
	<option>Psychology</option>
	<option>School of Law</option>
	<option>Senior High School</option>
	<option>Tourism</option>
	</select>
	</p>
	<p>
	Numbers of Students:
	<select name="noofstudents" id="noofstudents" onchange="populate(this.id,'qty7')">
	<option></option>
	<option value="1-99">1-100</option>
	<option value="100-199">101 and above</option>
	</select>
	</p>
	</div></div></div>
<div>
	<!-- loads jquery and jquery ui -->
		<!-- -->
		<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.11.1.js"></script>
		<!-->
		<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.11.1.js"></script>
		<!-- -->
		
		<!-- loads mdp -->
		<script type="text/javascript" src="jquery-ui.multidatespicker.js"></script>
		
		<!-- mdp demo code -->
		<script type="text/javascript">
		<!--
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
		// -->
		</script>
		
		<!-- loads some utilities (not needed for your developments) -->
		<link rel="stylesheet" type="text/css" href="css/mdp.css">
		<link rel="stylesheet" type="text/css" href="css/prettify.css">
		<script type="text/javascript" src="js/prettify.js"></script>
		<script type="text/javascript" src="js/lang-css.js"></script>
		<script type="text/javascript">
		$(function() {
			prettyPrint();
		});
		</script>
	<div align="center">
	<div class="col-lg-12">
	<div class="card mb-3 ">
	<div class="card-header"><center><h4>Calendar</h4></center></div>
	<div class="card-body">
						<div id="withAltField" class="box">
							<div id="with-altField"></div>
							<input type="textarea" id="altField" value="">
						</div></div></div></div></div>
						<div class="code-box">
							<script class="code prettyprint">
$('#with-altField').multiDatesPicker({
	minDate: 1,
	altField: '#altField'
});</script>
					</div>				
							</div></form>
	<div class="col-lg-12">
	<div class="card mb-3 ">
	<div class="card-header"><center><h4>Venue</h4></center></div>
	<div class="card-body">
	<center><table width="851" border="0" cellpadding="5" cellspacing="0" class="table-responsive">
        <tr>
	<td width="260"><div align="center"><img src="venue/mir gp.JPG" alt="" width="260" height="195" class="rounded img-responsive"/></div></td>
          <td width="260"><div align="center"><img src="venue/mir lv.jpg" alt="" width="260" height="195" class="rounded img-responsive"/></div></td>
          <td width="266"><div align="center"><img src="venue/sac gp.JPG" alt="" width="260" height="195" class="rounded img-responsive"/></div></td>
        </tr>
        <tr>
          <td><div align="center">MIR - GP</div></td>
          <td><div align="center">MIR - LV</div></td>
          <td><div align="center">SAC - GP</div></td>
        </tr>
        <tr>
          <td><div align="center">
            <input type="radio" name="radio" id="mirgp" value="mirgp" />
          </div>
            <label for="mirgp"></label></td>
          <td><div align="center">
            <input type="radio" name="radio" id="mirlv" value="mirlv" />
          </div>
            <label for="mirlv"></label></td>
          <td><div align="center">
            <input type="radio" name="radio" id="sacgp" value="sacgp" />
          </div>
            <label for="sacgp"></label></td>
        </tr></table></center>
	<p>	Campus:
		<select id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
			<option value=""></option>
			<option value="GP">GP</option>
			<option value="LV">LV</option>
			</select>
		Room:
		<select id="slct2" name="slct2"></select>
	</p>	
		</div></div></div>
	<div class="col-lg-12">
	<div class="card mb-3 ">
	<div class="card-header"><center><h3>Equipment<h3></center></div>
	<div class="card-body">
	<center><table width="200" border="0" cellspacing="5" cellpadding="5" class="table-responsive">
  <tr>
    <td><img src="equipment/CD Cassette Player.jpeg" width="230" height="152" alt="cd cassette" class="img-responsive"/></td>
	<p align="center">&nbsp;</p></td>
    <td><p align="center"><img src="equipment/Digital Camera Still.jpg" width="230" height="211" alt="digital camera" class="img-responsive"/></p>
    <p align="center">&nbsp;</p></td>
    <td><p align="center"><img src="equipment/Digital Video Camera.jpg" width="230" height="172" alt="digital video camera" class="img-responsive"/></p>
    <p align="center">&nbsp;</p></td>
    <td><img src="equipment/Document Camera.jpg" width="230" height="249" alt="document camera" class="img-responsive"/></td>
	<p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td><p align="center">
      <input type="checkbox" name="checkbox01"/>
CD Cassette</p>
      <p align="center">Quantity:
        <select name="qty1">
          <option selected="selected">0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </p>
    <p align="center">&nbsp;</p></td>
    <td><p align="center">
      <input type="checkbox" name="checkbox02"/>
Digital Camera (still)</p>
      <p align="center">Quantity:
        <select name="qty2">
          <option selected="selected">0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </p>
    <p align="center">&nbsp;</p></td>
    <td><p align="center">
      <input type="checkbox" name="checkbox03"/>
Digital Video Camera</p>
      <p align="center">Quantity:
        <select name="qty3">
          <option selected="selected">0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </p>
    <p align="center">&nbsp;</p></td>
    <td><p align="center">
      <input type="checkbox" name="checkbox04"/>
Document Camera </p>
      <p align="center">Quantity:
        <select name="qty4">
          <option selected="selected">0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </p>
    <p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td><p align="center"><img src="equipment/DVD Player.jpg" width="230" height="91" alt="dvd player" class="img-responsive"/></p>
    <p align="center">&nbsp;</p></td>
    <td><p align="center"><img src="equipment/Karaoke.JPG" width="180" height="175" alt="karaoke" class="img-responsive"/></p>
    <p align="center">&nbsp;</p></td>	
    <td><p align="center"><img src="equipment/Laptop.jpg" width="230" height="173" alt="laptop" class="img-responsive"/></p>
    <p align="center">&nbsp;</p></td>
    <td><p align="center"><img src="equipment/LCD.jpg" width="175" height="175" alt="projector" class="img-responsive"/></p>
    <p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td><p align="center">
      <input type="checkbox" name="checkbox05"/>
DVD Player</p>
</p>
      <p align="center">Quantity:
        <select name="qty5">
          <option selected="selected">0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </p>
    <p align="center">&nbsp;</p></td>
    <td><p align="center">
      <input type="checkbox" name="checkbox06"/>
Karaoke </p>
      <p align="center">Quantity:
        <select name="qty6">
          <option selected="selected">0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </p>
    <p align="center">&nbsp;</p></td>
    <td><p align="center">
      <input type="checkbox" name="checkbox07"/>
      Laptop </p>
      <p align="center">Quantity:
        <select name="qty7" id="qty7">
        </select>
    </p></td>
    <td><p align="center">
      <input type="checkbox" name="checkbox08"/>
      LCD Projector </p>
      <p align="center">Quantity:
        <select name="qty8">
          <option selected="selected">0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
    </p></td>
  </tr>
  <tr>
    <td><img src="equipment/Microphone.jpg" width="215" height="215" alt="mic" class="img-responsive"/>
    <td><img src="equipment/Overhead Project.jpg" width="230" height="270" alt="ohp" class="img-responsive"/></td>
    <td><img src="equipment/vcd.jpg" width="230" height="152" alt="vcd" class="img-responsive"/></td>
	<td><img src="equipment/PAS.jpg" width="232" height="122" alt="pas" class="img-responsive"/>
  </tr>
  <tr>
    <td><p align="center">
      <input type="checkbox" name="checkbox09"/>
      Microphone </p>
      <p align="center">Quantity:
        <select name="qty9">
          <option selected="selected">0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
    </p></td>
    <td><p align="center">
      <input type="checkbox" name="checkbox10"/>
      Overhead Projector </p>
      <p align="center">Quantity:
        <select name="qty10">
          <option selected="selected">0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
    </p></td>
    <td><p align="center">
      <input type="checkbox" name="checkbox11"/>
      VCD Player </p>
      <p align="center">Quantity:
        <select name="qty11">
          <option selected="selected">0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
    </p></td>
    <td><p align="center">
      <input type="checkbox" name="checkbox12"/>
      Personal Assistant Services </p>
      <p align="center">Quantity:
        <select name="qty12">
          <option selected="selected">0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        <label for="projector12"></label>
    </p></td>
  </tr>
  <tr>
	<td><img src="equipment/Slide Projector.jpg" width="230" height="153" alt="slide projector" class="img-responsive"/></td>
    <td><img src="equipment/VHS Player.jpg" width="230" height="71" alt="vhs player" class="img-responsive"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><p align="center">
      <input type="checkbox" name="checkbox13"/>
      Slide Projector </p>
      <p align="center">Quantity:
        <select name="qty13">
          <option selected="selected">0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
    </p></td>
    <td><p align="center">
      <input type="checkbox" name="checkbox14"/>
      VCD Player </p>
      <p align="center">Quantity:
        <select name="qty14">
          <option selected="selected">0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
    </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table></center></div></div></div>
	<div class="col-lg-12">
	<div class="card mb-3 ">
	<div class="card-header"><center><h4>Cords</h4></center></div>
	<div class="card-body">
<div align="center">
  <table width="200" border="0" cellspacing="5" cellpadding="5" class="table-responsive">
    <tr>
      <td><div align="center"><img src="cords/audio cord.jpg" width="222" height="199" class="img-responsive"/></div></td>
      <td><div align="center"><img src="cords/extension.jpg" width="222" height="199" class="img-responsive"/></div></td>
      <td><div align="center"><img src="cords/hdmi.jpg" width="222" height="199" class="img-responsive"/></div></td>
      <td><div align="center"><img src="cords/vga.jpg" width="222" height="199" class="img-responsive"/></div></td>
    </tr>
    <tr>
      <td><div align="center">
        <input type="checkbox" name="aux" id="aux" />
        <label for="aux"></label>
      Audio Cord</div></td>
      <td><div align="center">
        <input type="checkbox" name="extension" id="extension" />
        <label for="extension"></label>
      Extension</div></td>
      <td><div align="center">
        <input type="checkbox" name="hdmi" id="hdmi" />
        <label for="hdmi"></label>
      HDMI</div></td>
      <td><div align="center">
        <input type="checkbox" name="vga" id="vga" />
        <label for="vga"></label>
      VGA</div></td>
    </tr>
    <tr>
      <td>
        <div align="center">Quantity: 
          <select name="qty15">
            <option selected="selected">0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
      </div></td>
      <td>
        <div align="center">Quantity: 
          <select name="qty16">
            <option selected="selected">0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
      </div></td>
      <td>
        <div align="center">Quantity:
          <select name="qty17">
            <option selected="selected">0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
      </div></td>
      <td>
        <div align="center">Quantity:
          <select name="qty18">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
      </div></td>
    </tr>
  </table>
</div></div></div></div>
	<div align="center">
	<div class="col-lg-12">
	<div class="card mb-3 ">
	<div class="card-header"><center><h4>Others</h4></center></div>
	<div class="card-body">
	Instructional Materials: <input name="im" type="text" id="im" placeholder="Ex. VCD/DVD/Video File" size="28" /></div></div></div></div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
	<div>
	<!-- loads jquery and jquery ui -->
		<!-- -->
		<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.11.1.js"></script>
		<!-->
		<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.11.1.js"></script>
		<!-- -->
		
		<!-- loads mdp -->
		<script type="text/javascript" src="jquery-ui.multidatespicker.js"></script>
		
		<!-- mdp demo code -->
		<script type="text/javascript">
		<!--
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
		// -->
		</script>
		
		<!-- loads some utilities (not needed for your developments) -->
		<link rel="stylesheet" type="text/css" href="css/mdp.css">
		<link rel="stylesheet" type="text/css" href="css/prettify.css">
		<script type="text/javascript" src="js/prettify.js"></script>
		<script type="text/javascript" src="js/lang-css.js"></script>
		<script type="text/javascript">
		$(function() {
			prettyPrint();
		});
		</script>
	<div align="center">
	<div class="col-lg-4">
	<div class="card mb-3 ">
	<div class="card-header"><center><h4>Calendar</h4></center></div>
	<div class="card-body">
						<div id="withAltField" class="box">
							<div id="with-altField"></div>
							<input type="textarea" id="altField" value="">
						</div></div></div></div></div>
						<div class="code-box">
							<script class="code prettyprint">
$('#with-altField').multiDatesPicker({
	minDate: 1,
	altField: '#altField'
});</script>
					</div>				
							</div>
  </div>
</body>

</html>
