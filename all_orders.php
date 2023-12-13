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
    <link href="style.min.css" type="text/css" rel="stylesheet">
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
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h2 class="text-center">All Orders</h2>
      </div>
    </div>
  </div>
<div class="container">
  <p class="text-center">List of orders by customers with details</p>
  <hr>
     
            <?php
            require('db.php');
            if(isset($_GET['status'])){
                $status = $_GET['status'];
            }
            else{
                $status = '%';
            }
            $sql = mysqli_query($conn, "SELECT * FROM orders WHERE status LIKE '$status';");
            echo '<div class="row">
        <div>
            <h3>List</h3>
            <ul class="list-group">';
            while($row = mysqli_fetch_array($sql))
            {
                $status = $row['status'];
                $deleted = $row['deleted'];
                echo '<li class="list-group-item">
                <i class="bi bi-list"></i>
                      <span class="collection-header">Order No. '.$row['id'].'</span>
                      <p><strong>Date:</strong> '.$row['date'].'</p>
                      <p><strong>Payment Type:</strong> '.$row['payment_type'].'</p>							  
                      <p><strong>Status:</strong> '.($deleted ? $status : '
                      <form method="post" action="edit-orders.php">
                        <input type="hidden" value="'.$row['id'].'" name="id">
                        <select name="status">
                        <option value="Yet to be delivered" '.($status=='Yet to be delivered' ? 'selected' : '').'>Yet to be delivered</option>
                        <option value="Delivered" '.($status=='Delivered' ? 'selected' : '').'>Delivered</option>
                        <option value="Cancelled by Admin" '.($status=='Cancelled by Admin' ? 'selected' : '').'>Cancelled by Admin</option>
                        <option value="Paused" '.($status=='Paused' ? 'selected' : '').'>Paused</option>								
                        </select>
                      ').'</p>
                      <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                      </li>';
                $order_id = $row['id'];
                $customer_id = $row['customer_id'];
                $sql1 = mysqli_query($conn, "SELECT * FROM order_details WHERE order_id = $order_id;");
                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE id = $customer_id;");
                    while($row3 = mysqli_fetch_array($sql3))
                    {
                    echo '<li class="list-group-item">
                    <div class="row">
                    <p><strong>Name: </strong>'.$row3['name'].'</p>
                    <p><strong>Address: </strong>'.$row['address'].'</p>
                    '.($row3['contact'] == '' ? '' : '<p><strong>Contact: </strong>'.$row3['contact'].'</p>').'	
                    '.($row3['email'] == '' ? '' : '<p><strong>Email: </strong>'.$row3['email'].'</p>').'		
                    '.(!empty($row['description']) ? '<p><strong>Note: </strong>'.$row['description'].'</p>' : '').'								
                    </li>';							
                    }
                while($row1 = mysqli_fetch_array($sql1))
                {
                    $item_id = $row1['item_id'];
                    $sql2 = mysqli_query($conn, "SELECT * FROM items WHERE id = $item_id;");
                    while($row2 = mysqli_fetch_array($sql2))
                        $item_name = $row2['name'];
                    echo '<li class="list-group-item">
                    <div class="row">
                    <div class="col s7">
                    <p class="collections-title"><strong>#'.$row1['item_id'].'</strong> '.$item_name.'</p>
                    </div>
                    <div class="col s2">
                    <span>'.$row1['quantity'].' Pieces</span>
                    </div>
                    <div class="col s3">
                    <span>Rs. '.$row1['price'].'</span>
                    </div>
                    </div>
                    </li>';
                }
                        echo'<li class="list-group-item">
                                <div class="row">
                                    <div class="col s7">
                                        <p class="collections-title"> Total</p>
                                    </div>
                                    <div class="col s2">
                                    <span> </span>
                                    </div>
                                    <div class="col s3">
                                        <span><strong>Rs. '.$row['total'].'</strong></span>
                                    </div>';										
                        if(!$deleted){
                        echo '<button class="btn btn-info btn-lg btn-block" type="submit" name="action">Change Status
                                      <i class="mdi-content-clear right"></i> 
                                </button>
                                </form>';
                        }
                        echo'</div></li>';
            }
            ?>
            </ul>
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