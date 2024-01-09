@extends('frontend.layouts.app-no-bootstrap')
@section('content')
<section class="home container" id="home">
	<img src="{{ asset('frontend/images/2D.jfif') }}" alt="">

	<ul class="nav-links">
		<li>
			<span class="link_name">New and Noteworthy
				<a href="#"><i class='bx bx-chevron-down'></i>
				</a></span>

				<ul class="sub-menu">
					<li>
						<a href="#">..............</a>
					</li>
					<li>
						<a href="#">..............</a>
					</li>
					<li>
						<a href="#">..............</a>
					</li>
					<li>
						<a href="#">..............</a>
					</li>
					<li>
						<a href="#">..............</a>
					</li>
					<li>
						<a href="#">..............</a>
					</li>
					<li>
						<a href="#">..............</a>
					</li>
				</ul>
			</li>
			<li>
				<span class="link_name">Category
					<a href="#"><i class='bx bx-chevron-down'></i>
					</a></span>

					<ul class="sub-menu">
						<li>
							<a href="#">Free to Play</a>
						</li>
						<li>
							<a href="#">Best seller</a>
						</li>
						<li>
							<a href="#">Online + Multiplayer</a>
						</li>
						<li>
							<a href="#">Football</a>
						</li>
						<li>
							<a href="#">FPS</a>
						</li>
						<li>
							<a href="#">Open World</a>
						</li>
						<li>
							<a href="#">3D</a>
						</li>
					</ul>

				</li>
				<div class="item">
					<li><a href="#news">News</a></li>
				</div>
			</ul>


			<div class="home-text">
				<h1>VÙNG ĐẤT <br>MA QUÁI</h1>
				<a href="#" class="btn">Khám phá ngay</a>
			</div>
		</section>

		<section class="trending container" id="trending">
			<div class="heading">
				<i class='bx bxs-flame'></i>
				<h2>Trending Games</h2>
			</div>

			<div class="trending-content swiper-container">
				<div class="swiper-wrapper">
					<!--game -2-->
					@foreach($data as $value)
					@if($value->category_id == 1)
					<div class="swiper-slide">

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
					</div>
					
					@endif
					@endforeach
					

					
				</div>
			</div>
		</div>

	</section>


	<section class="new-container container" id="new">
		<div class="heading">
			<i class='bx bxs-flame'></i>
			<h2>New Games</h2>
		</div>
		<div class="new-content">
			<!--newgame 1-->
			@foreach($data as $value)
			@if($value->category_id == 2)
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
			@endif
			@endforeach
			
		</div>
	</section>



	<section class="action container" id="action">
		<div class="heading">
			<i class='bx bxs-flame'></i>
			<h2>Action Games</h2>
		</div>

		<div class="new-content">
			<!--actiongame 1-->
			<div class="box">
				<img src="{{ asset('frontend/images/action1.jpg') }}" alt="">
				<div class="box-text">
					<h2>NieR: Automata</h2>
					<h3>Action</h3>
					<div class="rating-download">
						<div class="rating">
							<i class='bx bxs-star'></i>
							<span>5.0</span>
						</div>
						<a href="#" class="box-btn"><i class='bx bx-down-arrow-alt'></i></a>
					</div>
				</div>
			</div>

			<!--actiongame 2-->
			<div class="box">
				<img src="{{ asset('frontend/images/action2.jpg') }}" alt="">
				<div class="box-text">
					<h2>NieR: Repticant</h2>
					<h3>Action</h3>
					<div class="rating-download">
						<div class="rating">
							<i class='bx bxs-star'></i>
							<span>5.0</span>
						</div>
						<a href="#" class="box-btn"><i class='bx bx-down-arrow-alt'></i></a>
					</div>
				</div>
			</div>

		</section>

		<section class="action container" id="news">
			<div class="heading">
				<i class='bx bxs-flame'></i>
				<h2>News</h2>
			</div>

			<div class="new-content">
				<!--news1-->
				<div class="box">
					<img src="{{ asset('frontend/images/news1.avif') }}" alt="">
					<div class="box-text">
						<h2>Every Video Game Release Coming Soon For PC</h2>
						<p><i>The PC scene never rests as there is always a game set to come out. Here is every upcoming major new release coming to PC soon.</i></p>
					</div>
				</div>

				<div class="new-content">
					<!--news1-->
					<div class="box">
						<img src="{{ asset('frontend/images/news2.avif') }}" alt="">
						<div class="box-text">
							<h2>2023 Video Game Release Date Calendar. Read now</h2>
							<p><i>Check out this guide to find out the release dates for every major video game coming out in 2023.</i></p>
						</div>
					</div>
				</div>
			</section>  

			<section class="acontact container" id="contact">
				<div class="next-page">
					<a href="#">Next Page</a>
				</div>
			</div>
		</section>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
  				// Swiper: Slider
				var swiper = new Swiper(".swiper-container", {
					direction: "horizontal",
					slidesPerView: "auto",
					freeMode: true,
					slideToClickedSlide: true,
					paginationClickable: true,
					spaceBetween: 20,
					breakpoints: {
						1920: {
							slidesPerView: 3,
							spaceBetween: 30
						},
						1028: {
							slidesPerView: 2,
							spaceBetween: 30
						},
						480: {
							slidesPerView: 1,
							spaceBetween: 10
						}
					}
				});
			});
		</script>
		<script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
		@endsection