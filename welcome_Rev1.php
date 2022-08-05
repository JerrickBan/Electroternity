<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: Login_rev1.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <title>Electroternity</title>        
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css"/>
        <!-- customized navbar -->
        <link rel="stylesheet" href="assets/css/Nav-bar-customized.css">     
         <!-- social medium -->      
         <link rel="stylesheet" href="assets/css/social-medium.css">  
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        

        </style>
    </head>
    <body>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            
            <a href="welcome_Rev1.php">
            <img src="assets/img/EterLogo3.png" alt ="logo" height="69" width="280"></a>   <font size="+1" color="dark blue">Online Electronics Trading Platform </font></img> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            
            <a href="https://www.twitter.com" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com" class="fa fa-instagram">&nbsp;</a>  
            <a href="https://www.facebook.com" class="fa fa-facebook"></a>   

            
            <div class="navbar">
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
                                   
                                <li><a href="welcome_Rev1.php">Home</a></li>
                                <li><a href="Post.php">Post</a></li>
                                <li><a href="Viewposting_Rev2.php?page=1">View Posts</a></li>  
                                <li><a href="Myposting.php">My Posts</a></li>     
                                
                            </ul>
                            <form class="navbar-form navbar-left" action="backend-search_Rev2.php" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Category" name="query" />
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                                </span>
                            </div>
                        </form>
                            

                                                  
                            <ul class="nav navbar-nav navbar-right">                               
                            <p>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></P>  
                            </ul>

                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="logout_Rev1.php">Logout</a></li>                            
                                
                            </ul>
                        </div>
                    </nav>
                </div>
               
                <div class="container">
                <div class="jumbotron">
                <h1>Welcome to the Electroternity Community!</h1>
                <p> Now you are able to post your own images for trading and view existing posts online</p>
               <p>To post, click the button below or above in the navigation bar</p>
                <p><a href="Post.php" class="btn btn-primary btn-lg">Post</a></p>
            </div>
            </div>  
               

        <div class="sec1">
            <h1 class="advice1">
                Nature is a beautiful haven for all beings. We must do everything we can to protect this place. 
                </br>
                However, due to the toxic waste emitted by used electronics, the environment is slowly decaying.
                </br>
                Only when we combine our efforts, we can save this world from this catastrophy.    
            </h1>
        </div>

        <p>&copy Electroternity 2018</p>
    </body>
</html>