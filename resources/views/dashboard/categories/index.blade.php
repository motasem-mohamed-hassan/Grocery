@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Categories</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <!-- Button trigger modal for create -->
            <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#createModal">
                Add New Category
            </button>

            <!-- create Modal -->
            <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createModalLabel">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--Form-->
                        <form id="createForm" action="" method="">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <label for="name" class="col-md-3">Category Name</label>
                                    <div class="col-md-6">
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input  id="submitToCreate" type="submit" class="btn btn-info" value="Create" data-dismiss="modal">
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
            <!--End create Modal -->


            <!-- update Modal -->
            <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateModalLabel">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--Form-->
                        <form id="updateForm" action="" method="">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <label for="name" class="col-md-3">Category Name</label>
                                    <div class="col-md-6">
                                        <input type="text" name="name" id="editName" class="form-control" value="">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="text" name="id" id="currentid" class="form-control" value="" hidden>
                                <input id="submitToUpdate" type="submit" class="btn btn-info" value="update" data-dismiss="modal">
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
            <!--End update Modal -->



            <!--Table-->
            <table id="myTable" class="table table-bordered table-striped col-sm-12">
                <tr class="bg-info">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                @foreach ($categories as $category)
                <tr class="categoryRow{{ $category->id }}">
                    <td class="category_id" style="width: 50px">{{ $category->id }}</td>
                    <td class="category_name{{ $category->id }}" style="width: 120px">{{ $category->name }}</td>
                    <td style="width: 120px">
                        <button category_id="{{ $category->id }}" data-toggle="modal" data-target="#updateModal" class="editBtn btn btn-info">Edit</button>
                        <button category_id="{{ $category->id }}" class="delete_btn btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </table>
            <!--End Table-->

    </section>
@endsection

@section('scripts')
    <script>

        //store data
        $(document).on('click', '#submitToCreate', function(e){
            e.preventDefault();

            var formData = new FormData($('#createForm')[0]);

            $.ajax({
                type: "post",
                //enctype: "multipart/form-data",
                url: "{{ route('admin.categories.store') }}",
                data: formData,

                processData: false,
                contentType: false,
                cache: false,

                success: function (data) {
                    var id      = data.data.id;
                    var name    = data.data.name;

                    $('#myTable').append(
                        `<tr class="categoryRow${id}">
                            <td class="category_id" style="width: 50px">${id}</td>
                            <td class="category_name${id}" style="width: 120px">${name}</td>
                            <td style="width: 120px">
                                <button category_id="${id}" data-toggle="modal" data-target="#updateModal" id="editBtn"" class="editBtn btn btn-info">Edit</button>
                                <button category_id="${id}" class="delete_btn btn btn-danger">Delete</button>
                            </td>
                        </tr>`
                    );
                    //cleare input data
                    $('#name').val('');

                    //success message
                    toastr.success(data.msg);

                },
                error: function (reject) {

                }
            });
        });

        //Update data
        //press edit
        $(document).on('click', '.editBtn', function(e){
            e.preventDefault();



            var category_id = $(this).attr('category_id');

            $.ajax({
                type:   "get",
                url:    "{{ route('admin.categories.edit') }}",
                data:   {'id' : category_id},

                success: function (data) {
                    $('#editName').val(data.data.name);
                    $('#currentid').val(data.data.id);
                },
                error: function (reject) {

                },

                complete:function(){
                    //store updated
                    $(document).on('click', '#submitToUpdate', function(e){
                        e.preventDefault();

                        var formData = new FormData($('#updateForm')[0]);

                        $.ajax({
                            type:   "post",
                            url:    "{{ route('admin.categories.update') }}",
                            data:   formData,

                            processData: false,
                            contentType: false,
                            cache: false,

                            success: function (data) {
                                $(".category_name"+data.data.id).text(data.data.name);

                                //success message
                                toastr.success(data.msg);

                            },

                            error: function (reject) {

                            }
                        });

                    });

                }
            });
        });


        //delete
        $(document).on('click', '.delete_btn', function(e){
            e.preventDefault();

            var category_id = $(this).attr('category_id');

            $.ajax({
                type: "delete",
                url: "{{ route('admin.categories.delete') }}",
                data: {
                    '_token': "{{ csrf_token() }}",
                    'id'    : category_id
                },

                success: function (data) {

                    if(data.status == true){
                        $('.categoryRow'+data.id).remove();
                        toastr.success(data.msg);
                    }

                    //success message

                },
                error: function (reject) {

                }
            });

        });

    </script>
@endsection

