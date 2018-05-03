<?php 
include "header.php";
?>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['register'])) { 

        require 'register.php';
          
    }
}
?>
<BR>
  <div class="content-wrapper">
<div class="container">
      <div class="card-header" align="center"><h3>Create Employee Account</h3></div>
      <div class="card-body">
       

         <div id="signup">   
          <form action="registration.php" method="post" autocomplete="off">
		    <div class="row">
          <div class="col-sm-6 form-group">
              <label>
                Id-number <span class="req"></span>
              </label>
              <input type="text" class="form-control" placeholder="Id-number" value="<?php if(isset($_POST['id'])){echo $_POST['id'];}?>"  required autocomplete="off" name='id' maxlength="8" />
              
            </div>
              <div class="col-sm-6 form-group">
            <label>
              E-mail: <span class="req"></span>
            </label>
            <input type="email" class="form-control" placeholder="Email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" required autocomplete="off" name='email' maxlength="50"/>
          </div>
          </div>
     
        <div class=row>
          <div class="col-sm-6 form-group">
            <div class="form-group">
              <label>
                First Name: <span class="req"></span>
              </label>
              <input type="text" class="form-control" placeholder="Enter firstname"  value="<?php if(isset($_POST['firstname'])){echo $_POST['firstname'];}?>" required autocomplete="off" name='firstname' maxlength="32"/> <?php echo @$error2 ?>
            </div>
        </div>
            <div class="col-sm-6 form-group">
              <label>
                Last Name: <span class="req"></span>
              </label>
              <input type="text" class="form-control" placeholder="Enter lastname" value="<?php if(isset($_POST['lastname'])){echo $_POST['lastname'];}?>" required autocomplete="off" name='lastname'  maxlength="32"/>
            </div>
          </div>
     </div>
         
		  
          <div class="form-group">
            <label>
              Set A Password: <span class="req"></span>
            </label>  
            <input type="password" class="form-control" placeholder="Enter password" required autocomplete="off" name='password' maxlength="60" />
          </div>
          <div class="form-group">
            <label>
              Re-Type Password: <span class="req"></span>
            </label>
            <input type="password" class="form-control" placeholder="Re-enter password" required autocomplete="off" name='cpassword'  maxlength="60"/>
            <?php echo @$error ?>
          </div>
		   <div class="form-group">
              <label>
                Type: <span class="req"></span>
              </label>
              <select name='type' class="form-control" required>
				<option value=''>--choose wisely--</option>
				<option value='user'>Teaching/Non-Teaching</option>
				<option value='staff'>Staff/Faculty</option>
			  </select>
            </div>
          <center> <button type="submit" id=create class="btn btn-success form-control" name="register" />Register</button></center>
          </form>
        </div> 
    </div>
  </div>
<?php include'footer.php'; ?>
