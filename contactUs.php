<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="contactUs.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<div class="container">
                <a class="navbar-brand" href="#">Var-VIVAH</a>
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
                        <a class="dropdown-item" href="explore.php">India</a>
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
                        <a class="nav-link" href="./loginadmin/adminlogin.php">Log In <i class="fa fa-user" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>



<section class="contact" id="contact">
    <div class="container" style="background-image: url(./img/contact2.jpeg); background-size: cover;">
        <div class="row">
            <div class="col-sm-12" style="padding-right: 0;padding-left: 0;">
                <div class="headerText text-center" style="padding: 30px 0; background-color: #0080007a; color: white">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="offset-sm-2 col-sm-8" style=" margin-top: 40px;">
                <form>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Massage</label>
                        <textarea class="form-control textarea" name=""></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btnD1">Send</button>
                    </div>
                </form>
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