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
    @livewire('live-category', ['id' => $category->id])
    <!-- //top products -->
	<!-- special offers -->
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">المنتجات المبوبة
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
		</div>
	</div>
	<!-- //special offers -->
	<!-- newsletter -->
	<!-- //newsletter -->


@endsection

