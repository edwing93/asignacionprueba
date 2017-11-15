<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?=base_url()?>uploads/favicon.ico" type="image/gif">
<title>Proximas Citas</title>

<!-- Bootstrap -->
<link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>



<body>

	<form action="<?=base_url()?>index.php/Op_usuarios/gestion_citas"><input type="submit" id="volver" class="btn btn-danger" value="Regresar"></input></form>

<div class="container">

	<div class="panel panel-default">

	  <div class="panel-heading">Proximas Citas</div>

	  <table class="table table-striped">
			<thead>
			<tr>
				<th>Codigio</th>
				<th>Fecha</th>
				<th>Km</th>
				<th>Estado</th>
				<th>Placa</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
	<?php foreach($proximas as $valor){ ?>
		<form method="post">
			<tr>

				<td><input type="text" name="id" class="form-control" readonly value="<?php echo $valor['Id_cita'];?>"></td>
				<td><input type="text" name="id" class="form-control" readonly value="<?php echo $valor['Fecha_inicial'];?>"></td>
				<td><input type="text" name="id" class="form-control" readonly value="<?php echo $valor['Kilometraje'];?>"></td>
				<td><input type="text" name="id" class="form-control" readonly value="<?php echo $valor['Estado'];?>"></td>
				<td><input type="text" name="id" class="form-control" readonly value="<?php echo $valor['Vehiculos_Placa'];?>"></td>

				<td>
	<div class="btn-toolbar" role="toolbar">
			<div class="btn-group">
				<button type="submit" class="btn btn-primary btn-lg active" name="ir">
					<span class="glyphicon glyphicon-circle-arrow-right">    Ir</span>
				</button>
 </div>

				</td>
			</tr>
			</form>
			<?php }; ?>
		</tbody>
	</table>
</div>




</div>


<?php
if(isset($_POST["ir"])){
	echo "<h1> Aqui va AJAX & JSON</h1>";
}
 ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?=base_url()?>assets/js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=base_url()?>assets/js/bootstrap.js"></script>
</body>
</html>
