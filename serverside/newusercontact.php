<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styleserver.css"/>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <style>
        table {
        border-collapse: collapse;
        width: 100%;
        color: #588c7e;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
        }
        th {
        background-color: #588c7e;
        color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
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
        <a class="nav-link" href="indexserver.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="trackserver.php">Track</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="aboutserver.php">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="galleryserver.php">Gallery</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="newusercontact.php">User Info</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="loginserver.php">Log out</a>
      </li>
    
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>

<div class="jumbotron">
  <h1>Details</h1>
  <p>Easier way to connect to people</p>
</div>

<section>
<div class="py-5">
        <h2 class="text-center">New User Information</h2>
    </div>
</section>

<section class="container-fluid">
    <table bor  der="3">
        <tr>
            <th><center>Username</center></th>
            <th><center>Email</center></th>
            <th><center>Mobile</center></th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "temphumidnew");
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT user,email,mobile FROM userinfodata";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td><center>". $row["user"]."</center></td><td><center>". $row["email"] ."</center></td><td><center>".$row["mobile"]."</center></td></tr>";
        }
        echo "</table>";
        } else { echo "0 results"; }
        $conn->close();
        ?>
    </table>
 </section>
</body>
</html>

