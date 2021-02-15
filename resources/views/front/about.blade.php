@extends('layouts.master')
@section('content')
<!-- page -->
<div class="services-breadcrumb">
	<div class="agile_inner_breadcrumb">
		<div style="display: flex; justify-content: flex-end;" class="container">
			<ul class="w3_short">

				<li>من نحن </li>
				<li>
					<i>|</i>

					<a href="{{ route('home') }}">الرئيسية</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- //page -->
<!-- about page -->
<!-- welcome -->
<div class="welcome">
	<div class="container">
		<!-- tittle heading -->
		<h3 class="tittle-w3l">{{ $about->header }}
			<span class="heading-style">
				<i></i>
				<i></i>
				<i></i>
			</span>
		</h3>
		<!-- //tittle heading -->
		<div class="w3l-welcome-info">
			<div class="col-sm-6 col-xs-6 welcome-grids">
				<div class="welcome-img">
					<img src="images/about.jpg" class="img-responsive zoom-img" alt="">
				</div>
			</div>
			<div class="col-sm-6 col-xs-6 welcome-grids">
				<div class="welcome-img">
					<img src="images/about2.jpg" class="img-responsive zoom-img" alt="">
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="w3l-welcome-text">
			<h4 style="color: grey;">
                {{ $about->description }}
			</h4>
		</div>
	</div>
</div>
<!-- //welcome -->
<!-- video -->
<div class="about">
	<div class="container">
		<!-- tittle heading -->
		<h3 class="tittle-w3l">
			الفيديو الخاص بنا
			<span class="heading-style">
				<i></i>
				<i></i>
				<i></i>
			</span>
		</h3>
		<!-- //tittle heading -->
		<div class="about-tp">
			<div class="col-md-8 about-agileits-w3layouts-left">
				<iframe src="https://player.vimeo.com/video/15520702?color=ffffff&title=0&byline=0"></iframe>
			</div>
			<div class="col-md-4 about-agileits-w3layouts-right">
				<div class="img-video-about">
					<img src="images/videoimg2.png" alt="">
				</div>
				<h4 style="text-align: right;">
					مستعملات</h4>
				<p style="text-align: right;">
					{{ $about->video_description }}
                </p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //video-->
<!-- //about page -->

@endsection
