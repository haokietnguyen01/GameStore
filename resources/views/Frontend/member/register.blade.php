@extends('frontend.layouts.app')
@section('content')
<section class="vh-100 gradient-custom ">

  <div class="container py-5 h-100">

    <div class="row d-flex justify-content-center align-items-center h-100">

      <div class="col-12 col-md-8 col-lg-6 col-xl-5">

        <div class="card bg-dark text-white" style="border-radius: 1rem;">

          <div class="  card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-5 text-uppercase">Create An Account</h2>

              <p class="text-white-50 mb-5">Create an account to enjoy all the services without any ads for free!</p>

              <form method="POST">
                @csrf
                <div class="form-outline form-white mb-4">
                  <input type="text" name="name" placeholder="Name" id="typeEmailX" class="form-control form-control-lg" />
                </div>
                <div class="form-outline form-white mb-4">
                  <input type="email" name="email" placeholder="Email Address" id="typeEmailX" class="form-control form-control-lg" />
                </div>
                <div class="form-outline form-white mb-4">
                  <input type="password" name="password" placeholder="Password" id="typePasswordX" class="form-control form-control-lg" />
                  <button class="btnCreate btn btn-outline-light btn-lg px-5 mt-5">Create An Account</button>
                </div>
              </form>

              <div>
                <p class=" mb-0">Already Have A Account? <a href="{{url('user/login')}}" class="text-white-500 fw-bold">Sign In</a>
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection