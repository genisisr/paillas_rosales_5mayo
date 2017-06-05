<!DOCTYPE html>
<html lang="es">
<?php

$image = "https://http://www.out.com/sites/out.com/files/2017/02/13/tumblr_olbnoxu9nj1sa3fuko3_r1_500.gif";
?>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php echo($title);?></title>
<!-- Metadatos para Search Engine -->
<meta name="description" content="<?php echo($description);?>">
<meta name="image" content="<?php echo($image);?>">
<!-- Metadatos en Schema.org para Google -->
<meta itemprop="name" content="<?php echo($title);?>">
<meta itemprop="description" content="<?php echo($description);?>">
<meta itemprop="image" content="">
<!-- Metadatos para Facebook, Pinterest & Google+ -->
<meta name="og:title" content="<?php echo($title);?>">
<meta name="og:description" content="<?php echo($description);?>">
<meta name="og:image" content="<?php echo($image);?>">
<meta name="og:site_name" content="<?php echo($title);?>">
<meta name="og:locale" content="es_CL">
<meta name="og:type" content="website">
<!--acá metemos los estilos-->
<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,700" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/tabla.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
<script type="text/javascript">
$(function() {
  $("#tablesorter").tablesorter({sortList:[[0,0]], widgets: ['zebra']});
  $("#options").tablesorter({sortList: [[0,0]], headers: { 3:{sorter: false}, 4:{sorter: false}}});
});
</script>

</head>

<body>
<div class="container">
<div class="row">

<header>
<div class="masthead clearfix">
<div class="inner">
  <div class="col-md-12">
  <nav>
  <ul class="nav masthead-nav">
  <li<?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?> class="active" <?php };?>><a href="index.php">Acreditación</a></li>
  <li<?php if((basename($_SERVER['PHP_SELF']))=='grados.php'){?> class="active" <?php };?>><a href="grados.php">Titulos y grados</a></li>
  <li<?php if((basename($_SERVER['PHP_SELF']))=='ingreso.php'){?> class="active" <?php };?>><a href="ingreso.php">Ingreso y Permnencia</a></li>
  <li<?php if((basename($_SERVER['PHP_SELF']))=='ubicaciones.php'){?> class="active" <?php };?>><a href="ubicaciones.php">Ubicaciones</a></li>
  <li<?php if((basename($_SERVER['PHP_SELF']))=='costoreal.php'){?> class="active" <?php };?>><a href="costoreal.php">Costo Real</a></li>
  <li<?php if((basename($_SERVER['PHP_SELF']))=='empleabilidad.php'){?> class="active" <?php };?>><a href="empleabilidad.php">Empleabilidad</a></li>
  </ul>
  </nav>
  <div>
<h1 class="titulo"><?php echo($title);?></h1>
<h3><?php echo($description);?></h3>
</div>
</div>
</div>
</div>
</header>

</div>
</div>
