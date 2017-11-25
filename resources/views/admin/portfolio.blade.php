@extends('layouts.admin')
@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Portfolio Item</h1>
            <button class="btn btn-primary btn-raised" data-toggle="modal" data-target="#newItemModal">
                <i class="fa fa-plus-circle fa-fw"></i> New Portfolio Item
            </button>
            <hr>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($portfolioItems as $item)
                        <tr>
                            <td>{{$item->title}}</td>
                            <td>{{$item->description}}</td>
                            <td>
                                <button data-action="/admin/portfolio/{{$item->id}}" data-toggle="modal" data-target="#editItemModal{{$item->id}}" class="btn btn-icon btn-outline btn-warning">
                                    <i class="fa fa-edit fa-fw"></i>
                                </button>
                                <form action="/admin/portfolio/{{ $item->id }}" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-icon btn-outline btn-danger">
                                        <i class="fa fa-times fa-fw"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>Title</th>
                    <th>Description</th>
                  </tr>
                </tfoot>
              </table>
            </div>
        </div>
    </div>
@endsection
@section('modals')
<div class="modal fade" tabindex="-1" role="dialog" id="newItemModal" arialabeled-by="newItemModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form method="POST" action="/admin/portfolio" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            @include('admin._createItemForm')
        </form>
    </div>
  </div>
</div>
@foreach($portfolioItems as $item)
<div class="modal fade" tabindex="-1" role="dialog" id="editItemModal{{$item->id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="/admin/portfolio/{{$item->id}}" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                @include('admin._editItemForm')
          </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endforeach
@endsection
