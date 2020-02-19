<!-- <?php

$cone=mysqli_connect('localhost','root');

if($cone){
    echo "Connection successful";
}
else{
    echo "No connection"; 
}

mysqli_select_db($cone,'temphumidnew');

$username= $_POST['username'];
$password=$_POST['password'];

$querying="insert into logindata (username,password)
values ('$username', '$password')";

echo '$querying';

mysqli_query($cone, $querying);

header('location:index.php');
// header('location:contact.php');
?>  -->