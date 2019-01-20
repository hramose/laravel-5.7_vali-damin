@extends('layouts.app')

@section('content')
<section class="material-half-bg">
  <div class="cover"></div>
</section>
<div class="row justify-content-center my-5">
    <div class="col-md-4 col-sm-6">
        <div class="tile">
          {{-- {{ phpinfo() }} --}}
            <h3 class="tile-title text-center">Sign In</h3><hr>
            <div class="tile-body">
          
                <form class="login-form" method="POST" action="{{ route('login') }}">
                      @csrf
                
                    <div class="form-group">
                      <label for="email" class="control-label">Email</label>
                      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                      @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                    </div>

                    <div class="form-group">
                      <label for="password" class="control-label">Password</label>
                      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                      @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                    </div>

                    <div class="form-group">
                      <div class="utility">
                        <div class="animated-checkbox">
                          <label>
                            <input type="checkbox"><span class="label-text" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me</span>
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group btn-container">
                      <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </form>
                <hr>

                <div class="form-group">
                      <a href="{{ route('password.request') }}" class="btn btn-info btn-block">Forgot Password?</a>
                       <a href="{{ route('register') }}" class="btn btn-success btn-block">Have no Account? Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
