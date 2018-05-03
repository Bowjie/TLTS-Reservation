<?php
include "header.php";
?>
  <div class="content-wrapper">
    <div class="container-fluid">

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-calendar-plus-o"></i>
              </div>
              <div class="mr-5">

                <?php
			  $date= date('m/d/Y');
			  $notif="SELECT count(reservation_id) as ReservationId from reservation where dates='$date' and status='approved'";
			   $result=$mysqli->query($notif); 
			   $row=mysqli_fetch_array($result);
			   
			  echo "$row[ReservationId]";
			  ?>
           &nbsp;Borrowers for Today!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">These are the expected borrowers for today</span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-spinner"></i>
              </div>
              <div class="mr-5"><?php
			 
			  $notif="SELECT count(reservation_id) as ReservationId from reservation where status='pending'";
			   $result=$mysqli->query($notif); 
			   $row=mysqli_fetch_array($result);
			   
			  echo "$row[ReservationId]";
			  ?>&nbsp;Pending Reservations!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">These are pending reservations that are needed to be approved</span>
              <span class="float-right">
               
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- Area Chart Example-->
      <a href="bored.html"><button type="button" class="btn btn-info">Press this if Necessary</button></a>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
  </div>
</div>

   <?php
   include "footer.php";
   ?>
