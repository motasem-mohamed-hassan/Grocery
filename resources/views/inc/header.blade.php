<header id="default_header" class="header_style_1">
    <!-- header top -->
    <div style="background-color: #F47536" class="header_top ">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="full">
                        <div class="topbar-left">
                            <ul class="list-inline">
                                <li>
                                    @if( auth()->check() )
                                    <a style="font-size: x-large; color:white;font-weight: 600;" class="" href="{{ route('profile') }}">أهلًا {{ Auth::user()->name }} </a>
                                    @else
                                    <a style="font-size: x-large; color:white;font-weight: 600;" class="" href="#" data-toggle="modal" data-target="#myModal1">تسجيل دخول </a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header top -->
    <!-- header bottom -->
    <div class="header_bottom">
        <div class="container">
            <div  class="row ">
                <div class="col">
                    <!-- logo start -->
                    <div class="logo mr-4">
                        <a href="it_home.html"><img class="imags" src="{{asset('logo.png')}}" alt="logo" /></a>
                        <!-- <a class="ml-4" href="#">tre</a> -->
                    </div>
                    <!-- logo end -->
                </div>
                <div class="">
                    <!-- menu start -->
                    <div class="menu_side">
                        <div id="navbar_menu">
                            <ul style=" position: relative; bottom: 1pc;" class="first-ul">
                                <li class="nav-item dropdown">
                                    <a style="color: #F47536;font-size: x-large;" class=" dropdown-toggle" href="#" data-toggle="dropdown">المنتجات </a>
                                    <ul class="dropdown-menu">
                                        @foreach($categories as $category)
                                            <li>
                                                <a class="dropdown-item" href="{{ route('categoryPage', $category->id) }}"> {{ $category->name }} </a>
                                                <ul class="submenu dropdown-menu">
                                                    @foreach($category->children as $child)
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('categoryPage', $child->id) }}">{{ $child->name }}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li> <a style="color: #F47536;font-size: x-large;" href="{{ route('get_add') }}">اضف منتجات </a>
                                </li>

                                <li>
                                    <a style="color: #F47536;font-size: x-large;" href="{{ route('aboutUs') }}"> من نحن</a>
                                </li>
                                <!-- <li class="dropdown">
                                        <a style="color: #F47536" href="{{ asset('frontend/') }}#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Household
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
                                                    <ul class="">
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
                                    </li> -->
                                <li>
                                    <a style="color: #F47536;font-size: x-large;" href="{{ route('contactPage') }}">تواصل معنا</a>

                                </li>
                                <li>
                                    <a style="color: #F47536;font-size: x-large;" href="{{ route('home') }}">الرئيسية</a>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
        <form action=''>
            <div style="position: relative;bottom: 0.5pc;" class="text-center ">

                <input style="text-align: right;" id="search" class="p-2 search-pos" value="" type="search" placeholder="بحث" required="">
                <div id="product_list" class="product_list">

                </div>


                {{-- <button type="submit">
                <span class="fa fa-search orange mt-2  ml-2 mt-1" aria-hidden="true"></span>
                </button> --}}
            </div>
        </form>
    </div>
    <!-- header bottom end -->
</header>
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
                    <h3 class="agileinfo_sign">تسجيل الدخول</h3>
                    <p>
                        سجل دخول الان لتتمتع بمميزات الموقع, لا تمتلك حساب؟
                        <a href="{{ route('register') }}" data-toggle="modal" data-target="#myModal2">سجل الان</a>
                    </p>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" placeholder="رقم الهاتف" name="phone_number" required="">
                        </div>
                        <div class="styled-input">
                            <input type="password" placeholder="الرقم السري" name="password" required="">
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
