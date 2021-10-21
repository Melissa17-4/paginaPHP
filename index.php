<?php
$pagina="PAGINA PHP";
$tog_navega="Toggle navigation";
$menu=array("INICIO","COMPRAS","PRODUCTOS","VERIFICAR","CONTACTO");
$titulo="AUMENTAR LAS VENTAS DIGITALES";
$subtitulo="Aumente los ingresos con Scorilo";

$compras="ELIGE NUESTROS PRODUCTOS";
$des_compras="Ofreciendo variedad de prouctos segun sus intereses.";
$pago="PAGA CON PAYPAL O TARJETA";
$des_pagos="Para el acceso premium, se da la opción de pago con tarjeta o PAYPAL.";
$descarga="OBTENER DESCARGA INSTANTÁNEA";
$des_descarga="Otorgando el acceso ilimitado a nuestros recursos para su libre disposición.";
$items="Ultimos articulos";
$articulos=array("CALYPSO","FASTSELL","BISCAYA");
$des_art1="Presentación de productos";
$precio1=34.95;
$precio2=56.75;
$precio3=45.45;
$estrella="Examinar todos los productos";

$microfono="PREGUNTAS GENERALES";
$des_microfono="¿Quiere comprar un tema pero no está seguro de si tiene todas las funciones que necesita? 
¿Problemas para completar el pago? ¿O solo quieres saludar? ¡Envíanos tu mensaje y te responderemos lo antes posible!";
$dialogo="SOPORTE TEMÁTICO";
$des_dialogo="Los problemas de soporte del tema impiden que el tema funcione como se anuncia en la demostración. Este es un 
servicio gratuito y garantizado que se ofrece a través de nuestro foro de soporte que se encuentra en cada tema.";
$megafono="CONTRATANOS";
$des_megafono="Si desea cambiar un elemento para que se vea o funcione de manera diferente a como se muestra en la demostración, 
estaremos encantados de ayudarle. Este es un servicio pago debido a las solicitudes de soporte temático resueltas con prioridad.";
$des_art1="Variedad de temas";
$des_art2="Temas dinámicos y entretenidos";

$soporte="APOYO IMPRESIONANTE";
$url="https://image.freepik.com/vector-gratis/soporte-iconos_1212-151.jpg";
$des_url="El apoyo ... solo puedo decir que es increíble. Usted crea un producto y ayuda a las personas de cualquier manera que pueda, incluso si eso significa que debe iniciar sesión en su panel de 
control para resolver cualquier problema que pueda tener el cliente. ¡Simplemente excepcional!";
$conectate="Conéctate con Scorilo";
$phone="https://www.rebtel.com/es/tarifas/";
$face="https://www.facebook.com";
$twiter="https://www.twitter.com";
$google="https://myaccount.google.com";
$pinterest="https://www.pinterest.com";
$link="https://www.wowthemes.net/";
$your_web="2017 Your Website Name";
$scor_free="Scorilo - Free template by";
$wow_tem="WowThemesNet";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
<title><?php echo $pagina;?></title>
</head>

<body>
<!-- HEADER =============================-->
<header class="item header margin-top-0">
<div class="wrapper">
	<nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
			<i class="fa fa-bars"></i>
			<span class="sr-only"><?php echo $tog_navega;?></span>
			</button>
			<a href="index.php" class="navbar-brand brand">  </a>
		</div>
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="propClone"><a href="index.php"><?php echo $menu[0];?></a></li>
				<li class="propClone"><a href="shop.php"><?php echo $menu[1];?></a></li>
				<li class="propClone"><a href="product.php"><?php echo $menu[2];?></a></li>
				<li class="propClone"><a href="checkout.php"><?php echo $menu[3];?></a></li>
				<li class="propClone"><a href="contact.php"><?php echo $menu[4];?></a></li>
			</ul>
		</div>
	</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-homeimage">
					<div class="maintext-image" data-scrollreveal="enter top over 1.5s after 0.1s">
                        <?php echo $titulo;?>
					</div>
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.3s">
                        <?php echo $subtitulo;?> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>


<!-- STEPS =============================-->
<div class="item content">
	<div class="container toparea">
		<div class="row text-center">
			<div class="col-md-4">
				<div class="col editContent">
					<span class="numberstep"><i class="fa fa-shopping-cart"></i></span>
					<h3 class="numbertext"><?php echo $compras;?></h3>
					<p>
					    <?php echo $des_compras;?>
					</p>
				</div>
				<!-- /.col-md-4 -->
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4 editContent">
				<div class="col">
					<span class="numberstep"><i class="fa fa-gift"></i></span>
					<h3 class="numbertext"><?php echo $pago;?></h3>
					<p>
					    <?php echo $des_pagos;?>
					</p>
				</div>
				<!-- /.col -->
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4 editContent">
				<div class="col">
					<span class="numberstep"><i class="fa fa-download"></i></span>
					<h3 class="numbertext"><?php echo $descarga;?></h3>
					<p>
					    <?php echo $des_descarga;?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
	
	
	<!-- LATEST ITEMS =============================-->
