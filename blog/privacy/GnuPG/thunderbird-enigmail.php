<!DOCTYPE html>
<html>
	<head>
		<?php 

			include "../../../template/head/head.php";
			include "../../../template/head/lightbox.php";
		?>
	</head>
	<body>
		<?php 
			include '../../../template/header/header.php';
		?>

		<section class="tabellen_zelle maximale_hoehe">
		
				<div id="headerbildhintergrund">
				<?php 
					include '../../../template/headerbild/headerbild.php';
				?>	
								
				</div>
				<div id="content_area">
					<div id="linke_spalte"> <!-- linke Spalte -->
						<div class="databox newsbox">
							<?php 
								include '../../../template/blog/privacy/privacy.php';
								include '../../../template/blog/privacy/GnuPG.php';
							?>	
							

						</div>
						
					</div>	
					<div id="haupt_spalte"> <!-- haupt Spalte -->	
						<div class="databox contentbox">
							<h1>Thunderbird</h1>
							<p><br /><br /></p>
							<h3>Installation</h3>
							<p>
								Benutzer, die einen Rechner mit Linux benutzen können sich Thunderbird meist direkt aus den Paketquellen installieren, PGP ist meist vorinstalliert. 
								Unter Debian tut es beispielsweise ein <code>apt-get install icedove</code>.
								<br /><br />
								<b>Windowsnutzer</b> können sich die Software von der Mozilla-Webseite (Herstellen von Thunderbird) <a href="https://www.mozilla.org/de/thunderbird/">herunterladen</a>
								und die Standardinstallation durchgehen.
								<br /><br />
								Nach dem ersten Start wird gefragt, wie Thunderbird genutzt werden soll ("Systemintegration"). Hier das Häkchen vor "Bei jedem Start von Thunderbird überprüfen" 
								entfernen und "Als Standard festlegen" klicken.
								Danach wird der erste Mailaccount eingerichtet:
								<br /><br />
								- "Überspringen und meine existierende E-Mail-Adresse verwenden" klicken
								<br />
								- Name, Mailadresse und Passwort angeben und auf weiter klicken. Thunderbird erkennt im Normalfall die richtigen Einstellungen, 
								ist das nicht der Fall muss manuell nachgeholfen werden. Die E-Mail-Provider stellen die Information normalerweise online zur Verfügung. 
								Mit "Fertig" bestätigen
								<br />
								- Bei Google Konten muss man sich nun nochmal in Thunderbird anmelden und bestätigen, dass Thunderbird die E-Mails abrufen darf.
								<br />
								<br />
								Thunderbird ist nun fertig eingerichtet.
								<br />
								<br />
							</p>	
							<h3>Einrichtung von PGP</h3>
							<p>
							Dafür muss Pgp4Win bereits eingerichtet sein!
							<br /><br />
								- Mit der rechten Maustaste an den oberen Rand des Fensters klicken und "Menüleiste" ebenfalls auswählen. Eine neue Leiste erscheint.
								<br />
								- über Extras > Add-ons kommt man zu einem neuen Tab. In der oberen Suchleiste "Enigmail" eingeben und "installieren" auswählen. 
								Danach Thunderbird schließen und neu starten.
								<br />
								- Nach dem Neustart erscheint ein "Einrichtungs-Assistent" für Enigmail. 
								<br />
								- "Jetzt einrichten" auswählen, mit "Weiter >" bestätigen.
								<br />
								- "Ich bevorzuge eine ausführliche Konfiguration (...)" auswählen, danach "Weiter >"
								<br />
								- "Ich möchte ein neues Schlüsselpaar erzeugen", danach "Weiter >"
								<br />
								- Gute Passphrase überlegen, aufschreiben/in den Passwortmanager einspeichern, danach "Weiter >"
								<br />
								- Nun wird der Schlüssel erzeugt. Das kann einige Zeit dauern.
								<br />
								- Das Widerrufszertifikat erzeugen und speichern, danach "Weiter >"
								<br />
								- Enigmail ist fertig eingerichtet, das Fenster kann geschlossen werden. In der Leiste ganz oben ist nun ein Reiter "Enigmail" zu sehen.
								<br /><br />
								Über Enigmail > Schlüssel verwalten kannst Du  Deinen eigenen auf Schlüsselserver hochladen, andere Schlüssel herunterladen, ansehen, unterschreiben, etc.
								
								<br /><br /><br />
								Du solltest Deinen eigenen Schlüssel auf einen USB-Stick exportieren und eine Kopie (und das Widerrufszertifikat) beispielsweise in einem Safe oder 
								an einem anderen sicheren Ort lagern.
								
							</p>
							
							
								
								
								
								
								
																
								
							
						</div>
					</div>					
	
				</div>
	
		</section>
		<?php 
			include '../../../template/footer/footer.php';
		?>	
		<script src="/js/lightbox-plus-jquery.min.js"></script>
	</body>
</html>



































































<!-- 

<p class="test">
			Lorem ipsum dolor sit amet, consecteteur adipiscing elit fermentum cras taciti eni, libero, 
			ante pede cum. Nulla phasellus hac. Vel curabitur pharetra, semper parturient ipsum. Integer
			nunc taciti morbi eu turpis mauris, proin euismod cursus. Vivamus ac, cursus leo ut. Nulla 
			quisque. Massa varius in dui elementum facilisi. Eros sed velit nostra. Ac, ridiculus metus, 
			eu montes integer at, pede mi. Porttitor curae ipsum taciti suspendisse. Venenatis libero litora 
			tristique nam, etiam velit, blandit ad, proin ad eu tellus blandit. Orci elit habitasse varius, mi 
			praesent integer. Convallis. Proin enim ac magna suspendisse habitant, tristique diam orci non cum.
		</p>
	-->



































































<!-- 

<p class="test">
			Lorem ipsum dolor sit amet, consecteteur adipiscing elit fermentum cras taciti eni, libero, 
			ante pede cum. Nulla phasellus hac. Vel curabitur pharetra, semper parturient ipsum. Integer
			nunc taciti morbi eu turpis mauris, proin euismod cursus. Vivamus ac, cursus leo ut. Nulla 
			quisque. Massa varius in dui elementum facilisi. Eros sed velit nostra. Ac, ridiculus metus, 
			eu montes integer at, pede mi. Porttitor curae ipsum taciti suspendisse. Venenatis libero litora 
			tristique nam, etiam velit, blandit ad, proin ad eu tellus blandit. Orci elit habitasse varius, mi 
			praesent integer. Convallis. Proin enim ac magna suspendisse habitant, tristique diam orci non cum.
		</p>
	-->