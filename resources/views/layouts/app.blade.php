<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librairie</title>
    <link rel="stylesheet" href="{{ asset('./css/app.css')}}">
</head>
<body class="w-full flex flex-col justify-between bg-white text-balck">
    @include('layouts.header')
    
    <main class="h-full">
    @yield('main')
</main>
    @include('layouts.footer')
</body>
</html>