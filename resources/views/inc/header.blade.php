
	<!-- top-header -->
	<div class="header-most-top">
		<p>منطقة عرض البقالة أفضل الصفقات والخصومات </p>
	</div>
	<!-- //top-header -->
	<!-- header-bot-->
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="{{ route('home') }}">
						<img src="{{ asset('frontend/images/logo.png') }}" alt=" " style="width: 60%;">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
				<!-- header lists -->
				<ul>
					<li>
						<a class="play-icon popup-with-zoom-anim" href="{{ asset('frontend/#small-dialog1') }}">
							الموقع <span class="fa fa-map-marker" aria-hidden="true"></span></a>
					</li>
					<li>
						@if(auth()->check())
						<a href="{{ route('profile', Auth::user()) }}">
							@else
							<a href="#" data-toggle="modal" data-target="#myModal1">
							@endif
							اطلب طلبك <span class="fa fa-truck" aria-hidden="true"></span></a>
					</li>
					<li>
						رقم الهاتف <span class="fa fa-phone" aria-hidden="true"></span> </li>

					@if( auth()->check() )
					<li>
						<a href="{{ route('profile', Auth::id())}}">
							<span class="fa fa-unlock-alt" aria-hidden="true"></span>  {{ auth()->user()->name }} اهلا</a>
					</li>
					<li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                        @csrf
                            <button type="submit">
                                <span class="fa fa-unlock-alt" aria-hidden="true"></span> تسجيل خروج  </a>
                            </button>
                        </form>

					</li>
					@else
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal1">
							تسجيل دخول <span class="fa fa-unlock-alt" aria-hidden="true"></span> </a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal2">
							تسجيل حساب جديد <span class="fa fa-pencil-square-o" aria-hidden="true"></span> </a>
					</li>
					@endif
				</ul>
                <!-- Search box-->
                <div class="search">
                    <form class="search-form ">
                        <button type="submit" class="btn btn-default">
                            <span class="fa fa-search" aria-hidden="true"> </span>
                        </button>
                        <input  type="text" placeholder="كيف يمكننا مساعدتك اليوم؟" required="">
                        {{-- <input type="submit" value="Submit"> --}}
                    </form>
                </div>
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
						<h3 class="agileinfo_sign">تسجيل دخول </h3>
						<p style="text-align: right;">
							سجّل الدخول الآن ، لنبدأ للتسوق . ليس لديك حساب؟
							<a href="#" data-toggle="modal" data-target="#myModal2">
								تسجيل جديد </a>
						</p>
						<form action="{{ route('login') }}" method="post">
							@csrf
							<div class="styled-input agile-styled-input-top">
								<input style="text-align: right;" type="text" placeholder="رقم الهاتف" name="phone_number" required="">
							</div>
							<div class="styled-input">
								<input style="text-align: right;" type="password" placeholder="كلمة السر" name="password" required="">
							</div>
							<div style="display: flex; justify-content: flex-end;">
								<input type="submit" value="تسجيل دخول ">
							</div>
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
						<h3 class="agileinfo_sign">تسجيل جديد </h3>
						<h4 style="text-align: right;">
							دعنا ننشئ حسابك
						</h4><br>
						<form action="{{ route('register') }}" method="post">
							@csrf
							<div class="styled-input">
								<input style="text-align: right;" type="text" placeholder="الاسم" name="name" required>
							</div>
							<div class="styled-input">
								<input style="text-align: right;" type="email" placeholder="البريد الالكتروني" name="email" required>
							</div>
                            <div class="styled-input">
								<input style="text-align: right;" type="text" placeholder="رقم الهاتف" name="phone_number" required>
							</div>
							<div class="styled-input">
								<input style="text-align: right;" type="password" placeholder="كلمةالسر" name="password" id="password1" required>
							</div>
                            <div class="styled-input">
                                <input style="text-align: right;" type="password" placeholder="تأكيد كلمة السر" name="password_confirmation" required>
                            </div>

							<div style="display: flex; justify-content: flex-end;">
								<input type="submit" value="تسجيل جديد ">
							</div>
						</form>
						<p style="text-align: right;">
							<a href="{{ asset('frontend/') }}#">
								بالضغط على تسجيل ، أوافق على شروطك</a>
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
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">



								<li class="dropdown">
									<a href="{{ asset('frontend/') }}#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">جميع الأقسام
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="agile_inner_drop_nav_info">
                                            @foreach ($categories->chunk(10) as $chunk)
											<div class="col-sm-6 multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                @foreach($chunk as $category)
                                                <li>
                                                    <a href="{{ route('categoryPage', $category->id) }}">{{ $category->name }}</a>
                                                </li>
                                                @endforeach
                                                </ul>
                                            </div>
                                            @endforeach
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li class="">
									<a class="nav-stylehead" href="{{ route('get_add') }}">اضف منتجات</a>
								</li>

								<li class="">
									<a class="nav-stylehead" href="{{ route('contactPage') }}">تواصل معنا</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="{{ route('aboutUs') }}">من نحن </a>
								</li>
								<li class="active">
									<a class="nav-stylehead" href="{{ asset('frontend/') }}index.html">الرئيسية
										<span class="sr-only">(current)</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


	<!-- //navigation -->
