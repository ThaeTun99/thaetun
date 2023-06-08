<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-300">
    <div class="m-10">
        <p class="text-xl underline decoration-green-500 mb-4 text-center">@yield('header')</p>
        <div>@yield('guide')</div>
        <div>@yield('body')</div>
    </div>
</body>

</html>
