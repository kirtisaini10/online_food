<?php
include 'db.php';
if(isset($_GET['id'])){
  $user_id = $_GET['id'];
}
else{
  $user_id = '%';
}
$result = mysqli_query($conn, "SELECT * FROM users where id LIKE '$user_id';");
while($row = mysqli_fetch_array($result)){
$name = $row['name'];	
$address = $row['address'];
$contact = $row['contact'];
$email = $row['email'];
$username = $row['username'];
}
		?>
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
  width:100%;
  height:100%;
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
.font{
   font-size:80px;
   font-family:cursive;
   color:white;
   float:left;
}


    </style>
  </head>
  <body>
  <div class="nav">
          <div  id="logo">
            <a href="index.php"><img src="img/logo.jpg" height="100%" width="250px"></a>
          </div>
            <a href="order_food.php" class="nav-link">Order Food</a>
            <a href="user_order.php" class="nav-link">All Orders</a>
            <a href="edit details.php" class="nav-link">Edit Details</a>
            <a href="logout.php" class="nav-link">Logout</a>
          </div>
        <div class="front">
        <section id="content">


  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h2 class="text-center">User Details</h2>
      </div>
    </div>
  </div>

<div class="container">
  <p class="text-center">Edit your details here which are required for delivery and contact.</p>
  <div class="divider"></div>
    <div class="row">
      <div class="col s12 m4 l3">
        <h3 class="header">Details</h3>
      </div>
<div>
  <hr>
        <div class="card-panel">
          <div class="row">
            <form class="form-group"  method="post" action="details.php" novalidate="novalidate"class="col s12">
              <div class="row">
                <div class="input-field col s12">
                  <i class="mdi-action-account-circle prefix"></i>
                  <label for="username" class="lable-control">Username</label>
                  <input class="form-control" name="username"  type="text" value="<?php echo $username;?>" data-error=".errorTxt1">
                 
      <div class="errorTxt1"></div>
                </div>
              </div>					
              <div class="row">
                <div class="input-field col s12">
                  <i class="mdi-action-account-circle prefix"></i>
                  <label for="name" class="lable-control">Name</label>
                  <input class="form-control" name="name"  type="text" value="<?php echo $name;?>" data-error=".errorTxt2">
                 
       <div class="errorTxt2"></div>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="mdi-communication-email prefix"></i>
                  <label for="email" class="lable-control">Email</label>
                  <input class="form-control" name="email"  type="email" value="<?php echo $email;?>" data-error=".errorTxt3">
                  
      <div class="errorTxt3"></div>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="mdi-action-lock-outline prefix"></i>
                  <label for="password" class="lable-control">Password</label>
                  <input class="form-control" name="password" type="password" data-error=".errorTxt4">
                 
      <div class="errorTxt4"></div>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="mdi-action-account-circle prefix"></i>
                  <label for="phone" class="lable-control">Contact</label>
                  <input class="form-control" name="phone"  type="number" value="<?php echo $contact;?>" data-error=".errorTxt5">
                  
      <div class="errorTxt5"></div>
                </div>
              </div>					  
              <div class="row">
                <div class="input-field col s12">
                  <i class="mdi-action-home prefix"></i>
                  <label for="address" class="lable-control">Address</label>
                  <textarea name="address" class="form-control" data-error=".errorTxt6"><?php echo $address;?></textarea>
                  
      <div class="errorTxt6"></div>
                </div>
                <hr>
                <div class="row">
                  <div class="input-field col s12">
                    <button class="btn btn-info btn-lg btn-block"  type="submit" name="action">Submit
                      <i class="mdi-content-send right"></i>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    <hr>
    
  </div>


</section>

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