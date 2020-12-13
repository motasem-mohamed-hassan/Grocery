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
            <p>
                <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add New Category</a>
            </p>
            <table class="table table-bordered table-striped col-sm-4">
                <tr class="bg-info">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                @foreach ($categories as $category)
                <tr>
                    <td style="width: 50px">{{ $category->id }}</td>
                    <td style="width: 120px">{{ $category->name }}</td>
                    <td style="width: 120px">
                        <form method="POST" action="{{ route('admin.categories.destroy', $category->id) }}">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-info">Edit</a>
                        <input type="submit" class="btn btn-danger" value="Delete">
                        </form>

                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </section>




@endsection
