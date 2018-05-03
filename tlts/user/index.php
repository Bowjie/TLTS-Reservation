<?php
include "header.php";
?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
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
                <i class="fa fa-bell-o"></i>
              </div>
               <div class="mr-5"><?php
			  $date= date('m/d/Y');
			  $notif="SELECT count(reservation_id) as ReservationId from reservation where dates='$date' and status='approved' and user_id='$id'";
			   $result=$mysqli->query($notif); 
			   $row=mysqli_fetch_array($result);
			   
			  echo "$row[ReservationId]";
			  ?> &nbsp;Approved Reservation for Today!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">These are the equipments you need to pick up in the TLTS Office</span>
              
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-comments-o"></i>
              </div>
               <div class="mr-5"><?php
			  $date= date('m/d/Y');
			  $notif="SELECT count(reservation_id) as ReservationId from reservation where dates='$date' and status='declined' and user_id='$id'";
			   $result=$mysqli->query($notif); 
			   $row=mysqli_fetch_array($result);
			   
			  echo "$row[ReservationId]";
			  ?> &nbsp;Declined Reservations for this day!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">These are your declined reservation for this day</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-book"></i>GUIDELINES ON THE USE MULTIMEDIA EQUIPMENT AND FACILITIES</div>
        <div class="card-body">
			1. The borrower shall personally contact the staff member at least 24 hours before the scheduled classroom activity. For Department/University-wide activities, a three-day advanced reservation is required.</br>

2. The borrower should accomplish the Application for TLTD/TLT Section Equipment, Materials, Services Form. He/she shall be immediately informed by the staff member if and when his/her request is not approved of by the Head/Coordinator either due to conflict in the schedule or the requested equipment is unavailable on the specified date requested for use.
</br>
3. All borrowed equipment and/or material/s shall be immediately returned by the borrower after use. No overnight borrowing is allowed. In cases where an activity is set on the next day, equipment like DVD/CD player shall be made available for the borrower's use 8:00 in the evening provided that the said equipment shall be endorsed to the Security Department and shall be returned by the borrower at 7:00 in the morning of the next day. A fine per hour shall be imposed for every material/equipment unreturned on due time.
</br>
4. In the choice of instructional materials, a catalogue shall be made available.
</br>
5. In case there is a need preview, edit or dub materials, such as video and slides, the use of the Preview and Editing room shall only be made available upon advanced reservation from the staff.
</br>
6. For equipment and/or instructional material that will be brought out of the campus, a letter of request addressed to VP for Academic Affairs/VP for CEU Makati/VP for CEU Malolos course through the Head/Coordinator must be secured three days in advance before the scheduled date of activity.
</br>
7. Faculty members or students who wish to bring their own materials and/or media equipment must secure the appropriate entry and exit clearance from the Security Office.
</br>
8. Any damage (if proven intentional) or loss of borrowed equipment and/or materials shall be the responsibility of the borrower. 
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
      
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   <?php
   include "footer.php";
   ?>
