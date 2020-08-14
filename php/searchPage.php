<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="C:\Bitnami\wampstack-7.1.27-1\apache2\htdocs\MovieDB\css\searchPage.css" type="text/css">
    </head>
    <body>
        <div class="header">
            <div class="wrap-container">
                <div class="header-images">
                    <a href="index.php" ><img src="C:\Bitnami\wampstack-7.1.27-1\apache2\htdocs\MovieDB\logo\logo1.jpg"></a>
                    </div>                   
            </div>
        
        <div class="head">
            <form method="post" action="searchPage.php">
                <h1>Search Your <span>Favourites</span></h1>
                <br><br>
                <div class="form-box" >
                    <input type="text" name="search" class="search-box search" placeholder="Movie name" id="textbox">
                    <input type=submit name="button1" class="search-btn1" value="search"><br><br><br><br>
                   
                
            </form><br>
            <form  method="post" action="result.php">
                    <div class="box">&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="genere">
                        <option value="">Genere</option>
                        <option value="Action">Action</option>
                        <option value="Sci-Fi">Sci-Fi</option>
                        <option value="Crime">Crime</option>
                        <option value="Animation">Animated</option>
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="ratings">
                        <option value="">Ratings</option>
                        <option value="6" >6+</option>
                        <option value="7">7+</option>
                        <option value="8">8+</option>
                        <option value="9">9+</option>
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="year">
                        <option value="">Year</option>
                        <option value="1999">1999+</option>
                        <option value="2003">2003+</option>
                        <option value="2008">2008+</option>
                        <option value="2013">2013+</option>
                        <option value="2014">2014+</option>
                    </select><br><br>
                    <button class="search-btn2" name="button2" type="submit" action="result.php">Search</button>
                    </div>
                   
            </div>
                 
                    <br>
                   
                </div>
                
            </form>
        </div>
    </body>
</html>
<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
   $search=$_POST['search'];
   $url="result.php?search=".$search;  
   header('Location:'.$url);
}
?>