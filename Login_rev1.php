<?php
// Include config file

 // Include config file
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'pdb25.awardspace.net');
define('DB_USERNAME', '2624685_root');
define('DB_PASSWORD', 'Alex2009*');
define('DB_NAME', '2624685_root');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = 'Please enter username.';
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['username'] = $username;      
                            header("location: welcome_Rev1.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = 'No account found with that username.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="assets/css/Login.css" />
         <!-- customized navbar -->
         <link rel="stylesheet" href="assets/css/Nav-bar-customized.css">     
         <!-- social medium -->      
         <link rel="stylesheet" href="assets/css/social-medium.css">  
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

    .sec1 {
        background-image: 
        url(http://www.greenplanets.org/upload/slider_image/1410069622slider4.jpg);
        background-size: cover;
        margin: 0;
        padding-top: 100px;
    }

    .advice1 {
        color: white;
        text-align: center;
        padding-bottom: 100px;
        margin: 0;
    }

    a{
        text-decoration: none;
        list-style-type: none;
        display: inline;
        padding: 10px;
        margin: 0;
        color: black;
    }

    a.hover{
        background-color: black;
        color: lightgreen; 
    }

    
    ul {
        text-decoration: none;
        list-style-type: none;
        display: inline;
        padding: 0px;
        margin: 0;
    }

    li {
        text-decoration: none;
        list-style-type: none;
        display: inline;
        padding: 0px;
        margin: 0;  
    }

    .sec2 {
        background-color: white;
        padding-right: 40px;
        padding-top: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
    }


    .description {
        font-size: 
    }

    /*
    .jumbotron {
        margin-bottom: 50px;
        margin-top: 0px;
        background-image: url('http://localhost/E-cycle/images/notebook.jpg');
        height: 350px;
        background: transparent;
    }
    */
    

</style>
<body>
    <a href="index.php">
    <img src="assets/img/EterLogo3.png" alt ="logo" height="69" width="280"></a>   <font size="+1" color="dark blue">Online Electronics Trading Platform </font></img> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


    <a href="https://www.twitter.com" class="fa fa-twitter"></a>
    <a href="https://www.instagram.com" class="fa fa-instagram">&nbsp;</a>  
    <a href="https://www.facebook.com" class="fa fa-facebook"></a>   


    <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--Add space by nbsp -->
            <a class="navbar-brand" href="#"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </a>
           
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                   
                <li><a href="index.php">Home</a></li>
                <li><a href="Blog.html">Blog</a></li>                              
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">About <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="E-waste.html">E-waste</a></li>
                        <li><a href="Reuse.html">Reuse vs Recycle</a></li>
                        <li><a href="#">Community news</a></li>
                        <li class="divider"></li>
                        <li><a href="about.html">About us</a></li>
                    </ul>
                </li>
            </ul>
                                              
           
            <ul class="nav navbar-nav navbar-right">
                <li><a href="Login_rev1.php">Login</a></li>
            </ul>
        </div>
    </nav>

    <div class="wrapper">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="imgcontainer">
                <img src="assets/img/blankAvatar.png" alt="Avatar" class="avatar">
            </div>
            <center>
                <h2>Login</h2>
                <p>Please fill in your credentials to login.</p>
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label>Username</label>
                    <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                    <span class="help-block"><?php echo $username_err; ?></span>
                </div>    
                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                    <span class="help-block"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Login">
                </div>
                <p>Don't have an account? <a href="Signup_rev1.php">Sign up now</a>.</p>
            </center>
        </form>
    </div>    

      
    <p>&copy Electroternity 2018</p>
    </body>
</html>