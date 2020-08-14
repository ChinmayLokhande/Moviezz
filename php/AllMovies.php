<!DOCTYPE html>
<html class=''>
<head>
  <script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script>
  <script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script>
  <meta charset='UTF-8'>
  <meta name="robots" content="noindex">
  <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <link rel="canonical" href="https://codepen.io/ryanparag/pen/LLrVbo?depth=everything&order=popularity&page=10&q=movie&show_forks=false" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'><link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<style class="cp-pen-styles">
@import url("https://fonts.googleapis.com/css?family=Arimo:400,700");
body {
  height: 100%;
  width: 100%;
  background: #e9e9e9;
  //font-family: 'Arimo', Arial, sans-serif;
  font-weight: 400;
  font-size: 14px;
  color: #010b26;
  background-size: cover;
    margin:0px;
    padding: 0px;
    font-family: sans-serif;
    background:url(C:/Bitnami/wampstack-7.1.27-1/apache2/htdocs/MovieDB/images/loginb.jpg);
    -webkit-filter:blurr(8px); 
}
.header{
    width:100%;
    height:60px;
    background:rgba(0,150,0,0.8);
    position:relative;
    top:0px;
}
* {
  -webkit-transition: 300ms;
  transition: 300ms;
}

.intro {
  text-align: center;
}

ul {
  list-style-type: none;
}

h1, h2, h3, h4, h5, p {
  font-weight: 400;
}

a {
  text-decoration: none;
  color: inherit;
}

a:hover {
  color: #6ABCEA;
}

.container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  max-width: 100%;
  margin-top: 10vh;
  margin-left: auto;
  margin-right: auto;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.movie-card {
  background: black;
  box-shadow: 0px 6px 18px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 315px;
  margin: 2em;
  border-radius: 10px;
  display: inline-block;
}

.movie-header {
  padding: 0;
  margin: 0;
  height: 367px;
  width: 100%;
  display: block;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.avengers{
    background: url("C:/Bitnami/wampstack-7.1.27-1/apache2/htdocs/MovieDB/images/InfinityWar.jpg");
  background-size: cover;
  background-position:cover;
}
.darkknight{
    background: url("C:/Bitnami/wampstack-7.1.27-1/apache2/htdocs/MovieDB/images/DarkKnight.jpg");
  background-size: cover;
  background-position: cover;
}

.findingnemo {
  background: url("C:/Bitnami/wampstack-7.1.27-1/apache2/htdocs/MovieDB/images/FindingNemo.jpg");
  background-size: cover;
  
}
.FightClub{
  background: url("C:/Bitnami/wampstack-7.1.27-1/apache2/htdocs/MovieDB/images/FightClub.jpg");
  background-size: cover;
  background-position:cover;
}
.inception{
    background: url("C:/Bitnami/wampstack-7.1.27-1/apache2/htdocs/MovieDB/images/Inception.jpg");
  background-size: cover;
  background-position: 100% 100%;
}
.ImmitationGame{
    background: url("C:/Bitnami/wampstack-7.1.27-1/apache2/htdocs/MovieDB/images/ImmitationGame.jpg");
  background-size: cover;
  background-position: 100% 100%;
}
.bladeRunner2049 {
  background: url("http://cdn.collider.com/wp-content/uploads/2017/05/blade-runner-2049-poster-ryan-gosling.jpeg");
  background-size: cover;
  background-position: 100% 80%;
}

.header-icon-container {
  position: relative;
}

.header-icon {
  width: 100%;
  height: 367px;
  line-height: 367px;
  text-align: center;
  vertical-align: middle;
  margin: 0 auto;
  color: #ffffff;
  font-size: 54px;
  text-shadow: 0px 0px 20px #6abcea, 0px 5px 20px #6ABCEA;
  opacity: .85;
}

.header-icon:hover {
  background: rgba(0, 0, 0, 0.15);
  font-size: 74px;
  text-shadow: 0px 0px 20px #6abcea, 0px 5px 30px #6ABCEA;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  opacity: 1;
}

.movie-card:hover {
  -webkit-transform: scale(1.03);
          transform: scale(1.03);
  box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.08);
}

.movie-content {
  padding: 18px 18px 24px 18px;
  margin: 0;
}

.movie-content-header, .movie-info {
    color: green;
  display: table;
  width: 100%;
}

.movie-title {
  font-size: 24px;
  margin: 0;
  display: table-cell;
}

.movie-info {
  margin-top: 1em;
}

  .container {
    padding: 0;
    margin: 0;
  }
</style>
</head>
<body> 
    <div class="header">
                <div class="wrap-container">
                    <div class="header-images">
                        <a href="index.php"><img src="D:\MovieProject\logo1.jpg"> </a>
                    </div>                   
                </div>
        </div>
    <div class="container"> 
        <div class="movie-card">
            <a href="www.google.com">
            <div class="movie-header avengers">
            </div><!--movie-header-->
            <div class="movie-content">
                <div class="movie-content-header">
                    <a href="http://www.google.com">
                        <h3 class="movie-title">Avengers Infinity War I</h3>
                    </a>
                </div>
            </div>
            </a>
        </div>
  
        <div class="movie-card">
            <div class="movie-header inception">
                
            </div><!--movie-header-->
            <div class="movie-content">
                <div class="movie-content-header">
                    <a href="#">
                        <h3 class="movie-title">Inception</h3>
                    </a>
                </div>
      
            </div><!--movie-content-->
        </div><!--movie-card-->
  
        <div class="movie-card">
            <div class="movie-header findingnemo">
                
            </div><!--movie-header-->
            <div class="movie-content">
                <div class="movie-content-header">
                        <a href="#">
                            <h3 class="movie-title">Finding Nemo</h3>
                        </a>
                </div>
            </div><!--movie-content-->
        </div><!--movie-card-->
        <div class="movie-card">
            <div class="movie-header ImmitationGame">
               
            </div><!--movie-header-->
            <div class="movie-content">
                <div class="movie-content-header">
                        <a href="#">
                            <h3 class="movie-title">Immitation Game</h3>
                        </a>
                </div>
            </div><!--movie-content-->
        </div>
        <div class="movie-card">
            <div class="movie-header FightClub">
                
            </div><!--movie-header-->
            <div class="movie-content">
                <div class="movie-content-header">
                        <a href="#">
                            <h3 class="movie-title">Fight Club</h3>
                        </a>
                </div>
            </div><!--movie-content-->
        </div>
  
        <div class="movie-card">
            <div class="movie-header darkknight">
                
             </div><!--movie-header-->
            <div class="movie-content">
                <div class="movie-content-header">
                    <a href="#">
                        <h3 class="movie-title">The Dark Knight</h3>
                    </a>
                </div><!--movie-content-->
            </div><!--movie-card-->
        </div><!--container-->
    </div>  
    </body>
</html>