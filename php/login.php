<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="C:\Bitnami\wampstack-7.1.27-1\apache2\htdocs\MovieDB\css" type="text/css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <a href="index.php"><div class="header">
                <div class="wrap-container">
                    <div class="header-images">
                        <img src="C:\Bitnami\wampstack-7.1.27-1\apache2\htdocs\MovieDB\logo\logo1.jpg">
                    </div>                   
                </div>
            </div></a>
        <div class="login-box" action="searchPage.php">
            <img src="D:/MovieProject/Moviezz/images/avatar.png" class="avatar">
            <h1>Login Here</h1>
            <form action="login.php" method="post">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <input type="submit" name="submit" value="Login">
                <a href="registration.php">New Registration</a>
            </form>
        </div>
    </body>
</html>
<?php
/*
session_start();
if(isset($_POST['submit'])){
    $username=$_POST['username'];
$password=$_POST['password'];

$username= stripcslashes($username);
$password= stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
$mysqli=new mysqli('localhost','root','system','mysql');

$result=mysql_query("Select * from `registration` where username='".$username."' and password='".$password."'") or die("Failed to Login".mysql_error());
$row=mysql_fetch_array($result);
if($row['username']==$username && $row['password']==$password){
    echo 'Successful';
   // header("location: searchPage.php");
}
}*/
if($_POST){
    $host="localhost";
    $user="root";
    $pass="system";
    $db="mysql";
    $conn= mysqli_connect($host, $user, $pass, $db);
    $password=$_POST['password'];
    $username=$_POST['username'];
    $query="SELECT * FROM registration where username='$username' and password='$password'";
    $result= mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1){
       /* echo 'Login success';
        session.start();
        $_SESSION['']='true';*/
     header('location:searchPage.php');
        
    }
    else{
        echo 'wrong uname or pwd';
        print_r($username);
        print_r($password);
    }
}
?>
