<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Classy Cakery</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/darkly/bootstrap.min.css">
        
    </head>
    <body>
        @include('partials.navbar')
        
        @yield('content')
        
        @include('partials.footer')
    </body>
</html>