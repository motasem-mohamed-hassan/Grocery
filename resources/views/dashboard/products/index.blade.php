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
            <p>
                <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add New Product</a>
            </p>
            <table class="table table-bordered table-striped">
                <tr class="bg-info">
                    <th>ID</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Order Count</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                @foreach ($products as $product )
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->order_count }}</td>
                    <td><img src="{{ asset('storage/products/'.$product->first_image->url) }}"
                        style="width: 150px;"></td>
                    <td>
                        <form method="POST" action="{{ route('admin.products.destroy', $product->id) }}">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-info">Edit</a>
                        <input type="submit" class="btn btn-danger" value="Delete">
                        </form>

                    </td>
                </tr>
                @endforeach
            </table>
            {{ $products->render() }}
        </div>
    </section>




@endsection
