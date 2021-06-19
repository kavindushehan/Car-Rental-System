<?php
	include_once 'config.php';
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Car Rental System</title>
<link rel="stylesheet" type="text/css" href="styles/Home_styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="styles/footer.css">
<link rel="stylesheet" type="text/css" href="styles/stylesss.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" >
<link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="styles/tablestyles.css">


<meta charset="utf-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<script src="js/JavaScript.js"></script>

</head>
<body style="background-color:black">
<div style="background-color:orange; width:100%; height:195px; padding-bottom:20px">
<a href="index.html"><img src="images/LOGO11.png" width = "185" height = "185" class = "logo" style="border-radius:100px; padding-top:2px; padding-left:5px" align = "left"></a>
<div style="padding-top: 1px; padding-left: 10px; padding-right:150px;">
<header>
<center><h1 class="monospace"><b>EagleEye Rent-a-Car</b></h1></center>
<p style="position: relative; text-align:right; width:110%; font-size:18px"><a href="loginAs.html" style="text-decoration:none">LOG IN </a> | <a href="register.html" style="text-decoration:none">REGISTER</a></p>
</header>
</div>
</div>

<ul class="menu">
   <li class="menu"><a href="index.html"><i class="fa fa-home" id="nav-image"></i>Home</a></li>
   <li class="menu"><a href="about us.html"><i class="fa fa-user" id="nav-image"></i>About Us</a></li>
   <li class="menu"><a href="#"><i class="fa fa-usd" id="nav-image"></i>Rates</a></li>
   <li class="menu"><a href="contactUs.html"><i class="fa fa-phone" id="nav-image"></i>Contact Us</a></li>
</ul>



<div class="slideshow-container">

<div class="mySlides fade">
  <img class="imgslides" src="images/img03.jpg" style="width:100%">
  <div class="textslide">RATES</div>
</div>

<div class="mySlides fade">
  <img class="imgslides" src="images/img06.jpg" style="width:100%">
  <div class="textslide">RATES</div>
</div>

<div class="mySlides fade">
  <img class="imgslides" src="images/img08.jpg" style="width:100%">
  <div class="textslide">RATES</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
	showSlides();	
</script>

<div class="content">
		<p>Not only are our vehicles and service of top quality, we also believe in providing a Sri Lanka rent a car service at competitive rates. Since we have a wide range of rates for different kinds of vehicles, our prices are affordable to everyone ranging from budget / economy to luxury.</p>

		<p>Special discounts are also given on long time hires and in case of large mileages in a few days.</p>
		<p>All the rates are given in Sri Lankan Rupees.We also accept Master Card and Visa credit cards, and travellers cheques.</p>
</div>
	



<div class="BoxesRate">

	<div class="columnRate">
		<div class="cardRate">
			<img src="images/img10.jpg" width = "100%" height = "160">
			<h2>SELF DRIVE RATES</h2>
			<p>A quick look at the self drive rates offered by us</p>
			
		</div>
	</div>
	
	<div class="columnRate">
		<div class="cardRate">
			<img src="images/img11.jpg" width = "100%" height = "160">
			<h2>WITH DRIVER RATES</h2>
			<p>Should you want to tour around the country with ease we will gladly assist you in selecting a wide variety of cars with driver</p>
			
		</div>
	</div>

</div>
<center>
<div class="table-responsive">
		<table>
				<tr class="table-header">
					<th class="darkgrayB">Type</th>
					<th class="darkgrayB">ID</th>
					<th class="darkgrayA">Name</th>
					<th class="darkgrayA">Rate per Month</th>
					<th class="darkgrayA">Rate per Week</th>
					<th class="darkgrayA">Excess Mileage Over 80 Km per Day</th>
				</tr>
			
			
			<?php
			
			
			$sql = "select * from vehicles";
			$result = $conn->query($sql);
			
			if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
					echo"<tr><td class='text-leftB'>".$row["Type"]."</td><td class='text-leftB'>".$row["ID"]."</td><td class='text-leftA'>".$row["Name"]."</td><td class='text-leftB'>".$row["Per_Month"]."</td><td class='text-leftB'>".$row["Per_Week"]."</td><td class='text-leftB'>".$row["Excess_Mileage"]."</td></tr>";
				}
			}
			else{
				echo"Empty Table";
			}
			
			echo"</table></div><br>";
			$conn->close();
			?>

















		
</center>


<footer style="background-color:#283c5f; width:100%; height:200px; padding-top:2px">
<div class="main-content">
<div class="left box1">
<h4><a href="#">QUICK LINKS</a></h4>
<h5><a href="index.html">HOME</a></h5>
<h5><a href="https://distancecalculator.globefeed.com/Sri_Lanka_Distance_Calculator.asp">DISTANCE CALCULATOR</a></h5>
<h5><a href="terms.html">TERMS & CONDITIONS</a></h5>
</div>
<div class="left box2">
<h4><a href="#"></a></h4>
<h5><a href="#">RATES</a></h5>
<h5><a href="about us.html">ABOUT US</a></h5>
<h5><a href="contactUs.html">CONTACT US</a></h5>
<h5><a href="privacy.html">PRIVACY POLICY</a></h5>
</div>

<img src="images/LOGO12.png" width="400px" height="170px" class="logo" style="  padding-top:15px; padding-left:10px; padding-right:230px" align="center">

<div class="right box3">
<h4><font color="white">FOLLOW US</font></h4>
<div class="social">
<a href="#"><span class="fa fa-facebook"></span></a>
<a href="#"><span class="fa fa-twitter"></span></a>
<a href="#"><span class="fa fa-instagram"></span></a>
<a href="#"><span class="fa fa-youtube"></span></a>
</div>
</div>
</div>

</footer>
<h5 align="center"><font color="white">Copyright 2020 © eagleeye.com . All Rights Reserved.</font></h5>
</body>



</html>


