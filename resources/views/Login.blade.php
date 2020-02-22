<!-- 
    Document   : Login
    Created on : 4/01/2020, 12:44:52 PM
    Author     : fernando
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        @include('Plantillas/head')
        <title>Plantilla</title>
    </head>
    <body>
        @include('Plantillas/header')
        <div class="row col-12 contenedor centrar w-100 m-0 p-0">
            <div class="row m-0 p-0 h-75 w-25 login">
                <div class="row col-12 m-0 w-100 img-login centrar" id="img-login">
                    <img src="{{asset('recursos/Img/Icons/user.png')}}"/>
                    <p class="col-12 m-0 text-center">Inicia Sesión</p>
                </div>
                <div class="col-12 w-100 centrar form-login" id="form-login">
                    <form id="login" action="{{route('login')}}" method="POST" >
                    	@csrf
                        <div class="form-group">
                            <label for="correo"></label>
                            <input type="email" class="form-control input" id="email" name="email" placeholder="Correo">
                        </div>
                        <div class="form-group">
                            <label for="pass"></label>
                            <input type="password" class="form-control input" id="password" name="password" placeholder="Contraseña">
                        </div>
                        <button type="submit" class="btn btn-danger">Iniciar</button>
                    </form>
                </div>
                <div class="col-12 w-100 footer-login" id="footer-login"></div>
            </div>
        </div>
        @include('Plantillas/footer')
        @include('Plantillas/callhead')
    </body>
</html>