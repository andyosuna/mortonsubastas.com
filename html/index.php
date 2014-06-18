<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'http://mortonsubastas.andyosuna.com/php/include-meta.php'; ?>
	
	<title>Morton Casa de Subastas - Inicio</title>

	<?php include 'http://mortonsubastas.andyosuna.com/php/include-css.php'; ?>
</head>

<body>
	<?php include 'http://mortonsubastas.andyosuna.com/php/include-header.php'; ?>

	<section id="slider" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#slider" data-slide-to="0" class="active"></li>
			<li data-target="#slider" data-slide-to="1"></li>
			<li data-target="#slider" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img src="/images/slides/slide-1.jpg" alt="Subasta de Joyer&iacute;a">
				<div class="carousel-caption">
					<h3>Subasta de Joyer&iacute;a</h3>
					<p>Relojes y Mobiliario Europeo <br><a href="#">Ver Evento -></a></p>
				</div>
			</div>
			<div class="item">
				<img src="/images/slides/slide-2.jpg" alt="Subasta de Vinos">
				<div class="carousel-caption">
					<h3>Subasta de Vinos</h3>
					<p>de Colecci&oacute;n, uso Diario y Destilados <br><a href="#">Ver Evento -></a></p>
				</div>
			</div>
			<div class="item">
				<img src="/images/slides/slide-3.jpg" alt="Subasta de Grabados">
				<div class="carousel-caption">
					<h3>Subasta de Grabados</h3>
					<p>Fotograf&iacute;a, Documentos Escritos y Manuscritos, Mapas, Libros Antig&uuml;os y Contempor&aacute;neos <br>(Incluye 12 Lotes de la Biblioteca Ecl&eacute;tica MONCLAU) <a href="#">Ver Evento -></a></p>
				</div>
			</div>
		</div>
	</section>

	<div id="content-wrapper">
		<div id="content">
			<section id="video" class="container-fluid">
				<h2>V&iacute;deo Destacado</h2>
				<div class="carousel-slide" id="video-slider" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#video-slider" data-slide-to="0"></li>
						<li data-target="#video-slider" data-slide-to="1"></li>
						<li data-target="#video-slider" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="row item">
							<div class="col-sm-6">
								<!-- TODO: add youtube video iframe or something -->
								<img src="/images/yt-thumbnail.jpg" alt="YouTube Video" style="margin:0 auto;width:100%">
							</div><!-- end .col-sm-6 -->
							<div class="col-sm-6">
								<p class="large">Drumstick kielbasa kevin short ribs sirloin fatback landjaeger pork chop shoulder filet mignon meatball. Pork sirloin frankfurter biltong pork loin tenderloin.</p>
							</div><!-- end .col-sm-6 -->
						</div><!-- end .row -->
						<div class="row item">
							<div class="col-sm-6">
								<!-- TODO: add youtube video iframe or something -->
								<img src="/images/yt-thumbnail.jpg" alt="YouTube Video" style="margin:0 auto;width:100%">
							</div><!-- end .col-sm-6 -->
							<div class="col-sm-6">
								<p class="large">asdfasdfDrumstick kielbasa kevin short ribs sirloin fatback landjaeger pork chop shoulder filet mignon meatball. Pork sirloin frankfurter biltong pork loin tenderloin.</p>
							</div><!-- end .col-sm-6 -->
						</div><!-- end .row -->
						<div class="row item">
							<div class="col-sm-6">
								<!-- TODO: add youtube video iframe or something -->
								<img src="/images/yt-thumbnail.jpg" alt="YouTube Video" style="margin:0 auto;width:100%">
							</div><!-- end .col-sm-6 -->
							<div class="col-sm-6">
								<p class="large">asdfDrumstick kielbasa kevin short ribs sirloin fatback landjaeger pork chop shoulder filet mignon meatball. Pork sirloin frankfurter biltong pork loin tenderloin.</p>
							</div><!-- end .col-sm-6 -->
						</div><!-- end .row -->
					</div><!-- end .carousel-inner -->
				</div><!-- end .carousel-slide -->
			</section><!-- end #video -->

			<hr>

			<section id="catalogs" class="container-fluid">
				<h2>&Uacute;ltimos Cat&aacute;logos</h2>
					<div class="catgroup">
						<div class="cat">
							<img src="/images/catalogs/cat-oportunidades.jpg" alt="Subasta de Oportunidades" title="Subasta de Oportunidades">
							<a href="#">Ver Cat&aacute;logo</a>
						</div><!-- end .cat -->
						<div class="cat">
							<img src="/images/catalogs/cat-libros.jpg" alt="Subasta de Libros y Documentos" title="Subasta de Libros y Documentos">
							<a href="#">Ver Cat&aacute;logo</a>
						</div><!-- end .cat -->
						<div class="cat">
							<img src="/images/catalogs/cat-artemoderno.jpg" alt="Subasta de Arte Moderno" title="Subasta de Arte Moderno">
							<a href="#">Ver Cat&aacute;logo</a>
						</div><!-- end .cat -->
					</div><!-- end .catgroup -->
					<div class="cat">
						<img src="/images/catalogs/cat-joyeria.jpg" alt="Subasta de Joyeria" title="Subasta de Joyeria">
						<a href="#">Ver Cat&aacute;logo</a>
					</div><!-- end .cat -->
			</section><!-- end #catalogs -->
		</div><!-- #content -->

		<?php include 'http://mortonsubastas.andyosuna.com/php/include-footer.php'; ?>
	</div>

	<?php include 'http://mortonsubastas.andyosuna.com/php/include-js.php'; ?>
	<script type="text/javascript">
	$('#slider').carousel({pause:"hover";interval:2000;});
	$('#video-slider').carousel({pause:"hover";interval:1500;});
	</script>
</body>
</html>