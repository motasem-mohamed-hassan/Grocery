@extends('layouts.master')
@section('content')<br><br><br>
    <div class="container ">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('get_add_category') }}" method="get"  enctype="multipart/form-data">
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
            <div class="modal-footer">
                <input  type="submit" class="btn btn-info" value="Confirm">
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
