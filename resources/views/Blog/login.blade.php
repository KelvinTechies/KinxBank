@extends('blog.header')

@section('Content')

<div class="breadcrumb-wrap bg-spring">
<img src="assets/img/breadcrumb/br-shape-1.png" alt="Image" class="br-shape-one xs-none">
<img src="assets/img/breadcrumb/br-shape-2.png" alt="Image" class="br-shape-two xs-none">
<img src="assets/img/breadcrumb/br-shape-3.png" alt="Image" class="br-shape-three moveHorizontal sm-none">
<img src="assets/img/breadcrumb/br-shape-4.png" alt="Image" class="br-shape-four moveVertical sm-none">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-7 col-md-8 col-sm-8">
<div class="breadcrumb-title">
<h2>Login</h2>
<ul class="breadcrumb-menu list-style">
<li><a href="index.html">Home </a></li>
 <li>Login</li>
</ul>
</div>
</div>
<div class="col-lg-5 col-md-4 col-sm-4 xs-none">
<div class="breadcrumb-img">
<img src="assets/img/breadcrumb/br-shape-5.png" alt="Image" class="br-shape-five animationFramesTwo">
<img src="assets/img/breadcrumb/br-shape-6.png" alt="Image" class="br-shape-six bounce">
<img src="assets/img/breadcrumb/breadcrumb-3.png" alt="Image">
</div>
</div>
</div>
</div>
</div>


<section class="Login-wrap ptb-100">
<div class="container">
<div class="row">
<div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
<div class="login-form-wrap">
<div class="login-header">
<h3>Login Here</h3>
<p>Welcome Back!! Login To Your Account</p>

<div class="msg">
        @if(Session::get('fail'))

        <span class="alert alert-danger">
            {{ Session::get('fail') }}
        </span>
        @endIf
</div>
</div>
<div class="login-form">
<div class="login-body">
<form class="form-wrap logInForm" action="/login" method="post">
    @csrf
<div class="row">
<div class="col-lg-12">
<div class="form-group">
<input id="text" name="email" type="email" placeholder=" Email Address" >
</div>
@error('email')
<p class="text-danger">{{$message}}</p>
@endError
</div>
<div class="col-lg-12">
<div class="form-group">
<input id="pwd" name="password" type="password" placeholder="Password">
</div>
@error('password')
<p class="text-danger">{{$message}}</p>
@endError
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-6">
<div class="checkbox style3">
<input type="checkbox" id="test_1">
<label for="test_1">
Remember Me</a>
</label>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end mb-20">
<a href="recover-password.html" class="link style1">Forgot Password?</a>
</div>
<div class="col-lg-12">
<div class="form-group">
<button class="btn style1" name="login">
Login Now
</button>
</div>
</div>
<div class="col-md-12 text-center">
<p class="mb-0">Don’t Have an Account? <a class="link style1" href="register.php">Create One</a></p>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

</div>



@endsection