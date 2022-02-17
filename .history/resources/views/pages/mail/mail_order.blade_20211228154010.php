<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Xác nhận đơn hàng</title>
</head>
<body style="border-radius: 20px;background-color:#e2e1e0;font-family: Open Sans, sans-serif;font-size:100%;font-weight:400;line-height:1.4;color:#000;">
  <div class="container" style=" padding:20px;">
		<div class="col-md-12" >

			<p style="text-align: center;color: #000">Đây là email tự động. Quý khách vui lòng không trả lời email này.</p>
			<div class="row">

				
				<div class="col-md-6" style="text-align: center;color: #000;font-weight: bold;font-size: 30px">
					<h4 style="margin:0">Cửa hàng nước hoa The Perfume</h4>
				</div>

				<div class="col-md-6 logo"  style="color: #000">
					<p>Chào bạn <strong style="color: #000;text-decoration: underline;">{{$shipping_array['customer_name']}}</strong></p>
				</div>
				
				<div class="col-md-12">
					<p style="color:#000;font-size: 17px;">Cửa hàng xin gửi mail thông xin đơn hàng cho bạn</p>
					<h4 style="color: #000;text-transform: uppercase;">Thông tin đơn hàng</h4>
					<p>Mã đơn hàng : <strong style="text-transform: uppercase;color:#000">{{$code['order_code']}}</strong></p>
					<p>Mã khuyến mãi áp dụng : <strong style="text-transform: uppercase;color:#000">{{$code['coupon_code']}}</strong></p>
					<p>Phí giao hàng : <strong style="text-transform: uppercase;color:#000">{{$shipping_array['fee']}}</strong></p>
					<p>Dịch vụ : <strong style="text-transform: uppercase;color:#000">Đặt hàng trực tuyến</strong></p>
					
					<h4 style="color: #000;text-transform: uppercase;">Thông tin người nhận</h4>

					<p>Email : 
						@if($shipping_array['shipping_email']=='')
							<span style="color:#000">Không có</span>
						@else
							<span style="color:#000">{{$shipping_array['shipping_email']}}</span>
						@endif
					</p>

					<p>Họ và tên người gửi : 
						@if($shipping_array['shipping_name']=='')
							<span style="color:#000">Không có</span>
						@else
							<span style="color:#000">{{$shipping_array['shipping_name']}}</span>
						@endif
					</p>
					<p>Địa chỉ nhận hàng : 
						@if($shipping_array['shipping_address']=='')
							<span style="color:#000">Không có</span>
						@else
							<span style="color:#000">{{$shipping_array['shipping_address']}}</span>
						@endif
					</p>	
					<p>Số điện thoại : 
						@if($shipping_array['shipping_phone']=='')
							<span style="color:#000">Không có</span>
						@else
							<span style="color:#000">{{$shipping_array['shipping_phone']}}</span>
						@endif
					</p>	
					<p>Ghi chú đơn hàng : 
						@if($shipping_array['shipping_notes']=='')
							<span style="color:#000">Không có</span>
						@else
							<span style="color:#000">{{$shipping_array['shipping_notes']}}</span>
						@endif
					</p>	
					<p>Hình thức thanh toán : <strong style="text-transform: uppercase;color:#000">
						@if($shipping_array['shipping_method']==0)
              Tiền mặt
						@else
							Chuyển khoản ATM
						@endif
					
					</strong></p>
					<p style="color:#000">Nếu thông tin người nhận hàng không có chúng tôi sẽ liên hệ với người đặt hàng để trao đổi thông tin về đơn hàng đã đặt.</p>

					<h4 style="color: #000;text-transform: uppercase;">Sản phẩm đã đặt</h4>

					<table class="table table-striped" style="width:100%; border:1px;">
						<thead>
							<tr>
								<th>Sản phẩm</th>
								<th>Giá tiền</th>
								<th>Số lượng đặt</th>
								<th>Thành tiền</th>
								
							</tr>
						</thead>

						<tbody>
							@php 
							$sub_total = 0;
							$total = 0;
							@endphp	

							@foreach($cart_array as $cart)

							@php 
							$sub_total = $cart['product_qty']*$cart['product_price'];
							$total+=$sub_total;
							@endphp	

							<tr>
								<td style="text-align: center">{{$cart['product_name']}}</td>
								<td style="text-align: center">{{number_format($cart['product_price'],0,',','.')}}vnđ</td>
								<td style="text-align: center">{{$cart['product_qty']}}</td>
								<td style="text-align: center">{{number_format($sub_total,0,',','.')}}vnđ</td>
							</tr>
							@endforeach
							@php
									$total_all = $total + $shipping_array['fee']
							@endphp
							<tr>

								<td colspan="4" style="text-align: center">Tổng tiền thanh toán khi chưa áp dụng mã giảm giá: {{number_format($total,0,',','.')}}vnđ</td>
							</tr>

						</tbody>
					</table>

				</div>

				<p style="color:#000">Mọi chi tiết xin liên hệ website tại : <a target="_blank" href="#">Shop</a>, hoặc liên hệ qua số hotline : 0399123123.Xin cảm ơn quý khách đã đặt hàng shop chúng tôi.</p>

			</div>
		</div>
	</div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>