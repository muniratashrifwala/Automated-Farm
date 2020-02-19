<?php 
$host="localhost";
$user="root";
$password="";
$db="temphumidnew";
 
mysql_connect($host,$user,$password);
mysql_select_db($db);
 
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from logindata where username='".$uname."'AND password='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        // echo " You Have Successfully Logged in";
        header('location:indexserver.php');
        exit();
    }
    else{
        // echo " You Have Entered Incorrect Password";
        header('location:loginpage2.php');
        exit();
    }
        
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="styleserver.css">
	<link rel="stylesheet" a href="loginserver.css">
</head>
<body background="../images/farm1.jpg">
	<div class="container">
	<img src="../images/af.jpg"/>
		<form method="POST" action="#">
			<div>
				<input type="text" name="username" placeholder="Enter the User Name" autocomplete="off"/>	
			</div>
			<div>
				<input type="password" name="password" placeholder="Password" autocomplete="off"/>
            </div>
            <div class="py-3">
                <input type="submit" type="submit" value="LOGIN" class="btn-login"/>
            </div>
            
            <!-- <div class="p">
               <a href="index.php" class="btn"> Submit </a> 
           </div> -->

        </form>

        <section>
            <div class="py-3 pd-5"> 
               <center> <h3>Username or password is incorrect</h3> </center>
          </div>
         </section>
            <!-- <div class="py-3">
               <a href="index.php" class="btn"> Submit </a> 
           </div> -->
	</div>
</body>
</html>
