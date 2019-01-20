@extends('layouts.app')

@section('content')
<section class="material-half-bg">
  <div class="cover"></div>
</section>
<div class="row justify-content-center my-5">
    <div class="col-md-4 col-sm-6">
        <div class="tile">
          {{-- {{ phpinfo() }} --}}
            <h3 class="tile-title text-center">Sign Up</h3><hr>
            <div class="tile-body">
          
                <form class="login-form" method="POST" action="{{ route('register') }}">

                    @csrf

                    <div class="form-group">
                      <label for="name" class="control-label">Name</label>
                      <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                      @if ($errors->has('name'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                    </div>
                
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
                      <label for="password_confirmation" class="control-label">Confirm Password</label>
                      <input id="password_confirmation" type="password" class="form-control" name="password" required>
                    </div>

                    <div class="form-group btn-container">
                      <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                    </div>
                </form>
                <hr>

                <div class="form-group">
                       <a href="{{ route('login') }}" class="btn btn-success btn-block">Already have an Account? Sign In</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
