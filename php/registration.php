<?php
session_start();
$_SESSION['message']='';
$mysqli=new mysqli('localhost','root','system','mysql');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$mysqli->real_escape_string($_POST['name']);
    $username=$mysqli->real_escape_string($_POST['username']);
    $email=$mysqli->real_escape_string($_POST['email']);
    $password=$mysqli->real_escape_string($_POST['password']);
    $_SESSION['username']=$username;
    $sql="INSERT INTO `registration`(`name`, `username`, `email`, `password`) VALUES ('$name','$username','$email','$password')";
    if($mysqli->query($sql)===true){
        header("location:index.php");
    }
}

?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="C:\Bitnami\wampstack-7.1.27-1\apache2\htdocs\MovieDB\css\registration.css" type="text/css">
    </head>
    <body>
        <div class="header">
                <div class="wrap-container">
                    <div class="header-images">
                        <a href="index.php" ><img src="C:\Bitnami\wampstack-7.1.27-1\apache2\htdocs\MovieDB\logo\logo1.jpg"> </a>
                    </div>                   
                </div>
            </div>
        <div class="simple-form">
            
            <form id="registration" action="registration.php" method="POST">
                <p id="para">New Registration</p>
                <input type="text" name="name" id="button" placeholder="Firstname">
                <br><br>
                <input type="text" name="username" id="button" placeholder="Username">
                <br><br>
                <input type="text" name="email" id="button" placeholder="Email">
                <br><br>
                <input type="password" name="password" id="button" placeholder="Password">
                <br><br>
                <select id="ph"><option>+91</option></select>
                <input type="text" name="phone" id="phone" placeholder="Phone Number"><br><br>
                <input type="radio" name="gender" id="rd">&nbsp;&nbsp;&nbsp;&nbsp;<span id="but">Male</span>
                <input type="radio" name="gender" id="rd">&nbsp;&nbsp;&nbsp;&nbsp;<span id="but">Female</span><br><br>
                <input type="submit" value="Register" id="butt">
      
            </form>
        </div>
    </body>
</html>
