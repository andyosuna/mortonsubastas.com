<?php include_once 'php/parse-contact.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'php/include-meta.php'; ?>
	
	<title>Morton Casa de Subastas - Contacto</title>

	<?php include 'php/include-css.php'; ?>
</head>

<body>
	<?php include 'php/include-header.php'; ?>

	<section id="banner">
		<img src="images/banners/dep-arte-moderno.jpg">
	</section>

	<div id="content">

		<h1>Contacto</h1>

		<ol class="breadcrumb">
			<li><a href="/">Inicio</a></li>
			<li class="active">Contacto</li>
		</ol>

		<section class="cont container-fluid">
			<h2 class="align-left">Cont&aacute;ctenos</h2>
			<div class="row">
				<div class="col-sm-6">
					<form class="contact-form clearfix" method="post" action="/es/contact.php" name="contact-form">
						<p>Todos los campos son requeridos.</p>
						<ul>
							<li>
								<label for="name">Nombre:</label>
								<input type="text" name="name" placeholder="Juan P&eacute;rez" value="" required />
							</li>
							<li>
								<label for="email">Correo Electr&oacute;nico:</label>
								<input type="email" name="email" placeholder="juan.perez@ejemplo.com" value="" required />
							</li>
							<li>
								<label for="department">Departamento:</label>
								<select name="department" required>
									<option value="">-- Seleccione Departamento --</option>
									<option value="ate">Atenci&oacute;n a Clientes</option>
									<option value="ant">Antig&uuml;edades</option>
									<option value="art">Arte Moderno</option>
									<option value="joy">Joyer&iacute;a</option>
									<option value="lib">Libros &amp; Documentos</option>
									<option value="vin">Vinos</option>
									<option value="opo">Oportunidades</option>
									<option value="emp">Empe&ntilde;os</option>
								</select>
							</li>
							<li>
								<label for="message">Mensaje:</label>
								<textarea name="message" cols="40" rows="6" placeholder="Escriba su mensaje..." required ></textarea>
							</li>
							<li>
								<button class="btn-morton submit" type="submit">Enviar!</button>
								<input type="hidden" name="did_send" value="true" />
							</li>
						</ul><!-- end ul -->
					</form><!-- end .contact-form -->
				</div><!-- end .col-sm-6 -->
				<div class="col-sm-6">
					<iframe src="https://mapsengine.google.com/map/u/0/embed?mid=zgkSITLF1xOc.kWQyxgjQpSoI" width="100%" height="480"></iframe>
				</div><!-- end .col-sm-6 -->
			</div><!-- end .row -->
		</section><!-- end .cont -->

		<hr>

		<section class="cont container-fluid">		
			<h2 class="align-left">Datos de Contacto</h2>
			<p class="large">Llene la forma de arriba o env&iacute;e un correo electr&oacute;nico a <a href="mailto:atencion.clientes@mortonsubastas.com">atencion.clientes@mortonsubastas.com</a></p>
			<div class="row">
				<div class="col-sm-4">
					<address>
						<h4>Monte Athos</h4>
						Calle Monte Athos 179<br>
						Colonia Lomas de Chapultepec<br>
						M&eacute;xico <abbr title="Distrito Federal">D.F.</abbr><br>
						<abbr title="C&oacute;digo Postal">CP</abbr> 11000<br>
						<abbr title="Tel&eacute;fono">Tel:</abbr> +52 (55) 52 83 31 40<br>
						<abbr title="Larga Distancia">LADA</abbr> sin Costo: 01 800 GMORTON<br>
						<abbr title="Larga Distancia">LADA</abbr> sin Costo: 01 800 466 7866
					</address>
				</div><!-- end .col-sm-4 -->
				<div class="col-sm-4">
					<address>
						<h4>Virreyes</h4>
						Boulevard De Los Virreyes 155<br>
						Colonia Lomas de Virreyes<br>
						M&eacute;xico <abbr title="Distrito Federal">D.F.</abbr><br>
						<abbr title="C&oacute;digo Postal">CP</abbr> 11000<br>
						<abbr title="Tel&eacute;fono">Tel:</abbr> +52 (55) 52 83 31 40<br>
						<abbr title="Larga Distancia">LADA</abbr> sin Costo: 01 800 GMORTON<br>
						<abbr title="Larga Distancia">LADA</abbr> sin Costo: 01 800 466 7866<br>
					</address>
				</div><!-- end .col-sm-4 -->
				<div class="col-sm-4">
					<address>
						<h4>Moliere</h4>
						Prolongaci&oacute;n Moliere 515<br>
						Colonia Ampliaci&oacute;n Granada<br>
						M&eacute;xico <abbr title="Distrito Federal">D.F.</abbr><br>
						<abbr title="C&oacute;digo Postal">CP</abbr> 11529<br>
						<abbr title="Tel&eacute;fono">Tel:</abbr> +52 (55) 52 83 31 40<br>
						<abbr title="Facs&iacute;mil">Fax:</abbr> +52 (55) 52 50 99 75<br>
						<abbr title="Larga Distancia">LADA</abbr> sin Costo: 01 800 GMORTON<br>
						<abbr title="Larga Distancia">LADA</abbr> sin Costo: 01 800 466 7866
					</address>
				</div><!-- end .col-sm-4 -->
			</div><!-- end .row -->
			<div class="row">
				<div class="col-sm-12">
					<h3>Horarios de Atenci&oacute;n</h3>
					<p class="large"><strong>Lunes a Viernes:</strong> 9:30 am a 7:00 pm</p>
					<p class="large"><strong>Sabado:</strong> 10:00 am a 1:00 pm</p>
				</div><!-- end col-sm-12-->
			</div><!-- end .row -->
		</section><!-- end .cont -->

	</div><!-- end #content -->

	<?php include 'php/include-footer.php'; ?>

    <?php include 'php/include-js.php'; ?>
</body>
</html>