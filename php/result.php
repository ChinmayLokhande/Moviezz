<link rel="stylesheet" href="C:\Bitnami\wampstack-7.1.27-1\apache2\htdocs\MovieDB\css\result.css" type="text/css">
<?php
    $host="localhost";
    $user="root";
    $pass="system";
    $db="mysql";
    $conn= mysqli_connect($host, $user, $pass, $db);
    $search=$_GET['search'];
   if(isset($_GET["search"])){
    $sql="SELECT * from `movie` where title LIKE '%$search%'";
    }
     if(isset($_POST["button2"])){
    $sql="SELECT * from `movie` where genere='".$_POST['genere']."'and ratings > '".$_POST['ratings']."' and year >'". $_POST['year']."'";        
}
    $result=$conn->query($sql);
    
    ?><html><head></head><body>
            <div class="header">
                <div class="header-images">
                     <a href="index.php"><img src="C:\Bitnami\wampstack-7.1.27-1\apache2\htdocs\MovieDB\logo\logo1.jpg"></a>
                </div>                  
                </div>
<div class="main-container">
    <?php while($movie=$result->fetch_assoc()): print_r()?>
    <div class="movie-container">
    <div class="headr">
        <h1> <?= $movie['title'] ?> </h1>
        <span class="year">( <?=$movie['year'] ?>)</span>
    </div>
    <div class="content">
        <div class="left-column">
            <img width='<?php67*1.3?>' height='<?=98*1.3?>' src='<?=$movie['image_url']?>'>
            <div id='rating'>
                <div class='imdb'>
                    <?=$movie['ratings']?>
                </div>
                
            </div>
            
        </div>
            <div class="right-column">
                <span class='content-blue'><?=$movie['certificate']?></span>
                <?php echo$movie['certificate']?' |':''; ?>
                <span class='content-blue'><?=$movie['runtime'];?></span>
                <span class='content-blue'><?=$movie['genere'];?></span>
            </div>
            <div class='description'>
                <?=$movie['description']?><br><br>
                <div class="btn"><form action="<?=$movie['link']?>"><button type="submit">Full Movie</button></form>
                    <form><input type="submit" value="Trailer"></form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div><?php endwhile;?>

    </body>