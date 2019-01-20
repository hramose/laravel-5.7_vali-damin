@extends('layouts.app')

@section('content')
<section class="material-half-bg">
      <div class="cover"></div>
</section>
<div class="row justify-content-center my-5">
    <div class="col-md-4 col-sm-6">
        <div class="tile">
            <h3 class="tile-title text-center">Reset Password</h3><hr>
            <div class="tile-body">
                <form class="login-form" method="POST" action="{{ route('password.update') }}">
                	
                    @csrf

                  <input type="hidden" name="token" value="{{ $token }}">
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
                    <label for="password-confirm" class="control-label">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                  </div>

                  <div class="form-group btn-container">
                    <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
