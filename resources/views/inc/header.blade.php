	<!-- top-header -->
	<div class="header-most-top">
		<p>Grocery Offer Zone Top Deals & Discounts</p>
	</div>
	<!-- //top-header -->
	<!-- header-bot-->
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="{{ route('home') }}">
						<span>G</span>rocery
						<span>S</span>hoppy
						<img src="{{ asset('frontend/images/logo2.png') }}" alt=" ">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
				<!-- header lists -->
				<ul>
					<li>
						<a class="play-icon popup-with-zoom-anim" href="{{ asset('frontend/#small-dialog1') }}">
							<span class="fa fa-map-marker" aria-hidden="true"></span> Shop Locator</a>
					</li>
					<li>
                        @if(auth()->check())
                        <a href="{{ route('myorders', Auth::user()) }}">
                        @else
						<a href="#" data-toggle="modal" data-target="#myModal1">
                        @endif
							<span class="fa fa-truck" aria-hidden="true"></span>Track Order</a>
					</li>
					<li>
						<span class="fa fa-phone" aria-hidden="true"></span> phone number
                    </li>

                    @if( auth()->check() )
                    <li>
                        <a href="#">
                            <span class="fa fa-unlock-alt" aria-hidden="true"></span> Hi {{ auth()->user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}">
							<span class="fa fa-unlock-alt" aria-hidden="true"></span> Log Out </a>

                    </li>
                    @else
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal1">
							<span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal2">
							<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
					</li>
                    @endif


				</ul>
				<!-- //header lists -->
                <!-- search -->
                {{-- <div class="container" style="margin-top: 50px;">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <h4 class="text-center">Autocomplete Search Box with <br> Laravel + Ajax + jQuery</h4><hr>
                            <div class="form-group">
                                <label>Type a country name</label>
                                <input type="text" name="country" id="country" placeholder="Enter country name" class="form-control">
                            </div>
                            <div id="country_list"></div>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                </div> --}}

				<div class="agileits_search">
					<form action="{{ route('search') }}" method="get">
						<input name="Search" type="search" placeholder="How can we help you today?" required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button>
					</form>
				</div>
                <!-- //search -->

                <!-- cart details -->
                <div class="top_nav_right">
                    <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                        <a href="{{ route('cart.list') }}">
                            <button class="w3view-cart" type="submit" name="submit" value="">
                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                <span id="itemsCount" style="color: #FF5722" class=" d-flex justify-content-lg-center ">{{ $itemsCount }}</span>
                            </button>
                        </a>
                    </div>
                </div>
            <!-- //cart details -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In </h3>
						<p>
							Sign In now, Let's start your Grocery Shopping. Don't have an account?
							<a href="#" data-toggle="modal" data-target="#myModal2">
								Sign Up Now</a>
						</p>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="phone" name="phone_number" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>
							<input type="submit" value="Sign In">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //signin Model -->
	<!-- signup Model -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up</h3>
						<p>
							Come join the Grocery Shoppy! Let's set up your Account.
						</p>
                        <form action="{{ route('register') }}" method="post">
                            @csrf
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Name" name="name" required="">
                            </div>
                            <div class="styled-input agile-styled-input-top">
								<input type="text" pattern="[0-9]" placeholder="phone number" name="phone_number" required>
                            </div>
							<div class="form-input">
								<input type="email" placeholder="E-mail" name="email" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" id="password1" required="">
							</div>
							<input type="submit" value="Sign Up">
						</form>
						<p>
							<a href="{{ asset('frontend/') }}#">By clicking register, I agree to your terms</a>
						</p>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal2 -->
	<!-- //signup Model -->
	<!-- //header-bot -->
	<!-- navigation -->
	<div class="ban-top">
		<div class="container">
			<div class="agileits-navi_search">
				<form action="#" method="post">
					<select id="agileinfo-nav_search" onchange="location = this.value;" name="agileinfo_search" required="">
                        <option value="">All Categories</option>
                        @foreach ($categories as $category)
                            <option value="{{ route('categoryPage', $category->id) }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
				</form>
			</div>
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							    aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li class="active">
									<a class="nav-stylehead" href="{{ asset('frontend/') }}index.html">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="{{ route('aboutUs') }}">About Us</a>
								</li>
								<li class="dropdown">
									<a href="{{ asset('frontend/') }}#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kitchen
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="agile_inner_drop_nav_info">
											<div class="col-sm-4 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li>
														<a href="{{ asset('frontend/') }}product.html">Bakery</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product.html">Baking Supplies</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product.html">Coffee, Tea & Beverages</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product.html">Dried Fruits, Nuts</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product.html">Sweets, Chocolate</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product.html">Spices & Masalas</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product.html">Jams, Honey & Spreads</a>
													</li>
												</ul>
											</div>
											<div class="col-sm-4 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li>
														<a href="{{ asset('frontend/') }}product.html">Pickles</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product.html">Pasta & Noodles</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product.html">Rice, Flour & Pulses</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product.html">Sauces & Cooking Pastes</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product.html">Snack Foods</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product.html">Oils, Vinegars</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product.html">Meat, Poultry & Seafood</a>
													</li>
												</ul>
											</div>
											<div class="col-sm-4 multi-gd-img">
												<img src="{{ asset('frontend/images/nav.png') }}" alt="">
											</div>
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li class="dropdown">
									<a href="{{ asset('frontend/') }}#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Household
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="agile_inner_drop_nav_info">
											<div class="col-sm-6 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li>
														<a href="{{ asset('frontend/') }}product2.html">Kitchen & Dining</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product2.html">Detergents</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product2.html">Utensil Cleaners</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product2.html">Floor & Other Cleaners</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product2.html">Disposables, Garbage Bag</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product2.html">Repellents & Fresheners</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product2.html"> Dishwash</a>
													</li>
												</ul>
											</div>
											<div class="col-sm-6 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li>
														<a href="{{ asset('frontend/') }}product2.html">Pet Care</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product2.html">Cleaning Accessories</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product2.html">Pooja Needs</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product2.html">Crackers</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product2.html">Festive Decoratives</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product2.html">Plasticware</a>
													</li>
													<li>
														<a href="{{ asset('frontend/') }}product2.html">Home Care</a>
													</li>
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li class="">
									<a class="nav-stylehead" href="{{ asset('frontend/') }}faqs.html">Faqs</a>
								</li>
								<li class="dropdown">
									<a class="nav-stylehead dropdown-toggle" href="{{ asset('frontend/') }}#" data-toggle="dropdown">Pages
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li>
											<a href="{{ asset('frontend/') }}icons.html">Web Icons</a>
										</li>
										<li>
											<a href="{{ asset('frontend/') }}typography.html">Typography</a>
										</li>
									</ul>
								</li>
								<li class="">
									<a class="nav-stylehead" href="{{ route('contactPage') }}">Contact</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //navigation -->
