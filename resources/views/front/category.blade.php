@extends('layouts.master')




@section('content')

	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="{{ route('home') }}">Home</a>
						<i>|</i>
					</li>
					<li>{{ $category->name }}</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- top Products -->

	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div style="display: flex; justify-content: flex-end;" class="container">
				<ul class="w3_short">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                    <i>|</i>
                </li>
                <li>
                    <a href="{{ route('categoryPage', $category->id) }}"> {{ $category->name }} </a>
                    <i>|</i>
                </li>
            </ul>
        </div>
    </div>
</div>

<div>
    <div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">{{ $category->name }}
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md-9 w3l-rightpro">
                <div class="wrapper">
                    @foreach($products->chunk(3) as $chunk)
                    <div class="product-sec1">
                        @foreach ($chunk as $product)
                                <div class="col-md-4 product-men justify-content-end">
                                    <div class="men-pro-item simpleCart_shelfItem mt-5">
                                        <div class="men-thumb-item">
                                            <img src="{{ asset('storage/products/'.$product->first_image->url) }}" style="width: 150px">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="{{ route('singleProduct', $product->id) }}" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>
                                        </div>
                                        <div class="item-info-product ">
                                            <h4>
                                                <a href="{{ asset('frontend/') }}single.html">{{ $product->name }}</a>
                                            </h4>
                                            <div class="info-product-price">
                                                <span class="item_price">${{ $product->price }}</span>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="#" method="get">
                                                    <fieldset>
                                                        <input type="submit" class="submitToCart button" productID="{{ $product->id }}" name="submit" value="Add to cart" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    <div class="clearfix"></div>
                    </div>
                    @endforeach
                </div>
            </div>
			<!-- //product right -->


            <!-- product left -->
            <form action="{{ route('categoryPage', $category->id) }}" method="get">
                <div class="side-bar col-md-3">
                    <div class="search-hotel">
                        <h3 class="agileits-sear-head">بحث في الصفحة</h3>
                            <input type="search" placeholder="Product name..." name="search">
                    </div>
                    <!-- price range -->
                    <div class="range">
                        <h3 class="agileits-sear-head">تحديد السعر</h3>
                        <ul class="dropdown-menu6">
                            <li>
                                    @csrf
                                    <div class="form-group">
                                        <label for="minPrice">الحد الأدنى</label>
                                        <input type="number" class="form-control" id="minPrice" name="min" placeholder="Enter main">
                                    </div>
                                    <div class="form-group">
                                        <label for="maxPrice">الحد الأقصى</label>
                                        <input type="number" class="form-control" id="maxPrice" name="max" placeholder="Enter max">
                                    </div>
                            </li>
                        </ul>
                    </div>
                    <!-- //price range -->
                    <!-- cuisine -->
                    @if($category->name == 'موبايلات')
                        <select class="form-control" name="model">
                            <option disabled disabled selected>الماركة</option>
                            @foreach ($category->children as $model)
                            <option value="{{ $model->name }}">{{ $model->name }}</option>
                            @endforeach
                        </select><br>
                        <select class="form-control" name="screensize">
                            <option disabled disabled selected>حجم الشاشة</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select><br>
                        <select class="form-control" name="memory">
                            <option disabled disabled selected>الرام</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="8">8</option>
                            <option value="16">16</option>
                        </select><br>
                        <select class="form-control" name="storage">
                            <option disabled disabled selected>سعة التحزين</option>
                            <option value="4">2</option>
                            <option value="5">4</option>
                            <option value="6">8</option>
                            <option value="7">16</option>
                            <option value="32">32</option>
                            <option value="64">64</option>
                            <option value="120">120</option>
                        </select><br>
                        <select class="form-control" name="generation">
                            <option disabled disabled selected>الجيل</option>
                            <option value="2G">2G</option>
                            <option value="3G">3G</option>
                            <option value="4G">4G</option>
                            <option value="5G">5G</option>
                        </select><br>
                    @endif
                    @if($category->name == 'اجهزة لوحية')
                    <select class="form-control" name="model">
                        <option disabled selected>الماركة</option>
                        @foreach ($category->children as $model)
                        <option value="{{ $model->name }}">{{ $model->name }}</option>
                        @endforeach
                    </select><br>
                    <select class="form-control" name="screensize">
                        <option disabled selected>حجم الشاشة</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="10">10</option>
                        <option value="12">12</option>
                    </select><br>
                    <select class="form-control" name="memory">
                        <option disabled selected>الرام</option>
                        <option value="2">2</option>
                        <option value="4">4</option>
                        <option value="8">8</option>
                        <option value="16">16</option>
                    </select><br>
                    <select class="form-control" name="storage">
                        <option disabled selected>سعة التحزين</option>
                        <option value="2">2</option>
                        <option value="4">4</option>
                        <option value="8">8</option>
                        <option value="16">16</option>
                        <option value="32">32</option>
                        <option value="64">64</option>
                        <option value="120">120</option>
                    </select><br>
                    <select class="form-control" name="generation">
                        <option disabled selected>الجيل</option>
                        <option value="2G">2G</option>
                        <option value="3G">3G</option>
                        <option value="4G">4G</option>
                        <option value="5G">5G</option>
                    </select><br>
                @endif
                @if($category->name == 'سيارات')
                <select class="form-control" name="model">
                    <option disabled selected>الماركة</option>
                    @foreach ($category->children as $model)
                    <option value="{{ $model->name }}">{{ $model->name }}</option>
                    @endforeach
                </select><br>
                <select class="form-control" name="transmissionType">
                    <option disabled selected>نوع القير</option>
                    <option value="اوتوماتيك">اوتوماتيك</option>
                    <option value="اوتوماتيك">عادي</option>
                </select><br>
                <select class="form-control" name="wheelType">
                    <option disabled selected>نوع الدفع</option>
                    <option value="ثنائي">ثنائي</option>
                    <option value="رياعي">رباعي</option>
                </select><br>
                <select class="form-control" name="fuelType">
                    <option disabled selected>نوع الوقود</option>
                    <option value="بنزين">بنزين</option>
                    <option value="ديزل">ديزل</option>
                    <option value="غاز">غاز</option>
                    <option value="كهرباء">كهرباء</option>
                </select><br>
                <div class="form-group">
                    <label for="minPrice">سنة التصنيع</label>
                    <input type="number" class="form-control" name="minmanufactureYear" placeholder="من">
                    <input type="number" class="form-control" name="maxmanufactureYear" placeholder="الى">
                </div>
            @endif
            @if($category->name == 'لابتوب')
            <select class="form-control" name="model">
                <option disabled selected>الماركة</option>
                @foreach ($category->children as $model)
                <option value="{{ $model->name }}">{{ $model->name }}</option>
                @endforeach
            </select><br>
            <select class="form-control" name="processor">
                <option disabled selected>المعالج</option>
                <option value="i3">i3</option>
                <option value="i5">i5</option>
                <option value="i7">i7</option>
                <option value="i9">i9</option>
            </select><br>
            <select class="form-control" name="memory">
                <option disabled selected>الرام</option>
                <option value="2">2</option>
                <option value="4">4</option>
                <option value="8">8</option>
                <option value="16">16</option>
                <option value="32">32</option>
            </select><br>
            <select class="form-control" name="storage">
                <option disabled selected>سعة التخزين</option>
                <option value="512">512</option>
                <option value="1t">1t</option>
                <option value="2t">2t</option>
            </select><br>
            @endif
            @if($category->name == 'لابتوب')
            <select class="form-control" name="model">
                <option disabled selected>الماركة</option>
                @foreach ($category->children as $model)
                <option value="{{ $model->name }}">{{ $model->name }}</option>
                @endforeach
            </select><br>
            <select class="form-control" name="processor">
                <option disabled selected>المعالج</option>
                <option value="i3">i3</option>
                <option value="i5">i5</option>
                <option value="i7">i7</option>
                <option value="i9">i9</option>
            </select><br>
            <select class="form-control" name="memory">
                <option disabled selected>الرام</option>
                <option value="2">2</option>
                <option value="4">4</option>
                <option value="8">8</option>
                <option value="16">16</option>
                <option value="32">32</option>
            </select><br>
            <select class="form-control" name="storage">
                <option disabled selected>سعة التخزين</option>
                <option value="512">512</option>
                <option value="1t">1t</option>
                <option value="2t">2t</option>
            </select><br>
            @endif
            @if($category->name == 'مكيفات')
            <select class="form-control" name="model">
                <option disabled selected>الماركة</option>
                @foreach ($category->children as $model)
                <option value="{{ $model->name }}">{{ $model->name }}</option>
                @endforeach
            </select><br>
            <select class="form-control" name="coolingPower">
                <option disabled selected>طاقة التبريد</option>
                <option value="رقمي">رقمي</option>
            </select><br>
            @endif
            @if($category->name == 'اجهزة منزلية كبيرة')
            <select class="form-control" name="model">
                <option disabled selected>الماركة</option>
                @foreach ($category->children as $model)
                <option value="{{ $model->name }}">{{ $model->name }}</option>
                @endforeach
            </select><br>
            <input type="number" class="form-control" name="capacitance" placeholder="ميجا بيكسل"><br>
            @endif
            @if($category->name == 'اجهزة منزلية صغيرة')
            <select class="form-control" name="model">
                <option disabled selected>الماركة</option>
                @foreach ($category->children as $model)
                <option value="{{ $model->name }}">{{ $model->name }}</option>
                @endforeach
            </select><br>
            @endif
            @if($category->name == 'كاميرات')
            <select class="form-control" name="model">
                <option disabled selected>الماركة</option>
                @foreach ($category->children as $model)
                <option value="{{ $model->name }}">{{ $model->name }}</option>
                @endforeach
            </select><br>
            <input type="number" class="form-control" name="megapixel" placeholder="ميجا بيكسل"><br>
            <select class="form-control" name="storage">
                <option disabled selected>ذاكرة التحزين</option>
                <option value="2">2</option>
                <option value="4">4</option>
                <option value="8">8</option>
                <option value="16">16</option>
                <option value="32">32</option>
            </select><br>
            @endif
            @if($category->name == 'تلفيزيونات')
            <select class="form-control" name="model">
                <option disabled selected>الماركة</option>
                @foreach ($category->children as $model)
                <option value="{{ $model->name }}">{{ $model->name }}</option>
                @endforeach
            </select><br>
            <input type="number" class="form-control" name="screensize" placeholder="مقاس الشاشة"><br>
            <select class="form-control" name="screenType">
                <option disabled selected>نوع الشاشة</option>
                <option value="OLED">OLED</option>
                <option value="QLED">QLED</option>
                <option value="HD 4K">HD 4K</option>
                <option value="LED">LED</option>
            </select><br>
            @endif
            @if($category->name == 'العاب الكترونية')
            <select class="form-control" name="model">
                <option disabled selected>الماركة</option>
                @foreach ($category->children as $model)
                <option value="{{ $model->name }}">{{ $model->name }}</option>
                @endforeach
            </select><br>
            @endif
            @if($category->name == 'مكائن القهوة')
            <select class="form-control" name="model">
                <option disabled selected>الماركة</option>
                @foreach ($category->children as $model)
                <option value="{{ $model->name }}">{{ $model->name }}</option>
                @endforeach
            </select><br>
            <select class="form-control" name="product">
                <option disabled selected>المنتج</option>
                <option value="كاباتشينو">كاباتشينو</option>
                <option value="اسبريسو">اسبريسو</option>
                <option value="قهوة امريكي">قهوة امريكي</option>
                <option value="قهوة عربي">قهوة عربي</option>
            </select><br>
            @endif
            @if($category->name == 'قوارب')
            <select class="form-control" name="model">
                <option disabled selected>الماركة</option>
                @foreach ($category->children as $model)
                <option value="{{ $model->name }}">{{ $model->name }}</option>
                @endforeach
            </select><br>
            <input type="number" class="form-control" name="length" placeholder="الطول"><br>
            <select class="form-control" name="machinesPlace">
                <option disabled selected>مكان المكائن</option>
                <option value="داخلي">داخلي</option>
                <option value="داخلي">خارجي</option>
            </select><br>
            @endif
            @if($category->name == 'عدد وادوات')
            <select class="form-control" name="model">
                <option disabled selected>نوع الجهاز</option>
                @foreach ($category->children as $model)
                <option value="{{ $model->name }}">{{ $model->name }}</option>
                @endforeach
            </select><br>
            <select class="form-control" name="capleType">
                <option disabled selected>نوع الكابل</option>
                <option value="لاسلكي">لاسلكي</option>
                <option value="سلكي">سلكي</option>
            </select><br>
            @endif
            @if($category->name == 'معدات رياضية')
            <select class="form-control" name="model">
                <option disabled selected>نوع الجهاز</option>
                @foreach ($category->children as $model)
                <option value="{{ $model->name }}">{{ $model->name }}</option>
                @endforeach
            </select><br>
            @endif
            @if($category->name == 'اثاث')
            <select class="form-control" name="model">
                <option disabled selected>نوع الاثاث</option>
                @foreach ($category->children as $model)
                <option value="{{ $model->name }}">{{ $model->name }}</option>
                @endforeach
            </select><br>
            @endif
            @if($category->name == 'معدات صناعية')
            <select class="form-control" name="model">
                <option disabled selected>نوع الجهاز</option>
                @foreach ($category->children as $model)
                <option value="{{ $model->name }}">{{ $model->name }}</option>
                @endforeach
            </select><br>
            @endif
            @if($category->name == 'اجهزة طبية')
            <select class="form-control" name="model">
                <option disabled selected>نوع الجهاز</option>
                @foreach ($category->children as $model)
                <option value="{{ $model->name }}">{{ $model->name }}</option>
                @endforeach
            </select><br>
            @endif
            @if($category->name == 'مقتنيات ثمينة')
            <select class="form-control" name="model">
                <option disabled selected>النوع</option>
                @foreach ($category->children as $model)
                <option value="{{ $model->name }}">{{ $model->name }}</option>
                @endforeach
            </select><br>
            @endif

















            <button type="submit" class="btn btn-primary" id="submitToRange">نفذ</button>
            </form>
		</div>
	</div>

</div>
@endsection

