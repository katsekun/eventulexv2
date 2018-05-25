<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<h1>LOGIN</h1>
			<?php 
				echo form_open('eventulex/usuarioValida');

				echo form_label('Usuario', 'usuario');
				echo form_input('usuario', set_value('usuario', 'Usuario'),'class="form-control"'); 
				echo '<br>';
				echo form_label('Contraseña', 'pass');
				echo form_input('pass', set_value('pass', 'Contraseña'),'class="form-control"');
				echo '<br>';
				 
				echo form_submit('botonSubmit', 'Enviar');        
				echo form_close();  
			?>  
		</div>
		<div class="col-sm-6">
			<h1>NUEVO USUARIO</h1>
			<?php 
				echo form_open('eventulex/validaNuevo');

				echo form_label('Usuario', 'usuario');
				echo form_input('usuario', set_value('usuario', 'Usuario'),'class="form-control"'); 
				echo '<br>';
				echo form_label('Contraseña', 'pass');
				echo form_input('pass', set_value('pass', 'Contraseña'),'class="form-control"');
				echo '<br>';
				echo form_label('Contraseña', 'pass2');
				echo form_input('pass2', set_value('pass2', 'Contraseña'),'class="form-control"');
				echo '<br>';
				
				echo form_submit('botonSubmit', 'Enviar');        
				echo form_close();  
			?>  
		</div>
		<?php echo validation_errors();?>
	</div>
</div>