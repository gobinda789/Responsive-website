<!DOCTYPE html>
<html>
<head>


<style>
/* width */
::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background:#00ffff ; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background:#008080; 
}
</style>
 





	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Gobinda</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="trend.php">My Youtube</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="nature.php">Nature parallox</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>

      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" onkeyup="myFunction()" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    
    </form>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/7.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>nature</h3>
        <p>I am ayush khanal and i am dumb </p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/5.jpg" alt="Chicago" width="900" height="700">
      <div class="carousel-caption">
        <h3>Nature</h3>
        <p>such a great time</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/6.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Nature</h3>
        <p>Such a great time</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About us</h2>
	</div>
<div class="container-fluid">
	 <div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/g2.jpg" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2>I am Govinda Bhandari</h2>
			<p>I am studying Engineering in Electronics,Communication and Information Technology IN ADVANCED COLLEGE OF ENGINEERING AND MANAGEMENT (ACEM),Affilated toTribhuwan University.</p>
			<a href="about.php">check more</a>
		</div>
	 </div>
</div>
</section>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Services</h2>
	</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
			<div class="card">
  <img class="card-img-top" src="images/11.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

		</div>
		<div class="col-lg-4 col-md-4 col-12">
			<div class="card">
  <img class="card-img-top" src="images/10.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

		</div>
		<div class="col-lg-4 col-md-4 col-12">
			<div class="card">
  <img class="card-img-top" src="images/9.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

		</div>

	</div>
</div>

</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Gallery</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
<img src="images/g1.jpg" class="img-fluid pb-4 ">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
<img src="images/g2.jpg" class="img-fluid pb-4 ">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
<img src="images/g3.jpg" class="img-fluid pb-4 ">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
<img src="images/g4.jpg" class="img-fluid pb-4 ">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
<img src="images/g5.png" class="img-fluid pb-4 ">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
<img src="images/g4.jpg" class="img-fluid pb-4 ">
			</div>
		</div>
	</div>
</section>


<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Contact us</h2>
	</div>
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>E-mail</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>comment</label>
				<textarea class="form-control" name="comment">
					
				</textarea>
		
			</div>
			 <button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</section>



<footer style="background-color: gray">
<div>
<div align="center" style=" margin-bottom:5px;">
<a href="index.php?page=content&id=59" style="color: white">Privacy Policy |</a> 
 <a href="index.php?page=content&id=61" style="color: white">Disclaimer</a>
</div>
<table width="78%" align="center">
<tr>
<td> <div align="center">Copyright  © 2021 Gobinda Bhandari - All Rights Reserved </div></td>
<td width="4%"><a href="https://www.facebook.com" target="_blank"><img src="images/5.png" border="0" width="60%" height="20px" /></a></td>
<td width="4%"><a href="https://twitter.com" target="_blank"><img src="images/6.png" border="0" width="60%" height="20px"/></a></td><td width="5%"><a href="https://www.youtube.com" target="_blank"><img src="images/youtube.png" border="0" width="60%" height="20px"/></a></td>
</tr>
</table>  
</div>
</footer>



		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>