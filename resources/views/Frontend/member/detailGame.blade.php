@extends('frontend.layouts.app')
@section('content')
<div class="main" style="height: 411px; margin-top: 68px; background: #080809;">
    <div class="container">
        <form method="POST">
            @csrf
            <div class="row">

                <div class="col-sm-4 picture py-3">
                    <?php $getArrImage = json_decode($data['image_Path'], true); 
                                    // echo $getArrImage[0];
                    ?>
                    <img src="{{url('upload/game/'. $getArrImage[1])}}" alt="" style="max-width: 263px;
                    max-height: 325px;">
                </div>

                <div class="col-sm-8 infor-product py-5">
                    <h3 class="infor-name mb-3">{{$data['title']}}</h3>
                    <h6 class="infor-category my-3">
                        Thể Loại: 
                        <a href="" class="">Action</a>, 
                        <a href="" class="">Adventure</a>, 
                        <a href="" class="">gta</a>, 
                        <a href="" class="">gta5</a>, 
                        <a href="" class="">role play</a>, 
                        <a href="" class="">Action</a>. 
                    </h6>
                    <div class="rate my-3">
                        <i class="ti-star"></i>
                        <i class="ti-star"></i>
                        <i class="ti-star"></i>
                        <i class="ti-star"></i>
                        <i class="ti-star"></i>
                        <p class="number-rate ">4.5</p>
                    </div>
                    <i class="ti-shopping-cart"> 
                        @if($data['price'] == 0)
                        Free
                        @endif

                        @if($data['price'] != 0)
                        {{$data['price']}}
                        @endif
                    </i>
                    <input type="hidden" name="price" value="{{$data['price']}}">
                    <div class="infor-btn-payment">
                        <button class="btn btn-primary btn-sm mt-5"> Thanh Toán</button>

                        <div class="mt-3">
                            @if(session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // $(document).ready(function() {
    //     $('form').submit(function(event) {
    //       event.preventDefault();
    //   });
    // });

</script>
@endsection