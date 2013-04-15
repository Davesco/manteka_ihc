<!DOCTYPE html>
<html lang="es">
<?php
	echo $head						//Esta variable es pasada como par�metro a esta vista
?>
<body>
		
		<?php
			echo $banner_portada	//Esta variable es pasada como par�metro a esta vista
		?>
		<div class="span6">
			ManteKA es un sistema que le permite mantener una comunicaci�n precisa y fluida con los participantes de la asignatura de Comunicaci�n Efectiva perteneciente al m�dulo b�sico de ingenier�a. <br>
			A trav�s de ManteKA es posible env�ar correos electr�nicos masivos mediante los filtros que se proporcionan. <br>
			Basta de enviar correos uno por uno! :)
		</div>
		<div class="span6">
				<form class="form-horizontal">
					<div class="control-group">
						<label class="control-label" for="inputEmail">Rut</label>
						<div class="controls">
						  <input type="text" id="inputEmail" placeholder="Ingrese rut, ejemplo: 175657436">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">Contrase�a</label>
						<div class="controls">
							<input type="password" id="inputPassword" placeholder="Ingrese su contrase�a">
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<label class="checkbox">
								<input type="checkbox"> Recordarme
							</label>
							<button type="submit" class="btn">Iniciar Sesi�n</button>
						</div>
					</div>
				</form>
		</div>
		
		
</body>
</html>