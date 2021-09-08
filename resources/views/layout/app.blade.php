<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>home</title>
</head>
<body>
    @include('partials.header')
    <main class="m-2">@yield('content')</main>
    @include('partials.footer')


</body>
</html>