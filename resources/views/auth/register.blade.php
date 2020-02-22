<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{asset('recursos/css/plantilla.css')}}">
	<link rel="stylesheet" href="{{asset('recursos/css/estilos.css')}}">
	<link rel="stylesheet" href="{{asset('recursos/css/bootstrap.min.css')}}">
	<title>Registro</title>
</head>
<body>
	@include('Plantillas/header')
	<div id="contenedorRegistro" class="row col-12 contenedor">
		<form id="formPerfil" method="POST" action="{{ url('register') }}">
		  @csrf
		  <div class="form-group col-12">
		    <label for="Nombre">Nombre</label>
		    <input type="text" class="form-control" id="Nombre" placeholder="Nombre">
		  </div>
		  <div class="form-group col-12">
		    <label for="ApellidoP">Apellido Paterno</label>
		    <input type="text" class="form-control" id="ApellidoP" placeholder="Apellido Paterno">
		  </div>
		   <div class="form-group col-12">
		    <label for="Apellidom">Apellido Materno</label>
		    <input type="text" class="form-control" id="ApellidoM" placeholder="Apellido Materno">
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
		    <label for="Pass1">Contraseña</label>
		    <input type="password" class="form-control" id="Pass1" placeholder="Correo">
		  </div>
		  <div class="form-group col-12">
		    <label for="Pass2">Confirmar Contraseña</label>
		    <input type="password" class="form-control" id="Pass2" placeholder="Correo">
		  </div>
		  <div class="row col-12" id="botoneraRegistro">
		  	<div class="col-12 boton">
		  		<button type="submit" class="btn btn-secondary">Aceptar</button>
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