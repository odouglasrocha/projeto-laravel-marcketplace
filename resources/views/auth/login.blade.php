@extends('frontend.main_master')
@section('content')

<main class="main login-page">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">My Account</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.html">Home</a></li>
                        <li>My account</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->
            <div class="page-content">
                <div class="container">
                    <div class="login-popup">
                        <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                            <ul class="nav nav-tabs text-uppercase" role="tablist">
                                <li class="nav-item">
                                    <a href="#sign-in" class="nav-link active">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#sign-up" class="nav-link">Sign Up</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                
                                
                                <div class="tab-pane active" id="sign-in">
                                    <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                                      @csrf
                                    <div class="form-group">
                                        <label>Username or email address *</label>
                                        <input type="text" id="email" name="email" class="form-control"  required>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Password *</label>
                                        <input type="password" id="password" name="password" class="form-control"  required>
                                    </div>
                                    <div class="form-checkbox d-flex align-items-center justify-content-between">
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" class="custom-checkbox"  required="">
                                        <label for="remember1">Remember me</label>
                                        <a href="{{ route('password.request') }}">Last your password?</a>
                                    </div>
                                    <button href="#" class="btn btn-primary">Sign In</button>
                                </div>
                                </form>

                               
                                <div class="tab-pane" id="sign-up">
                                    <form method="POST" action="{{ route('register') }}">
                                      @csrf
                                      <div class="form-group">
                                        <label>Your Name  *</label>
                                        <input type="text" id="name" name="name"class="form-control"  required>
                                    </div>
                                    <div class="form-group">
                                        <label>Your email address *</label>
                                        <input type="email" id="email" name="email"class="form-control"  required>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label>Your Phone Number *</label>
                                        <input type="text" id="phone" name="phone" class="form-control"  required>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label>Password *</label>
                                        <input type="password" id="password" name="password" class="form-control"  required>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label>Confirm Password *</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"  required>
                                    </div>
                                    
                               
                                    <p>Your personal data will be used to support your experience 
                                        throughout this website, to manage access to your account, 
                                        and for other purposes described in our <a href="#" class="text-primary">privacy policy</a>.</p>
                                    <a href="#" class="d-block mb-5 text-primary">Signup as a vendor?</a>
                                    <div class="form-checkbox d-flex align-items-center justify-content-between mb-5">
                                        <input type="checkbox" class="custom-checkbox" id="remember" name="remember" required="">
                                        <label for="remember" class="font-size-md">I agree to the <a  href="#" class="text-primary font-size-md">privacy policy</a></label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign Un</button >
                                </div>
                                </form>


                            </div>
                            <p class="text-center">Sign in with social account</p>
                            <div class="social-icons social-icon-border-color d-flex justify-content-center">
                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                <a href="#" class="social-icon social-google fab fa-google"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>







 @endsection