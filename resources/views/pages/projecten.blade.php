@extends('master', ['dienst_class' => ' ', 'home_class' => ' ', 'project_class' => 'active', 'contact_class' => ' '])

@section('style')
  <link rel="stylesheet" href="/plugins/slick/slick.css">
  <link rel="stylesheet" href="/plugins/slick/slick-theme.css">
  <script src="/plugins/slick/slick.min.js" charset="utf-8"></script>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/projecten.css') }}" />
@endsection

@section('content')
    <div class="col-sm-12 first-div">

    </div>

    <div class="col-sm-2 sidenav">

    </div>
    <div class="col-sm-8">
      @foreach($projects as $project)
      <div class="project-wrapper">
        <h2>{{$project->titel}}</h2>
        <br>
        <p class="project-p">
          {{$project->text}}
        </p>
        <div class="responsive">
          @if($project->image1 === null)

          @else
          <div class="img-div">
            <img class="img" src="/storage/{{$project->image1}}" alt="">
          </div>
          @endif

          @if($project->image2 === null)

          @else
          <div class="img-div">
            <img class="img" src="/storage/{{$project->image2}}" alt="">
          </div>
          @endif

          @if($project->image3 === null)

          @else
          <div class="img-div">
            <img class="img" src="/storage/{{$project->image3}}" alt="">
          </div>
          @endif

          @if($project->image4 === null)

          @else
          <div class="img-div">
            <img class="img" src="/storage/{{$project->image4}}" alt="">
          </div>
          @endif

          @if($project->image5 === null)

          @else
          <div class="img-div">
            <img class="img" src="/storage/{{$project->image5}}" alt="">
          </div>
          @endif

          @if($project->image6 === null)

          @else
          <div class="img-div">
            <img class="img" src="/storage/{{$project->image6}}" alt="">
          </div>
          @endif

          @if($project->image7 === null)

          @else
          <div class="img-div">
            <img class="img" src="/storage/{{$project->image7}}" alt="">
          </div>
          @endif

          @if($project->image8 === null)

          @else
          <div class="img-div">
            <img class="img" src="/storage/{{$project->image8}}" alt="">
          </div>
          @endif

          @if($project->image9 === null)

          @else
          <div class="img-div">
            <img class="img" src="/storage/{{$project->image9}}" alt="">
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

<div class="push-height">

</div>
@endsection

@section('script')
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
@endsection
