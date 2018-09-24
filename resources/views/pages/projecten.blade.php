<!DOCTYPE html>
<html lang="en" style="height: 100vh; width: 100vw; overflow-x: hidden;">
<head>
  <title>Bachmann Montage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/plugins/slick/slick.css">
  <link rel="stylesheet" href="/plugins/slick/slick-theme.css">
  <script src="/plugins/slick/slick.min.js" charset="utf-8"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background-color: #e5e5e5;

    }

    .navbar a{
      color: black;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */


    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;


    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #e5e5e5;
      color: black;
      padding: 0px;
      width: 100vw;
      bottom: 0;
      position: fixed;
    }

    .project-wrapper {
      padding-bottom: 2%;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {

        padding: 15px;
      }

    }
  </style>

</head>
<body>

<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="url('/')" style="padding: 4px;"><img src="/img/logo/nav-logo.svg" alt="logo" style="    margin-left: 80%; height:100%;"> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

      </ul>
      <ul class="nav navbar-nav navbar-right" style="font-weight: bold; margin-right: 5%;">
        <li class="active"><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url("/diensten") }}">Diensten</a></li>
        <li><a href="{{ url("/projecten") }}">Projecten</a></li>
        <li><a href="{{ url("/contact") }}">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center" >
  <div class="row content" >
    <div class="col-sm-12" style="height: 8vh;">

    </div>

    <div class="col-sm-2 sidenav">

    </div>
    <div class="col-sm-8">
      @foreach($projects as $project)
      <div class="project-wrapper">
        <h2>{{$project->titel}}</h2>
        <br>
        <p style="font-size: 15px; text-align: left;">
          {{$project->text}}
        </p>
        <div class="responsive">
          @if($project->image1 === null)

          @else
          <div style="width: 200px; height: 200px; background-position:center; background-size: cover; margin: 1%;">
            <img style="width: 100%; height: 100%;" src="/storage/{{$project->image1}}" alt="">
          </div>
          @endif

          @if($project->image2 === null)

          @else
          <div style="width: 200px; height: 200px; background-position:center; background-size: cover; margin: 1%;">
            <img style="width: 100%; height: 100%;" src="/storage/{{$project->image2}}" alt="">
          </div>
          @endif

          @if($project->image3 === null)

          @else
          <div style="width: 200px; height: 200px; background-position:center; background-size: cover; margin: 1%;">
            <img style="width: 100%; height: 100%;" src="/storage/{{$project->image3}}" alt="">
          </div>
          @endif

          @if($project->image4 === null)

          @else
          <div style="width: 200px; height: 200px; background-position:center; background-size: cover; margin: 1%;">
            <img style="width: 100%; height: 100%;" src="/storage/{{$project->image4}}" alt="">
          </div>
          @endif

          @if($project->image5 === null)

          @else
          <div style="width: 200px; height: 200px; background-position:center; background-size: cover; margin: 1%;">
            <img style="width: 100%; height: 100%;" src="/storage/{{$project->image5}}" alt="">
          </div>
          @endif

          @if($project->image6 === null)

          @else
          <div style="width: 200px; height: 200px; background-position:center; background-size: cover; margin: 1%;">
            <img style="width: 100%; height: 100%;" src="/storage/{{$project->image6}}" alt="">
          </div>
          @endif


        </div>
      </div>
      @endforeach



    </div>

    <div class="col-sm-2 sidenav">

    </div>
  </div>
</div>
<div class="" style="height: 100px;">

</div>
<footer class="container-fluid">
  <img src="/img/logo/logo.svg" alt="logo" style="width: 4%; margin-left: 14%;">
  <p style="margin-top: 0%; margin-left: 5%; display: inline-flex; margin-bottom: 0%;">{{$contact->phone_number}}</p> <p style="margin-top: 0%; margin-left: 5%; display: inline-flex; margin-bottom: 0%;">{{$contact->email}}</p> <p style="margin-top: 0%; margin-bottom: 0%; margin-left: 23.5%; display: inline-flex;">{{$contact->street_name}} {{$contact->house_number}}, {{$contact->postal_code}} {{$contact->city}}</p>
</footer>
<script type="text/javascript">
  $(document).ready(function(){
    $('.responsive').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  });
</script>
</body>
</html>
