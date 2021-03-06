@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <!-- Material form login -->
            <div class="card">

                <h5 class="card-header success-color white-text text-center py-4">
                    <strong>Sign in</strong>
                </h5>

                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">

                    <!-- Form -->
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" class="text-center"
                        style="color: #757575;">
                        @csrf

                        <!-- Email -->
                        <div class="md-form">
                            <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                name="email" value="{{ old('email') }}" required autofocus>
                            <label for="email">E-mail</label>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <!-- Password -->
                        <div class="md-form">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                name="password" required autofocus>
                            <label for="password">Password</label>
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="d-flex justify-content-around">
                            <div>
                                <!-- Remember me -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old( 'remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">Remember me</label>
                                </div>
                            </div>
                            <div>
                                <!-- Forgot password -->
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>

                        <!-- Sign in button -->
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">
                            Login
                        </button>

                        <!-- Register -->


                        <!-- Social login -->


                    </form>
                    <!-- Form -->

                </div>

            </div>
        
        </div>
    </div>
</div>





<!--Intro Section-->
<section class="view intro-2">

</section>
@endsection