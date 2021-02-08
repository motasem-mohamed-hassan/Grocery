@extends('layouts.master')

@section('panner')

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

            <livewire:live-home />
            {{-- @livewire('live-home') --}}

            {{-- <!-- product left -->
			<div class="side-bar col-md-3">
				<div class="search-hotel">
					<h3 class="agileits-sear-head">Search Here..</h3>
					<form action="#" method="post">
						<input type="search" placeholder="Product name..." name="search" required="">
						<input type="submit" value=" ">
					</form>
				</div>
				<!-- price range -->
				<div class="range">
					<h3 class="agileits-sear-head">Price range</h3>
					<ul class="dropdown-menu6">
						<li>

							<div id="slider-range"></div>
							<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
						</li>
					</ul>
				</div>
				<!-- //price range -->
				<!-- cuisine -->
				<div class="left-side">
					<h3 class="agileits-sear-head">Categories</h3>
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
					<h3 class="agileits-sear-head">Special Deals</h3>
					<div class="special-sec1">
						<div class="col-xs-4 img-deals">
							<img src="images/d2.jpg" alt="">
						</div>
						<div class="col-xs-8 img-deal1">
							<h3>Lay's Potato Chips</h3>
							<a href="single.html">$18.00</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="special-sec1">
						<div class="col-xs-4 img-deals">
							<img src="images/d1.jpg" alt="">
						</div>
						<div class="col-xs-8 img-deal1">
							<h3>Bingo Mad Angles</h3>
							<a href="single.html">$9.00</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="special-sec1">
						<div class="col-xs-4 img-deals">
							<img src="images/d4.jpg" alt="">
						</div>
						<div class="col-xs-8 img-deal1">
							<h3>Tata Salt</h3>
							<a href="single.html">$15.00</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="special-sec1">
						<div class="col-xs-4 img-deals">
							<img src="images/d5.jpg" alt="">
						</div>
						<div class="col-xs-8 img-deal1">
							<h3>Gujarat Dry Fruit</h3>
							<a href="single.html">$525.00</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="special-sec1">
						<div class="col-xs-4 img-deals">
							<img src="images/d3.jpg" alt="">
						</div>
						<div class="col-xs-8 img-deal1">
							<h3>Cadbury Dairy Milk</h3>
							<a href="single.html">$149.00</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //deals -->
			</div>
			<!-- //product left -->

			<!-- product right -->
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
			<!-- //product right --> --}}
		</div>
	</div>
	<!-- //top products -->
@endsection




