@extends('layouts.admin')
@section('content')

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">About us</h3>
                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.update.about', 1) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>Header</label>
                        <input type="text" name="header" class="form-control" value="{{ $about->header }}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control" value="{{ $about->description }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>video</label>
                        <input type="file" class="form-control" name="video" value="{{ $about->video }}">
                    </div>
                    <div class="form-group">
                        <label>video description</label>
                        <input type="text" name="video_description" class="form-control" value="{{ $about->video_description }}">
                    </div>
                    <input type="submit" value="Save Changes" class="btn btn-success float-right">
                </form>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>
</div>


@endsection
