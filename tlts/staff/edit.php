<?php 
include 'header.php';
 if(isset($_POST['submit'])):
  extract($_POST);
  if($old_password!="" && $password!="" && $confirm_pwd!="") :
   // $old_pwd = $mysqli->escape_string(password_hash($_POST['old_password'], PASSWORD_BCRYPT));
   // $pwd = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
   // $c_pwd= $mysqli->escape_string(password_hash($_POST['confirm_pwd'], PASSWORD_BCRYPT));
   $old_pwd = md5(mysqli_escape_string($mysqli,$_POST['old_password']));
   $pwd = md5(mysqli_escape_string($mysqli,$_POST['password']));
   $c_pwd= md5(mysqli_escape_string($mysqli,$_POST['confirm_pwd']));
  if($pwd == $c_pwd) :
  if($pwd!=$old_pwd) :
    $sql="SELECT * FROM `user` WHERE `id`='$id' AND `password` ='$old_pwd'";
    $db_check=$mysqli->query($sql);
    $count=mysqli_num_rows($db_check);
  if($count==1) :
    $fetch=$mysqli->query("UPDATE `user` SET `password` = '$pwd' WHERE `id`='$id'");
    $old_password=''; $password =''; $confirm_pwd = '';
    $msg_sucess = "Your new password update successfully.";
  else:
    $error = "The password you gave is incorrect.";
  endif;
  else :
    $error = "Old password new password same Please try again.";
  endif;
  else:
    $error = "New password and confirm password do not matched";
  endif;
  else :  
    $error = "Please fil all the fields";
  endif;   
  endif;

   ?>



<html>
<head>
<style type="text/css">
.error{
margin-top: 6px;
margin-bottom: 0;
color: #fff;
background-color: #D65C4F;
display: table;
padding: 5px 8px;
font-size: 11px;
font-weight: 600;
line-height: 14px;
  }
  .green{
margin-top: 6px;
margin-bottom: 0;
color: #fff;
background-color: green;
display: table;
padding: 5px 8px;
font-size: 11px;
font-weight: 600;
line-height: 14px;
  }
</style>
</head>
<body>  
<div class="content-wrapper">
   <div class="container-fluid">
	 <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
          <li class="breadcrumb-item"><a href="profile.php">User Profile</a></li>
        <li class="breadcrumb-item active">Change Password</li>
      </ol>
        <div class="modal-dialog">
                      
        <div class="modal-content col-md-10">
        <div class="modal-header">
        <h4 class="modal-title"><i class="icon-paragraph-justify2"></i> Change New Password</h4>
        </div>
        <form method="post" autocomplete="off" id="password_form">
          <div class="modal-body with-padding">
          <div class="form-group">
            <div class="row">
              <div class="col-sm-10">
                <label>Old Password</label>
                <input type="password" name="old_password" value="<?php echo @$old_password ?>" class="form-control">
              </div>
            </div>
          </div>                             
          <div class="form-group">
            <div class="row">
              <div class="col-sm-10">
                <label>New Password</label>
                <input type="password"  name="password" value="<?php echo @$password ?>" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group">
          <div class="row">
            <div class="col-sm-10">
              <label>Confirm password</label>
              <input type="password"  name="confirm_pwd" value="<?php echo @$confirm_pwd ?>" class="form-control">
            </div>
          </div>
          </div>         
          </div>
           <div class="<?=(@$msg_sucess=="") ? 'error' : 'green' ; ?>" id="logerror">
             <?php echo @$error; ?><?php echo @$msg_sucess; ?>
            </div> 
          <!-- end Add popup  -->  
          <div class="modal-footer">
                    
            <input type="submit" id="btn-pwd" name="submit" value="Submit" class="btn btn-primary"> 

          </div>
        </form> 

        </div>  
      </div>

	  </div></div>
  <?php include 'footer.php';?>
    
  
</body>
</html>