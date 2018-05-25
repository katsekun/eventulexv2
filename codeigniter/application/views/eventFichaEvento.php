<div class="container">
	<div class="row">
		<?php 
		if(isset($query2)) 
		{
			/*echo "<div class='col-md-6 text-center'>
				<a href='/eventulex/index.php/cargaEvento/". $query[$i]->id. "/'>
        	<table class='tabla_eventos' id=" . $query[$i]->id . " width='auto'><tr><td> " . $query[$i]->nombre . " (" . $query[$i]->cat . ")</td></tr><tr><td> " . $query[$i]->lugar . "<br>" .  $query[$i]->fecha_ini . " - " . $query[$i]->fecha_fin . "</td></tr><tr><td> " . $query[$i]->descripcion . "<br> " . $query[$i]->logo ."</td></tr></table></a></div>";*/

 
			echo "<table class='tabla_eventos' width='auto'>";
			for($i=0;$i<count($query2);$i++)
			{
				//e.id, e.id_evento, e.precio, e.fecha_ini, e.fecha_fin, e.hora_ini, e.hora_fin, e.descripcion
				echo "<tr id=" . $query2[$i]->id . " ><td> " . $query2[$i]->descripcion . "</td><td>" . $query2[$i]->precio . "</td></tr>";
        	}
        	echo "</table>";
   		}
    	?>
	</div>
</div>  