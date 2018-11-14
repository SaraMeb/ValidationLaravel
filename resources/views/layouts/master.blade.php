<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Booking Halls - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">




    </head>
    <body>
      <header>
         @include('./layouts.menu')
      </header>
        <main>

            @yield('content')
        </main>

    </body>
</html>
