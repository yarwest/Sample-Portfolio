@extends('layouts.main')

@section('content')
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
@endsection