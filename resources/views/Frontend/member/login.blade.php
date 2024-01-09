@extends('frontend.layouts.app')
@section('content')
<section class="vh-100 gradient-custom ">
	<div class="container py-5 h-100">
		<div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col-12 col-md-8 col-lg-6 col-xl-5">
				<div class="card bg-dark text-white" style="border-radius: 1rem;">
					<div class="card-body p-5 text-center">
						<div class="mb-md-5 mt-md-4 pb-5">
							<h2 class="fw-bold mb-2 text-uppercase">Login</h2>     
							<form method="POST"> 
								@csrf         
								<div class="form-outline form-white mb-4">
									<input type="email" name="email" placeholder="Email" id="typeEmailX" class="form-control form-control-lg" />              
								</div>
								<div class="form-outline form-white mb-4">
									<input type="password" name="password" placeholder="Password" id="typePasswordX" class="form-control form-control-lg" />              
								</div>
								<span>
									<input name="remember_me" type="checkbox" class="checkbox"> 
									Keep me signed in
								</span>
								<p class="small mb-5 pb-lg-2"><a href="" class="text-white-50 fw-bold">Forgot password?</a></p>
								<button class="btn btn-outline-light btn-lg px-5">Login</button>
							</form>             	   
						</div> 
						<div>
							<p class="mb-0">Don't have an account? <a href="{{url('user/register')}}" class="text-white-500 fw-bold">Sign Up</a>
							</p>
						</div>
					</div>  
				</div>
			</div>
		</div>
	</div>
</section>
@endsection