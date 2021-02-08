
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
			<div class="side-bar col-md-3">
				<div class="search-hotel">
					<h3 class="agileits-sear-head">بحث في الصفحة</h3>
						<input type="search" wire:model="search" placeholder="Product name..." name="search" required="">
				</div>
				<!-- price range -->
				<div class="range">
					<h3 class="agileits-sear-head">تحديد السعر</h3>
					<ul class="dropdown-menu6">
						<li>
                            <form action="{{ route('categoryPage', $category->id) }}" method="get">
                                @csrf
                                <div class="form-group">
                                    <label for="minPrice">الحد الأدنى</label>
                                    <input type="number" class="form-control" id="minPrice" name="min" placeholder="Enter main">
                                </div>
                                <div class="form-group">
                                    <label for="maxPrice">الحد الأقصى</label>
                                    <input type="number" class="form-control" id="maxPrice" name="max" placeholder="Enter max">
                                </div>
                                <button type="submit" class="btn btn-primary" id="submitToRange">نفذ</button>
                            </form>
						</li>
					</ul>
				</div>
				<!-- //price range -->
                <!-- cuisine -->
                @if(count($subCategories) > 0)
                <div class="left-side">
                    <h3 class="agileits-sear-head">Categories</h3>
                    <ul>
                        @foreach($subCategories as $subCategory)
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">{{ $subCategory->name }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <!-- //cuisine -->

			</div>
			<!-- //product left -->

		</div>
	</div>

</div>
