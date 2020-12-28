@extends('layout')
@section('content')

<!--	<section id="form">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form">
						<h2>Đăng nhập tài khoản</h2>
						<?php
						$message = Session::get('message');
						if($message){
							echo '<span class="text-alert">'.$message.'</span>';
							Session::put('message',null);
						}
						?>
						<form action="{{URL::to('/login-customer')}}" method="POST">
							{{csrf_field()}}
							<input type="text" name="email_account" placeholder="Tài khoản" />
							<input type="password" name="password_account" placeholder="Password" />
							<button type="submit" class="btn btn-default">Đăng nhập</button>
						</form>
					</div>
				</div>
				<div class="col-sm-1">
					<h2 class="or">Hoặc</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form">
						<h2>Đăng ký</h2>
						<form action="{{URL::to('/add-customer')}}" method="POST">
							{{ csrf_field() }}
							<input type="text" name="customer_name" placeholder="Họ và tên" required/>
							<input type="email" name="customer_email" placeholder="Địa chỉ email" required/>
							<input type="password" name="customer_password" placeholder="Mật khẩu" required/>
							<input type="text" name="customer_phone" placeholder="Phone" required/>
							<button type="submit" class="btn btn-default">Đăng ký</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
 
@endsection