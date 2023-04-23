<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "leerichie@wp.pl";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact - Olsztyn Lakers</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="index.html" class="logo"><img src="images/logo1.png" alt=""></a>
				<ul id="navigation">
					<li class="selected">
						<a href="index.html">Home</a>
					</li>
					<li class="menu">
						<a href="about.html">About</a>
			
					</li>
					<li class="menu">
						<a href="schedule.html">Schedule</a>
					
					</li>
					<li>
						<a href="sponsors.html">Sponsors</a>
					</li>
					<!-- <li>
						<a href="gallery.html">Gallery</a>
					</li> -->
					<li>
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		</div>
		<div id="body" class="contact">
			<div class="header">
				<div>
					<h1>Contact</h1>
				</div>
			</div>
			<div class="body">
				<div>
					<div>
						<img src="images/check-in.png" alt="">
						<h1>Aleja Przyjaciół 29, 11-041 Olsztyn</h1>
						<p>AZS UWM Olsztyn Lakers - Klub Futbolu Amerykańskiego</p>
						<p>Treningi drużyny seniorskiej:</p>
						<p>Czwartek -> 19:00 @ Manor Hotel | Niedziela -> 16:00 @ Manor Hotel</p>
						</p>
					</div>
				</div>
			</div>
			<div class="footer">
				<div class="contact">
					
					<h2>Thank you for reaching out, we will be in touch shortly!</h2>
				<p class="back"> Wróc do <a href="index.html">Home</a>.</p>

				</div>
				<div class="section">
					<h1>Napisz, zadzwoń <br> lub <br> wpadnij na trening!</h1>
					<p>Tomasz Sawicki</p> 
					<p>730 776 996 </p><br>
					<p>Krysztof Mrówka</p>
					<p>510 188 692</p><br>
					<p>azs.uwm.olsztyn.lakers@gmail.com</p>
				</div>
			</div>
			<div class="sponsors-row">
				<div class="sponsors-column">
					<a href="https://warmia.mazury.pl/">
					<img src="/images/lakers sponsors/warmia mazury.pdf" alt="Warmia-Mazury" style="width:100%">
				</a>
				</div>
				<div class="sponsors-column">
					<a href="https://uwm.edu.pl/">
					<img src="/images/lakers sponsors/UWM.pdf" alt="UWM" style="width:100%">
				</a>
				</div>
				<div class="sponsors-column">
					<a href="https://olsztyn.eu/o-olsztynie.html">
					<img src="/images/lakers sponsors/Miasto Olsztyn.pdf" alt="Miasto Olsztyn" style="width:100%">
				</a>
				</div>
				<div class="sponsors-column">
					<a href="https://www.azs.pl/">
					<img src="/images/lakers sponsors/AZS.pdf" alt="AZS" style="width:100%">
				</a>
				</div>
				<div class="sponsors-column">
					<a href="http://www.ziajkatrans.pl/">
					<img src="/images/lakers sponsors/Ziajka Trans.pdf" alt="" style="width:100%">
				</a>
				</div>
				<div class="sponsors-column">
					<a href="https://www.dietering.com/">
					<img src="/images/lakers sponsors/Dietering.pdf" alt="Dietering" style="width:100%">
				</a>
				</div>
				<div class="sponsors-column">
					<a href="https://www.facebook.com/STUDIO1stGapinski/">
					<img src="/images/lakers sponsors/Studio first fizjoterapia trening.pdf" alt="Studio 1st fizjoterapia" style="width:100%">
				</a>
				</div>
				<div class="sponsors-column">
					<a href="https://bogway.pl/">
					<img src="/images/lakers sponsors/Bogway.pdf" alt="Bogway" style="width:100%">
				</a>
				</div>
			</div>
		
			</div>
		</div>
		<div class="icon-bar">
			<a href="https://www.facebook.com/olsztynlakers/" class="facebook"><i class="fa fa-facebook"></i></a>
			<a href="https://www.instagram.com/olsztynlakers/?hl=en" class="instagram"><i class="fa fa-instagram"></i></a>
			<a href="https://mobile.twitter.com/PFL_liga" class="twitter"><i class="fa fa-twitter"></i></a>
			<a href="https://www.youtube.com/channel/UCnECwU3ZvQhZ12Rz5keg3dQ" class="youtube"><i class="fa fa-youtube"></i></a>
		  </div>
	</div>
	<div id="footer">
		<div>
		
			<p>&copy; 2023 Olsztyn Lakers. Created by AshR.</p>
		</div>
	</div>
</div>
</body>
</html>


';

?>