<?php include('cabeza.php');?>
<body>

<?php
$csv = array_map('str_getcsv', file('data/albornoz_armijo_data.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
	<h1>Índices de Empleabilidad</h1>

<br>



	<table id="tablesorter" class="tablesorter" border="0" cellpadding="0" cellspacing="1">
		<thead>
			<tr>
				<th>Carrera</th>
				<th>Institución</th>
				<th>Título Profesional</th>
				<th>Empleabilidad</th>
				<th>Ingreso Promedio al cuarto año</th>
			</tr>
		</thead>
		<tbody>

			<?php for($a = 0; $a < $total = count($csv); $a++){?>

			<tr>
				<td><?php echo($csv[$a]["carrera"])?></td>
				<td><?php echo($csv[$a]["institucion"])?></td>
				<td><?php echo($csv[$a]["titulo_profesional"])?></td>
				<td><?php echo($csv[$a]["empleabilidad"])?></td>
				<td><?php echo($csv[$a]["ingreso_promedio_4to_año"])?></td>
			</tr>

			<?php };?>

		</tbody>
	</table>

	<pre><?php print_r($csv);?></pre>


</div>
</div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
