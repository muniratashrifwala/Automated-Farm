<!-- <?php
// Start the session
session_start();
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>

<!-- <?php
// Set session variables
$_SESSION["username"] = "admin ";
$_SESSION["password"] = "admin";
echo "Session variables are set.";
?> -->
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Automated Farm</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="track.php">Track</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="loginpage.php">Log out</a>
      </li>

    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/farm1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
      <h2>Welcome To Automated Farm</h2>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/farm2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
      <h2>A Farm Beyond Imagination</h2>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/farm3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
      <h2>Explore The Automation In Farming</h2>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5 ">
    <div class="py-5">
        <h2 class="text-center "> About Us </h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="images/about.jpg" class="img-fluid aboutimg" />
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <h2 class="display-5">This is an Automated Farm</h2>
                <p class="py-2">This is an automated farm that displays the values of the farm
                 with the help of sensors. This allows the owner of the farm to take
                care of the farm without being physically being present. It is very
                 beneficial for the people who do not stay there as it allows the owners
                 to take care of their farms from anywhere in the world. This helps to take 
                 proper measures if the crops have any issues </p>
                <a href="about.php" class="btn btn-success">Know More</a>
            </div>

        </div>
    </div>
</section>


<section class="my-5 section" id="valuesprovided">
    <div class="py-5">
        <h2 class="text-center"> Values Provided </h2>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/moisture.jpg" alt="Card image"/>
                      <div class="card-body">
                         <h4 class="card-title text-center " >Moisture</h4>
                          <p class="card-text text-center">Displays the Moisture of the Farm</p>
                          <center><a href="sensor_info/moisture.php" class="btn btn-primary">Know More</a></center>
                     </div>
                 </div>
              </div>

        <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/temperature.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title text-center">Temperature and Humidity</h4>
                    <p class="card-text text-center">Displays the Temperature and Humidity </p>
                    <center><a href="sensor_info/temperature.php" class="btn btn-primary pull-right" >Know More</a> </center>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/sunlight.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title text-center">Sunlight</h4>
                    <p class="card-text text-center">Displays the Sunlight of the Farm</p>
                    <center><a href="sensor_info/sunlight.php" class="btn btn-primary">Know More</a></center>
                </div>
            </div>
        </div>

    </div>
    <div class="py-3"></div>
</section>

<!-- 
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center"> Gallery </h2>
    </div>
        
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <img class="img-fluid pd-4 py-3 aboutimg" src="images/farm10.jpg">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
            <img class="img-fluid pd-4 py-3 aboutimg" src="images/farm5.jpg" >
            </div>

            <div class="col-lg-4 col-md-4 col-12">
            <img class="img-fluid pd-4 py-3 aboutimg" src="images/farm6.jpg" >
            </div>

            <div class="col-lg-4 col-md-4 col-12">
            <img class="img-fluid pd-4 py-3 aboutimg" src="images/farm7.jpg" >
            </div>

            <div class="col-lg-4 col-md-4 col-12">
            <img class="img-fluid pd-4 py-3 aboutimg" src="images/farm8.jpg" >
            </div>

            <div class="col-lg-4 col-md-4 col-12">
            <img class="img-fluid pd-4 py-3 aboutimg" src="images/farm9.jpg" >
            </div>

        </div>
    </div>

</section> -->

<!-- 
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center"> Contact Us </h2>
    </div>
 
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form=group">
                <label> Username </label>
                <input type="text" name="user" autocomplete="off" class="form-control"> 
            </div>

            <div class="form=group">
                <label> Email ID </label>
                <input type="text" name="email" autocomplete="off" class="form-control"> 
            </div>

            <div class="form=group">
                <label> Mobile Number </label>
                <input type="text" name="mobile" autocomplete="off" class="form-control"> 
            </div>

            <div class="py-3">
                <button type="submit" class="btn btn-success ">Submit</button>
            </div>
        </form>
    </div>
</section> -->

<footer>
    <p class="p-3 bg-dark text-white text-center">@MuniraTashrifwala</p>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>