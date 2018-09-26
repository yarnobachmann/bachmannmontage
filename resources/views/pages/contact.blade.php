@extends('master')

@section('style')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/contact.css') }}" />
@endsection

  @section('content')
    <div class="mapouter">
      <div class="gmap_canvas">
        <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=oranjedorpstraat%2058&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
        </div>
        <style>.mapouter{text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
      </div>
    <div class="col-sm-1 sidenav">

    </div>
    <div class="col-sm-5 hidden-xs hidden-sm" style="padding: 3%; padding-top: 1%; padding-bottom: 0.5%; left: 12%; top: 30%; height:33%; width:30%; position:absolute;">
      <img src="/storage/{{$contact->image}}" alt="bachmann montage bus" style="height: 100%; width:100%;">

    </div>
    <div class="col-sm-1">

    </div>
    <div class="col-sm-4 text-left hidden-xs hidden-sm" style="background:rgba(229,229,229,0.8); top: 30%; left: 52%; position: absolute;">
      @include('partials._form')
    </div>
    <div class="col-sm-12 sidenav">
      <div class="hidden-md hidden-lg" style="height: 100%; width: 100%; padding-bottom: 5%;">
        @include('partials._form')
      </div>
    </div>

    <div class="hidden-md hidden-lg" style="height: 8vh;">

    </div>
    @endsection
