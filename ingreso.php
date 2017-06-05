<?php include('cabeza.php');?>
<body>

<?php
$csv = array_map('str_getcsv', file('data/datos-esteban.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
	<h1>Ingreso y Permanencia</h1>

	<table id="tablesorter" class="tablesorter" border="0" cellpadding="0" cellspacing="1">
		<thead>
			<tr>
				<th>Carrera</th>
				<th>Institución</th>
				<th>Numero Matriculados</th>
				<th>Retención Primer Año (%)</th>
				<th>Procedencia Subencionado (%)</th>
			</tr>
		</thead>
		<tbody>

			<?php for($a = 0; $a < $total = count($csv); $a++){?>

			<tr>
				<td><?php echo($csv[$a]["carrera"])?></td>
				<td><?php echo($csv[$a]["institucion"])?></td>
				<td><?php echo($csv[$a]["numero_matriculados"])?></td>
				<td><?php echo($csv[$a]["procentaje_retencion_primero"])?></td>
				<td><?php echo($csv[$a]["porcentaje_procedencia_subvencionado"])?></td>

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
