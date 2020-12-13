@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Add Product</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">Nmae</label>
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">Description</label>
                        <div class="col-md-6">
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">Price</label>
                        <div class="col-md-2">
                            <input type="number" name="price" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">Stock</label>
                        <div class="col-md-2">
                            <input type="number" name="stock" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">Category</label>
                        <div class="col-md-2">
                            <select name="category_id" class="form-control">
                                <option value="">Choose Category</option>
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
                        <label class="col-md-3">image</label>
                        <div class="col-md-2">
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="Create">
                </div>
            </form>
        </div>
    </section>
@endsection
