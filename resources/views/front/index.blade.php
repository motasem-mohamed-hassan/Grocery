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
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Big
							<span>Save</span>
						</h3>
						<p>Get flat
							<span>10%</span> Cashback</p>
						<a class="button2" href="{{ asset('frontend/') }}product.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Healthy
							<span>Saving</span>
						</h3>
						<p>Get Upto
							<span>30%</span> Off</p>
						<a class="button2" href="{{ asset('frontend/') }}product.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Big
							<span>Deal</span>
						</h3>
						<p>Get Best Offer Upto
							<span>20%</span>
						</p>
						<a class="button2" href="{{ asset('frontend/') }}product.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<h3>Today
							<span>Discount</span>
						</h3>
						<p>Get Now
							<span>40%</span> Discount</p>
						<a class="button2" href="{{ asset('frontend/') }}product.html">Shop Now </a>
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
	<!-- //banner -->

@endsection

@section('content')

	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Our Top Products
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md-12">
				<div class="wrapper">
                    @foreach ($categories as $category)
                        <div class="product-sec1">
                            <h3 class="heading-tittle">{{ $category->name }}</h3>
                            @foreach ($category->products->slice(0, 3)->sortByDesc('order_count') as $product)
                                <div class="col-md-4 product-men">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item">
                                            <img src="{{ asset('storage/products/'.$product->first_image->url) }}" style="width: 150px">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="{{ route('singleProduct', $product->id) }}" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            @if($product->stock < 1)
                                            <span class="product-new-top">OUT</span>
                                            @else
                                                <span class="product-new-top">New</span>
                                            @endif
                                        </div>
                                        <div class="item-info-product ">
                                            <h4>
                                                <a href="{{ asset('frontend/') }}single.html">{{ $product->name }}</a>
                                            </h4>
                                            <div class="info-product-price">
                                                <span class="item_price">${{ $product->price }}</span>
                                                @isset($product->oldPrice)
                                                <del>${{ $product->oldPrice }}</del>
                                                @endisset
                                            </div>
                                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                    <fieldset>
                                                        @if ($product->stock < 1)
                                                            <button class="btn btn-danger" disabled style="width: 100%; padding: 13px; background-color: #1accfd">Out Of Stock</button>
                                                        @else
                                                            <input type="submit" class="submitToCart button" productID="{{ $product->id }}" name="submit" value="Add to cart" />
                                                        @endif
                                                    </fieldset>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="clearfix"></div>
                        </div>

                        @if ($loop->first)
                            <div class="product-sec1 product-sec2 clearfix">
                                <div class="col-xs-7 effect-bg">
                                    <h3 class="">Pure Energy</h3>
                                    <h6>Enjoy our all healthy Products</h6>
                                    <p>Get Extra 10% Off</p>
                                </div>
                                <h3 class="w3l-nut-middle">Nuts & Dry Fruits</h3>
                                <div class="col-xs-5 bg-right-nut">
                                    <img src="{{ asset('frontend/images/nut1.png') }}" alt="">
                                </div>
                            </div>
                        @endif

                    @endforeach
				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
	<!-- //top products -->
	<!-- special offers -->
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Special Offers
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
                    @foreach ($Sproducts as $product)
                        <li>
                            <div class="w3l-specilamk">
                                <div class="speioffer-agile">
                                    <a href="{{ route('singleProduct', $product->id) }}">
                                        <img src="{{ asset('storage/products/'.$product->first_image->url) }}" style="width: 150px">
                                    </a>
                                </div>
                                <div class="product-name-w3l">
                                    <h4>
                                        <a href="{{ route('singleProduct', $product->id) }}">{{ $product->name }}</a>
                                    </h4>
                                    <div class="w3l-pricehkj">
                                        <h6>${{ $product->price }}</h6>
                                        <p>Save ${{ $product->oldPrice * ($product->discount /100)  }}</p>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                        <fieldset>
                                            <input type="submit" class="submitToCart button" productID="{{ $product->id }}" name="submit" value="Add to cart" />
                                        </fieldset>
                                    </form>
                                </div>

                                </div>
                            </div>
                        </li>
                    @endforeach

                </ul>
			</div>
		</div>
	</div>
	<!-- //special offers -->
@endsection


@section('scripts')\



    {{-- add to cart --}}
    <script>
        $(document).on('click', '.submitToCart', function(e){
            e.preventDefault();

            var productID = $(this).attr('productID');
            $.ajax({
                type: "get",
                url: "{{ route('addToCart') }}",
                data: {'id' : productID },

                success: function (response) {
                    $("#itemsCount").html(response.data);
                    toastr.success(response.msg);
                }
            });
        });
    </script>

@endsection

