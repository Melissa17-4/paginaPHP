<?php
$pagina="PAGINA PHP";
$menu=array("INICIO","COMPRAS","PRODUCTOS","VERIFICAR","CONTACTO");
$tog_navega="Toggle navigation";
$re_pago="REALIZAR PAGO";

$nom_art="Nombre del articulo";
$pre_art="Precio del Articulo";
$action="Accion";
$inf_per="Informacion Personal";
$pri_nom="Nombres";
$apelido="Apellidos";
$co_elec="Correo Electronico";
$tot_compra="Total de Compra:";

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
						 VERIFICACIÓN
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
			<h1 class="text-center latestitems"><?php echo $re_pago;?></h1>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>
	<div id="edd_checkout_wrap" class="col-md-8 col-md-offset-2">
		<form id="edd_checkout_cart_form" method="post">
			<div id="edd_checkout_cart_wrap">
				<table id="edd_checkout_cart" class="ajaxed">
				<thead>
				<tr class="edd_cart_header_row">
					<th class="edd_cart_item_name">
					<?php echo $nom_art;?>
					</th>
					<th class="edd_cart_item_price">
					<?php echo $pre_art;?>
					</th>
					<th class="edd_cart_actions">
					<?php echo $action;?>
					</th>
				</tr>
				</thead>
				<tbody>
				<tr class="edd_cart_item" id="edd_cart_item_0_25" data-download-id="25">
					<td class="edd_cart_item_name">
						<div class="edd_cart_item_image">
							<img width="25" height="25" src="images/scorilo2-70x70.jpg" alt="">
						</div>
						<span class="edd_checkout_cart_item_title">Audio Item - Single License</span>
					</td>
					<td class="edd_cart_item_price">
						 $11.99
					</td>
					<td class="edd_cart_actions">
						<a class="edd_cart_remove_item_btn" href="#">Remove</a>
					</td>
				</tr>
				</tbody>
				<tfoot>
				<tr class="edd_cart_footer_row">
					<th colspan="5">
						<a class="edd-cart-saving-button edd-submit button " id="edd-save-cart-button" href="#">Save Cart</a>
					</th>
				</tr>
				<tr class="edd_cart_footer_row edd_cart_discount_row" style="display:none;">
					<th colspan="5" class="edd_cart_discount">
					</th>
				</tr>
				<tr class="edd_cart_footer_row">
					<th colspan="5" class="edd_cart_total">
						 Total: <span class="edd_cart_amount" data-subtotal="11.99" data-total="11.99">$11.99</span>
					</th>
				</tr>
				</tfoot>
				</table>
			</div>
		</form>
		<div id="edd_checkout_form_wrap" class="edd_clearfix">
			<form id="edd_purchase_form" class="edd_form" action="#" method="POST">
				<fieldset id="edd_checkout_user_info">
					<legend><?php echo $inf_per;?></legend>
					<p id="edd-email-wrap">
						<label class="edd-label" for="edd-email">
						<?php echo $co_elec;?> <span class="edd-required-indicator">*</span></label>
						<input class="edd-input required" type="email" name="edd_email" placeholder=" " id="edd-email" value="">
					</p>
					<p id="edd-first-name-wrap">
						<label class="edd-label" for="edd-first">
						<?php echo $pri_nom;?> <span class="edd-required-indicator">*</span>
						</label>
						<input class="edd-input required" type="text" name="edd_first" placeholder="" id="edd-first" value="" required="">
					</p>
					<p id="edd-last-name-wrap">
						<label class="edd-label" for="edd-last">
						<?php echo $apelido;?> </label>
						<input class="edd-input" type="text" name="edd_last" id="edd-last" placeholder="" value="">
					</p>
				</fieldset>
				<fieldset id="edd_purchase_submit">
					<p id="edd_final_total_wrap">
						<strong><?php echo $tot_compra;?></strong>
						<span class="edd_cart_amount" data-subtotal="11.99" data-total="11.99">$11.99</span>
					</p>
					<input type="hidden" name="edd_action" value="purchase">
					<input type="hidden" name="edd-gateway" value="manual">
					<input type="submit" class="edd-submit button" id="edd-purchase-button" name="edd-purchase" value="Comprar">
				</fieldset>
			</form>
		</div>
	</div>
</div>
</section>
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

</body>
</html>