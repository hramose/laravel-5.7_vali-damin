@extends('layouts.app')

@section('content')
<div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Home Page</h1>
      <p>Welcome to Vali-Admin with Laravel 5.7</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Home Page</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body text-center">
        	<h3>Laravel 5.7 vali-admin broiler plate by <a href="#" target="_blank">Jay Kiharani</a></h3>
        	<p>This is basic Laravel 5.7 configuration with vali-admin</p>
        	<a href="#" target="_blank" class="btn btn-lg btn-primary px-4">Github Page</a>
        </div>
      </div>
    </div>
  </div>
@endsection
