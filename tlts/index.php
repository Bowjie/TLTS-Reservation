<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <?php include 'css/css.html'; ?>
<head>
<link rel="shortcut icon" href="~/ceu.ico" type="image/x-icon"/>
  <title>Sign-Up/Login Form</title>
  <?php include 'css/css.html'; ?>
</head>

<?php   
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>

<body  background="GG.jpg">
  <div class="form">
      <style>
    
  .exampleModal{
    display: block; 
}

.dialog{
    overflow-y: initial;
    height: 200px;
}
.modal-body{
    height: 200px;
    overflow-y: auto;
}
  </style>
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel" style="color:black;">System Instruction</h2>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Registration and Logging in</br>
        First the user needs to register in super admin’s employee list before the user can have access in the reservation system. Once the user is registered they can now login to the reservation system by using their own unique Id number and password.
</br>
</br>
System Menu</br>
Reservation system consist of different tabs, lists and some notification boxes. All lists have an icon and name at the left side for the user to distinguish them more easily.
</br>
</br>
 Dashboard</br>
The dashboard contains the accepted reservation request of the current user that currently using the reservation system. 
</br></br>
Make A Reservation</br>
A request for reservation can be done in “Make a Reservation” tab. the user can create a request reservation in this tab by filling out the required information in the form like date for the reservation, equipment, room, number of students, nature of services, purpose, department and campus.
</br></br>
My History</br>
The user can review all of sended Reservation request by going to the My History tab this will show all the user completed reservation request even if it is approved or declined by the administrator.
</br></br>
My Reservation</br>
The user can select the “My Reservation” tab This will display all the current users reservation request both pending and accepted request. 
</br></br>
Available Equipment’s</br>
The user can check all the equipment’s and how many of it is still available to be reserved by going to the Available Equipment’s tab.
</div>
          <div class="modal-footer">
            <button class="btn btn-primary" type="button" data-dismiss="modal">OK</button>
            
          </div>
        </div>
      </div>
    </div>
      <div class="tab-content">

         <div id="login">   
          <h1>Welcome to the CEU Makati Web-Based Reservation System <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <span class="glyphicon glyphicon-info-sign" style="font-size:15px;color:pink;"></span>
        </a></h1>
          
          <form action="index.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              Id-Number<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="id"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>
          
          <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
          
          <button class="button button-block" name="login" />Log In</button>
          
          </form>

        </div>
          
        <div id="signup">   
          <h1>Sign Up</h1>
          
          <form action="index.php" method="post" autocomplete="off">
          
          <div class="top-row">
       <div class="field-wrap">
              <label>
                Id-Number<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='id' />
            </div>
        
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              E-mail<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>
      
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          </div>
          
          <button type="submit" class="button button-block" name="register" />Register </button>
      <br/>
          </form>

        </div>  
        
      </div><!-- tab-content -->
      
</div> 
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
 

</body>
</html>
