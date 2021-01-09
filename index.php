<html>
<head>
<title>B-shopper</title>
<link rel="stylesheet" href="B-shopper.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
</head>
<body>
<!-------------------------------------------NavigationBar------------------------------->
<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light" style="height: 10%;"><a class="navbar-brand" href="#"><img src="./Images/logo.png" height="100px" width="auto"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
  <div class="collapse navbar-collapse" id="navbarNav" style="background-color: white;">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active"><a class="nav-link" href="#slider">Home <span class="sr-only">(current)</span></a></li>
      <li class="nav-item"><a class="nav-link" href="#services">Quick Search</a></li>
      <li class="nav-item"><a class="nav-link" href="#Aboutus">About Us</a></li>
      <li class="nav-item"><a class="nav-link" href="#team">Our Team</a></li>
      <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
	    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
		  <li class="nav-item"><a class="nav-link" href="register.php">Sign Up</a></li>
    </ul>
  </div>
</nav>
</section>
   <!---------------------------------------------Slider------------------------------------->
   <section id="slider">
    <div id="headerSlider" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
        <li data-target="#headerSlider" data-slide-to="1"></li>
        <li data-target="#headerSlider" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active"><img src="./Images/book.jpg" class="d-block img-fluid" style="height:60%; width: 100%;">
    	  <div class="carousel-caption"><h5 style=" font-size: 40px; font-family: 'Audiowide', cursive;" >B-SHOPPER</h5><h6>Always deliver more than expected</h6>
        
        <div class="dropdown">
        <button class="dropbtn" style="font-size: 13px;">Location 
        <i class="fa fa-angle-down" style="font-size:16px "></i></button>
        <div class="dropdown-content" style="text-align: left; margin-left:25px;margin-top:1px">
        <a href="#">Goa</a> <a href="#">Gujarat</a> <a href="#">Haryana</a><a href="#">Karnataka</a> <a href="#">Kerala</a>
        </div></div><input type="text" placeholder="Search your restaurent"></div>
      </div>
        <div class="carousel-item">
          <img src="./Images/homepageimg.png" class="d-block img-fluid"style="height:60%; width: 100%;">
          <div class="carousel-caption"><h5 style=" font-size: 40px; font-family: 'Audiowide', cursive;" >B-SHOPPER</h5><h6>Amazing things will happen when you listen to the consumer.</h6>
    
          <div class="dropdown">
          <button class="dropbtn" style="font-size: 13px;">Location 
          <i class="fa fa-angle-down" style="font-size:16px "></i></button>
          <div class="dropdown-content" style="text-align: left; margin-left:25px;margin-top:1px">
          <a href="#">Goa</a> <a href="#">Gujarat</a> <a href="#">Haryana</a><a href="#">Karnataka</a> <a href="#">Kerala</a>
          </div></div><input type="text" placeholder="Search your restaurent"></div>
        </div>
    
        <div class="carousel-item"><img src="./Images/book.jpg" class="d-block img-fluid" style="height:60%; width: 100%;">
          <div class="carousel-caption">
          <h5 style=" font-size: 40px; font-family: 'Audiowide', cursive;" >B-SHOPPER</h5><h6>Customers don’t expect you to be perfect.</h6>
          <div class="dropdown">
          <button class="dropbtn" style="font-size: 13px;">Location 
          <i class="fa fa-angle-down" style="font-size:16px "></i></button>
          <div class="dropdown-content" style="text-align: left; margin-left:25px;margin-top:1px">
          <a href="#">Goa</a> <a href="#">Gujarat</a> <a href="#">Haryana</a><a href="#">Karnataka</a> <a href="#">Kerala</a>
          </div></div><input type="text" placeholder="Search your restaurent"></div></div>
        </div>
        
      <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span>
      </a>
    </div>
   </section>
   
   <!-------------------------------------------------Quick search-------------------------------------->
   
   <section id="services">
     <div class="container">
      <h1>Quick Search</h1><h2> Discover restaurants by type of meal</h2>
      <div class="row services">
      <div class="col-md-3 text-center">
        <div class="icon"><img src="./Images/breakfast.jpg" alt=""></div>
        <h3>Breakfast</h3><p> Start your day with exclusive breakfast options</p>
      </div> 
      <div class="col-md-3 text-center">
        <div class="icon"><img src="./Images/lunch.jpg" alt=""></div>
        <h3>Lunch</h3><p> Make your day with exclusive lunch options</p>
      </div>
      <div class="col-md-3 text-center">
        <div class="icon"><img src="./Images/dinner.png" alt=""></div>
        <h3>Snacks</h3><p> Make your day with exclusive snacks options</p>
      </div>
      <div class="col-md-3 text-center">
        <div class="icon"><img src="./Images/snacks.jpg" alt=""></div>
        <h3>Dinner</h3><p> End your day with exclusive dinner options</p>
      </div>  
      <div class="col-md-3 text-center">
        <div class="icon"><img src="./Images/drinks.png" alt=""></div>
        <h3>Drinks</h3><p> Make your day with exclusive drinks options</p>
      </div>  
      <div class="col-md-3 text-center">
        <div class="icon"><img src="./Images/nig.jpeg" alt=""></div>
        <h3>Nightlife</h3><p> Enjoy your night with exclusive  options</p>
      </div>
      <div class="col-md-3 text-center">
        <div class="icon"><img src="./Images/dessert.jpg" alt=""></div>
        <h3>Desserts</h3><p> Make your day with exclusive desserts options</p>
      </div>
      <div class="col-md-3 text-center">
        <div class="icon"><img src="./Images/soup.jpg" alt=""></div>
        <h3>Soups</h3><p> Make your day with exclusive soup options</p>
      </div>
     </div>
   </section>
   
   <!---------------------------------About us---------------------------------------------->
   
   <section id="Aboutus">
    <div class="about-section"><h2>About Us </h2><p>Some text about who we are and what we do.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Pellentesque sed eleifend arcu. Praesent lacinia felis non gravida vestibulum. 
        Morbi sit amet sapien justo. Nullam suscipit eros nec lectus pulvinar posuere. 
        Ut consectetur vehicula commodo. Nam sit amet semper orci. 
        Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; 
        Aliquam mi est, venenatis sed hendrerit blandit, faucibus sit amet diam. Sed a nisl accumsan, 
        lacinia metus quis, laoreet diam. Proin ultrices tristique est, tempus pharetra ligula.
    
        Suspendisse vestibulum hendrerit tortor. Pellentesque dui lectus, aliquam quis pulvinar non, 
        tempus at sapien. Cras vulputate mi elit, vitae lacinia eros pellentesque vel. 
        In tincidunt neque eget leo ultricies, a iaculis ante pharetra. Fusce nec metus pellentesque, 
        interdum ante quis, eleifend metus. Etiam finibus finibus viverra. Morbi fermentum auctor aliquam. 
        In porta dapibus ultricies. Praesent consectetur augue quis diam cursus molestie. 
        Quisque vitae facilisis turpis.
    
        Etiam sodales pretium ultricies. Suspendisse dapibus sem sed diam tincidunt, 
        venenatis sollicitudin turpis venenatis. Phasellus interdum vitae enim tincidunt consequat. 
        Aliquam porta lectus in magna elementum, et egestas mauris aliquam. 
        Sed ac tristique odio, quis malesuada dolor. Etiam id venenatis quam, eget ultrices dolor. 
        Donec sodales, nisi sed auctor lacinia, purus orci varius quam, non tincidunt augue ante a metus. 
        Integer mattis, turpis quis dapibus venenatis, augue leo sodales sem, 
        laoreet ultricies turpis odio id metus. Morbi at nisi eget purus ullamcorper scelerisque.
      </p>
    </div>
   </section>
   
   <!---------------------------------Our Team---------------------------------------------->
   
   <section id="team" style="margin-top: 50px; margin-bottom:4%;">
   <h2 style="text-align: center; color:#4d4d4d;">Our Team</h2><br>
    <div class="row" style="text-align: center;">
      <div class="col col-md-3">
        <div class="card">
          <img class="img-thumbnail"src="./Images/team1.jpg" alt="Jane" 
          style="width:100px; height:100px; border-radius:50%; margin: 0 auto;margin: 0 auto;" >
          <div class="container">
            <h4 style="color:#666666;">Sanu K Joseph</h4>
            <p class="title">CEO & Founder</p>
            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>example@example.com</p>
            <p><button class="button">Contact</button></p>
          </div>
        </div>
      </div>
      <div class="col col-md-3">
        <div class="card">
        <img class="img-thumbnail"src="./Images/team1.jpg" alt="Jane" 
        style="width:100px; height:100px; border-radius:50%; margin: 0 auto;margin: 0 auto;" >
          <div class="container">
          <h4 style="color:#666666;">Sanu K Joseph</h4>
            <p class="title">Art Director</p>
            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>example@example.com</p>
            <p><button class="button">Contact</button></p>
          </div>
        </div>
      </div>
      <div class="col col-md-3">
        <div class="card">
        <img class="img-thumbnail"src="./Images/team1.jpg" alt="Jane" 
        style="width:100px; height:100px; border-radius:50%; margin: 0 auto;margin: 0 auto;" >
          <div class="container">
          <h4 style="color:#666666;">Sanu K Joseph</h4>
            <p class="title">Art Director</p>
            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>example@example.com</p>
            <p><button class="button">Contact</button></p>
          </div>
        </div>
      </div>
      <div class="col col-md-3">
        <div class="card">
        <img class="img-thumbnail"src="./Images/team1.jpg" alt="Jane" 
        style="width:100px; height:100px; border-radius:50%; margin: 0 auto;margin: 0 auto;" >
          <div class="container">
          <h4 style="color:#666666;">Sanu K Joseph</h4>
            <p class="title">Designer</p>
            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>example@example.com</p>
            <p><button class="button">Contact</button></p>
          </div>
        </div>
      </div>
    </div>
   </section>
   
   <!------------------------------------------Contact--------------------------------------------->
   
   <section id="contact" style="margin-top: 20px;">
    <div class="container"><h1 style="text-align: center; font-size: 30px;">Contact</h1>
     <div class="row">
       <div class="col-md-6">
         <form class="contact-form" >
           <div class="form-group"><input type="text" class="form-control" placeholder="your name"></div>
           <div class="form-group"><input type="number" class="form-control" placeholder="phone number"></div>
           <div class="form-group"><input type="email" class="form-control" placeholder="Email id"></div>
           <div class="form-group"><textarea class="form-control" rows="4" placeholder="Your Message"></textarea></div>
           <button type="submit" mailto="sanukjoseph10101@gmail.com" class="btn btn-primary">SEND MESSAGE</button>
         </form>
       </div>
       <div class="col-md-6 contact-info">
         <div class="follow"><b>Address:</b><i class="fa fa-map-marker"></i>XYZ Road,Kerala,India</div>
         <div class="follow"><b>Phone:</b><i class="fa fa-phone"></i>+91-123456789</div>
         <div class="follow"><b>Email</b><i class="fa fa-envelope-o"></i>xtz@gmail.com</div>
         <div class="follow"><label><b>Get Social:</b></label>
           <a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-youtube"></i></a>
           <a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a>
         </div>
       </div>
     </div>
    </div>
   </section>
   
   <!---------------------------------Footer------------------------------------------------>
   
   <section id="footer">
    <div class="container text-center">
      <p>Designed by <i class="fa fa-heart-o"></i> Sanu K Joseph</p><h6>Copyright 2020 &copy; B-shopper</h6>
    </div>
   </section>
   
   <!------footer end----->

  </body>
</html>
<!--====================================================End of welcome page==================================================-->