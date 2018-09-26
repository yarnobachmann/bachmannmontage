@extends('master')

@section('style')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home.css') }}" />
@endsection

@section('content')

    <div class="col-sm-12 text-left" style="background:blue; width:100vw; height: 70vh;">

    </div>
    <div class="col-sm-1 sidenav">

    </div>

    <div class="col-sm-5 hidden-md hidden-lg" style="background:rgba(229,229,229,0.8); padding: 3%; padding-top: 1%; padding-bottom: 0.5%; margin-left: 10%; top: 50%; height:33%; width:80%; position:absolute;">
      <img src="/img/logo/logo.svg" alt="logo" style="height: 100%; width:100%;">

    </div>

    <div class="col-sm-5 hidden-xs hidden-sm" style="background:rgba(229,229,229,0.8); padding: 3%; padding-top: 1%; padding-bottom: 0.5%; left: 12%; top: 50%; height:33%; width:30%; position:absolute;">
      <img src="/img/logo/logo.svg" alt="logo" style="height: 100%; width:100%;">

    </div>
    <div class="col-sm-1">

    </div>
    <div class="col-sm-4 text-left hidden-xs hidden-sm" style="background:rgba(229,229,229,0.8); top: 50%; left: 52%; position: absolute; padding-bottom: 1%;">
      <h1>{{$homepage->titel}}</h1>
      <p>{{$homepage->text}}</p>

    </div>
    <div class="col-sm-1 sidenav">
      <div class="hidden-md hidden-lg">
        <h1>{{$homepage->titel}}</h1>
        <p>{{$homepage->text}}</p>
      </div>
    </div>

  

@endsection
