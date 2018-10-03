@extends('master', ['dienst_class' => 'active', 'home_class' => ' ', 'project_class' => ' ', 'contact_class' => ' '])

@section('style')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/diensten.css') }}" />
@endsection

@section('content')
    <div class="col-sm-12" style="height: 10vh;">

    </div>

    <div class="col-sm-3 sidenav">

    </div>
    <div class="col-sm-6">
      <p style="font-size: 16px; text-align: left;">{{$service->text}}</p>
    </div>

    <div class="col-sm-3 sidenav" style="height: 100px;">

    </div>
@endsection
