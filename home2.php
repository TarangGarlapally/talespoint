<!-- Adventure-->


<!-- display carousel-->
<div class="col-md-6">
  <br>
  <a class="top-cat" href="explore.php?result=adventure"><text class="top-cat">Adventure</text><text class="see-all">See all</text></a>
<div id="Carousel0" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#Carousel0" data-slide-to="0" class="active"></li>
    <li data-target="#Carousel0" data-slide-to="1"></li>
    <li data-target="#Carousel0" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

<?php
include "dbh.php";
$sql="select * from stories where story_genre='adventure' order by sid DESC";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
  $c=0;
  $v=' ';
  while($row=mysqli_fetch_assoc($result)){
    if($c>2){
      break;
    }
    if($c==0){
      $v='active';
    }
    else{
      $v=' ';
    }
    echo 
    '<div class="carousel-img item '.$v.'"  >
       <img class="center-block" src="img/books/'.$row['imgid'].'" alt="book1">
       
      <div class="carousel-caption">
        <a class="carouselcaption" href="read.php">
          <h2>'.$row['story_name'].'</h2>
          <p>'.$row['username'].'</p>
          <br>
          <h4>Read Story</h4>
        </a>  
      </div>
    </div>';
    $c++;
  }
  echo ' </div>
  <a class="left carousel-control" href="#Carousel0" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#Carousel0" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>';

}

?>













<!-- Mystery-->


<!-- display carousel-->
<div class="col-md-6">
  <br>
  <a class="top-cat" href="explore.php?result=mystery"><text class="top-cat">Mystery</text><text class="see-all">See all</text></a>
<div id="myCarousel2" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel2" data-slide-to="1"></li>
    <li data-target="#myCarousel2" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

<?php
include "dbh.php";
$sql="select * from stories where story_genre='mystery' order by sid DESC";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
  $c=0;
  $v=' ';
  while($row=mysqli_fetch_assoc($result)){
    if($c>2){
      break;
    }
    if($c==0){
      $v='active';
    }
    else{
      $v=' ';
    }
    echo 
    '<div class="carousel-img item '.$v.'"  >
       <img class="center-block" src="img/books/'.$row['imgid'].'" alt="book1">
       
      <div class="carousel-caption">
        <a class="carouselcaption" href="read.php">
          <h2>'.$row['story_name'].'</h2>
          <p>'.$row['username'].'</p>
          <br>
          <h4>Read Story</h4>
        </a>  
      </div>
    </div>';
    $c++;
  }
  echo ' </div>
  <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel2" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>';

}

?>






<!-- Romance-->


<!-- display carousel-->
<div class="col-md-6">
  <br>
  <a class="top-cat" href="explore.php?result=romance"><text class="top-cat">Romance</text><text class="see-all">See all</text></a>
<div id="myCarousel4" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel4" data-slide-to="1"></li>
    <li data-target="#myCarousel4" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

<?php
include "dbh.php";
$sql="select * from stories where story_genre='romance' order by sid DESC";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
  $c=0;
  $v=' ';
  while($row=mysqli_fetch_assoc($result)){
    if($c>2){
      break;
    }
    if($c==0){
      $v='active';
    }
    else{
      $v=' ';
    }
    echo 
    '<div class="carousel-img item '.$v.'"  >
       <img class="center-block" src="img/books/'.$row['imgid'].'" alt="book1">
       
      <div class="carousel-caption">
        <a class="carouselcaption" href="read.php">
          <h2>'.$row['story_name'].'</h2>
          <p>'.$row['username'].'</p>
          <br>
          <h4>Read Story</h4>
        </a>  
      </div>
    </div>';
    $c++;
  }
  echo ' </div>
  <a class="left carousel-control" href="#myCarousel4" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel4" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>';

}

?>






<!--Horror-->

<!-- display carousel-->
<div class="col-md-6">
  <br>
  <a class="top-cat" href="explore.php?result=horror"><text class="top-cat">Horror</text><text class="see-all">See all</text></a>
<div id="myCarousel6" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel6" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel6" data-slide-to="1"></li>
    <li data-target="#myCarousel6" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

<?php
include "dbh.php";
$sql="select * from stories where story_genre='horror' order by sid DESC";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
  $c=0;
  $v=' ';
  while($row=mysqli_fetch_assoc($result)){
    if($c>2){
      break;
    }
    if($c==0){
      $v='active';
    }
    else{
      $v=' ';
    }
    echo 
    '<div class="carousel-img item '.$v.'"  >
       <img class="center-block" src="img/books/'.$row['imgid'].'" alt="book1">
       
      <div class="carousel-caption">
        <a class="carouselcaption" href="read.php">
          <h2>'.$row['story_name'].'</h2>
          <p>'.$row['username'].'</p>
          <br>
          <h4>Read Story</h4>
        </a>  
      </div>
    </div>';
    $c++;
  }
  echo ' </div>
  <a class="left carousel-control" href="#myCarousel6" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel6" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>';

}

?>

