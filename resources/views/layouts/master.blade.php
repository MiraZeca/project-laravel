<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title')</title>
</head>
<body>
    @include('templates.navbar')
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1">
                @yield('main')
            </div>
        </div>
    </div>
</body>
</html>