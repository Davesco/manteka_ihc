<!DOCTYPE html>
<html lang="es">
<?php
	echo $head						//Esta variable es pasada como par�metro a esta vista
?>
<body>
		
		<?php
			echo $banner_portada	//Esta variable es pasada como par�metro a esta vista
		?>
		<div>
			ManteKA es un sistema que le permite mantener una comunicaci�n precisa y fluida con los participantes de la asignatura de Comunicaci�n Efectiva perteneciente al m�dulo b�sico de ingenier�a.
		</div>
		<div class="login">
			<form class="form-horizontal">
				<div class="control-group">
					<label class="control-label" for="inputEmail">Nombre de usuario</label>
					<div class="controls">
					  <input type="text" id="inputEmail" placeholder="Ingrese usuario, por ejemplo: 175657436">
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