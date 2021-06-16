<!DOCTYPE html>
<html>
<head>
	<title>Shopmusic</title>
<link rel="stylesheet" href="Style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

</style>

<body>
	<!-- menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container" >
    <img src="./image/icon.png" style="height: 20px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
	  </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="#"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                      Song
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="./admin/addsong.php">Add</a>
                      <a class="dropdown-item" href="./admin/editsong.php">Edit</a>
                  </div>
                  

              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                      Song details
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="./admin/listsong.php">List</a>
                      
                  </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                      Login
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="./login2.php">Login</a>
                      <a class="dropdown-item" href="./resgister1.php">Resgister</a>
                      
                  </div>
              </li>
          </ul>

          
          <form class="form-inline my-2 my-lg-0" action="./admin/search.php" method="GET">
<input class="form-control mr-sm-2" type="search" name="inputSearch" placeholder="Search for song" style="width: 400px" >
<input type="submit"name="search" value="Search"  style="height: 37px " />
</form>
          
      </div>
  </div>
</nav>
<!-- end menu -->
<!-- slide -->
<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="-webkit-user-select: none;margin: auto;cursor: zoom-in;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" src="https://www.google.com/url?sa=i&url=https%3A%2F%2Famthanhthudo.com%2F100-bai-hat-tru-tinh-hay-nhat.html&psig=AOvVaw3AiXJsDgnpqbsr_Xbb4M9W&ust=1623905904442000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCMCCyoqvm_ECFQAAAAAdAAAAABAD" width="1550" height="450" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://photo-zmp3.zadn.vn/covers/3/1/310b98ade43043a069c3d3e9ee0c5766_1515485837.jpg" width="1550" height="450" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img style="-webkit-user-select: none;margin: auto;cursor: zoom-in;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" class="d-block w-100" src="https://avatar-ex-swe.nixcdn.com/topic/share/2020/09/16/0/5/d/a/1600239102934.jpg" width="1550" height="450" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end slide -->
<!-- list product -->
<div class="container">
  <div class="row mt-5">
    <h2 class="list-product-title">New song</h2>
    <div class="list-product-subtitle">
      <p>New songs</p>
    </div>

<?php
  include("connect.php");
    if (!$connect){
      echo "kết nối thất bại";
    }else{
      echo "";
    }
    $sql ="select * from song1";
      $run_pro = mysqli_query($connect, $sql);
    while($row_pro = mysqli_fetch_array($run_pro)){
      $songid = $row_pro['songid'];
      $songname = $row_pro['songname'];
      $price = $row_pro['price'];
      $namesinger = $row_pro['namesinger'];
      $image = $row_pro['image'];
      $MP3 = $row_pro['MP3'];
      $genreid  = $row_pro['genreid'];
      echo"
      <div class='col-md-3 col-sm-6 col-12'>
      <div class='card card-product mb-3'>
      <div id='song1'>
      <h1>$songname</h1>
      <img src='image/$image' width='250' height='250' />
      <p><b>Price: $price </b></p>
      <p><b>Singer: $namesinger</b></p>
      <audio id='audio_1' style='width: 247px'controls controlsList='nodownload' ><source src='./MP3/$MP3' type='audio/mpeg' ></audio>
      <a href='./admin/details.php?id=$songid'>Details</a>
      </div>
      </div>
      </div>
      ";
    }
      ?>
      <div id="product_box">
      <div id="single_product"></div>
      </div>
      </div>
    </div>
    </div>

  
</body>
</html>
