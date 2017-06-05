
<?php include('cabeza.php');?>
<body>

<?php
$csv = array_map('str_getcsv', file('data/enedi.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
<br>
<br>
 <br>
	<h1>Acreditación de Diseño en Chile</h1>
	<br>
	<br>








	<table id="tablesorter" class="tablesorter" border="0" cellpadding="0" cellspacing="1">
		<thead>
			<tr>
				<th>Carrera</th>
				<th>Institución</th>
				<th>Acreditación institución</th>
				<th>Acreditación carrera</th>
				<th>Desde</th>
				<th>Hasta</th>
			</tr>
		</thead>
		<tbody>

			<?php for($a = 0; $a < $total = count($csv); $a++){?>

			<tr>
				<td><?php echo($csv[$a]["carrera"])?></td>
				<td><?php echo($csv[$a]["institucion"])?></td>
				<td><?php echo($csv[$a]["acreditacion_institucion"])?></td>
					<td><?php echo($csv[$a]["acreditacion_carrera"])?></td>
				<td><?php echo($csv[$a]["Desde"])?></td>
				<td><?php echo($csv[$a]["Hasta"])?></td>
			</tr>

			<?php };?>

		</tbody>
	</table>

	<br>
	<br>
	<br>


</div>
</div>
</div>
<script src="js/bootstrap.min.js"></script>
<?php include('pie.php');?>

</body>
</html>
