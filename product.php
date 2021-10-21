<?php
$pagina="PAGINA PHP";
$menu=array("INICIO","COMPRAS","PRODUCTOS","VERIFICAR","CONTACTO");
$tog_navega="Toggle navigation";
$prod="PRODUCTOS";
$des_prod="Tu descripción aquí. Serenity es un tema de sitio web moderno y altamente profesional creado pensando en usted, el usuario. 
Este tema liviano es generoso, construido con tipos personalizados y suficientes códigos cortos para personalizar cada página 
de acuerdo con su proyecto. Notará algunos ejemplos de páginas en la demostración, pero este tema puede hacer mucho más.";
$prod_sor="Productos Sorprendentes";

$pre2="$49.00 - COMPRA";
$version="Version:";
$imagen="Image Size:";
$files="Files Included:";
$documen="Documentation:";
$licens="License:";
$requi="Requires:";
$envirom="Environment:";
$any="Any Field Etc:";
$numb="Number:";
$live="Live Demo:";
$uno="1.0";
$dos="2340x1200";
$mp3="mp3, audio, jpeg, png";
$well="Well Documented";
$gnu="GNU";
$easy="Easy Digital Downloads";
$word="Wordpress";
$detail="Any Detail";
$upto="Up to 20 specifications in this box";

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
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
					<?php echo $prod;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>

<!-- CONTENT =============================-->
<section class="item content">
<div class="container toparea">
	<div class="underlined-title">
		<div class="editContent">
			<h1 class="text-center latestitems"><?php echo $prod_sor;?></h1>
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
		<div class="col-md-8">
			<div class="productbox">
				<img src="images/product2-2.jpg" alt="">
				<div class="clearfix">
				</div>
				<br/>
				<div class="product-details text-left">
					<p>
					    <?php echo $des_prod;?>
					</p>
				</div>
			</div>
		</div>
</br>
		<div class="col-md-4">
			<a href="#" class="btn btn-buynow"><?php echo $pre2;?></a>
			<div class="properties-box">
				<ul class="unstyle">
					<li><b class="propertyname"> <?php echo $version;?> </b> <?php echo $uno;?> </li>
					<li><b class="propertyname"> <?php echo $imagen;?> </b>  <?php echo $dos;?> </li>
					<li><b class="propertyname">  <?php echo $files;?> </b> <?php echo $mp3;?>  </li>
					<li><b class="propertyname"> <?php echo $documen;?> </b> <?php echo $well;?> </li>
					<li><b class="propertyname"> <?php echo $licens;?> </b> <?php echo $gnu;?> </li>
					<li><b class="propertyname"> <?php echo $requi;?> </b> <?php echo $easy;?> </li>
					<li><b class="propertyname"> <?php echo $envirom;?> </b> <?php echo $word;?>  </li>
					<li><b class="propertyname"> <?php echo $any;?> </b> <?php echo $detail;?> </li>
					<li><b class="propertyname"> <?php echo $numb;?> </b> <?php echo $upto;?> </li>
					<li><b class="propertyname"> <?php echo $live;?> </b><a target="_blank" href="http://www.wowthemes.net/"><?php echo $link;?></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</section>


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

<!-- Load JS here for greater good =============================-->
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>

</body>
</html>