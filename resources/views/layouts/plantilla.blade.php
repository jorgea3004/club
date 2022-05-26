<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <script type="text/javascript"></script>
        <style type="text/css">
            #menu {
                width: 100%;
                height: auto;
                margin: 0 10px;
                padding: 0;
                display: inline;
                float: left;
            }
            #menu li {
                width: auto;
                height: 30px;
                margin: 5px;
                padding: 5px 10px;
                display: inline;
                float: left;
                border: solid 1px #000;
                border-radius: 5px;
            }
            #menu li:hover {
                background-color: gray;
                cursor: pointer;
            }
            .listado {
                width: 100%;
                height: auto;
                margin: 0 10px;
                padding: 0;
                display: inline;
                float: left;
            }
            .listado li {
                width: 15%;
                height: 30px;
                margin: 0;
                padding: 5px 10px;
                display: inline;
                float: left;
                border: solid 1px #000;
                border-radius: 5px;
            }
            #ulcontent li {
                border: 0;
            }
        </style>
    </head>
    <body class="antialiased">
        <ul id="menu">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('members.index')}}">Miembros</a></li>
        </ul>
       @yield('content')
    </body>
</html>
