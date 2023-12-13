<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Navbar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
      
      body {
  margin: 0;
  padding: 0;
  font-family: system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
}
#logo{
     height:100%;
     float:left;
}

.front{
  width:100%;
  height:700px;
  background-color:#cccccc;

}
.nav {
    background-color:white;
  text-align: right;
  height: 100px;
  border-bottom: 1px solid #dee2e6;
  margin-top: 5px;
}

.nav-link {
  text-decoration: none;
  display: inline-block;
  padding: 13px 13px;
  color: gray;
  font-size:24px;
  margin-right: 5px;
}

.nav-link:hover {
  text-decoration:none;
  background-color: #d0ebff;
  border-bottom: 2px solid #339af5
}
.nav-link.current {
  border-bottom: 2px solid #1971c2;
}
.btn {
  padding: 10px 20px;
}
.contact-imfo-box{
	background-color: gray;
	padding: 30px 0;
}

.overflow-hidden {
    overflow: hidden;
}

.contact-imfo-box i{
	display: block;
	float: left;
	width: 60px;
	height: 60px;
	line-height: 60px;
	text-align: center;
	color: #ffffff;
	font-size: 30px;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-ms-border-radius: 50%;
	border-radius: 50%;
	margin-right: 20px;
}
.contact-imfo-box h4 {
    margin: 0px;
    margin-top: 5px;
	color: #ffffff;
	font-size: 20px;
	padding: 0px;
	font-weight: 500;
	line-height: 24px;
}
.contact-imfo-box p {
    margin: 0px;
	color: #ffffff;
	font-weight: 300;
}
.f-social {
    padding-bottom: 10px;
    text-align:center;
    margin: 0px;
    margin-top: 20px;
}
.f-social li a {
    font-size: 40px;
    color: gray;
	margin-right: 25px;
}
.gallery-single{
	margin: 30px 0px;
}

.gallery-single {
    position: relative;
    overflow: hidden;
    -webkit-box-shadow: 0 0 10px #ccc;
    box-shadow: 0 0 10px #ccc;
}
.img-fluid{
    margin-left:60px;
}


    </style>
  </head>
  <body>
        <div class="nav">
          <div  id="logo">
            <a href="index.php"><img src="img/logo.jpg" height="100%" width="250px"></a>
          </div>
            <a href="" class="logo"><img src=""/></a>
            <a href="index.php" class="nav-link">Home</a>
            <a href="gallery.php" class="nav-link">Gallery</a>
            <a href="about.php" class="nav-link">About</a>
            <a href="login.php" class="nav-link">Login</a>
        </div>
        <div class="front"> 
        <div class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h1 style="font-size:50px;">Gallery</h1>
                        <p style="font-size:17px;">The purpose of Online Food Ordering System is to automate the existing manualsystem by the help of computerized equipment’s and full-fledged computer software,fulfilling their requirements, so that their valuable data/information can be stored for alonger period with easy accessing and manipulation of the same.</p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-8 col-lg-4">
						<a class="lightbox" href="img/11.jpg">
							<img class="img-fluid" src="img/11.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-8 col-lg-4">
						<a class="lightbox" href="img/8.jpg">
							<img class="img-fluid" src="img/8.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-8 col-lg-4">
						<a class="lightbox" href="img/5.jpg">
							<img class="img-fluid" src="img/5.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-12 col-md-8 col-lg-4">
						<a class="lightbox" href="img/6.jpg">
							<img class="img-fluid" src="img/6.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-8 col-lg-4">
						<a class="lightbox" href="img/7.jpg">
							<img class="img-fluid" src="img/7.jpg" alt="Gallery Images">
						</a>
					</div> 
					<div class="col-sm-6 col-md-8 col-lg-4">
						<a class="lightbox" href="img/4.jpg">
							<img class="img-fluid" src="img/4.jpg" alt="Gallery Images">
						</a>
					</div>
                    <div class="col-sm-6 col-md-8 col-lg-4">
						<a class="lightbox" href="img/11.jpg">
							<img class="img-fluid" src="img/11.jpg" alt="Gallery Images">
						</a>
					</div>
                    <div class="col-sm-6 col-md-8 col-lg-4">
						<a class="lightbox" href="img/9.jpg">
							<img class="img-fluid" src="img/9.jpg" alt="Gallery Images">
						</a>
					</div>
                    <div class="col-sm-6 col-md-8 col-lg-4">
						<a class="lightbox" href="img/10.jpg">
							<img class="img-fluid" src="img/10.jpg" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>   
        </div>
    <div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
        <i class="bi bi-telephone-fill"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+01 123-456-7890
						</p>
					</div>
				</div>
				<div class="col-md-4">
        <i class="bi bi-envelope-fill"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							yourmail@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
        <i class="bi bi-geo-alt-fill"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							Lucknow , India
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
  <footer class="footer-area bg-f">
		<div class="container">
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="www.facebook.com"><i class="bi bi-facebook"></i></a></li>
						<li class="list-inline-item"><a href="www.twitter.com"><i class="bi bi-twitter"></i></a></li>
						<li class="list-inline-item"><a href="www.instagram.com"><i class="bi bi-instagram"></i></a></li>
					</ul>
		</div>
	</footer>
  </body>
</html>