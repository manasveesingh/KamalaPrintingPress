<!DOCTYPE html>
<html>
<head>
	<title>KAMALA PRINTING PRESS | MAXIMA EXB 35</title>
	<meta charset="utf-8">
	<meta name="KAMALA PRINTING PRESS,MAXIMA EXB 35,kamala printing press"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="shortcut icon" href="img/logo.jpg"/>
	<link rel="stylesheet" type="text/css" href="css/main.css"/>
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>
	<div class="header">
		<a href="index.php"><img class="logo" src="img/logo.jpg"></a>
	</div>
	
	<div class="navigation-bar">
		<?php include ('nav.php'); ?>
	</div>
	
	<div class="section-tagline">
		<a href="index.php">Home</a>&nbsp<i class="fa fa-2x fa-angle-double-right" aria-hidden="true"></i>&nbsp<span>Services</span>&nbsp<i class="fa fa-2x fa-angle-double-right" aria-hidden="true"></i>&nbsp<span>Maxima Exa 35</span>
	</div>

	<div class="web-section">
		<div class="container">
			<div class="col-md-12">
				<div class="services-group">
					<h4 class="services-title">MAXIMA EXB 35</h4>
					<div class="dotted-hr"></div>
					<div class="services-description">
						<p class="message">
							The 25x35.5inch Maxima Exb 35 automatic die-cutting machine is targeted at the mid-sized and large-sized packaging firms. We have added features which assist smooth operation and self-diagnosis for faulty set-ups plus various safety measures to the machine.</br></br>

							The machine  is equipped with an optional feature of zero-gripper system which is useful  for  producing large size cartons especially for textile packaging.  It  helps  in  reducing  wastage  caused  due  to gripper allowances and makes the printer more productive. 
						</p>
					</div>	

					<div class="services-group-section">
						<h4 class="services-group-section-headline"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>&nbsp Technical Specifications:</h4>
						<table class="table table-bordered">
					      <tbody>
						    	<tr>
							        <td>Maximum Sheet Size</td>
							        <td>905 mm x 635 mm (35.63 x 25 inch)</td>
						      	</tr>
						     	<tr>
							        <td>Minimum Sheet Size</td>
							        <td>355 mm x 305 mm (14 x 12 inch)</td>
						      	</tr>
						      	<tr>
						        	<td>Maximum Cutting Size</td>
						        	<td>895 mm x 620 mm (35.23 x 24.40 inch)</td>
						      	</tr>
						      	<tr>
						      		<td>Paper Thickness</td>
						      		<td>0.1 mm to 1.5 mm</td>
						      	</tr>
						      	<tr>
						      		<td>Maximum Cutting Pressure</td>
						      		<td>180 ton</td>
						      	</tr>
						      	<tr>
						      		<td>Gripper Margin Setting</td>
						      		<td>8 – 14 mm</td>
						      	</tr>
						      	<tr>
						      		<td>Maximum Cutting Speed</td>
						      		<td>5000 sheets/hour</td>
						      	</tr>
						      	<tr>
						      		<td>Total Power</td>
						      		<td>705 kW</td>
						      	</tr>
						      	<tr>
						      		<td>Size of Machine</td>
						      		<td>L 3.9 mtr. X W 3.2 mtr. X H 1.9 mtr.</td>
						      	</tr>
						      	<tr>
						      		<td>Total Weight</td>
						      		<td>8 ton approx..</td>
						      	</tr>	
					    	</tbody>
					    </table>
					</div>
				</div>

				<h4 class="services-group-section-headline"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
							&nbsp Gallery</h4>
				<div class="row">
					<div class="column">
						<img src="img/100_1652.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
					</div>
					<div class="column">
						<img src="img/100_1653.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
					</div>
					<div class="column">
						<img src="img/100_1653.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
					</div>
				</div>

				<div id="myModal" class="modal">
					<span class="close cursor" onclick="closeModal()">&times;</span>
				  	<div class="modal-content">

					  <div class="mySlides">
					    	<div class="numbertext">1 / 3</div>
					      	<img src="img/100_1652.jpg" style="width:100%">
					    </div>

					    <div class="mySlides">
					    	<div class="numbertext">2 / 3</div>
					      	<img src="img/100_1653.jpg" style="width:100%">
					    </div>

					    <div class="mySlides">
					      	<div class="numbertext">3 / 3</div>
					      	<img src="img/100_1653.jpg" style="width:100%">
					    </div>
					   		    
					    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					    <a class="next" onclick="plusSlides(1)">&#10095;</a>

					    <div class="caption-container">
					      	<p id="caption"></p>
					    </div>
					</div>
				</div>	

				
			</div>
		</div>
	</div>
<?php include ('footer.php') ?>			
</body>
<script type="text/javascript" src="js/main.js"></script>
</html>