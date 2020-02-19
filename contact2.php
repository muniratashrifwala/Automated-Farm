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
        <a class="nav-link" href="#">Contact Us</a>
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

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center"> Contact Us </h2>
    </div>
 
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form=group">
                <label> Name </label>
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
                <button type="submit" class="btn btn-success "> Submit </button>
            </div>
        </form>
    </div>
</section>

<section>
  <div class="center">
    <center><h4>Thank you for adding your details.</h4></center>
</div>
</section>



<footer>
    <p class="p-3 bg-dark text-white text-center">@MuniraTashrifwala</p>
</footer>

</body>
</html>