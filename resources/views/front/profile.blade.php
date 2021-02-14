@extends('layouts.master')

@section('content')

<!-- User account -->
<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div  id="user-card" class="card bg-light "  >
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="card-img-top" alt="profile-picture" style="width: 80% ; border-radius:50% "  >
                    <div class="card-body">
                        <h3 class="card-title">اسم المستخدم</h3>
                        <p class="card-text"> معلومات عن المستخدم معلومات عن المستخدم معلومات عن المستخدم معلومات عن المستخدم معلومات عن المستخدم </p>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-info">متابعة</button>
                        <button class="btn btn-info">مراسلة</button>
                    </div>
                </div>
            </div>
            <div id="user-information" class="col-md-8 p-2 m-2">
                <div class="card mb-3 p-4">
                    <div class="card-body">
                        <div class="row">

                            <div id="names" class="col-sm-9 text-secondary">
                                {{ $user->name }}
                            </div>
                            <div class="col-sm-3">
                                <h4 class="mb-0">الاسم</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">

                            <div id="mail" class="col-sm-9 text-secondary">
                                {{ $user->email }}
                            </div>
                            <div class="col-sm-3">
                                <h4 class="mb-0">البريد الالكترونى</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">

                            <div id="phone" class="col-sm-9 text-secondary">
                                {{ $user->phone_number }}
                            </div>
                            <div class="col-sm-3">
                                <h4 class="mb-0">رقم الهاتف</h4>
                            </div>
                        </div>
                        <hr>

                        <div class="row">

                            <div id="Address" class="col-sm-9 text-secondary">
                                Bay Area, San Francisco, CA
                            </div>
                            <div class="col-sm-3">
                                <h4 class="mb-0">العنوان</h4>
                            </div>
                        </div><br>
                        @if($user->id == Auth::id())
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-info m-2" type="submit" id="edit-button" data-toggle="modal" data-target="#staticBackdrop"> تعديل البيانات الشخصية
                            </button>
                            <!-- <button class="btn backs" type="submit" id="end-editing"> save</button> -->
                        </div>
                        @else
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-success mr-2"> send message
                            </button>
                            <!-- <button class="btn backs" type="submit" id="end-editing"> save</button> -->
                        </div>
                        @endauth
                    </div>
                </div>
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="text-center" id="staticBackdropLabel">تعديل البيانات الشخصية </h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('profile.update') }}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">الاسم</label>
                                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">البريد الالكترونى</label>
                                        <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">رقم الهاتف</label>
                                        <input type="tel" class="form-control" name="phone_number" value="{{ $user->phone_number }}" onkeypress="return onlyNumberKey(event)">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">العنوان</label>
                                        <input type="text" class="form-control" name="address" value="Address">
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-info" value="Update">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-------------- User account ------------->



@endsection
