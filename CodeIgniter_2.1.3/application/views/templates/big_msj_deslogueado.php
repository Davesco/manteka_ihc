<!DOCTYPE html>
<html lang="en">
<?php
	echo $head						//Esta variable es pasada como parámetro a esta vista
?>
<body>
		
		<?php
			echo $banner_portada	//Esta variable es pasada como parámetro a esta vista
		?>
		<div class="wrapp row-fluid">
			<div class="span4 offset4"> 
  		    	<div class="alert alert-block <?php echo $tipo_msj ?>">
  		    		<h4><?php echo $titulo_msj ?></h4>
		   		 	<?php echo $cuerpo_msj ?>
		    	</div>
		    	<?php 
		    		if (isset($redirecFrom)) {
		    			echo '<a class="pull-left" href="'.site_url($redirecFrom).'">Volver</a>';
		    	}
		    	?>
	        	<a class="pull-right" href="<?php echo site_url($redirecTo) ?>">Ir al <?php echo $nombre_redirecTo ?></a>
			</div>
    	</div>
		
</body>
</html>