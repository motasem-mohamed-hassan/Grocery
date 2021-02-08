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
                                        <a href="{{ route('singleProduct', $product->id) }}" class="link-product-add-cart">صفحة المنتج</a>
                                    </div>
                                </div>
                                    <span class="product-new-top">جديد</span>
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
                                            <a href="{{ route('profile', $product->user_id) }}" class="btn btn-success">تواصل مع البائع</a>
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
        <form action="#" method="post">
            <input wire:model="search" type="search" placeholder="...اسم المنتج">
            <input type="submit" value=" ">
        </form>
    </div>
    <!-- price range -->
    <div class="range">
        <h3 class="agileits-sear-head">تحديد السعر</h3>
        <ul class="dropdown-menu6">
            <li>
                <form action="{{ route('home') }}" method="get">
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
    <div class="left-side">
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


