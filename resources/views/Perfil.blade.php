<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" href="{{asset('recursos/css/plantilla.css')}}">
	<link rel="stylesheet" href="{{asset('recursos/css/estilos.css')}}">
	<link rel="stylesheet" href="{{asset('recursos/css/bootstrap.min.css')}}">

	<title>Perfil</title>
</head>
<body>
	@include('Plantillas/header')

	<div id="contenedorPerfil" class="row col-12 contenedor">
		<form id="formPerfil">
		  <div class="form-group col-12">
		    <label for="Nombre">Nombre</label>
		    <input type="text" class="form-control" id="Nombre" placeholder="Nombre">
		  </div>
		  <div class="form-group col-12">
		    <label for="Apellidos">Apellidos</label>
		    <input type="text" class="form-control" id="Apellidos" placeholder="Apellidos">
		  </div>
		  <div class="form-group col-12">
		    <label for="Telefono">Teléfono</label>
		    <input type="text" class="form-control" id="Telefono" placeholder="Telefono">
		  </div>
		  <div class="form-group col-12">
		    <label for="Correo">Correo</label>
		    <input type="email" class="form-control" id="Correo" placeholder="Correo">
		  </div>
		  <div class="form-group col-12">
		    <label for="Pass1">Nueva Contraseña</label>
		    <input type="password" class="form-control" id="Pass1" placeholder="Correo">
		  </div>
		  <div class="form-group col-12">
		    <label for="Pass2">Confirmar Contraseña</label>
		    <input type="password" class="form-control" id="Pass2" placeholder="Correo">
		  </div>
		  <div class="row col-12" id="botoneraRegistro">
		  	<div class="col-6 boton">
		  		<button type="submit" class="btn btn-secondary">Aceptar</button>
		  	</div>
		  	<div class="col-6 boton">
		  		<button type="button" class="btn btn-secondary">Cancelar</button>
		  	</div>
		  </div>
		</form>
	</div>
	

	@include('Plantillas/footer')

	<script src="{{asset('recursos/js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{asset('recursos/js/popper.min.js')}}"></script>
	<script src="{{asset('recursos/js/bootstrap.min.js')}}"></script>

</body>
</html>