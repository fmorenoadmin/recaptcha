<?php
	if (isset($_SESSION)) {}else{ session_start(); }
	$rut='../';
	$pagina='Contacto';
	$action='contacto.php';
	require_once($rut.'0code.php');
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		include_once($rut.'1styles.php');
		include_once($rut.'0mens.php');
	?>
</head>
<body>
	<div class="container">
		<div class="row pt-4 mt-4">
			<form class="col-sm-12" action="<?= ACTI.$action; ?>" method="POST" enctype="multipart/form-data">
				<div class="form-group text-center">
		        	<h2 style="font-size:1.5em">Formulario de Contacto</h2>
				</div>
		        <hr>
		        <div class="form-group">
		        	<label class="form-control-label">Nombre y apellido:</label>
					<input type="text" name="full_name" class="form-control" placeholder="Nombre y apellido" required="" style="margin-top:3px">
		        </div>
		        <div class="form-group">
		        	<label class="form-control-label">Correo Electrónico:</label>
					<input type="email" name="email" class="form-control" placeholder="Correo Electrónico" required="" style="margin-top:3px">
		        </div>
		        <div class="form-group">
		        	<label class="form-control-label">Teléfono:</label>
					<input type="tel" name="telefono" class="form-control" placeholder="Teléfono" required="" style="margin-top:3px">
		        </div>
		        <div class="form-group">
		        	<label class="form-control-label">Mensaje:</label>
					<textarea type="text" name="mensaje" class="form-control" placeholder="Mensaje" required=""></textarea>
		        </div>
		        <div class="form-group">
					<div class="g-recaptcha" data-sitekey="<?= PK_RCAPTCHA; ?>"></div>
		        </div>
		        <div class="form-group">
					<input type="hidden" name="url" value="<?= base64_encode($location); ?>">
					<input type="hidden" name="required" value="<?= base64_encode(base64_encode(base64_encode(base64_encode($_SERVER['REMOTE_ADDR'])))); ?>">
					<input type="hidden" name="token" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($sid))))))); ?>">
					<button class="btn btn-success btn-block" name="enviar">Enviar</button>
		        </div>
			</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	<?php include_once($rut.'5toastr.php'); ?>
</body>
</html>