@extends('layouts.master')
@section('content')
<form action="{{ route('post_add') }}" method="post"  enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <div class="row">
            <label class="col-md-3">Name</label>
            <div class="col-md-6">
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <label class="col-md-3">Category</label>
            <div class="col-md-6">
                <select name="category_id" class="form-control" id="category">
                    <option value="" selected>--Select Category--</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <label class="col-md-3">Description</label>
            <div class="col-md-6">
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <label class="col-md-3">Price</label>
            <div class="col-md-3">
                <input type="number" name="price" id="price" class="form-control">
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <label class="col-md-3">image</label>
            <div class="col-md-6">
                <input type="file" name="image[]" id="image" class="form-control" multiple>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="modal-footer">
        <input type="submit" class="btn btn-info" value="Add">
    </div>
</form>

@endsection
