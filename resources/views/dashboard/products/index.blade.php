@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Products</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <!-- Button trigger modal for create -->
            <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#createModal">
                Add New Product
            </button>

            <!-- create Modal -->
            <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createModalLabel">Add Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--Form-->
                        <form id="createForm" method="" action="" enctype="">
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
                                    <label class="col-md-3">Discount</label>
                                    <div class="col-md-2">
                                        <input type="number" name="discount" id="discount" class="form-control">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3">Stock</label>
                                    <div class="col-md-2">
                                        <input type="number" name="stock" id="stock" class="form-control">
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
                                <input type="submit" id="submitToCreate" class="btn btn-info" value="Create" data-dismiss="modal">
                            </div>
                        </form>

                    </div>
                </div>
                </div>
            </div>
            <!--End create Modal -->

            <!-- Update Modal -->
            <div class="modal fade updateModal" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateModalLabel">Update Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--Form-->
                        <form id="updateForm" method="" action="">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" name="name" id="editName" class="form-control">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3">Category</label>
                                    <div class="col-md-6">
                                        <select name="category_id" class="form-control" id="category">
                                            <option id="editCategory" value="">Current Category</option>
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
                                        <textarea name="description" id="editDescription" class="form-control"></textarea>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3">Price</label>
                                    <div class="col-md-3">
                                        <input type="number" name="price" id="editPrice" class="form-control">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3">Discount</label>
                                    <div class="col-md-2">
                                        <input type="number" name="discount" id="editDiscount" class="form-control">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3">Stock</label>
                                    <div class="col-md-2">
                                        <input type="number" name="stock" id="editStock" class="form-control">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3">image</label>
                                    <div class="col-md-6">
                                        <input type="file" name="image[]"  class="form-control" multiple>
                                    </div>
                                    <div class="clearfix"></div>                                </div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9" id="myImage">

                                    </div>
                                    <div class="clearfix"></div>
                            </div>
                            <div class="modal-footer">
                                <input type="text" name="id" id="currentid" class="form-control" value="" hidden>
                                <input type="submit" id="submitToUpdate" class="btn btn-info" value="Update" data-dismiss="modal">
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
            <!--End Update Modal -->



            <!--Start table-->
            <table id="myTable" class="table table-bordered table-striped">
                <tr class="bg-info">
                    <th>ID</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Descount</th>
                    <th>New Price</th>
                    <th>Stock</th>
                    <th>Order Count</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                @foreach ($products as $product )
                <tr class="productRow{{ $product->id }}">
                    <td class="product_id{{ $product->id }}">
                        {{ $product->id }}
                    </td>
                    <td class="category_name{{ $product->id }}">
                        {{ $product->category->name }}
                    </td>
                    <td class="product_name{{ $product->id }}">
                        {{ $product->name }}
                    </td>
                    <td class="product_description{{ $product->id }}">
                        {{ $product->description }}
                    </td>
                    @if(isset($product->discount))
                        <td class="product_price{{ $product->id }}">
                            {{ $product->oldPrice }}
                        </td>
                        <td class="product_discount{{ $product->id }}">
                            {{ $product->discount}} %
                        </td>
                        <td class="product_newPrice{{ $product->id }}">
                            {{ $product->price }}
                        </td>
                    @else
                        <td class="product_price{{ $product->id }}">
                            {{ $product->price }}
                        </td>
                        <td><p> - </p></td>
                        <td><p> - </p></td>
                    @endif
                    <td class="product_stock{{ $product->id }}">
                        {{ $product->stock }}
                    </td>
                    <td class="product_orderCount{{ $product->id }}">
                        {{ $product->order_count }}
                    </td>
                    <td class="product_image{{ $product->id }}">
                        <img src="{{ asset('storage/products/'.$product->first_image->url) }}"
                        style="width: 150px;">
                    </td>
                    <td>
                        <button product_id="{{ $product->id }}" data-toggle="modal" data-target="#updateModal" class="editBtn btn btn-info">Edit</button>
                        <button product_id="{{ $product->id }}" class="delete_btn btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </table>
            <!--End table-->

            {{ $products->render() }}
        </div>
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
                enctype: "multipart/form-data",
                url: "{{ route('admin.product.store') }}",
                data: formData,

                processData: false,
                contentType: false,
                cache: false,

                success: function (data) {
                    var id      = data.data.id;
                    var category = data.data.category;
                    var name    = data.data.name;
                    var description =data.data.description;
                    var discount = data.data.discount;
                    var oldPrice    =data.data.oldPrice;
                    var price   =data.data.price;
                    var stock   =data.data.stock;
                    var orderCount =data.data.order_count;
                    var firstImage =data.data.first_image.url;



                        if(discount){
                            $('#myTable').append(
                                `<tr class="productRow${id}">
                                <td>${id}</td>
                                <td>${category.name}</td>
                                <td>${name}</td>
                                <td>${description}</td>
                                <td>${oldPrice}</td>
                                <td>${discount} %</td>
                                <td>${price}</td>
                                <td>${stock}</td>
                                <td>${orderCount}</td>
                                <td><img src="{{url('storage/products/`+firstImage+`')}}"
                                    style="width: 150px;">
                                </td>
                                <td>
                                    <button product_id="${id}" data-toggle="modal" data-target="#updateModal" class="editBtn btn btn-info">Edit</button>
                                    <button product_id="${id}" class="delete_btn btn btn-danger">Delete</button>
                                </td>
                            </tr>`);
                        }else{
                            $('#myTable').append(
                                `<tr class="productRow${id}">
                                <td>${id}</td>
                                <td>${category.name}</td>
                                <td>${name}</td>
                                <td>${description}</td>
                                <td>${price}</td>
                                <td><p> - </p></td>
                                <td><p> - </p></td>
                                <td>${stock}</td>
                                <td>${orderCount}</td>
                                <td><img src="{{url('storage/products/`+firstImage+`')}}"
                                    style="width: 150px;">
                                </td>
                                <td>
                                    <button product_id="${id}" data-toggle="modal" data-target="#updateModal" class="editBtn btn btn-info">Edit</button>
                                    <button product_id="${id}" class="delete_btn btn btn-danger">Delete</button>
                                </td>
                            </tr>`);
                        }

                    //cleare input data
                    $('#name').val('');
                    $('#category').val('');
                    $('#description').val('');
                    $('#discount').val('');
                    $('#price').val('');
                    $('#stock').val('');
                    $('#image').val('');

                },
                error: function (reject) {

                }
            });
        });

        //Update data
        //press edit
        $(document).on('click', '.editBtn', function(e){
            e.preventDefault();

            var product_id = $(this).attr('product_id');

            $.ajax({
                type:   "get",
                url:    "{{ route('admin.product.edit') }}",
                data:   {

                    'id' : product_id
                },

                success: function (data) {

                    var firstImage =data.data.first_image.url;


                    $('#editName').val(data.data.name);
                    $('#editCategory').val(data.category.id).text(data.category.name).prop('selected', true);
                    $('#editDescription').val(data.data.description);
                    $('#editPrice').val(data.data.price);
                    $('#editDiscount').val(data.data.discount);
                    $('#editStock').val(data.data.stock);
                    $('#myImage').append(
                        `<img src="{{url('storage/products/`+firstImage+`')}}"
                                style="width: 150px;" id="editImage">`
                    );
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
                            url:    "{{ route('admin.product.update') }}",
                            data:   formData,

                            processData: false,
                            contentType: false,
                            cache: false,

                            success: function (data) {
                                var firstImage =data.data.first_image.url;

                                $(".product_id"+data.data.id).text(data.data.id);
                                $(".category_name"+data.data.id).text(data.data.category.name);
                                $(".product_name"+data.data.id).text(data.data.name);
                                $(".product_description"+data.data.id).text(data.data.description);
                                if(data.data.discount){
                                    $(".product_price"+data.data.id).text(data.data.oldPrice);
                                    $(".product_discount"+data.data.id).text(data.data.discount);
                                    $(".product_newPrice"+data.data.id).text(data.data.price);
                                }else{
                                    $(".product_price"+data.data.id).text(data.data.price);
                                    $(".product_discount"+data.data.id).text("-");
                                    $(".product_newPrice"+data.data.id).text("-");
                                }
                                $(".product_stock"+data.data.id).text(data.data.stock);
                                $(".product_orderCount"+data.data.id).text(data.data.order_count);

                            },
                            error: function (reject) {
                                console.log('no');

                            }
                        });
                    });
                }
            });
        });

        //delete
        $(document).on('click', '.delete_btn', function(e){
            e.preventDefault();

            var product_id = $(this).attr('product_id');

            $.ajax({
                type: "delete",
                url: "{{ route('admin.product.delete') }}",
                data: {
                    '_token': "{{ csrf_token() }}",
                    'id'    : product_id
                },

                success: function (data) {

                    $('.productRow'+data.id).remove();
                },
                error: function (reject) {

                }
            });

        });


    </script>
@endsection


