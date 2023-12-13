<?php  
session_start(); 
if(isset($_SESSION['admin_sid']) || isset($_SESSION['customer_sid']))
{
	header("location:index.php");
}
else{
?>

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
    background-color:#cccccc;
}
.nav {
  text-align: right;
  background-color:white;
  height: 100px;
  border-bottom: 1px solid #dee2e6;
  margin-top: 5px;
}

.nav-link {
  text-decoration: none;
  display: inline-block;
  padding: 13px 13px;
  color:gray;
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
.b{
                font-size:15px;
                text-align:center;
                margin-top:10px;
            }

    </style>
  
  </head>
  <body>
        <div class="nav">
          <div  id="logo">
            <a href="index.php"><img src="img/logo.jpg" height="100%" width="250px"></a>
          </div>
            <a href="index.php" class="logo"><img src=""/></a>
            <a href="index.php" class="nav-link">Home</a>
            <a href="gallery.php" class="nav-link">Gallery</a>
            <a href="about.php" class="nav-link">About</a>
            <a href="login.php" class="nav-link">Login</a>
          </div>
         <div class="front"> 
         <div class="container">  
         <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="form-group" id="formValidate" method="post" action="register-router.php" novalidate="novalidate" class="col s12">
        <div class="row">
          <div class="input-field col s12 center">
            <h3 class="text-center">Register Now!</h3>
          </div>
        </div>
        <hr>
        <div class="row margin">
          <div class="input-field col s12">
           <label for="username" class="label-control">Username</label>
           <input name="username" id="username" class="form-control" type="text"  data-error=".errorTxt1">
			<div class="errorTxt1"></div>			
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
           <label for="name" class="label-control" class="center-align">Name</label>
           <input name="name" id="name" type="text" class="form-control" data-error=".errorTxt2">
			<div class="errorTxt2"></div>			
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
           <label for="password" class="label-control">Password</label>
           <input name="password" id="password" class="form-control" type="password" data-error=".errorTxt3">
			<div class="errorTxt3"></div>			
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
           <label for="phone" class="label-control">Phone</label>
           <input name="phone" id="phone" class="form-control" type="number" data-error=".errorTxt4">
			<div class="errorTxt4"></div>			
          </div>
        </div>
        <div class="input-field col s12">
        <span> </span>
        </div>		
        <hr>
        <div class="row">
          <div class="input-field col s12">
			<a href="javascript:void(0);" onclick="document.getElementById('formValidate').submit();" class="btn btn-info btn-lg btn-block">Register</a>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Already have an account? <a href="login.php">Login here</a></p>
          </div>
        </div>
      </form>
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
  <script type="text/javascript">
    $("#formValidate").validate({
        rules: {
            username: {
                required: true,
                minlength: 5
            },
            name: {
                required: true,
                minlength: 5				
            },
			password: {
				required: true,
				minlength: 5
			},
            phone: {
				required: true,
				minlength: 4
			},
        },
        messages: {
            username: {
                required: "Enter username",
                minlength: "Minimum 5 characters are required."
            },
            name: {
                required: "Enter name",
                minlength: "Minimum 5 characters are required."
            },
			password: {
				required: "Enter password",
				minlength: "Minimum 5 characters are required."
			},
            phone:{
				required: "Specify contact number.",
				minlength: "Minimum 4 characters are required."
			},		
        },
        errorElement : 'div',
        errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }
        }
     });
    </script>
  </body>
</html>
<?php
}
?>