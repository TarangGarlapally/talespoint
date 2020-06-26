<?php

include "header.php";
/*if($_SESSION['status']==0)
{
header("Location: sign.php");
}*/
?>





<!-- display carousel-->
<div class="col-md-6">
  <br>
  <p class="p">Popular on TalesPoint</p>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

<?php
include "dbh.php";
$sql="select * from stories order by sid DESC";
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
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>';

}

?>

