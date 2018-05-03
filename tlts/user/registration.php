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


  <div class="content-wrapper">
<div class="container">
    <div class="card card-register mx-auto mt-3">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
         <div id="signup">   
          <h1>Sign Up</h1>
          
          <form action="registration.php" method="post" autocomplete="off">
          
          <div class="top-row">
		   <div class="field-wrap">
              <label>
                Id-Number<span class="req"></span>
              </label>
              <input type="text" required autocomplete="off" name='id' />
            </div>
        
            <div class="field-wrap">
              <label>
                First Name: <span class="req"></span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name: <span class="req"></span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              E-mail: <span class="req"></span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>
		  
          <div class="field-wrap">
            <label>
              Set A Password: <span class="req"></span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          </div>
          <div class="field-wrap">
            <label>
              Re-Type Password: <span class="req"></span>
            </label>
            <input type="password"required autocomplete="off" name='cpassword'/>
          </div>
		   <div class="field-wrap">
              <label>
                Type: <span class="req"></span>
              </label>
              <select name='type'>
				<option value=''>--choose wisely--</option>
				<option value='user'>User</option>
				<option value='staff'>Staff</option>
			  </select>
            </div>
          <center><button type="submit" class="button button-block" name="register" />Register</button></center>
		  <br/>
          </form>
        </div> 
      </div>
    </div>
  </div>
  </div>
    <?php include'footer.php'; ?>