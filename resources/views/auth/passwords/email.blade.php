@extends('layouts.app')

@section('content')
<section class="material-half-bg">
      <div class="cover"></div>
</section>
<div class="row justify-content-center my-5">
    <div class="col-md-4 col-sm-6">
        <div class="tile">
            <h3 class="tile-title text-center">Forgot Password</h3><hr>
            <div class="tile-body">

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="login-form" method="POST" action="{{ route('password.email') }}">
                	
                    @csrf
                    
                  <div class="form-group">
                    <label class="control-label">Email</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group btn-container">
                    <button type="submit" class="btn btn-primary btn-block">Get Reset Link</button>
                  </div>
                  <div class="form-group mt-3">
                    <p class="semibold-text mb-0"><a href="{{ route('login') }}" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
