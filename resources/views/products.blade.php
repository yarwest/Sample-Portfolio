@extends('layouts.main')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h1>Products</h1>
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
            </div>
        </div>
    </div>
@endsection