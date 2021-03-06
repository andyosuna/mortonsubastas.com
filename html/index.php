<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'http://mortonsubastas.andyosuna.com/php/include-meta.php'; ?>
	
	<title>Morton Casa de Subastas - Inicio</title>

	<?php include 'http://mortonsubastas.andyosuna.com/php/include-css.php'; ?>
	<style>
	iframe {
		width: 100%;
		height: 100%;
		min-height: 315px;
	}
	</style>
</head>

<body>
	<?php include 'http://mortonsubastas.andyosuna.com/php/include-header.php'; ?>

	<section id="slider" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#slider" data-slide-to="0" class="active"></li>
			<li data-target="#slider" data-slide-to="1"></li>
			<li data-target="#slider" data-slide-to="2"></li>
			<li data-target="#slider" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img src="/images/slides/slide-1.jpg" alt="Subasta de Libros">
				<div class="carousel-caption">
					<h3>Subasta de Libros y Documentos</h3>
					<p>(Incluye una selecci&oacute;n de documentos de la biblioteca ecl&eacute;ctica MONCLAU, y otra de literatura de la Biblioteca de Ricardo Garibay). <br> Mi&eacute;rcoles 25 de Junio de 2014, 19:00 hrs.</p>
				</div>
			</div>
			<div class="item">
				<img src="/images/slides/slide-2.jpg" alt="Subasta de Arte Moderno">
				<div class="carousel-caption">
					<h3>Subasta de Verano</h3>
					<p>Arte para todos los gustos y bolsillos.<br>Jueves 3 de Julio de 2014, 19:00 hrs.</p>
				</div>
			</div>
			<div class="item">
				<img src="/images/slides/slide-3.jpg" alt="Subasta de Joyer&iacute;a">
				<div class="carousel-caption">
					<h3>Subasta de Joyer&iacute;a y Relojes</h3>
					<p>Mi&eacute;rcoles 9 de Julio de 2014, 19:00 hrs.</p>
				</div>
			</div>
			<div class="item">
				<img src="/images/slides/slide-4.jpg" alt="Subasta de Antig&uuml;edades">
				<div class="carousel-caption">
					<h3>Subasta de Antig&uuml;edades</h3></p>
				</div>
			</div>
		</div>
	</section>

	<div id="content-wrapper">
		<div id="content">
			<section id="video" class="container-fluid">
				<h2>VIdeo Destacado</h2>
				<div class="carousel-slide" id="video-slider" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#video-slider" data-slide-to="0" class="active"></li>
						<li data-target="#video-slider" data-slide-to="1"></li>
					</ol>
					<div class="carousel-inner">
						<div class="row item active">
							<div class="col-sm-6">
								<iframe src="//www.youtube.com/embed/y5XZppDsk0A" frameborder="0" allowfullscreen></iframe>
							</div><!-- end .col-sm-6 -->
							<div class="col-sm-6">
								<p class="large">Algunas personas creen que la subasta es un proceso complicado. ¡Sorpresa! entrar a comprar a una subasta es muy sencillo y no se requiere invitaci&oacute;n, inscripci&oacute;n, ni nada de eso.</p>
								<p class="large">Únicamente acuda, disfrute el momento y dese el placer de llevarse eso que tanto le gusta. Aqu&iacute; le damos unos consejos para que lo disfrute desde la primera vez.</p>
							</div><!-- end .col-sm-6 -->
						</div><!-- end .row -->
						<div class="row item">
							<div class="col-sm-6">
								<iframe src="//www.youtube.com/embed/8GGK-2-VKRg" frameborder="0" allowfullscreen></iframe>
							</div><!-- end .col-sm-6 -->
							<div class="col-sm-6">
								<p class="large">Todos los s&aacute;bados, en el sal&oacute;n Moliere, se llevan a cabo las Subastas de Oportunidades. Excelente opci&oacute;n para los compradores que desean adquirir sus primeras piezas en subasta, sentir la experiencia, y encontrar objetos &uacute;nicos y originales a precios incre&iacute;bles.</p>
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
							<a href="/catalogos/catalogos-digitales.php">Ver Cat&aacute;logo</a>
						</div><!-- end .cat -->
						<div class="cat">
							<img src="/images/catalogs/cat-libros.jpg" alt="Subasta de Libros y Documentos" title="Subasta de Libros y Documentos">
							<a href="/catalogos/catalogos-digitales.php#cat-libros">Ver Cat&aacute;logo</a>
						</div><!-- end .cat -->
						<div class="cat">
							<img src="/images/catalogs/cat-artemoderno.jpg" alt="Subasta de Arte Moderno" title="Subasta de Arte Moderno">
							<a href="/catalogos/catalogos-digitales.php#cat-artemoderno">Ver Cat&aacute;logo</a>
						</div><!-- end .cat -->
					</div><!-- end .catgroup -->
					<div class="cat">
						<img src="/images/catalogs/cat-joyeria.jpg" alt="Subasta de Joyeria" title="Subasta de Joyeria">
						<a href="/catalogos/catalogos-digitales.php">Ver Cat&aacute;logo</a>
					</div><!-- end .cat -->
			</section><!-- end #catalogs -->
		</div><!-- #content -->

		<?php include 'http://mortonsubastas.andyosuna.com/php/include-footer.php'; ?>
	</div>

	<?php include 'http://mortonsubastas.andyosuna.com/php/include-js.php'; ?>
	<script>
	$('#slider').carousel({pause:"hover";interval:2000;});
	$('#video-slider').carousel({pause:"hover";interval:1500;});
	</script>
</body>
</html>