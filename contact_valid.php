<!DOCTYPE html>
<html>
<head>
	<title>Puppzilla</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Capriola' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Candal' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

	<nav class="navbar navbar-default" style="border-style: none;background-color: #98cbe1;  overflow: hidden; position: fixed; top: 0; width: 100%; z-index: 10;">
  		
  		<div class="container-fluid" id="container-fluid">
    		
    		<div class="navbar-header">

      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="margin-top: 15px; border-style: none; background-color: #006bb3;">
        				<span class="fa fa-bars" style="color: #fff; font-size: 20px; " onMouseOver="this.style.color='lightblue'"
       					onMouseOut="this.style.color='#fff'"></span>                      
      			</button>

      			<a class="navbar-brand" href="#"><img src="images/navbrand.png" class="navbrand"></a>

    		</div>

		    <div class="collapse navbar-collapse" id="myNavbar" style="border-style: none;">
		    	<center>
			      	<ul class="nav navbar-nav navbar-right">
			        	<li class="nav-item">
							<a href="index.html" style="color: #001a33;" onMouseOver="this.style.color='#006bb3'"
	       					onMouseOut="this.style.color='#001a33'">HOME</a>
						</li>
						<li class="nav-item">
							<a href="food.html" style="color: #001a33;" onMouseOver="this.style.color='#006bb3'"
	       					onMouseOut="this.style.color='#001a33'">FOOD</a>
						</li>
						<li class="nav-item">
							<a href="health.html" style="color: #001a33;" onMouseOver="this.style.color='#006bb3'"
	       					onMouseOut="this.style.color='#001a33'">HEALTH</a>
						</li>
						<li class="nav-item">
							<a href="training.html" style="color: #001a33;" onMouseOver="this.style.color='#006bb3'"
	       					onMouseOut="this.style.color='#001a33'">TRAINING</a>
						</li>
						<li class="nav-item">
							<a href="breeds.html" style="color: #001a33;" onMouseOver="this.style.color='#006bb3'"
	       					onMouseOut="this.style.color='#001a33'">BREEDS</a>
						</li>
						<li class="nav-item" style="background-color: #fff; border-radius: 4px;">
							<a href="contact.html" style="color: #001a33;" onMouseOver="this.style.color='#006bb3'"
	       					onMouseOut="this.style.color='#001a33'">CONTACT</a>
						</li>
	      			</ul>
      			</center>
    		</div>
  		</div>
	</nav>




	<div class="container-fluid" style="margin-top: 100px;">
		<center><h2 class="caption"> Get in Touch </h2><br>
		<p class="sub-cap">Want to get in touch? We'd love to hear from you. Here's how you can reach us...</p></center>

		<div class="row">
			<div class="col-lg-6">
				<div><center>
					<img src="images/contact_img.png" style="margin-top: 60px;"></center>
				</div>
			</div>
				
			<div class="col-lg-6">
				<div class="mail_bg">
					<center>
						<h2 class="drop"><i class="fa fa-paper-plane"></i>&emsp;Drop us a line</h2>
						<form method="POST" action="">
							<input required="" class="form-control" type="text" name="name" placeholder="Name"><br>
							<input required="" class="form-control" type="email" name="email" placeholder="E-mail"><br>
							<input required="" class="form-control" type="number" name="mobile" placeholder="Phone"><br>
							<textarea required="" rows="5" class="form-control" type="text" name="message" placeholder="Your Message"></textarea> <br>
							<input class="btn btn-primary" type="submit" name="" value="Send Message" style="background-color: #006bb3;">
						</form>
						<?php
				
		            		$userName=$_POST['name'];
		            		$userEmail=$_POST['email'];
		            		$userMessage=$_POST['message'];
		            
		            
		            		// user side 
		            
		            		$sendSubject = "Confirmation Mail" ;
		            		$sendReplymsg = "Hello".$userName.", Thank you for reaching out to us. We'll contact you shortly :) .";
		            
		            
		            		// middle man
		            		$Replier = "info@puppzilla.co.in";
		            
		            
		            		// sender side
		            
		            		$adminEmail = "csubhradipta@gmail.com";
		            		$adminSubject = "New Enquiry";
		            		$adminText = "Check.\n Details --\n Name :".$userName."\nMessage:".$userMessage."." ;
		            
		            		
		            		if(mail($userEmail, $sendSubject, $sendReplymsg, $Replier) && mail($adminEmail, $adminSubject, $adminText, $Replier))
		            		{
		            		    
		                        echo "<p id='success' >".'Your message has been sent successfully.'."</p>";
		                    } 
		                    else
		                    {
		                        
		                        echo "<p  id='fail'>".'Unable to send message. Please try again.'."</p>";
		                    }


		            	?>
		            	
		            	<script>
		            	    	setTimeout(function(){
		                        document.getElementById("success").innerHTML = '';
		                        }, 3000);
		                        setTimeout(function(){
		                        document.getElementById("fail").innerHTML = '';
		                        }, 3000);
		            	</script>
					</center>
				</div>      
			</div>
		</div>
	</div>


	<center>
		<div class="container-fluid">
			<div class="row" id="bg">
				<h2 class="drop">Contact Information</h2>
				<div class="col-lg-4">
					<div>
						<h3 class="det"><i class="fa fa-map-marker-alt" style="color: #006bb3;"></i>&ensp;Address</h3>
						<p class="addr">3A, Amherst Street<br>Kolkata - 700006</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div>
						<h3 class="det"><i class="fa fa-envelope" style="color: #006bb3;"></i>&ensp;E-mail</h3>
						<p class="addr">info@puppzilla.co.in</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div>
						<h3 class="det"><i class="fa fa-phone-alt" style="color: #006bb3;"></i>&ensp;Call</h3>
						<p class="addr">+91 79803 97413</p>
					</div>
				</div>
			</div>

			<div class="row" id="bg">
				<div class="col-lg-2"></div>
				<div class="col-lg-8">
					<h2 class="drop">Subscribe to our E-Magazine</h2><br>
					<input type="email" name="" placeholder="Your Email" class="form-control"><br>
					<input type="submit" value="SUBSCRIBE" name="" class="subscribe">

				</div>
				<div class="col-lg-2"></div>
			</div>
		</div>
	</center>

	<footer>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-5">
					<br><br>
					<div class="footer_note"><center>
						<p class="copy1"><b>&copy;</b> Copyright Reserved by <b>Subhradipta Choudhury.</b></p>
						<p class="copy2">The pictures &amp; contents used here are only for college project purpose.</p></center>
					</div>
					<br><br>
				</div>
				<div class="col-lg-3">
					<br><br>
					<center>
						<h4 class="connect" style="">CONNECT WITH US</h4>
						<div style="align-items: center;">


							<a href="https://www.facebook.com/profile.php?id=100009449073945" style="text-decoration: none;">
								<div class="icon" id="facebook">
									<center>
										<i class="fab fa-facebook-f"></i>
									</center>
								</div>
							</a>

							<a href="#" style="text-decoration: none;">
								<div class="icon" id="twitter">
									<center>
										<i class="fab fa-twitter"></i>
									</center>
								</div>
							</a>

							<a href="#" style="text-decoration: none;">
								<div class="icon" id="instagram">
									<center>
										<i class="fab fa-instagram"></i>
									</center>
								</div>
							</a>

							<a href="mailto:info@puppzilla.co.in?cc=csubhradipta@gmail.com" style="text-decoration: none;">
								<div class="icon" id="gmail">
									<center>
										<i class="far fa-envelope"></i></i>
									</center>
								</div>
							</a>

							<a href="https://wa.me/917980397413" style="text-decoration: none;">
								<div class="icon" id="whatsapp">
									<center>
										<i class="fab fa-whatsapp"></i>
									</center>
								</div>
							</a>

						</div>	
					</center>
					<br><br>
				</div>
				<div class="col-lg-4" style="">
					<br><br>
					<center><h4 class="connect" style="padding-bottom: 6px;">SUBSCRIBE TO OUR E-MAGAZINE</h4>
					<input type="email" name="" placeholder="Your Email" class="form-control" style="width: 80%;"></center>
					<br><br>
				</div>
			</div>
		</div>
	</footer>
	
</div>
</body>
</html>