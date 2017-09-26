<?php
    if(!isset($user)){
        $user = auth()->user();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Classy Cakery - admin panel</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/darkly/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>

<body>

  <div class="wrapper">
    @include('partials.adminMenu')
        <div class="main-panel">
          @include('partials.notifications')
          @yield('content')
        </div>
        @yield('modals')
    </div>
    <!-- Loading font-awesome asynchronously -->
    <script type="text/javascript">
        (function() {
            var css = document.createElement('link');
            css.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css';
            css.rel = 'stylesheet';
            css.type = 'text/css';
            document.getElementsByTagName('head')[0].appendChild(css);
        })();
    </script>
</body>

</html>
