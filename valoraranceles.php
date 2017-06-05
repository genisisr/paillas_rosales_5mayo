<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>El título</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/tabla.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
	<script type="text/javascript">
	$(function() {
		$("#tablesorter").tablesorter({sortList:[[0,0]], widgets: ['zebra']});
		$("#options").tablesorter({sortList: [[0,0]], headers: { 3:{sorter: false}, 4:{sorter: false}}});
	});
	</script>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<?php
$csv = array_map('str_getcsv', file('data/enedi.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
	<h1>Valor aranceles</h1>



	<li<?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?> class="active" <?php };?>><a href="index.php">Acreditación diseño en Chile</a></li>
	<li<?php if((basename($_SERVER['PHP_SELF']))=='costoarancel.php'){?> class="active" <?php };?>><a href="costoarancel.php">Costo arancel</a></li>
		<li<?php if((basename($_SERVER['PHP_SELF']))=='ingresoypermanencia.php'){?> class="active" <?php };?>><a href="ingresoypermanencia.php">Ingreso y permanencia </a></li>
	<li<?php if((basename($_SERVER['PHP_SELF']))=='grados.php'){?> class="active" <?php };?>><a href="grados.php">Títulos y grados en diseño</a></li>
	<li<?php if((basename($_SERVER['PHP_SELF']))=='costocarrera.php'){?> class="active" <?php };?>><a href="costocarrera.php">Costo carrera</a></li>
	<li<?php if((basename($_SERVER['PHP_SELF']))=='empleabilidad.php'){?> class="active" <?php };?>><a href="empleabilidad.php">Índices de empleabilidad</a></li>
	<li<?php if((basename($_SERVER['PHP_SELF']))=='ubicaciones.php'){?> class="active" <?php };?>><a href="ubicaciones.php">Ubicaciones facultades de diseño</a></li>
	<table id="tablesorter" class="tablesorter" border="0" cellpadding="0" cellspacing="1">
		<thead>
			<tr>
				<th>Carrera</th>
				<th>Institución</th>
				<th>Arancel</th>
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
				<td><?php echo(($csv[$a]["duraccion_real"]*$csv[$a]["arancel"])/2);?></td>
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
