<?php


//////////==================================================Config files================================================////////////  


  // Include config file
  require_once "config.php"; 
  // Define variables and initialize with empty values
  $username = $password = $confirm_password = "";
  $username_err = $password_err = $confirm_password_err = "";
   

//////////===================================================User-Name=================================================////////////  
  

  // Processing form data when form is submitted
  if($_SERVER["REQUEST_METHOD"] == "POST"){
  // Validate username
  if(empty(trim($_POST["username"]))){$username_err = "Please enter a username.";} else{$sql = "SELECT id FROM users WHERE username = ?";
  if($stmt = mysqli_prepare($link, $sql)){
  // Bind variables to the prepared statement as parameters
  mysqli_stmt_bind_param($stmt, "s", $param_username);
  // Set parameters
  $param_username = trim($_POST["username"]);
  // Attempt to execute the prepared statement
  if(mysqli_stmt_execute($stmt)){
  /* store result */
  mysqli_stmt_store_result($stmt);        
  if(mysqli_stmt_num_rows($stmt) == 1)
  {$username_err = "This username is already taken.";} else{$username = trim($_POST["username"]);}} else{ echo "Oops! Something went wrong. Please try again later.";}
  // Close statement
  mysqli_stmt_close($stmt);
  }}
  

//////////============================================Password & confirmation============================================////////////  


      
  // Validate password
  if(empty(trim($_POST["password"])))
  {$password_err = "Please enter a password.";} elseif(strlen(trim($_POST["password"])) < 6){$password_err = "Password must be atleast 6 characters.";} else{
  $password = trim($_POST["password"]);}
  // Validate confirm password
  if(empty(trim($_POST["confirm_password"]))){$confirm_password_err = "Please confirm password.";} else{$confirm_password = trim($_POST["confirm_password"]);
  if(empty($password_err) && ($password != $confirm_password)){$confirm_password_err = "Password did not match.";}}
  // Check input errors before inserting in database
  if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
  // Prepare an insert statement
  $sql = "INSERT INTO users (username, password) VALUES (?, ?)";  
  if($stmt = mysqli_prepare($link, $sql)){
  // Bind variables to the prepared statement as parameters
  mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
  // Set parameters
  $param_username = $username;
  $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
  // Attempt to execute the prepared statement
  if(mysqli_stmt_execute($stmt)){
  // Redirect to login page
  header("location: login.php");} else{echo "Something went wrong. Please try again later.";}
  // Close statement
  mysqli_stmt_close($stmt);
  }}
  // Close connection
  mysqli_close($link);
  }
?>
 

<!--==================================================Html Form inputs==================================================-->


<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="UTF-8">
 <title>Sign Up</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="style.css">
 <script src="validation_script.js"></script>
 </head>
    <body>
        <div class="wrapper" style="margin-top: 2.5em;">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
              <label>Username</label>
              <input type="text" name="username" class="form-control"value="<?php echo $username; ?>" required>
              <span class="help-block" style="color: skyblue; font-size:12px"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
              <label>Password</label>
              <input type="password" name="password" class="form-control" id="myInput"  value="<?php echo $password; ?>"required> 
              <span class="help-block" style="color: skyblue; font-size:12px"><?php echo $password_err; ?></span>
              <div class="showpassword"><input type="checkbox" onclick="myFunction()"><small> Show Password</small></div>
            </div> 
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
              <label>Confirm Password</label>
              <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>"required>
              <span class="help-block" style="color: skyblue;"><?php echo $confirm_password_err; ?></span>
              <p style="margin-top: 10px;"><input type="checkbox" required name="terms"> I accept the Terms and Conditions</p>

            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-success" >Reset</button>
            </div>
            <a href="index.php"><i class="fa fa-arrow-circle-left" style="font-size:25px"></i></a>
              <p>Already have an account? <a href="login.php" style="text-decoration:none">Login here</a><br><small>Copyright 2020 &copy; B-shopper</small></p>
        </form>
    </div>        
  </body>
</html> 


<!--==============================================End of registration page===============================================-->