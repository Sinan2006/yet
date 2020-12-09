<?php
if(isset($_POST['submit'])){
	$to = "rajeshkarmaker108@gmail.com";
	//	mrvtechnohub@gmail.com
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$details = $_POST['details'];
	$sub = "Order";
	
	$body = "Name: " . $name . "\r\n" . "Email: " . $email . "\r\n" . "Phone: " . $phone . "\r\n" . "Order Details: " . $details;
	
	$send = mail($to , $sub , $body);
	
	if(!$send){
		echo '<p style="text-align:center;">Order failed</p>';
	}
	else{
		echo '<p style="text-align:center;">Order has been sent</p>';
	}
}
?>
<!doctype html>
<html lang="en">
<head>
	<title>MRV Techno Hub | Order</title>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/icon.png" type="image/png">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<!---------------------------------------------------------Header Section--------------------------------------------------------->
<header class="header black-mamba">
	<a href="index.html"><img src="img/logo.png" class="logo"></a>
	<input type="checkbox" id="chk">
	<label for="chk" style="color:white;" class="show-menu-btn">
		<i style="color:white;" class="fas fa-ellipsis-h"></i>
	</label>

	<ul class="bg-white-menu menu">
		<a style="color:white;" href="index.html" class="ghumabo">Home</a>
		<a style="color:white;" href="service.html" class="ghumabo">Services</a>
		<a style="color:white;" href="about.html" class="ghumabo">About Us</a>
		<a style="color:white;" href="contact.php" class="ghumabo">Contact Us</a>
		<label for="chk" style="color:white;" class="hide-menu-btn">
			<i style="color:white;" class="fas fa-times"></i>
		</label>
	</ul>
</header>




<!---------------------------------------------------------Top info Section--------------------------------------------------------->
<section class="top-info-sec">
	<h1 class="top-info-head">Place Order</h1>
</section>





<!---------------------------------------------------------order Section--------------------------------------------------------->
<form class="order-section" method="post" action="">
	<input type="text" name="name" class="order-inp" placeholder="Your Name">
	<input type="email" name="email" class="order-inp" placeholder="Your E-mail Address">
	<input type="text" name="phone" class="order-inp" placeholder="Your Phone number">
	<textarea type="text" name="details" class="order-details"  placeholder="Explain Your Project"></textarea>
	<input type="submit" name="submit" class="landing-btn web-btn order-submit" placeholder="Submit">
</form>




<!---------------------------------------------------------Footer Section--------------------------------------------------------->
<footer class="footer">
	<div class="foot-1 foot">
		<h2 class="foot-one-head">MRV Techno Hub<br>___ _</h2>
		<p class="foot-one-para">is an online based virtual company where people come to us in requirements of Websites or Apps.. We are Professional developers.. You can 100% trust us..</p>
	</div>
	<div class="foot-2 foot">

		<h2 class="foot-2-head">Quick Links</h2>

		<a class="foot-2-link" href="index.html">Home</a>
		<a class="foot-2-link" href="service.html">Services</a>
		<a class="foot-2-link" href="about.html">About</a>
		<a class="foot-2-link" href="contact.php">Contact</a>
	</div>
	<div class="foot-3 foot">
		<h2 class="foot-2-head">Get in Touch</h2>

		<p class="foot-3-email">mrvtechnohub@gmail.com</p>

		<a href="contact.php" class="landing-btn contact-foot-btn app-btn">Contact Us</a>
	</div>
</footer>
<div class="credit-area">
	<h2 class="credit">2020 Copyright &copy; MRV Techno Hub. All rights reserved.</h2>
</div>



<!----------Essensial Scripts----------->

<script type="text/javascript">
window.addEventListener("scroll", function(){
	var header = document.querySelector("header");
	header.classList.toggle("sticky", window.scrollY > 0);
})
</script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>