<?php
include "header.php";



?>

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">User Profile</li>
      </ol>
      <div class="row">
        <div class="col-12">
         <center><h2>My Account</h2></center>
         <br><br>
          
    
	   </div>
      </div>
<?php     $user="SELECT * FROM user WHERE id='$id'";
    $query_user=$mysqli->query($user);
    $fetch_user=$query_user->fetch_assoc();
 ?>
       <center> <div class="col-lg-9" > 
            <table  class="table">
              <tr>
                <td>Id-Number:</td>
                <td><?php echo $fetch_user['id']; ?></td>
              </tr>
              <tr>
                <td>First Name:</td>
                <td><?php echo $fetch_user['first_name']; ?></td>
              </tr>
              <tr>
                <td>Last Name:</td>
                <td> <?php echo $fetch_user['last_name']; ?></td>
              </tr>
              <tr>
                <td>Email</td>
                <td><?php echo $fetch_user['email']; ?></td>
              </tr>
              <tr>
                <td>Account Type:</td>
                <td><?php echo $fetch_user['type']; ?></td>
              </tr>
          </table>
        </div></center>
        <div class="container">
          <div class="content-wrapper">
 <a href="edit.php">Change Password</a>
</div>
</div>
    </div> 
  </div>
   
 <?php include'footer.php'; ?>