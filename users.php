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
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h2 class="text-center">User List</h2>
      </div>
    </div>
  </div>

<div class="container">
  <p class="text-center">Enable, Disable or Verify Users.</p>
  <hr>
  <div class="section">
  <form class="form-group" method="post" action="user-router.php" novalidate="novalidate">
    <div class="row">
      <div class="col s12 m4 l3">
        <h3>List of users</h3>
      </div>
      <div>
<table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Address</th>	
                <th scope="col">Role</th>
                <th scope="col">Verified</th>
                <th scope="col">Enable</th>
                <th scope="col">Wallet</th>						
              </tr>
            </thead>
            <tbody>
        <?php
        require('db.php');
        $result = mysqli_query($conn, "SELECT * FROM users");
        while($row = mysqli_fetch_array($result))
        {
            echo '<tr><td>'.$row["name"].'</td>';
            echo '<td>'.$row["email"].'</td>';
            echo '<td>'.$row["contact"].'</td>';   
            echo '<td>'.$row["address"].'</td>';      					
            echo '<td><select name="'.$row['id'].'_role">
              <option value="Administrator"'.($row['role']=='Administrator' ? 'selected' : '').'>Administrator</option>
              <option value="Customer"'.($row['role']=='Customer' ? 'selected' : '').'>Customer</option>
            </select></td>';
            echo '<td><select name="'.$row['id'].'_verified">
              <option value="1"'.($row['verified'] ? 'selected' : '').'>Verified</option>
              <option value="0"'.(!$row['verified'] ? 'selected' : '').'>Not Verified</option>
            </select></td>';	
            echo '<td><select name="'.$row['id'].'_deleted">
              <option value="1"'.($row['deleted'] ? 'selected' : '').'>Disable</option>
              <option value="0"'.(!$row['deleted'] ? 'selected' : '').'>Enable</option>
            </select></td>';
            $key = $row['id'];
            $sql = mysqli_query($conn,"SELECT * from wallet WHERE customer_id = $key;");
            if($row1 = mysqli_fetch_array($sql)){
                $wallet_id = $row1['id'];
                $sql1 = mysqli_query($conn,"SELECT * from wallet_details WHERE wallet_id = $wallet_id;");
                if($row2 = mysqli_fetch_array($sql1)){
                    $balance = $row2['balance'];
                }
            }
            echo '<td><label for="balance">Balance</label><input id="balance" name="'.$row['id'].'_balance" value="'.$balance.'" type="number" data-error=".errorTxt01"><div class="errorTxt01"></div></td></tr>'; 					
        }
        ?>
            </tbody>
</table>
      </div>
      <div class="input-field col s12">
                      <button class="btn btn-info btn-lg btn-block" type="submit" name="action">Modify
                        <i class="mdi-content-send right"></i>
                      </button>
                    </div>
    </div>
    </form>
  <form class="form-group" method="post" action="add-users.php" novalidate="novalidate">
    <div class="row">
      <div class="col s12 m4 l3">
        <h3>Add User</h3>
      </div>
      <div>
<table class="table">
            <thead>
              <tr>
                <th scope="col">Username</th>
                <th scope="col">Password</th>							
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone number</th>
                <th scope="col">Address</th>	
                <th scope="col">Role</th>
                <th scope="col">Verified</th>
                <th scope="col">Enable</th>		
              </tr>
            </thead>

            <tbody>
        <?php
            echo '<tr><td><label for="username">Username</label><input id="username" name="username" type="text" data-error=".errorTxt02"><div class="errorTxt02"></div></td>';   									
            echo '<td><label for="password">Password</label><input id="password" name="password" type="password" data-error=".errorTxt03"><div class="errorTxt03"></div></td>';   									
            echo '<td><label for="name">Name</label><input id="name" name="name" type="text" data-error=".errorTxt04"><div class="errorTxt04"></div></td>';
            echo '<td><label for="email">Email</label><input id="email" name="email" type="email"></td>';
            echo '<td><label for="contact">Phone number</label><input id="contact" name="contact" type="number" data-error=".errorTxt05"><div class="errorTxt05"></div></td>';   
            echo '<td><label for="address">Address</label><input id="address" name="address" type="text" data-error=".errorTxt06"><div class="errorTxt06"></div></td>';   
            echo '<td><select name="role">
              <option value="Administrator">Administrator</option>
              <option value="Customer" selected>Customer</option>
            </select></td>';
            echo '<td><select name="verified">
              <option value="1">Verified</option>
              <option value="0" selected>Not Verified</option>
            </select></td>';	
            echo '<td><select name="deleted">
              <option value="1">Disable</option>
              <option value="0" selected>Enable</option>
            </select></td></tr>';					
        ?>
            </tbody>
</table>
      </div>
      <div class="input-field col s12">
                      <button  class="btn btn-info btn-lg btn-block" type="submit" name="action">Add
                        <i class="mdi-content-send right"></i>
                      </button>
                    </div>
    </div>
    </form>			
    <div class="divider"></div>
    
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