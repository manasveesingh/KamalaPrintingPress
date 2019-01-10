<!DOCTYPE html>
<html>
<head>
	<title>KAMALA PRINTING PRESS | GRAFICA NANO-PRINT SCREEN PRINTING</title>
	<meta charset="utf-8">
	<meta name="KAMALA PRINTING PRESS,GRAFICA NANO-PRINT SCREEN PRINTING,kamala printing press"/>
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
		<a href="index.php">Home</a>&nbsp<i class="fa fa-2x fa-angle-double-right" aria-hidden="true"></i>&nbsp<span>Services</span>&nbsp<i class="fa fa-2x fa-angle-double-right" aria-hidden="true"></i>&nbsp<span>Gracfica Nano Print</span>
	</div>

	<div class="web-section">
		<div class="container">
			<div class="col-md-12">
				<div class="services-group">
					<h4 class="services-title">GRAFICA NANO-PRINT SCREEN PRINTING</h4>
					<div class="dotted-hr"></div>
					<div class="services-description">
						<p class="message">
							NANO-PRINT is a semi-automatic screen printing machine for every common printer across the globe.
						</p>
						<p class="point-description">	
								 Print area 15” x 20”.</br>
								 Its easy to start and operate.</br>
								 Single Phase</br>
								 No compressor required.
						</p>
					</div>	
					
					<div class="services-group-section">
						<h4 class="services-group-section-headline"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>&nbsp Technical Specifications</h4>
						<table class="table table-bordered">
					      	<tbody>
						    	<thead>
							      <tr>
							        <th>Description</th>
							        <th>Model: GF-1520 Nano-Paint</th>
							      </tr>
							    </thead>
						    		<tr>
						    			<td>Max Print Area</td>
						    			<td>15” x 20” Inches (381 x 508 mm)</td>
						    		</tr>
						    		<tr>
						    			<td>Vacuum Bed</td>
						    			<td>22.8” x 27.8” (580 x 707 mm)</td>
						    		</tr>
						    		<tr>
						    			<td>Vacuum Bed Movement for Registration</td>
						    			<td>± 7 mm</td>
						    		</tr>
						    		<tr>
						    			<td>creen Frame Size</td>
										<td>26” x 30” (660 x 762 mm) min & 30” x 36” (762 x 914 mm) max</td>
									</tr>
									<tr>
										<td>Max Off-Contact</td>
										<td>10 mm</td>
									</tr>
									<tr>
										<td>Max Substrate Thickness</td>
										<td>5 ~ 7 mm (Depends on mesh tension)</td>
									</tr>
									<tr>	
										<td>Screen Frame Thickness</td>
										<td>1.0” ~ 1.5”</td>
									</tr>
									<tr>	
										<td>Squeegee Holder</td>
										<td>16” (406 mm) min & 22” (560 mm) max</td>
									</tr>
									<tr>	
										<td>Flood Coater</td>
										<td>20” (508 mm) min & 30” (762 mm) max</td>
									</tr>
									<tr>	
										<td>Max Non-Stop Speed</td>
										<td>900 Impressions per hour</td>
									</tr>
									<tr>	
										<td>Power Consumption</td>
										<td>220V AC, sinle phase, 6 Amps, 50 Hz	1 HP (0.745 kW)</td>
									</tr>
									<tr>	
										<td>Dimensions (LxWxH)</td>
										<td>41” x 40” x 44” (1054 x 1005 x 1130 mm)</td>
									</tr>
									<tr>
										<td>Weight</td>
										<td>270 kg</td>
									</tr>	
					    	</tbody>
					    </table>
					</div>
				</div>

				<h4 class="services-group-section-headline"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
							&nbsp Gallery</h4>
				<div class="row">
					<div class="column">
						<img src="img/IMG_20160705_152953.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
					</div>
					<div class="column">
						<img src="img/IMG_20160705_153002.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
					</div>
					<div class="column">
						<img src="img/IMG_20160705_153011.jpg" style="width:100%;height: 140px;" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
					</div>
				</div>

				<div id="myModal" class="modal">
					<span class="close cursor" onclick="closeModal()">&times;</span>
				  	<div class="modal-content">

					    <div class="mySlides">
					      <div class="numbertext">1 / 3</div>
					      <img src="img/IMG_20160705_152953.jpg" style="width:100%">
					    </div>

					    <div class="mySlides">
					      <div class="numbertext">2 / 3</div>
					      <img src="img/IMG_20160705_153002.jpg" style="width:100%">
					    </div>

					    <div class="mySlides">
					      <div class="numbertext">3 /3</div>
					      <img src="img/IMG_20160705_153011.jpg" style="width:100%;height: 626px;">
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