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
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">{{ $category->name }} Products
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
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
                            <form action="{{ route('categoryPage', $category->id) }}" method="get">
                                @csrf
                                <div class="form-group">
                                    <label for="minPrice">min price</label>
                                    <input type="number" class="form-control" id="minPrice" name="min" placeholder="Enter main">
                                </div>
                                <div class="form-group">
                                    <label for="maxPrice">max price</label>
                                    <input type="number" class="form-control" id="maxPrice" name="max" placeholder="Enter max">
                                </div>
                                <button type="submit" class="btn btn-primary" id="submitToRange">Submit</button>
                            </form>
						</li>
					</ul>
				</div>
				<!-- //price range -->
			</div>
			<!-- //product left -->
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
                                                @isset($product->oldPrice)
                                                <del>${{ $product->oldPrice }}</del>
                                                @endisset
                                            </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="{{ route('addToCart', $product->id) }}" method="get">
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
	<!-- newsletter -->
	<div class="footer-top">
		<div class="container-fluid">
			<div class="col-xs-8 agile-leftmk">
				<h2>Get your Groceries delivered from local stores</h2>
				<p>Free Delivery on your first order!</p>
				<form action="#" method="post">
					<input type="email" placeholder="E-mail" name="email" required="">
					<input type="submit" value="Subscribe">
				</form>
				<div class="newsform-w3l">
					<span class="fa fa-envelope-o" aria-hidden="true"></span>
				</div>
			</div>
			<div class="col-xs-4 w3l-rightmk">
				<img src="#" alt=" ">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //newsletter -->


@endsection

@section('scripts')
    {{-- add to cart --}}
<script>
	//add to cart
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



