@extends('layouts.app')

@section('content')

<div class="login-page" >
        <transition name="fade">
             <div v-if="!registerActive" class="wallpaper-login"></div>
        </transition>
      <div class="wallpaper-register"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8 mx-auto">
                <div v-if="!registerActive" class="card login" v-bind:class="{ error: emptyFields }">
                    <h1>Sign In</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">

                            <div class="col">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <p>Don't have an account? <a href="#" @click="registerActive = !registerActive, emptyFields = false">Sign up here</a>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                        </div>
                    </form>
                </div>

                <div v-else class="card register" v-bind:class="{ error: emptyFields }">
                    <h1>Sign Up</h1>
                    <form class="form-group">
                        <input v-model="emailReg" type="email" class="form-control" placeholder="Email" required>
                        <input v-model="passwordReg" type="password" class="form-control" placeholder="Password" required>
                        <input v-model="confirmReg" type="password" class="form-control" placeholder="Confirm Password" required>
                        <input type="submit" class="btn btn-primary" @click="doRegister">
                        <p>Already have an account? <a href="#" @click="registerActive = !registerActive, emptyFields = false">Sign in here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
