
<fieldset>
	<legend>Cambiar contrase�a</legend>
	
	
	<?php echo form_open('Login/cambiarContrasegnaPost'); ?>
	<div class="error"> 
		<label>Nombre de usuario</label>
		<input type="text" placeholder="<?php echo $rut_usuario ?>" value="<?php echo $rut_usuario ?>" disabled>
		
		
		<div class="row-fluid">
			<label>Contrase�a actual</label>
			<input type="password" name="contrasegna_actual" value="<?php echo set_value('contrasegna_actual'); ?>">
			<?php echo form_error('contrasegna_actual', '<div class="error alert alert-error span8 pull-right">', '</div>'); ?>
		</div>
		
		<div class="row-fluid">
			<label>Nueva contrase�a</label>
			<input type="password" name="nva_contrasegna" value="<?php echo set_value('nva_contrasegna'); ?>">
			<?php echo form_error('nva_contrasegna', '<div class="error alert alert-error span8 pull-right">', '</div>'); ?>
		</div>
		
		
		<div class="row-fluid">
			<label>Confirme su nueva contrase�a</label>
			<input type="password" name="nva_contrasegna_rep" value="<?php echo set_value('nva_contrasegna_rep'); ?>">
			<?php echo form_error('nva_contrasegna_rep', '<div class="error alert alert-error span8 pull-right">', '</div>'); ?>
		</div>
		
		<div>
			<button type="submit" class="btn">Cambiar contrase�a</button>
		</div>
	</div>
	
</fieldset>