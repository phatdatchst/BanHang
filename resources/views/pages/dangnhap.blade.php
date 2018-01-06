@extends('layout.index')

@section('content')
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
				<h4><span>Login or Regsiter</span></h4>
			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
						<form action="{{route('login')}}" method="post">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						
							<input type="hidden" name="next" value="/">
							<fieldset>
							@if(Session::has('flag'))
							<div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
							@endif
								<div class="control-group">
									<label class="control-label">Username</label>
									<div class="controls">
										<input type="text" name="username" placeholder="Enter your username" id="username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password</label>
									<div class="controls">
										<input type="password" name="password" placeholder="Enter your password" id="password" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" type="submit" value="Sign into your account">
									<hr>
									<p class="reset">Recover your <a tabindex="4" href="#" title="Recover your username or password">username or password</a></p>
								</div>
							</fieldset>
						</form>				
					</div>
									
				</div>
			</section>
@endsection

@section('script')
<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>	
@endsection