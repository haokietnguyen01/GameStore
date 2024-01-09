	@extends('frontend.layouts.app')
	@section('content')
	<div class="Container" style="background: #080809;">
		<div class="box-1">
			<div>
				<select class="user-input user-input-country" name="type" id="type" >
				<option value="games">GAMES</option>
				<option value="app">APP</option>
			</select>
		</div>
		
		<div class="search" style="background: #444444;
				width: 100%;">
			<input type="text" style="background: #444444;
				width: 100%;">
			<div>
				<i class="search-icon ti-search"></i>
			</div>
		</div>
		<div>
			<div class="library-games" id="ifgame">
				<ul>
					@foreach($array as $value)
					<li>
						<?php $getArrImage = json_decode($value['image_Path'], true); 
									// echo $getArrImage[0];
						?>
						<img class="img" src="{{url('upload/game/'.$getArrImage[0])}}" alt="">
						<p>{{$value['title']}}</p>
					</li>
					@endforeach
					<!-- <li>
						<img class="img" src="/HTML/assets/img/businestour_logo.png" alt="">
						<p>Business Tours</p>
					</li> -->
					<!-- <li><img class="img" src="/HTML/assets/img/gta_logo.png" alt="">
						<p>Grand Theft Auto V</p>
					</li>
					<li><img class="img" src="/HTML/assets/img/CS-GO3_logo.png" alt="">
						<p>Counter-Strike: Global Offensive</p>
					</li> -->
				</ul>

			</div>
		</div>
	</div>

	<div class="box-2">
		<div class="hero-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
						<div class="hero-section-caption pinside40">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="game2">
			<img src="/HTML/assets/img/csgo.png" alt="">
			<div>
				<h4>Regular Update</h4>
				<b>UPDATE 2.18.5</b>
				<P>Update 2.18.0 Hello, Sharks! In the new update: Added a Map Editor! Added customization
				of your buildings and money! Added a cross-platform friends list!</P>
			</div>
		</div>
		<div class="game3">
			<img src="/HTML/assets/img/SOT.jpg" alt="">
			<div>
				<h4>Regular Update</h4>
				<b>UPDATE 2.18.5</b>
				<P>Update 2.18.0 Hello, Sharks! In the new update: Added a Map Editor! Added customization
				of your buildings and money! Added a cross-platform friends list!</P>
			</div>
		</div>
		<div class="game4">
			<img src="/HTML/assets/img/GTA.jpg" alt="">
			<div>
				<h4>Regular Update</h4>
				<b>UPDATE 2.18.5</b>
				<P>Update 2.18.0 Hello, Sharks! In the new update: Added a Map Editor! Added customization
				of your buildings and money! Added a cross-platform friends list!</P>
			</div>
		</div>
	</div>

</div>
@endsection