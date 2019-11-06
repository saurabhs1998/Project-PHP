<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<div class="container">
                <a class="navbar-brand" href="homepage.php">Var-VIVAH</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
                    </li>



                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="">India</a>
                        <a class="dropdown-item" href="#">America</a>
                        <a class="dropdown-item" href="#">Canada</a>
                    </div>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contactUs.php">Contact</a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" href="feedback.php">Feedback</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#Log In"><i class="fa fa-user" aria-hidden="true"></i></a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#Log In"> <i class="fa fa-bars" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
</div>
<!-- slideshow -->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/img1.jpeg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="./img/img2.jpeg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="./img/img3.jpeg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!-- <section class="sec2" id="adventure">
	<div class="container h100">
		<div class="contentBox h100">
			<div>
				<h1>Adventure is EveryWhere</h1>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
				<a href="" class="btn btnD1">Read More</a>
			</div>
		</div>
	</div>
</section> -->
<section class="blog" id blog>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="headerText">
					<h2>Details for Marriage Halls</h2>	
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="blogpost">
					<div class="imgBox">
						<img src="./img/jaipurpic.jpg" class="img-fluid">
					</div>
					<div class="middle">
						<a href="Jaipur.php" class="btn btn-danger">Jaipur</a>
					</div>
		            <div class="content">
						<h1>WEDDING DESTINATION IN JAIPUR</h1>
						<p>Jaipur is the capital of the state of Rajasthan, which is the best place in India. It is known as the pink city. Being a Wedding Destination in Jaipur is a new trend among the youth, Hari Mahal Palace is one of the most loved.</p>
						<a href="" class="btn btnD2">Read More</a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="blogpost">
					<div class="imgBox">
						<img src="./img/udaypur.jpg" class="img-fluid">
					</div>
					<div class="middle">
						<a href="" class="btn btn-success">Udaypur</a>
					</div>
					<div class="content">
						<h1>Udaipur Wedding | Plan Beautiful Wedding</h1>
						<p>Get great deals for booking Venues in Udaipur. Choose from largest collection of venues & book with Weddingz.in for end to end services. Quality Services. Dedicated Venue Managers. Hassle Free Booking. Great Deals Available.</p>
						<a href="" class="btn btnD2">Read More</a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="blogpost">
					<div class="imgBox">
						<img src="./img/bombeypic1.jpg" class="img-fluid">
					</div>
					<div class="middle">
						<a href="" class="btn btn-success">Bombey</a>
					</div>
					<div class="content">
						<h1>Wedding Locations In Mumbai</h1>
						<p>‎Find Wedding Locations In Mumbai. Check Out 1000+ Results from Across the Web. Wiki, News & More. Information 24/7. Web, Images & Video. Trusted by Millions. The Complete Overview. 100+ Million Visitors. Types: pdf, doc, ppt, xls, txt.</p>
						<a href="" class="btn btnD2">Read More</a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="blogpost">
					<div class="imgBox">
						<img src="./img/goapic.jpg" class="img-fluid">
					</div>
					<div class="middle">
						<a href="" class="btn btn-success">Goa</a>
					</div>
					<div class="content">
						<h1>Goa Wedding | Plan Beautiful Wedding  </h1>
						<p>Get great deals for booking Venues in Goa. Choose from largest collection of venues & book with Weddingz.in for end to end services. Quality Services. Hassle Free Booking. Great Deals Available. Dedicated Venue Managers.</p>
						<a href="" class="btn btnD2">Read More</a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="blogpost">
					<div class="imgBox">
						<img src="./img/keralapic.jpg" class="img-fluid">
					</div>
					<div class="middle">
						<a href="" class="btn btn-success">Kerala</a>
					</div>
					<div class="content">
						<h1>Kerala Wedding Traditions</h1>
						<p>Kerala wedding ceremonies of the Nair weddings are known to be concise and extremely simple. They have very few rituals compared to other traditional Indian weddings. Most traditional Kerala Nair weddings take place in a temple.</p>
						<a href="" class="btn btnD2">Read More</a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="blogpost">
					<div class="imgBox">
						<img src="./img/tamilpic1.jpg" class="img-fluid">
					</div>
					<div class="middle">
						<a href="" class="btn btn-success">Tamil</a>
					</div>
					<div class="content">
						<h1>Tamil Wedding</h1>
						<p>Weddings down south are very different from those up north of India. Tamil people represent the major identity of South Indian communities and are known for their stress on simple living and great education.</p>
						<a href="" class="btn btnD2">Read More</a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="blogpost">
					<div class="imgBox">
						<img src="./img/nepalpic.jpg" class="img-fluid">
					</div>
					<div class="middle">
						<a href="" class="btn btn-success">Nepal</a>
					</div>
					<div class="content">
						<h1>Nepali Marriages </h1>
						<p>Marriage in Nepal is a family affair, unlike most of the Western countries. The parents are responsible for selecting suitable spouse for their children, hence, most of the marriages in Nepal are arranged.</p>
						<a href="" class="btn btnD2">Read More</a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="blogpost">
					<div class="imgBox">
						<img src="./img/chennaipic.jpg" class="img-fluid">
					</div>
					<div class="middle">
						<a href="" class="btn btn-success">Benglore</a>
					</div>
					<div class="content">
						<h1>Bangalore Marriage </h1>
						<p>Bangalore is the capital and largest city of the Indian state of Karnataka. It is famous for traffic 24/7. With a population of over 15 million (as of January 2016), Bangalore is the third largest city in India.</p>
						<a href="" class="btn btnD2">Read More</a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="sec1" id="explore">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="headerText m-4">
					<h2>Famous Places for Marriages</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="PlaceBox">
					<div class="imgBx">
						<img src="./img/img11.jpg" class="img-fluid">
					</div>
					<div class="cantent">
						<h3>Jaipur<br><a href="" class="btn btnD1">Read More</a></h3>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="PlaceBox">
					<div class="imgBx">
						<img src="./img/img12.jpg" class="img-fluid">
					</div>
					<div class="cantent">
						<h3>Udaypur<br><a href="" class="btn btnD1">Read More</a></h3>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="PlaceBox">
					<div class="imgBx">
						<img src="./img/img13.jpg" class="img-fluid">
					</div>
					<div class="cantent">
						<h3>Jodhpur<br><a href="" class="btn btnD1">Read More</a></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul class="sci">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li >
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				</ul>
				<p class="cpryt">@ Copyright 2019 Nature Template by <a href="">Online Tutorials</a></p>
			</div>
		</div>
			
	</div>
	
</footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
    	$(document).scroll(function(){
    		$('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
    	});
    </script>



</body>
</html>