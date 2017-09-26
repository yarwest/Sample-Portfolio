@extends('layouts.admin')

@section('content')
    <div class="jumbotron">
        <div class="container">
            @foreach ($portfolioItems as $item)
                <p>item</p>
            @endforeach
        </div>
    </div>
@endsection
