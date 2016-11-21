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
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-sm-8" style="margin: auto;">
                        <h1>Portfolio</h1>
                        @foreach($portfolio_items as $item)
                            <div class="panel panel-default">
                                <div class="panel-heading">{{$item->title}}</div>
                                <div class="panel-body" style="padding: 0;">
                                    <div style="height:230px; width:100%; background-image:url('/img/{{$item->image}}.jpg'); background-size:cover; background-position: center center;"></div>
                                </div>
                                <div class="panel-footer">
                                    <p>{{$item->description}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </body>
</html>