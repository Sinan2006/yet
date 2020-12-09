<?php
if(isset($_POST['submit'])){
	$to = "rajeshkarmaker108@gmail.com";
//	mrvtechnohub@gmail.com
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$sub = "contact";
	
	$body = "Name: " . $name . "\r\n" . "Email: " . $email . "\r\n" . "Message: " . $message;
	
	$send = mail($to , $sub , $body);
	
	if(!$send){
		echo '<p style="text-align:center;">Message not sent</p>';
	}
	else{
		echo '<p style="text-align:center;">Message Sent Successfully</p>';
	}
}
?>
<!doctype html>
<html lang="en">
<head>
	<title>MRV Techno Hub | Contact</title>
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
		<a style="color:white;" href="" class="ghumabo">Contact Us</a>
		<label for="chk" style="color:white;" class="hide-menu-btn">
			<i style="color:white;" class="fas fa-times"></i>
		</label>
	</ul>
</header>




<!---------------------------------------------------------Top info Section--------------------------------------------------------->
<section class="top-info-sec">
	<h1 class="top-info-head">Contact</h1>
</section>





<!---------------------------------------------------------Contact Section--------------------------------------------------------->
<section class="contact-section" >
	<div class="container-of-contact-section" >
		<div class="contactinfo" >
			<div>
				<h2 class="contact-info-heading" >Contact Info</h2>
				<ul class="info" >
					<li>
						<span><i class="fas fa-map-marked-alt"></i> Dubai United Arab Emirates
						</span>
					</li>
					<li>
						<span>
							<i class="fas fa-envelope"></i>
							mrvtechnohub @gmail.com
						</span>
					</li>
					<li>
						<span>
							<i class="fas fa-phone-alt"></i>
							+971509168276		
						</span>
					</li>
				</ul>
			</div>
			
				<ul class="sci" >
					<li><a href="" ><i class="fab fa-facebook"></i></a></li>
					<li><a href="" ><i class="fab fa-instagram"></i></a></li>
<!--					<li><a href="" ><i class="fab fa-twitter"></i></a></li>-->
<!--					<li><a href="" ><i class="fab fa-youtube"></i></a></li>-->
<!--					<li><a href="" ><i class="fab fa-linkedin"></i></a></li>-->
				</ul>
		</div>
		
		<div class="contactForm" >
			<h2>Send a Message</h2>
			<form method="post" action="" id="contact-form" class="formBox">
				<div class="inputBox w50" >
					<input class="input" name="name" id="name" type="text" required="required">
					<span class="text" for="name" accesskey="U">Your Name<span class="red-sign" >*</span></span>
				</div>
				<div class="inputBox w50" >
					<input  class="input" name="email" id="email" type="text" required="required" >
					<span class="text" for="email" accesskey="E">Email Address<span class="red-sign" >*</span></span>
				</div>
				<div class="inputBox w100" >
					<textarea name="message"  id="message" required="required" ></textarea>
					<span class="text" for="message" accesskey="C">Your Message<span class="red-sign" >*</span></span>
				</div>
				<div class="inputBox w100" >
					<input name="submit" class="submit" id="contactus" value="Submit" type="submit">
				</div>
			</form>
		</div>
	</div>
</section>




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
		<a class="foot-2-link" href="">Contact</a>
	</div>
	<div class="foot-3 foot">
		<h2 class="foot-2-head">Get in Touch</h2>

		<p class="foot-3-email">mrvtechnohub@gmail.com</p>

		<a href="" class="landing-btn contact-foot-btn app-btn">Contact Us</a>
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