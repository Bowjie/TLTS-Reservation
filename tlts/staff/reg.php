<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */

/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'wbs';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

// Set session variables to be used on profile.php page
$_SESSION['id'] = $_POST['id'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['firstname'] = $_POST['firstname'];
$_SESSION['lastname'] = $_POST['lastname'];
$_SESSION['type'] = $_POST['type'];
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

$result1 = $mysqli->query("SELECT * FROM user WHERE id='.$id.'") or die($mysqli->error);
// We know user email exists if the rows returned are more than 0

if($_POST['password'] !== $_POST['cpassword']){
  echo "<script type='text/javascript'>alert('Password Not Match');</script>";
}
else if ( $result1->num_rows > 0 ) {
    
    echo "<script type='text/javascript'>alert('Id already Exists');</script>";
    
}
else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO user (id, first_name, last_name, email, type, password, hash, status) " 
            . "VALUES ('$id','$firstname','$lastname','$email', '$type','$password', '$hash','Active')";
		

    // Add user to the database
   if ( $mysqli->query($sql) ){
 echo "<script type='text/javascript'>alert('You have successfully inserted a account');</script>";
	 $_SESSION['active'] = 0;

    }
}