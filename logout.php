<?php


 //////////=============================================Session destroy============================================////////////  


// Initialize the session
session_start(); 
// Unset all of the session variables
$_SESSION = array();
// Destroy the session.
session_destroy();


  //////////=====================================Redirecting to login page=========================================////////////  


// Redirect to login page
header("location: index.php");
exit;
?>

<!--====================================================End of logout page==================================================-->
