<?php
 
 //////////=============================================Database credential============================================////////////  
 
 
 /*server with default setting (user 'root' with no password) */
 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_NAME', 'b-shopper');
 
 //////////=============================================Database connection============================================////////////  
 
 
 /* Attempt to connect to MySQL database */
 $link = mysqli_connect('localhost', 'root','','b-shopper');
 
 //////////============================================Connection check================================================////////////  
 
 
 // Check connection
 if($link === false){die("ERROR: Could not connect. " . mysqli_connect_error());}
?>

<!--====================================================End of config page==================================================-->
