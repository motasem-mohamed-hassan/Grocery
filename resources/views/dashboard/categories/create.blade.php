@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Create Category</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="alert alert-success" style="display:none"></div>
            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <label for="name" class="col-md-3">Name</label>
                        <div class="col-md-6">
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Create">
                </div>
            </form>
        </div>
    </section>

@endsection


