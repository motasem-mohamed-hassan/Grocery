@extends('layouts.admin')
@section('content')

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">General info</h3>
                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.update.setting', 1) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="inputName">phone 1</label>
                        <input type="number" name="phone1" class="form-control" value="{{ $setting->phone1 }}">
                    </div>
                    <div class="form-group">
                        <label for="inputName">phone 2</label>
                        <input type="number" name="phone2" class="form-control" value="{{ $setting->phone2 }}">
                    </div>
                    <div class="form-group">
                        <label for="inputName">location</label>
                        <input type="text" name="location" class="form-control" value="{{ $setting->location }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="inputName">Facebook</label>
                        <input type="text" name="facebook" class="form-control" value="{{ $setting->facebook }}">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Twitter</label>
                        <input type="text" name="twitter" class="form-control" value="{{ $setting->twitter }}">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Instegram</label>
                        <input type="text" name="instegram" class="form-control" value="{{ $setting->instegram }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="inputDescription">Project Description</label>
                        <textarea class="form-control" name="description" rows="4">{{ $setting->description }}</textarea>
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