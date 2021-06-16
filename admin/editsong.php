<!DOCTYPE html>
<html>
<head>
	<title>Edit song</title>
<link rel="stylesheet" href="Stylesong.css">
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
  <div class="container">
	  <img src="../image/icon.png" style="height: 20px">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="../index.php"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                      Song
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="../admin/addsong.php">Add</a>
                      <a class="dropdown-item" href="./admin/editsong.php">Edit</a>
                      
                      
                  </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                      Song details
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="../admin/listsong.php">List</a>
                      <a class="dropdown-item" href="./admin/details.php"></a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                  </div>
              </li>
          </ul>

          
          <form class="form-inline my-2 my-lg-0" action="./admin/search.php" method="GET">
<input class="form-control mr-sm-2" type="search" placeholder="Search for song" style="width: 400px" name="Search">
<input type="submit"name="search" value="Search" style="height: 37px " />
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
      <img style="-webkit-user-select: none;margin: auto;cursor: zoom-in;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" src="http://stc.m.nixcdn.com/touch_v2/images/top100/2020/top-100-nhac-tre-2020.jpg" width="1550" height="450" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://photo-zmp3.zadn.vn/covers/3/1/310b98ade43043a069c3d3e9ee0c5766_1515485837.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://avatar-ex-swe.nixcdn.com/topic/share/2020/09/16/0/5/d/a/1600239102934.jpg" width="1550" height="450" alt="Third slide">
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
    <h2 class="list-product-title">Edit song</h2>
    <div class="list-product-subtitle">
      
    </div>
    </div>
	 <?php
	$conn = mysqli_connect('localhost','root','','php');
	 if(isset($_GET['update_id'])){					
					$Songid=$_GET['update_id'];
		 			$result=$conn->query("select * from song1 Where songid=$Songid");
                    $row=$result->fetch_object();  
		
                }        
      ?>
   
    <div class="container">
        <div class="row justify-content-center">
			<div class="col col-8">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Songname</label>
                <input class="form-control" value=" <?php if(isset($_GET['update_id'])){echo "$row->songname";} ?>" name="songname" type="text">
            </div>
			<div class="form-group">
                <label for="name">Price</label>
                <input class="form-control" value=" <?php if(isset($_GET['update_id'])){echo "$row->price";} ?>" name="price" type="text">
            </div>
			<div class="form-group">
                <label for="name">Namesinger</label>
                <input class="form-control" value=" <?php if(isset($_GET['update_id'])){echo "$row->namesinger";} ?>" name="namesinger" type="text">
            </div>
			
            <div class="form-group">
              <label for="priceproduct">Image</label>
              <input type="file" name="image" id="priceproduct" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="des">MP3</label>	
              <input name="MP3" type="file" value=" " id="des" class="form-control">
            </div>
            <div class="form-group">
                <label for="category">Genre</label>
                <select name="genreid">
                   <?php
          include("connect.php");
                        $result=$conn->query("select * from genre");
                        while($row=$result->fetch_array()){
                            $catId=$row["genreid"];
                            $catName=$row["genrename"];
                            echo "<option value='$catId'>$catName</option>";
                        }
                    ?>
                </select>
                <button name="Edit" type="submit" class="form-control btn btn-primary">Edit</button>
            </div>
      
            
            
            </form>
      </div>
        </div>
    </div>
                <?php
                if(isset($_POST['Edit'])){
                    $Song_name=$_POST['songname'];
                    $Price=$_POST['price'];
                    $Name_Singer=$_POST['namesinger'];
                    $Genre=$_POST['genreid'];
                    $Song_Image=$_FILES['image']['name'];
                    $target="../image/".basename($Song_Image);
                    $resulttarget="image/".basename($Song_Image);
          $MP3=$_FILES['MP3']['name'];
                    $target2="../MP3/".basename($MP3);
                    $resulttarget2="MP3/".basename($MP3);
          move_uploaded_file($_FILES['image']['tmp_name'],$target);
          move_uploaded_file($_FILES['MP3']['tmp_name'],$target2);
                         $result2=$conn->query("Update song1 set songname='$Song_name',price='$Price',namesinger='$Name_Singer',image='$Song_Image',MP3='$MP3',genreid='$Genre' where songid=$Songid");
                        
          
                        if($result2){
                            echo "<script>alert('successful data correction')</script>";
                            echo"<script>window.open('listsong.php','_self')</script>";
                       
                        }
                        else{
                            echo "<script>alert('Failed to correct data')</script>";
                          
                        }
                }

?>
</body>
</html>