<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/darkly/bootstrap.min.css">
        
    </head>
    <body>
        <div class="jumbotron">
            <div class="container">
                <h1>Portfolio</h1>
                @foreach($portfolio_items as $item)
                    <div class="panel panel-default">
                        <div class="panel-heading">{{$item->title}}</div>
                        <div class="panel-body">
                            <img src="/img/{{$item->image}}.jpg" style="height:200px; width:200px; margin-left:calc(50% - 100px);">
                        </div>
                        <div class="panel-footer">
                            <p>{{$item->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>