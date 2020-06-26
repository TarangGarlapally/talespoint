<?php
include "header.php";
if($_SESSION['status']==0)
{
header("Location: sign.php");
}
?>
<div class="container">

<?php
echo "<p class='p'>How are you doing, ".$_SESSION['user_first']."?</p>";
?>
<!-- display latest story-->
<br>
<div class="mystory col-md-3">
	<p class="col-md-12 contwriting">Continue writing..</p>
  <?php
  include "temp/dbh.php";
  $sql="select * from stories where username='".$_SESSION['username']."';";
  $result=mysqli_query($conn,$sql);
  $nrows=mysqli_num_rows($result);
  if($nrows>0){
    while($row=mysqli_fetch_assoc($result)){
      echo "<img src='img/books/".$row['imgid']."'>";
      break;
    }
  }
  else{
    echo "<br><p class='p'>You haven't written any stories yet</p>";
  }
  ?>
	
</div>
<div class="col-md-3">
	<a class="mylabel" href="#">
		<br>
		<br>
    <?php
    include "temp/dbh.php";
    $sql="select * from stories where username='".$_SESSION['username']."';";
    $result=mysqli_query($conn,$sql);
    $nrows=mysqli_num_rows($result);
    if($nrows>0){
      while($row=mysqli_fetch_assoc($result)){
        echo "<h2>".$row['story_name']."</h2>";
        echo "<p class='p'>".$row['username']."</p>";
        echo "<p class='views'>
    <span class='glyphicon glyphicon-star' style='color:gold'></span>260
    &nbsp;<i class='fa fa-eye'></i>450
  </p>
  <br>
  <br> 
  <button class='btn btn-default btn-lg' id='btncontinue' onclick='"."window.location.href=".'"Swrite.php"'."'>Continue Writing</button>";
  break;
    }
  }

    ?>
    <!--
 <h2>THE DARK SAVIOR</h2>
	<p class="p">Tarang Garlapally</p>
	<p class="views">
		<span class="glyphicon glyphicon-star" style="color:gold"></span>260
		&nbsp;<i class="fa fa-eye"></i>450
	</p>
	<br>
	<br>
	<button class="btn btn-default btn-lg" id="btncontinue">Continue...</button>
-->
</a>
</div>




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
        <a class="carouselcaption" href="read.php?unqid='.$row['story_unqid'].'">
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

<div class="container"></div>
<br>
<br>
<Br>
<div class="container">
<p class="p">Top Categories</p>

<?php
include "home2.php";
?>
<!-- Footer -->

</div>


</body>


</html>