<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--La etiqueta de titulo se añade aqui para todos y se cambia en cada una de las vistas--}}
    <title>HEALTHLINK -- @yield('title')</title>
    {{--Otra forma de escribirlo pero con modelo blade--}}
    {{--<title>HealthLink -- {{$title ?? ''}}</title>--}}

    <!--Aquí se sobre escribe el nombre en las inspecciones-->
    <meta name="description" content="@yield('meta-description', 'Default meta description')" />
    {{--<meta name="description" content="{{ $meta-description?? 'Default meta description'}}" />--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="css/app.css">

</head>
<body>
{{--Forma de armarlo pero con componentes--}}
{{--<x-navigation/>--}}
@include('partials.navigation')
{{--utilizamos herencia--}}

@yield('content')


    <footer class="pie-pagina">
        <div class="grupo1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="" alt="">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>Sobre nosotros</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, magnam.</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fab-facebook"></a>
                    <a href="#" class="fa fab-instagram"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy;2022 <b>HEALTHLINK</b> - Todos los derechos Reservados</small>
        </div>
    </footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>