<!DOCTYPE html>
<html>

	<head>
		<?php 
			include '/template/head/head.php';
		?>
	</head>
	<body>
		<?php 
			include '/template/header/header.php';
		?>

		<section class="tabellen_zelle maximale_hoehe">
		
				<div id="headerbildhintergrund">
				<?php 
					include '/template/headerbild/headerbild.php';
				?>	
								
				</div>
				<div id="content_area-single-column">
					<div id="linke_spalte"> <!-- linke Spalte -->
						<div class="databox newsbox">
								<p></p>
						</div>
						
					</div>	
					<div id="haupt_spalte"> <!-- haupt Spalte -->	
						<div class="databox contentbox">
							<h1>Impressum</h1>
							<h4>Harald Niemeczek</h4>
							<p>
								1060 Wien<br />
								Telefon: <a href="tel:+4367761208583">+4367761208583</a><br />
								E-Mail: <a href="mail:postmaster@niemeczek.at">postmaster@niemeczek.at</a><br />
								Kontaktaufnahme via E-Mail wird bevorzugt, eine Verschlüsselung via <a href="/blog/gpg/">GPG</a> ist erwünscht.
							</p>
							
						</div>
					</div>					
	
				</div>
	
		</section>
		<?php 
			include '/template/footer/footer.php';
		?>	
	</body>
</html>