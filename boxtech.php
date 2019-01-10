<!DOCTYPE html>
<html>
<head>
	<title>KAMALA PRINTING PRESS | BOXTECH</title>
	<meta charset="utf-8">
	<meta name="KAMALA PRINTING PRESS,BOXTECH,kamala printing press"/>
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
		<a href="index.php">Home</a>&nbsp<i class="fa fa-2x fa-angle-double-right" aria-hidden="true"></i>&nbsp<span>Services</span>&nbsp<i class="fa fa-2x fa-angle-double-right" aria-hidden="true"></i>&nbsp<span>Boxtech</span>
	</div>

	<div class="web-section">
		<div class="container">
			<div class="col-md-12">				
				<div class="services-group">
					<h4 class="services-title">BOXTECH</h4>
					<div class="dotted-hr"></div>
					<div class="services-description">
						<p class="message">
							Boxtech BT - series High speed Automatic carton folder and gluer is suitable for folding and gluing small sizes mono cartons with accurate folding and gluing technology, high productivity with quick make ready .
						</p>
						<p class="message">	
							The basic formation of pasting box is paper-feeding: Automatic friction feeder which enabels continuous paper-feeding, next One-side pasting, Folding method: First and third crease folding line is up to 180° and opened and passes through gluing section and then second and  fourth  crease  folding line is a must  180°  in straight  line  boxes  and  gets stacked & carried in to pressure delivery section for pressing of the cartons which is ready for packing.
						</p>
					</div>
					
					<div class="services-group-section">
						<h4 class="services-group-section-headline"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>&nbsp Main Specifications: – Straight Line Carton</h4>	
							
						<p class="point-description">
							Maximum line speed: 250m/min</br>
							Applicable paper: 280-450g/m2 cardboard</br>
							The basic formation of pasting box-One-side pasting</br>
							Folding method: One-two-three folding line is 90°, and two-four folding line is 180° in straight line boxes</br>
							Method of paper-feeding: Automatic and continuous Friction feeding</br>
							Applied adhesive: Solute type water based glue</br>
							Power needed: 3.7Kw.400v</br>
							Weight: 3000kg.</br>
						</p>
					</div>
				</div>

				<h4 class="services-group-section-headline"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
						&nbsp Gallery</h4>
				<div class="row">
					<div class="column">
						<img src="img/100_1664.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
					</div>
					<div class="column">
						<img src="img/100_1663.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
					</div>
					<div class="column">
						<img src="img/DSC_9427.jpg" style="width:100%;height: 192px;" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
					</div>
					<div class="column">
						<img src="img/DSC_9436.jpg" style="width:100%;height: 192px;" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
					</div>
				</div>

				<div id="myModal" class="modal">
				  <span class="close cursor" onclick="closeModal()">&times;</span>
				  <div class="modal-content">

				    <div class="mySlides">
				      <div class="numbertext">1 / 4</div>
				      <img src="img/100_1664.jpg" style="width:100%">
				    </div>

				    <div class="mySlides">
				      <div class="numbertext">2 / 4</div>
				      <img src="img/100_1663.jpg" style="width:100%">
				    </div>

				    <div class="mySlides">
				      <div class="numbertext">3 / 4</div>
				      <img src="img/DSC_9427.jpg" style="width:100%">
				    </div>
				    
				    <div class="mySlides">
				      <div class="numbertext">4 / 4</div>
				      <img src="img/DSC_9436.jpg" style="width:100%">
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