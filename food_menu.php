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
            <a href="food_menu.php" class="nav-link">Food Menu</a>
            <a href="all_orders.php" class="nav-link">All Orders</a>
            <a href="users.php" class="nav-link">Users</a>
            <a href="logout.php"class="nav-link">Logout</a>
        </div>
        <div class="front">     
        <section id="content">

<!--breadcrumbs start-->
<div id="breadcrumbs-wrapper">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h2 class="text-center">Food Menu</h2>
      </div>
    </div>
  </div>
</div>
<!--breadcrumbs end-->


<!--start container-->
<div class="container">
  <p class="text-center">Add, Edit or Remove Menu Items.</p>
  <hr>
  <form  method="post" action="menu-router.php" novalidate="novalidate">
    <div class="row">
      <div class="col s12 m4 l3">
        <h3>Order Food</h3>
      </div>
      <div>
        <table  class="table" cellspacing="6" >
              <tr>
                <th>Name</th>
                <th>Item Price/Piece</th>
                <th>Available</th>
              </tr>
        <tbody>      
        <?php
        require('db.php');
        $result = mysqli_query($conn, "SELECT * FROM items");
        while($row = mysqli_fetch_array($result))
        {
            echo '<tr><td><div class="form-group"><label for="'.$row["id"].'_name">Name</label>';
            echo '<input class="form-control" value="'.$row["name"].'" id="'.$row["id"].'_name" name="'.$row['id'].'_name" type="text" data-error=".errorTxt'.$row["id"].'"><div class="errorTxt'.$row["id"].'"></div></td>';					
            echo '<td><div class="form-group "><label  for="'.$row["id"].'_price">Price</label>';
            echo '<input class="form-control" value="'.$row["price"].'" id="'.$row["id"].'_price" name="'.$row['id'].'_price" type="text" data-error=".errorTxt'.$row["id"].'"><div class="errorTxt'.$row["id"].'"></div></td>';                   
            echo '<td>';
            if($row['deleted'] == 0){
                $text1 = 'selected';
                $text2 = '';
            }
            else{
                $text1 = '';
                $text2 = 'selected';						
            }
            echo '<select class="form-select form-select-lg mb-3" name="'.$row['id'].'_hide">
              <option value="1"'.$text1.'>Available</option>
              <option value="2"'.$text2.'>Not Available</option>
            </select></td></tr>';
        }
        ?>
            </tbody>
</table>
      </div>
      <div class="text-center mb-5">
                      <button  class="btn btn-primary btn-lg btn-block  " type="submit" name="action">Modify
                      <i class="bi bi-send-fill"></i>
                      </button>
                    </div>
    </div>
    </form>
    <hr>
  <form class="" method="post" action="add-item.php" novalidate="novalidate">
    <div class="row">
      <div class="col s12 m4 l3">
        <h3>Add Item</h3>
      </div>
      <div>
<table class="table">
            <thead>
              <tr>
                <th data-field="id">Name</th>
                <th data-field="name">Item Price/Piece</th>
              </tr>
            </thead>

            <tbody>
        <?php
            echo '<tr><td><div class="form-group"><label for="name">Name</label>';
            echo '<input class="form-control" name="name" type="text" data-error=".errorTxt01"><div class="errorTxt01"></div></td>';					
            echo '<td><div class="form-group"><label for="price" class="">Price</label>';
            echo '<input class="form-control" name="price" type="text" data-error=".errorTxt02"><div class="errorTxt02"></div></td>';                   
            echo '<td></tr>';
        ?>
            </tbody>
</table>
      </div>
      <div class="input-field col s12">
                      <button  class="btn btn-primary btn-lg btn-block" type="submit" name="action">Add
                      <i class="bi bi-send-fill"></i>
                      </button>
                    </div>
    </div>
    </form>			
   <hr>
    
  </div>
</div>
</div>
<!--end container-->

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