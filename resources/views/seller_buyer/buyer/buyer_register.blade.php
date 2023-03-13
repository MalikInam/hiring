@extends('seller_buyer.layouts.master')
@section('content')
<div class="main-wrapper">

        <!-- Page Content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-8 offset-md-2">

                        <!-- Register Content -->
                        <div class="account-content">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-7 col-lg-6 login-left">
                                    <img src="{{asset('seller_buyer/assets/img/login-banner.png')}}" class="img-fluid" alt="Doccure Register">
                                </div>
                                <div class="col-md-12 col-lg-6 login-right">
                                    <div class="login-header">
                                        <h3> Register</h3>
                                    </div>

                        <form method="POST" action="{{ route('register') }}">
                        @csrf            
                                        <!-- first name -->
                                        <div class="form-group form-focus">
                                            <input id="name" type="text" class="form-control"  name="name"  required>
                                          <label class="focus-label">Name</label>
                                        </div>
                                        <!-- last name -->
                                     
                                        <!-- Email -->
                                        <div class="form-group form-focus">
                                            <input id="email" type="email" class="form-control" name="email" required>

                                            
                                           <label class="focus-label">Email</label>
                                        </div>
                                        <!-- phone no -->
                                        <!-- <div class="form-group form-focus">
                                            <input id="phone_no" type="number" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" value="{{ old('phone_no') }}" required autocomplete="phone_no">

                                            @error('phone_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror <label class="focus-label">Phone No</label>
                                        </div> -->
                                        <!-- User Type -->
                                        <div class="form-group form-focus">
                    
                                           
                                            <input type="text" name="user_type" value="buyer" class="form-control">

                                            
                                        </div>

                                        <div class="form-group form-focus">
                                            <input id="password" type="password" class="form-control" name="password" required>

                                        
                                           <label class="focus-label">Create Password</label>
                                        </div>
                                        <div class="form-group form-focus">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> <label class="focus-label">Confirm Password</label>
                                        </div>
                                        <div class="text-right">
                                            <a class="forgot-link" href="login.html">Already have an account?</a>
                                        </div>
                                        <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Submit</button>
                                        <div class="login-or">
                                            <span class="or-line"></span>
                                            <span class="span-or">or</span>
                                        </div>
                                        <div class="row form-row social-login">
                                            <div class="col-6">
                                                <a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- /Register Form -->

                                </div>
                            </div>
                        </div>
                        <!-- /Register Content -->

                    </div>
                </div>

            </div>

        </div>
        <!-- /Page Content -->

    </div>
			@endsection