@extends('layouts.app')

@section('content')




<div class="container">
    <div style="position: relative; top:3pc" class="page-wrapper  font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title text-center">login </h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group">
                            <input id="phone_number" type="text" class="input--style-2 @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}" name="phone_number" onkeypress="return onlyNumberKey(event)"  required autocomplete="phone_number" placeholder="Mobiel number">
                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="input-group">
                            <input id="password" class="input--style-2  @error('password') is-invalid @enderror" autocomplete="current-password" type="password" required placeholder="Password" name="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">{{ __('Login') }}</button>

                            @if (Route::has('password.request'))
                            <a  class="btn text-info" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

