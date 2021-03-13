<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>

	 <!--Bootstrap CDNs-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.js">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@500&display=swap" rel="stylesheet">

</head>
<body style="background-color: #fef773">
	
	<?php include "header.php";?>

<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="assets/rape.jpg" width="100%" height="350" class="d-block w-100" alt="..."  >
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="assets/rape.jpg" width="100%" height="350" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/rape.jpg" width="100%" height="350" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="ss">
</div>




	<h1  style="margin-top: 10px"><b><center>Welcome to the home of Women's Law and Justice</center></b></h1>
	<br>
	<center><a class="btn btn-dark btn_nav " style="width: 200px;margin-bottom: 20px" href="category.php" role="button">Categories Here</a></center>


<div class="row" style="margin-top:30px;margin-bottom:30px;margin-left:10px;margin-right:10px">
  <div class="column">
    <div class="card">
      <img src="assets/laws.png" width="100%" height="300"  style="margin-bottom:10px; margin-top: 10px" >
      <center><a class="btn btn-dark btn_nav " style="width: 200px" href="laws.php" role="button">Learn More</a></center>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="assets/advocates.png" width="100%" height="300"  style="margin-bottom:10px; margin-top: 10px" >
       <center><a class="btn btn-dark btn_nav " style="width: 200px" href="advocates.php" role="button">Learn More</a></center>
    </div>
  </div>

  <div class="column">
    <div class="card">
     <img src="assets/news.png" width="100%" height="300"  style="margin-bottom:10px; margin-top: 10px" >
      <center><a class="btn btn-dark btn_nav " style="width: 200px" href="news.php" role="button">Learn More</a></center>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="assets/aboutus.png" width="100%" height="300"  style="margin-bottom:10px; margin-top: 10px" >
       <center><a class="btn btn-dark btn_nav " style="width: 200px" href="aboutus.php" role="button">Learn More</a></center>
    </div>
  </div>
</div>


<div class="container" width="100%" style="margin-top:30px;margin-bottom:30px">
	<div class="row">
		<div class="col-12">
			<div class="row">
				<div class="col-6">
          <a href="recent_cases.php">
					  <div class="card">
              <img src="assets/recent_cases.png" alt="">  
            </div>
          </a>
				</div>
				<div class="col-6">
          <a href="safety_tips.php">  
					  <div class="card">
              <img src="assets/safety_tips.png" alt="">
            </div>
          </a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container" width="100%" style="margin-top:30px;margin-bottom:30px">
	<div class="row">
		<div class="col-12" style="margin-left:30px;">
			<div class="row">
				<div class="col-12" style="margin-left:-15px;margin-right:15px">
        <h1><center>Our Team</center></h1>
        <img src="assets/team.png" width="100%" height="350"  style="margin-bottom:10px; margin-top: 10px" >
				</div>
			</div>
		</div>
	</div>
</div>


<?php include "footer.php";?>


</body>
</html>


		
		