<section class="item content">
	<div class="container">
		<div class="underlined-title">
			<div class="editContent">
				<h1 class="text-center latestitems"><?php echo $items;?></h1>
			</div>
			<div class="wow-hr type_short">
				<span class="wow-hr-h">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3><?php echo $articulos[0];?></h3>
							<p>
							    <?php echo $des_art;?>
							</p>
							<p>
								
							</p>
						</div>
						<span class="maxproduct"><img src="images/product1-1.jpg" alt=""></span>
					</div>
					<div class="product-details">
						
						<h1><?php echo $articulos[0];?></h1>
						
						<span class="price">
						<span class="edd_price">$<?php echo $precio1;?></span>
						</span>
					</div>
				</div>
			</div>
			<!-- /.productbox -->
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3><?php echo $articulos[1];?></h3>
							<p>
							    <?php echo $des_art1;?>
							</p>
							<p>
								
							</p>
						</div>
						<span class="maxproduct"><img src="images/product2.jpg" alt=""></span>
					</div>
					<div class="product-details">
						
						<h1><?php echo $articulos[1];?></h1>
						
						<span class="price">
						<span class="edd_price">$<?php echo $precio2;?></span>
						</span>
					</div>
				</div>
			</div>
			<!-- /.productbox -->
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3><?php echo $articulos[2];?></h3>
							<p>
							    <?php echo $des_art2;?>
							</p>
							<p>
							</p>
						</div>
						<span class="maxproduct"><img src="images/product2-3.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<h1><?php echo $articulos[2];?></h1>
						<span class="price">
						<span class="edd_price">$<?php echo $precio3;?></span>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>


<!-- BUTTON =============================-->
<div class="item content">
	<div class="container text-center">
		<a href="shop_html.php" class="homebrowseitems"><?php echo $estrella;?>
		<div class="homebrowseitemsicon">
			<i class="fa fa-star fa-spin"></i>
		</div>
		</a>
	</div>
</div>
<br/>

<!-- AREA =============================-->
<div class="item content">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<i class="fa fa-microphone infoareaicon"></i>
				<div class="infoareawrap">
					<h1 class="text-center subtitle"><?php echo $microfono;?></h1>
					<p>
					    <?php echo $des_microfono;?>
					</p>
					
				</div>
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4">
				<i class="fa fa-comments infoareaicon"></i>
				<div class="infoareawrap">
					<h1 class="text-center subtitle"><?php echo $dialogo;?></h1>
					<p>
					    <?php echo $des_dialogo;?>
					</p>
				</div>
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4">
				<i class="fa fa-bullhorn infoareaicon"></i>
				<div class="infoareawrap">
					<h1 class="text-center subtitle"><?php echo $megafono;?></h1>
					<p>
					    <?php echo $des_megafono;?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- TESTIMONIAL =============================-->
<div class="item content">
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="slide-text">
				<div>
					<h2><span class="uppercase"><?php echo $soporte;?></span></h2>
					<img src="<?php echo $url;?>">
					<p>
					    <?php echo $des_url;?>
					</p>
					<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    
				</div>
			</div>
		</div>
	</div>
</div>
</br>


<!-- FOOTER =============================-->
<div class="footer text-center">
	<div class="container">
		<div class="row">
			<p class="footernote">
			    <?php echo $conectate;?>
			</p>
			<ul class="social-iconsfooter">
				<li><a href="<?php echo $phone;?>"><i class="fa fa-phone"></i></a></li>
				<li><a href="<?php echo $face;?>"><i class="fa fa-facebook"></i></a></li>
				<li><a href="<?php echo $twiter;?>"><i class="fa fa-twitter"></i></a></li>
				<li><a href="<?php echo $google;?>"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="<?php echo $pinterest;?>"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<p>
				 &copy; <?php echo $your_web;?><br/>
				 <?php echo $scor_free;?> <a href= "<?php echo $link;?>" ><?php echo $wow_tem;?></a>
			</p>
		</div>
	</div>
</div>

<!-- SCRIPTS =============================-->
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>
<script>
//----HOVER CAPTION---//	  
jQuery(document).ready(function ($) {
	$('.fadeshop').hover(
		function(){
			$(this).find('.captionshop').fadeIn(150);
		},
		function(){
			$(this).find('.captionshop').fadeOut(150);
		}
	);
});
</script>
	
</body>
</html>