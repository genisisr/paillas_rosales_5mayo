<?php include('cabeza.php');?>
<body>

<?php
$csv = array_map('str_getcsv', file('data/costoreal.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
	<h1>Costo Carrera</h1>

	<table id="tablesorter" class="tablesorter" border="0" cellpadding="0" cellspacing="1">
		<thead>
			<tr>
				<th>Carrera</th>
				<th>Institución</th>
				<th>Arancel anual</th>
				<th>Arancel total formal</th>
				<th>Arancel total real</th>
			</tr>
		</thead>
		<tbody>

			<?php for($a = 0; $a < $total = count($csv); $a++){?>

			<tr>
				<td><?php echo($csv[$a]["carrera"])?></td>
				<td><?php echo($csv[$a]["institucion"])?></td>
				<td><?php echo($csv[$a]["arancel"]);?></td>
				<td><?php echo(($csv[$a]["duracion_formal"]*$csv[$a]["arancel"])/2);?></td>
				<td><?php echo(($csv[$a]["duracion_real"]*$csv[$a]["arancel"])/2);?></td>
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
