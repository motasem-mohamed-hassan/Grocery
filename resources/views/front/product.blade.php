@extends('layouts.master')


@section('content')

	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.html">Home</a>
						<i>|</i>
					</li>
					<li>{{ $product->category->name }}</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">{{ $product->category->name }}
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="col-md-5 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
                            @foreach ($images as $image)
                            <li data-thumb="{{ asset('storage/products/'.$image->url) }}">
								<div class="thumb-image">
									<img src="{{ asset('storage/products/'.$image->url) }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>

                            @endforeach
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-7 single-right-left simpleCart_shelfItem">
				<h3>{{ $product->name }}</h3>
				<div class="rating1">
					<span class="starRating">
                        <input id="rating5" type="radio" {{ $avg == 5.0 ? 'checked' : ''  }}>
                        <label for="rating5">5</label>
                        <input id="rating4" type="radio" {{ $avg >= 4.0 ? 'checked' : ''  }}>
                        <label for="rating4">4</label>
                        <input id="rating3" type="radio" {{ $avg >= 3.0 ? 'checked' : ''  }}>
                        <label for="rating3">3</label>
                        <input id="rating2" type="radio" {{ $avg >= 2.0 ? 'checked' : ''  }}>
                        <label for="rating2">2</label>
                        <input id="rating1" type="radio" {{ $avg >= 1.0 ? 'checked' : ''  }}>
                        <label for="rating1">1</label>
                        </span>
				</div>
				<p>
                    <span class="item_price">${{ $product->price }}</span>
				</p>
				<div class="product-single-w3l">
					<p>
						<i class="fa fa-hand-o-right" aria-hidden="true"></i>This is a
						<label>{{ $product->category->name }}</label> product.</p>
					<ul>{{ $product->description }}</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
    <!-- //Single Page -->

    <!--End review cart -->

	<!-- more products -->
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Add More
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">

                    @foreach ($product->category->products as $pro)
                    <li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="{{ route('singleProduct', $pro->id) }}">
									<img src="{{ asset('storage/products/'.$pro->first_image->url) }}" style="width: 100px">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="{{ route('singleProduct', $pro->id) }}">{{ $pro->name }}</a>
								</h4>
								<div class="w3l-pricehkj">
                                    <h6>${{ $pro->price }}</h6>
                                    @isset($pro->discount)
                                        <p>${{ $pro->oldPrice * ($pro->discount /100) }}</p>
                                    @endisset
								</div>
							</div>
						</div>
					</li>
                    @endforeach
				</ul>
			</div>
		</div>
	</div>
	<!-- //more products -->


@endsection

