@extends('layouts.master')

@section('panner')
<!-- banner -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators-->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1" class=""></li>
		<li data-target="#myCarousel" data-slide-to="2" class=""></li>
		<li data-target="#myCarousel" data-slide-to="3" class=""></li>
	</ol>
	<div class="carousel-inner" >
		<div class="item active item1">
			<div class="container">
				<div class="carousel-caption">
					{{-- <h3>حفظ
						<span>كبير</span>
					</h3>
					<p>احصل علي شقة
						<span>10%</span> كاش
					</p>
					<a class="button2" href="{{ asset('frontend/') }}product.html">تسوق الان </a> --}}
				</div>
			</div>
		</div>
		<div class="item item2">
			<div class="container">
				<div class="carousel-caption">
					{{-- <h3>ادخار
						<span>صحي</span>
					</h3>
					<p>اعلي من
						<span>30%</span> خصم
					</p>
					<a class="button2" href="{{ asset('frontend/') }}product.html"> تسوق الان</a> --}}
				</div>
			</div>
		</div>
		<div class="item item3">
			<div class="container">
				<div class="carousel-caption">
					{{-- <h3>صفقة
						<span>كبيرة</span>
					</h3>
					<p>احصل علي خصم
						<span>20%</span> خصم
					</p>

					<a class="button2" href="{{ asset('frontend/') }}product.html">تسوق الان </a> --}}
				</div>
			</div>
		</div>
		<div class="item item4">
			<div class="container">
				<div class="carousel-caption">
					{{-- <h3>خصم
						<span>اليوم</span>
					</h3>
					<p>احصل الان
						<span>40%</span> خصم
					</p>
					<a class="button2" href="{{ asset('frontend/') }}product.html"> تسوق الان</a> --}}
				</div>
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="{{ asset('frontend/') }}#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="{{ asset('frontend/') }}#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
@endsection

@section('content')

	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">جميع المنتجات
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
            <!-- //tittle heading -->

            <div>
                <div class="agileinfo-ads-display col-md-9">
                    <div class="wrapper">
                        @foreach ($products->chunk(3) as $chunk)
                            <div class="product-sec1">
                                @foreach ($chunk as $product)
                                <div class="col-md-4 product-men">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item">
                                            <img src="{{ asset('storage/products/'.$product->first_image->url) }}" style="width: 150px">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="{{ route('profile', $product->user_id) }}" class="link-product-add-cart">تواصل مع البائع</a>
                                                </div>
                                            </div>
                                                <span class="product-new-top">جديد</span>
                                        </div>
                                        <div class="item-info-product ">
                                            <h4>
                                                <a href="{{ route('singleProduct', $product->id) }}">{{ $product->name }}</a>
                                            </h4>
                                            <div class="info-product-price">
                                                <span class="item_price">${{ $product->price }}</span>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                    <fieldset>
                                                        <a href="{{ route('singleProduct', $product->id) }}" class="btn btn-success">صفحة المنتج</a>
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
            <div class="side-bar col-md-3">
                <form action="{{ route('home') }}" method="get" style="direction: rtl">
                <div class="search-hotel">
                    <h3 class="agileits-sear-head">بحث في الصفحة</h3>
                        <input type="search" name="search" placeholder="اسم المنتج">
                </div>
                <!-- price range -->
                <div class="range">
                    <h3 class="agileits-sear-head">تحديد السعر</h3>
                    <ul class="dropdown-menu6">
                        <li>
                                @csrf
                                <div class="form-group">
                                    <label for="minPrice">الحد الأدني</label>
                                    <input type="number" class="form-control" id="minPrice" name="min">
                                </div>
                                <div class="form-group">
                                    <label for="maxPrice">الحد الأعلى</label>
                                    <input type="number" class="form-control" id="maxPrice" name="max">
                                </div>
                                <button type="submit" class="btn btn-primary" id="submitToRange">نفذ</button>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- //price range -->
                <!-- cuisine -->
                <div class="left-side" style="direction: rtl">
                    <h3 class="agileits-sear-head">الاقسام الرئيسية</h3>
                    <ul>
                        @foreach($categories as $category)
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">{{ $category->name }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!-- //cuisine -->
                <!-- deals -->
                <div class="deal-leftmk left-side">
                    <h3 class="agileits-sear-head">المنتجات المبوبة</h3>
                    {{-- <div class="special-sec1">
                        <div class="col-xs-4 img-deals">
                            <img src="images/d2.jpg" alt="">
                        </div>
                        <div class="col-xs-8 img-deal1">
                            <h3>Lay's Potato Chips</h3>
                            <a href="single.html">$18.00</a>
                        </div>
                        <div class="clearfix"></div>
                    </div> --}}
                </div>
                <!-- //deals -->
            </div>
            <!-- //product left -->



		</div>
	</div>
	<!-- //top products -->
@endsection




