
<?php

include 'db.php';
// Escape all $_POST variables to protect against SQL injections
$id = $mysqli->escape_string($_POST['id']);
$firstname = $mysqli->escape_string($_POST['firstname']);
$lastname = $mysqli->escape_string($_POST['lastname']);
$email = $mysqli->escape_string($_POST['email']);
$type = $mysqli->escape_string($_POST['type']);
// $password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
// $cpassword = $mysqli->escape_string(password_hash($_POST['cpassword'], PASSWORD_BCRYPT));

$password=md5($mysqli->real_escape_string($_POST['password']));
$cpassword=md5($mysqli->real_escape_string($_POST['cpassword']));
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );
      
// Check if user with that email already exists
// We know user emaile xists if the rows returned are more than 0

if($_POST['password'] !== $_POST['cpassword']){
  // echo "<script type='text/javascript'>alert('Password Not Match');</script>";
  $error="<p><font color=red>Password not Match! Please Try Again.</font></p>";
  
}
 
$select="SELECT * FROM user where first_name='$firstname'";
    $query=$mysqli->query($select);
    $fetch=$query->fetch_assoc();

    if($firstname === $fetch['first_name']){
      $error2="<p><font color=red>Username already exists. Try another one!</font></p>";
}
else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO user (id, first_name, last_name, email, type, password, hash, status) " 
            . "VALUES ('$id','$firstname','$lastname','$email', '$type','$password', '$hash','Active')";
		
       if ( $mysqli->query($sql) ){
     echo'<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>'.'<script>
swal({
  title: "Successfully Created an Account!",
  icon: "success",
  button: "Okay",
});
</script>';
echo'<div class=swal-overlay tabindex="-1"> 
</div>';
 // echo "<script type='text/javascript'>alert('You have successfully inserted a account');</script>";
	 $_SESSION['active'] = 0;

    }
}