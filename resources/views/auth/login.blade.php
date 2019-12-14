@extends('layouts.app')

@section('content')
    <!--=======Page Heading
    ===============================================-->
    <section class="page-heading-section before-bg bg-image" style="background-image: url({{url('public/images/header/p-header3.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="page-heading">
                        <h2 class="page-name text-capitalize">REMA - Access Page</h2>
                    </div><!--/.page-heading-->
                </div><!--/.col-md-12-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/.page-heading-area-->
    
    @php
    if (isset($_GET['key'])){
         
     $email = $_GET['key'];

    }
    else{

        $email = "";
    }
    @endphp
    <div class="login-page page-wrapper s-pd100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="login-form-area">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <p><input id="email" type="email" placeholder="Enter your email address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                               <p>   <input id="password" placeholder="Enter Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                     @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </p>
                            <a class="login-form-forgot-password" href="{{ route('password.request') }}">Forgot your password?</a>
                            <p><button class="btn btn-default btn-primary" type="submit">Proceed</button></p>
                            <div class="login-form-remember"> 
                                   <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>                            </div>
                        </form>
                    </div><!--/.login-form-area-->
                </div><!--/.col-lg-4-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/.login-page-->
    
   <!-- Start footer area -->
   <footer id="footer" class="site-footer">
       
        <!-- Start footer copyright area -->
        <div class="footer-copyright-area bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            &copy; Designed by <a href="#">Team REMA - Naija Hacks</a> 
                        </div>
                    </div>
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--End footer copyright area -->
    </footer><!--End footer area -->
   
    
    
@endsection


