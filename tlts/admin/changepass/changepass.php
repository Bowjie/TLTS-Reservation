<?php
 $db = new mysqli('localhost', 'root', 'root', 'mostlikers');
 if(isset($_POST['submit'])):
   extract($_POST);
   if($old_password!="" && $password!="" && $confirm_pwd!="") :
    $user_id = '2';
    $old_pwd=md5(mysqli_real_escape_string($db,$_POST['old_password']));
    $pwd=md5(mysqli_real_escape_string($db,$_POST['password']));
    $c_pwd=md5(mysqli_real_escape_string($db,$_POST['confirm_pwd']));
    if($pwd == $c_pwd) :
       if($pwd!=$old_pwd) :
         $db_check=$db->query("SELECT * FROM `singup` WHERE `id`='$user_id' AND `password` ='$old_pwd'");
         $count=mysqli_num_rows($db_check);
         if($count==1) :
             $fetch=$db->query("UPDATE `singup` SET `password` = '$pwd' WHERE `id`='$user_id'");
             $old_password=''; $password =''; $confirm_pwd = '';
             $msg_sucess = "Your new password update successfully.";
          else:
            $error = "The old password you gave is incorrect.";
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
  <title>Change password in php mysql code</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
                      
            <input type="submit" id="btn-pwd" name="submit" value="Save Changes" class="btn btn-primary">            
          </div>
        </form> 

        </div>  
        
        </div> 
        
</body>
</html>
