<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title" id="newItemLabel">Edit Item</h4>
</div>
<div class="modal-body">


  <div class="form-group">
    <label for="name" class="control-label col-sm-4">Title</label>
    <div class="col-sm-8">
        <input class="form-control" id="title" placeholder="Title" name="variety" type="text" value="{{$item->title}}" required>
    </div>
  </div>
  <div class="form-group">
    <label for="address" class="control-label col-sm-4">Description</label>
    <div class="col-sm-8">
        <input class="form-control" id="description" placeholder="Description" name="variety" value="{{$item->description}}" type="text" required>
    </div>
  </div>

</div>

<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Save changes</button>
</div>
