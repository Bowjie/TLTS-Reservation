<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$id = $mysqli->escape_string($_POST['id']);
$result = $mysqli->query("SELECT * FROM user WHERE id='$id'");
$user = $result->fetch_assoc();

$u=$user['password'];
$p=md5(mysqli_escape_string($mysqli,$_POST['password']));

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that id doesn't exist!";
    header("location: error.php");
}   
 if ($user['status']=="Inactive") {
    $_SESSION['message'] = "This User has been deactivated";
    header("location: error.php");

}

else { // User exists
   
    // if ( password_verify($_POST['password'], $user['password']) ) {
    // if ($_POST['password'] == $user['password']) {
    if ($p == $u) {
        if($user['type']=="admin"){
		$_SESSION['id'] = $user['id'];
		$_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: admin/index.php");
		}
        if($user['type']=="user"){
		$_SESSION['id'] = $user['id'];
		$_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: user/index.php");
		}
		 if($user['type']=="staff"){
			 $_SESSION['id'] = $user['id'];
			 $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: staff/index.php");
		}
		
    }
	   
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}
