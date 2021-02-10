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

        <p>{{ $category->name }}</p><br><br><br>

        <form action="#" method="post"  enctype="multipart/form-data">
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">الموديل</label>
                    <div class="col-md-7 ">
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            @if($category->name == 'سيارات')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">سنة التصنيع</label>
                    <div class="col-md-7 ">
                        <input type="text" name="manufactureYear" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'سيارات')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">نوع الدفع</label>
                    <div class="col-md-7 ">
                        <input type="text" name="wheelType" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'مكائن القهوة')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">نوع المنتج</label>
                    <div class="col-md-7 ">
                        <input type="text" name="product" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'قوارب')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">مكان المكائن</label>
                    <div class="col-md-7 ">
                        <input type="text" name="machinesPlace" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'قوارب')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">نوع المكائن</label>
                    <div class="col-md-7 ">
                        <input type="text" name="machinesType" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'قوارب')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">قوة المكائن</label>
                    <div class="col-md-7 ">
                        <input type="text" name="machinesPower" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'قوارب')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">عمر المكائن</label>
                    <div class="col-md-7 ">
                        <input type="text" name="machinesAge" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'عدد وادوات')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">نوع الكابل</label>
                    <div class="col-md-7 ">
                        <input type="text" name="capleType" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'سيارات')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">نوع القير</label>
                    <div class="col-md-7 ">
                        <input type="text" name="transmissionType" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'سيارات')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">عدد الكيلومتر</label>
                    <div class="col-md-7 ">
                        <input type="text" name="kilometers" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'سيارات')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">سعة المحرك</label>
                    <div class="col-md-7 ">
                        <input type="text" name="engineCapacity" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'اجهزة لوحية' OR $category->name == 'موبايلات' OR $category->name == 'لابتوب' OR $category->name == 'تلفيزيونات')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">حجم الشاشة</label>
                    <div class="col-md-7 ">
                        <input type="text" name="screensize" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'موبايلات' OR $category->name == 'اجهزة لوحية' OR $category->name == 'لابتوب' OR $category->name == 'كومبيوتر مكتبي')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">الميموري</label>
                    <div class="col-md-7 ">
                        <input type="text" name="memory" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'موبايلات' OR $category->name == 'اجهزة لوحية' OR $category->name == 'لابتوب' OR $category->name == 'كومبيوتر مكتبي')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">سعة التخزين</label>
                    <div class="col-md-7 ">
                        <input type="text" name="storage" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'موبايلات' OR $category->name == 'اجهزة لوحية')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">الجيل</label>
                    <div class="col-md-7 ">
                        <input type="text" name="generation" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'موبايلات' OR $category->name == 'اجهزة لوحية' OR $category->name == 'سيارات')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">اللون</label>
                    <div class="col-md-7 ">
                        <input type="text" name="color" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'موبايلات' OR $category->name == 'اجهزة لوحية')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">الملحقات</label>
                    <div class="col-md-7 ">
                        <input type="text" name="accessories" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'موبايلات' OR $category->name == 'اجهزة لوحية' OR $category->name == 'لابتوب' OR $category->name == 'كومبيوتر مكتبي')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">المعالج</label>
                    <div class="col-md-7 ">
                        <input type="text" name="processor" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'مكيفات')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">قوة التبريد</label>
                    <div class="col-md-7 ">
                        <input type="text" name="coolingPower" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'مكيفات')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">نوع التبريد</label>
                    <div class="col-md-7 ">
                        <input type="text" name="coolingType" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'اجهزة منزلية كبيرة' OR $category->name == 'اجهزة منزلية صغيرة')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">السعة</label>
                    <div class="col-md-7 ">
                        <input type="text" name="capacitance" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'كاميرات')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">عدد الميجات للكاميرات</label>
                    <div class="col-md-7 ">
                        <input type="text" name="megapixel" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'تلفيزيونات')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">نوع الشاشة</label>
                    <div class="col-md-7 ">
                        <input type="text" name="screenType" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'قوارب')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">الطول للقوارب</label>
                    <div class="col-md-7 ">
                        <input type="text" name="length" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'قوارب')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">عدد المكائن</label>
                    <div class="col-md-7 ">
                        <input type="text" name="machinesNumber" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'عدد وادوات')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">المقاس</label>
                    <div class="col-md-7 ">
                        <input type="text" name="size" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'اثاث')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">نوع التصنيع</label>
                    <div class="col-md-7 ">
                        <input type="text" name="manufactureType" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'سيارات' OR $category->name == 'معدات صناعية')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">نوع الوقود</label>
                    <div class="col-md-7 ">
                        <input type="text" name="fuelType" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'عدد وادوات')
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">الطاقة</label>
                    <div class="col-md-7 ">
                        <input type="text" name="energy" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif

            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mr-5">العمر</label>
                    <div class="col-md-7 ">
                        <input type="text" name="age" id="name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center mt-4">الوصف</label>
                    <div class="col-md-7">
                        <textarea name="description" id="description" class="form-control"></textarea>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center">السعر</label>
                    <div class="col-md-2">
                        <input type="text" name="price" id="price" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 text-center">صور المنتج</label>
                    <div class="col-md-6">
                        <input class="btn back" type="file" name="image[]" id="image" class="form-control" multiple>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="modal-footer">
                <input  type="submit" class="btn btn-info" value="Add">
            </div>
        </form>
    </div>



@endsection