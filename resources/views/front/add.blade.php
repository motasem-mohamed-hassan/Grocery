@extends('layouts.master')
@section('content')<br><br><br>
<form action="{{ route('post_add') }}" method="post"  enctype="multipart/form-data">
<div class="container ">
    @csrf
    <div class="form-group">
        <div class="row">
            <label class="col-md-2 text-center mr-5">Name</label>
            <div class="col-md-7 ">
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <label class="col-md-2 text-center">Category</label>
            <div class="col-md-7">
                <select name="category_id" class="form-control" id="category">
                    <option value="" selected>--Select Category--</option>
                    @foreach ($categories as $category)
                        <option category_id="{{ $category->id }}" id="categoriesOption" value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <label class="col-md-2 text-center">Sub Category</label>
            <div class="col-md-6">
                <select name="subCategory_id" class="form-control" id="subCategory">
                    <option value="" selected>--Select Sategory--</option>
                </select>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <label class="col-md-2 text-center mt-4">Description</label>
            <div class="col-md-7">
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <label class="col-md-2 text-center">Price</label>
            <div class="col-md-2">
                <input type="text" name="price" id="price" class="form-control">
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <label class="col-md-2 text-center">image</label>
            <div class="col-md-6">
                <input class="btn back" type="file" name="image[]" id="image" class="form-control" multiple>


            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="modal-footer">
        <input  type="submit" class="btn btn-info" value="Add">
    </div>
    </div>
</form>

@endsection

@section('scripts')
    <script>
        $(document).on('change', '#category', function(e){
            e.preventDefault();
            var category_id = $('#category option:selected').val();
            $.ajax({
                type: "get",
                url: "{{ route('chose_sub') }}",
                data: {'id' : category_id},
                contentType: false,
                cache: false,
                success: function (response) {
                    $('.ajax').remove(); //remove result before
                    $.each(response.data, function(index, value) {
                        console.log(value);
                        $('#subCategory').append(`<option class="ajax" value="${value.id}">${value.name}</option>`);
                    });
                },
            });
        });
    </script>
@endsection
