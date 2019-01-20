<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="laravel 5.7 vali-admin bloiler plate, Laravel 5.7 with vali-admin, Laravel 5.7 vali-admin configuration, Laravel, vali-admin, vali admin Vali Admin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    @auth
    	<!-- Navbar-->
	    @include('layouts.partials._navbar')
	    <!-- Sidebar menu-->
	    @include('layouts.partials._sidebar')

	    <main class="app-content">
	      @yield('content')
	    </main>
	@else
	    @yield('content')
    @endauth
    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('js/plugins/pace.min.js') }}"></script>
  </body>
</html>