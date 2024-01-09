@extends('frontend.layouts.app')
@section('content')
<div>
	<p class="pm-dt mx-5">Payment Details</p>
</div>
<div class="container left-side">
	<div class="col">
		<form method="POST">
			@csrf
			<p class="text-input">Payment Method</p>

			<select name="method" id="Banking">
				<option value="0">Internet Banking</option>
				<option value="1">Momo</option>
				<option value="2">VN-pay</option>
			</select>
			<div class="cashvnd">
				<p class="text-input">Cash</p>
				<input name="payment" type="" placeholder="VNĐ" class="vnd py-2" />
			</div>
			<button class="btn-primary my-3" style="width: 334px;">Xử Lý Thanh Toán</button>
			@if(session('success'))
			<div class="alert alert-success">
				{{ session('success') }}
			</div>
			@endif
			<div class="information">
				<p class="">Ngân hàng TECHCOMBANK </p>
				<p class="">Tên : NGUYEN HAO KIET</p>
				<p class="">STK : 1907 0045 6280 18</p>
				<p class="">Địa chỉ : 129 Huynh Thuc Khang ,Binh Hien ,Hai Chau ,Da Nang </p>
				<p class="">Email : haokiet.nguyen01@gmail.com</p>
			</div>

		</div>

		<div class="col">
			<div class="text-center">
				<img class="imgBanking" src="{{asset('Frontend/images/Payment_banking.png')}}" alt="" width="378px"> 
			</div>
		</div>
	</form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>


	$(document).ready(function() {
		$('#Banking').change(function() {
			var selectedValue = $(this).val();
			var image = $('.imgBanking');
            // var srcImg = $('#myImage').attr('src');
            // alert(src)
			if (selectedValue === "0") {
				image.attr('src', "{{asset('Frontend/images/Payment_banking.png')}}");
				$('.information').html("<p class=''>Ngân hàng TECHCOMBANK </p>" + 
					"<p class=''>Tên : NGUYEN HAO KIET</p>" +
					"<p class=''>STK : 1907 0045 6280 18</p>" +
					"<p class=''>Địa chỉ : 129 Huynh Thuc Khang ,Binh Hien ,Hai Chau ,Da Nang </p>" +
					"<p class=''>Email : haokiet.nguyen01@gmail.com</p>");
			} else if (selectedValue === "1") {
				image.attr('src', "{{asset('Frontend/images/Payment_Momo.jpg')}}");
				$('.information').html("<p class=''>Momo </p>" +
					"<p class=''>Tên : TRAN VAN HIEU</p>" +
					"<p class=''>SDT : 0905734633</p>");
			} else if (selectedValue === "2") {
				image.attr('src', "{{asset('Frontend/images/Payment_VNPAY.jpg')}}");
				$('.information').html("<p class=''>VN-PAY </p>" +
					"<p class=''>Tên : TRAN VAN HIEU</p>" +
					"<p class=''>SDT : 0905734633</p>");
			}
		});
	});

</script>
@endsection