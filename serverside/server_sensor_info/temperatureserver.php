<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../styleserver.css"/>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
    

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Automated Farm</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../indexserver.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../trackserver.php">Track</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="../aboutserver.php">About</a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" href="../galleryserver.php">Gallery</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../newusercontact.php">User Info</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../loginserver.php">Log out</a>
      </li>
    
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>

<div class="jumbotron">
  <h1>Temperature and Humidity Sensor</h1>
  <p>An easier way to keep a track of your farms</p>
</div>

<section class="my-5">
    <!-- <div class="py-5">
        <h2 class="text-center"> Temperature </h2>
    </div> -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="temperature.jpg" class="img-fluid aboutimg">
            </div>
    
            <div class="col-lg-6 col-md-6 col-12">
                <h2 class="display-5">This is an Automated Farm</h2>
                <p class="py-2">This is an automated farm that displays the values of the farm
                 with the help of sensors. This allows the owner of the farm to take
                care of the farm without being physically being present. It is very
                 beneficial for the people who do not stay there as it allows the owners
                 to take care of their farms from anywhere in the world. This helps to take 
                 proper measures if the crops have any issues </p>
            </div>

        </div>
    </div>
</section>

</body>
</html>
