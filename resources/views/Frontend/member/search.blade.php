@extends('frontend.layouts.app-no-bootstrap')
@section('content')
<section class="home container" id="home">
	<section class="new-container container" id="new">
		<div class="heading">
			<i class='bx bxs-flame'></i>
			<h2>SEARCH</h2>
		</div>
		<div class="new-content">
			<!--newgame 1-->
			@foreach($gametitle as $value)
			
			<div class="box">
				<?php $getArrImage = json_decode($value['image_Path'], true); 
									// echo $getArrImage[0];
				?>
				<img src="{{url('upload/game/'.$getArrImage[0])}}" alt="">
				<div class="box-text">
					<h2>{{$value->title}}</h2>
					<h3>Action</h3>
					<div class="rating-download">
						<div class="rating">
							<i class='bx bxs-star'></i>
							<span>4.7</span>
						</div>
						<a href="{{url('user/detail/'.$value->id)}}" class="box-btn"><i class='bx bx-down-arrow-alt'></i></a>
					</div>
				</div>
			</div>
			
			@endforeach
			
		</div>
	</section>
	@endsection