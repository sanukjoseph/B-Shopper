<?php

//////////==================================================Login check================================================////////////  


 // Initialize the session
 session_start();
 // Check if the user is logged in, if not then redirect him to login page
 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){header("location: login.php");exit;}

 //////////==================================================Login check================================================////////////  

?>

<html>
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./my profile/my_profile.css">
</head>
<body class="profile-page">
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('http://wallpapere.org/wp-content/uploads/2012/02/black-and-white-city-night.png');"></div>
    <div class="main main-raised">
		<div class="profile-content">
            <div class="container">
                <div class="row">
	                <div class="col-md-6 ml-auto mr-auto">
        	           <div class="profile">
	                        <div class="avatar"> <img src="./Images/avatar.png" alt="Circle Image" class="rounded-circle img-fluid"></div>
	                        <div class="name">
                                <h3 class="title" ><?php echo htmlspecialchars($_SESSION["username"]); ?></h3>
                                <a href="#social" class="btn btn-just-icon btn-link btn-dribbble"style="font-size: 30px; margin-top:-5%;">
                                <i class="fa fa-dribbble"></i></a>
                                <a href="#social" class="btn btn-just-icon btn-link btn-twitter"style="font-size: 30px; margin-top:-5%;">
                                <i class="fa fa-twitter"></i></a>
                                <a href="#social" class="btn btn-just-icon btn-link btn-pinterest"style="font-size: 30px; margin-top:-5%;">
                                <i class="fa fa-pinterest"></i></a>
	                        </div>
	                    </div>
    	            </div>
                </div>
                <h6 style="text-align: center;"><br>Customer since 2020</h6><br>

                <div class="description text-center">
                    <p>Ut et efficitur tortor, eu interdum orci. Sed rhoncus tellus non ex condimentum scelerisque. 
                        Mauris tristique sapien ut lacus iaculis mattis id sit amet velit. In nec venenatis dui, vitae iaculis neque. 
                        Curabitur in leo eget purus facilisis commodo in nec nunc. Praesent quis fringilla nisi. Vestibulum libero magna, 
                        gravida eget malesuada elementum, dictum ac lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                        Nam sit amet metus at lectus auctor ornare. 
                        Pellentesque elementum risus odio, ac mattis nulla pellentesque non.
                    </p>
                    <a href="welcome.php" class="btn btn-info" role="button">click here to go back</a>
                    <a href="reset-password.php" class="btn btn-info" role="button">reset your password</a>
                    <a href="logout.php" class="btn btn-info" role="button">sign out for now</a>
                </div>
            </div>
        </div>
        <div style="text-align:center; font-size:12px; margin-top:5%;">© 2020 Copyright : <a href="welcome.php" style="text-decoration: none;">B-Shopper</a>
        <p style="font-size: 12px; margin-top:1%; color: #949494;">Designed By Sanu K Joseph</p>
  </div>
</div>    
</body>
</html>