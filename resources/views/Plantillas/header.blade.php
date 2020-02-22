<!-- 
    Document   : plantilla
    Created on : 4/01/2020, 04:15:37 PM
    Author     : fernando
-->

<header>
    <div class="row h-100 w-100 p-0 m-0">
        <div id="header1" class="centrar col-2 m-0 p-0 h-100">
            <img src="{{asset('recursos/Img/logo.png')}}"/>
        </div>
        <div id="header2" class="centrar col-7 m-0 h-100">
            <form id="formBuscar" class="centrar h-100 form-inline m-0 p-0 w-100">
                <input id="Buscar" class="form-control" type="search" placeholder="Buscar" aria-label="Search">
                <button id="botonBuscar" class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
        <div id="header3" class="centrar row col-3 m-0 p-0 h-100">
        	@auth
        		<div class="boton-LR col-4 w-100" id="login">
	                <button type="button" class="btn h-100 w-100 p-0  boton-user"></button>
	            </div>
	            <div class="col-4 w-100 centrar boton-LR" id="registro">
	                {{auth()->user()->nombre}}
	            </div>
	            <div class="dropdown dropdown-carrito col-2 p-0 m-0" id="carrito">
	                <button class="btn h-100 w-100 p-0  boton-carrito" type="button" id="dropdownMenuCar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                </button>
	                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuCar"> 
	                    <a class="dropdown-item" href="#">Action</a>
	                    <a class="dropdown-item" href="#">Another action</a>
	                    <a class="dropdown-item" href="#">Something else here</a>
	                    <a class="dropdown-item" href="#">Something else here</a>
	                    <a class="dropdown-item" href="#">Something else here</a>
	                    <a class="dropdown-item" href="#">Something else here</a>
	                    <a class="dropdown-item" href="#">Something else here</a>
	                    <a class="dropdown-item" href="#">Something else here</a>
	                    <a class="dropdown-item" href="#">Something else here</a>
	                    <a class="dropdown-item" href="#">Something else here</a>
	                    <a class="dropdown-item" href="#">Something else here</a>
	                    <a class="dropdown-item" href="#">Something else here</a>
	                </div>
	            </div>
	            <div class="dropdown dropdown-carrito col-2 p-0 m-0" id="config">
	                <button class="btn h-100 w-100 p-0  boton-config" type="button" id="dropdownMenuConfig" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                </button>
	                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuConfig"> 
	                    <a class="dropdown-item" href="{{route('perfil')}}">Perfil</a>
	                    <a class="dropdown-item" href="#">Mis Compras</a>
	                    <form action="{{route('logout')}}" method="POST">
	                    	@csrf
	                    	<button class="dropdown-item" type="submit">Cerrar Sesion</button>
	                    </form>
	                    
	                </div>
	            </div>
        	@else
				@if(Route::is('login'))
					<div class="boton-LR col-4 w-100">
		            </div>
		            <div class="col-4 w-100 centrar boton-LR" id="registro">
		                <button type="button" class="btnRegistro btn btn-secondary m-0 w-100" onclick="window.location.href='{{route('registro')}}';">Registro</button>
		            </div>
		            <div class="dropdown dropdown-carrito col-2 p-0 m-0" id="carrito">
		                <button class="btn h-100 w-100 p-0  boton-carrito" type="button" id="dropdownMenuCar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                </button>
		                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuCar"> 
		                    <a class="dropdown-item" href="#">Action</a>
		                    <a class="dropdown-item" href="#">Another action</a>
		                    <a class="dropdown-item" href="#">Something else here</a>
		                </div>
		            </div>
		            <div class="col-2 p-0 m-0"></div>
				@elseif (Route::is('registro'))
					<div class="boton-LR col-4 w-100" id="login">
						<button type="button" class="btnLogin btn btn-secondary w-100 " onclick="window.location.href='{{route('login')}}';">Login</button>
		            </div>
		            <div class="col-4 w-100 centrar boton-LR"></div>
		            <div class="dropdown dropdown-carrito col-2 p-0 m-0" id="carrito">
		                <button class="btn h-100 w-100 p-0  boton-carrito" type="button" id="dropdownMenuCar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                </button>
		                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuCar"> 
		                    <a class="dropdown-item" href="#">Action</a>
		                    <a class="dropdown-item" href="#">Another action</a>
		                    <a class="dropdown-item" href="#">Something else here</a>
		                </div>
		            </div>
		            <div class="col-2 p-0 m-0"></div>
				@else
					<div class="boton-LR col-4 w-100" id="login">
						<button type="button" class="btnLogin btn btn-secondary " onclick="window.location.href='{{route('login')}}';">Login</button>
		            </div>
		            <div class="col-4 w-100 centrar boton-LR" id="registro">
		                <button type="button" class="btnRegistro btn btn-secondary m-0" onclick="window.location.href='{{route('registro')}}';">Registro</button>
		            </div>
		            <div class="dropdown dropdown-carrito col-2 p-0 m-0" id="carrito">
		                <button class="btn h-100 w-100 p-0  boton-carrito" type="button" id="dropdownMenuCar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                </button>
		                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuCar"> 
		                    <a class="dropdown-item" href="#">Action</a>
		                    <a class="dropdown-item" href="#">Another action</a>
		                    <a class="dropdown-item" href="#">Something else here</a>
		                </div>
		            </div>
		            <div class="col-2 p-0 m-0"></div>
				@endif
        	@endauth
        </div>
    </div>
</header>