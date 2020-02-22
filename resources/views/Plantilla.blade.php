<!-- 
    Document   : Plantilla
    Created on : 25/01/2020, 04:31:21 PM
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
        <div class="row contenedor w-100 m-0 p-0">
            <aside class="col-2 w-100 h-100" id="filtros">

            </aside>
            <section class="col-10 w-100 h-100" id="cuerpo">
            </section>

        </div>
        @include('Plantillas/footer')
        @include('Plantillas/callhead')
    </body>
</html>
