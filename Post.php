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
               
               
                
     <form action="Post.php" method="post" enctype="multipart/form-data">
        
     
                <div class="row">
                 <div class="col-xs-4 col-xs-offset-1">  
                
                    <h3>Upload Your Item here </h3>
                    <label for="title"><b>Item Name:</b></label>
                    <input type="Text" name ="title" size=50 id="Title">
                    <br></br>

                    <p/><b>Product Category </b><br/>
                    <input type="checkbox" name="type" value="cell phone"/>Cell phone 
                    <br/>
                    <input type="checkbox" name="type" value="Gameset"/>Game set
                    <br/>
                    <input type="checkbox" name="type" value="Tablet"/>Tablet
                    <br/>
                    <input type="checkbox" name="type" value="Others"/>Others
                    <br/>

                    <p/><b>Description:</b><br/>
                    <textarea type="Text" name ="description" rows="5" cols="50" id="Desciption"></textarea>
                    <br></br>
                    <label for="fileSelect"><b>Picture Upload:</b></label>
                    <input type="file" name="photo" id="fileSelect">  
                    <br></br>

                    <label for="School"><b>Your School:</b></label>
                    <input type="Text" name ="School" size=50 id="School">
                    <br></br>

                    <input type="submit" name="submit"class="btn btn-primary" value="Submit">
                    <input type="reset"class="btn btn-primary" value="clear">
                    
                   

                 
                </div>

                    <div class="col-xs-6">
                    <center><h3>Instructions</h3></center>
                    <div class="list-group">
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">Item Name</h4>
                        <p class="list-group-item-text">The name of the item you want to give away should go here. Please be specific to avoid comprehension issues (50 charater limit)</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">Product Category</h4>
                        <p class="list-group-item-text">Check the box next to the category your item belongs to. If you are not sure, just check "Others"</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">Description</h4>
                        <p class="list-group-item-text">Give a detailed descripiton of the item. The following key information are recommended to be included here: The condition, age of the item, and your email or phone number.(200 charater limit) </p>
                    </a>
                    
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">Upload a Picture</h4>
                        <p class="list-group-item-text">Browse your favorite pictures of the item and pick one, only one, to upload to the site. (Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.) </p>
                        
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">Your School</h4>
                        <p class="list-group-item-text">Type your school name here for effective and effiecient trading. (50 charater limit) </p>
                    </a>
                    </div>                                          
                        
                   
                    </div>
                </div>               
     </form>

   
    <?php

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
 

//echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);

// Check if the form was submitted

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
            $target = "images/"; 
            $target = $target . basename( $_FILES['photo']['name']);

             $imagename=$_FILES["photo"]["name"]; 
             $imagetype=$_FILES["photo"]["type"];
             $imagetitle=$_POST["title"];
             $imagedes=$_POST["description"]; 
             $prod_type=$_POST["type"];
             $user=htmlspecialchars($_SESSION['username']);
             $school=$_POST["School"];
              
            //Get the content of the image and then add slashes to it 
            //$imagetmp=addslashes (file_get_contents($_FILES['photo']['tmp_name']));
                            
             //Insert the image name and image content in image_table
            // echo $imagename;
           //  echo $imagetype;
             //echo $target;
             //echo $imagename;

                  
             //$insert_image="INSERT INTO images (image,img_type)VALUES('$imagetmp','$imagetype')";
             $insert_image="INSERT INTO images (School,Photo_name,user,img_type,Title,Prod_type,Description)VALUES('$school','$imagename','$user','$imagetype','$imagetitle',' $prod_type','$imagedes')";
             //$insert_image="INSERT INTO images (Photo_name)VALUES('.$imagename.')";
             
              mysqli_query($link,$insert_image);

               // echo "Your file was uploaded successfully.";

                 //upload the file into the image folders;

                 if(move_uploaded_file($_FILES['photo']['tmp_name'],$target)) 

                 {  echo "the file is valid and has been uploaded"; 
                      } 
                      else { 
                      
                     echo "Sorry, there was a problem uploading your file."; 
                      } 
                      echo ini_get('upload_max_filesize');  
                      echo ini_get('post_max_size');  
}
?>

             
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