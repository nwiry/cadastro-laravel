<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} :: @yield('titulo')</title>
    @include('linksheader.globalcss')
    @include('linksheader.globaljs')
    @yield('extraheaderlinks')
</head>

<body>
    @include('linksfooter.globalcss')
    @yield('conteudo')
    @include('linksfooter.globaljs')
</body>

</html>