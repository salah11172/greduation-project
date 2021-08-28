
@extends('layout.layout');
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
</head>
<body>

<div class="container">
   <div class="row" style="margin-top:45px">
    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="#" class="link">home</a></li>
            <li class="item-link"><span>login</span></li>
        </ul>
    </div>
      <div class="col-md-4 col-md-offset-4">
           
			
           <form action="{{ route('auth.check') }}" method="post">
            @if(Session::get('fail'))
               <div class="alert alert-danger">
                  {{ Session::get('fail') }}
               </div>
            @endif
  
           @csrf
              <div class="form-group">
                 <label>Email</label>
                 <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                 <span class="text-danger">@error('email'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label>Password</label>
                 <input type="password" class="form-control" name="password" placeholder="Enter password">
                 <span class="text-danger">@error('password'){{ $message }} @enderror</span>
              </div>
              <button style="background-color: #FF2832;color:white" type="submit" class="btn btn-block  ">Sign In</button>
              <br>
              
              <a href="{{ route('auth.register') }}">I don't have an account, create new</a>
           </form>
      </div>
   </div>
</div>
    
</body>
</html
	<!--main area-->
   
	{{-- <main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>login</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
					<div class=" main-content-area">
						<div class="wrap-login-item ">						
							<div class="login-form form-item form-stl">
								<form name="frm-login" action="/" method="post">
                                    @if(Session::get('fail'))
                                    <div class="alert alert-danger">
                                       {{ Session::get('fail') }}
                                    </div>
                                 @endif
                                    @csrf
                                    
									<fieldset class="wrap-title">
										<h3 class="form-title">Log in to your account</h3>										
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-login-uname">Email Address:</label>
										<input type="text" id="frm-login-uname" name="email" placeholder="Type your email address" value="{{old('email')}}">
                                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-login-pass">Password:</label>
										<input type="password" id="frm-login-pass" name="password" placeholder="************">
                                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
									</fieldset>
									
									<fieldset class="wrap-input">
										
										<a class="link-function left-position" href="#" title="Forgotten password?">Forgotten password?</a>
									</fieldset>
									<input type="submit" class="btn btn-submit" value="Login" name="submit">
                                    <br>
                                    <br>
                                     <a class="link-danger"  href="{{ route('auth.register') }}">I don't have an account, create new</a>
                                     
								</form>
							</div>												
						</div>
					</div><!--end main products area-->		
				</div>
			</div><!--end row-->

		</div><!--end container-->

	</main> --}}
    @endsection
	<!--main area-->
  