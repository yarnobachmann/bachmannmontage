<!DOCTYPE html>
<html lang="en" style="height: 100vh; width: 100vw;">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      position: absolute;
      width: 100vw;
      bottom: 0;
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
      <a class="navbar-brand" href="{{ url('/') }}" style="padding: 4px;"><img src="/img/logo/nav-logo.svg" alt="logo" style="    margin-left: 80%; height:100%;"> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

      </ul>
      <ul class="nav navbar-nav navbar-right" style="font-weight: bold; margin-right: 5%;">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="{{ url("/diensten") }}">Diensten</a></li>
        <li><a href="{{ url("/projecten") }}">Projecten</a></li>
        <li><a href="{{ url("/contact") }}">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="mapouter">
      <div class="gmap_canvas">
        <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=oranjedorpstraat%2058&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
        <a href="https://www.pureblack.de">webdesign preise</a></div>
        <style>.mapouter{text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
      </div>
    <div class="col-sm-1 sidenav">

    </div>
    <div class="col-sm-5" style="padding: 3%; padding-top: 1%; padding-bottom: 0.5%; left: 12%; top: 30%; height:33%; width:30%; position:absolute;">
      <img src="/img/placeholder/auto.jpg" alt="bachmann montage bus" style="height: 100%; width:100%;">

    </div>
    <div class="col-sm-1">

    </div>
    <div class="col-sm-4 text-left" style="background:rgba(229,229,229,0.8); top: 30%; left: 52%; position: absolute;">
      <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center">Stuur hier een mailtje! <br> <small>Voor meer informatie</small> </legend>

            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Uw naam</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Hier uw naam" class="form-control">
              </div>
            </div>

            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Uw E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Hier uw email" class="form-control">
              </div>
            </div>

            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Uw bericht</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Hier uw bericht!" rows="5" style="resize:vertical;"></textarea>
              </div>
            </div>

            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-lg" style="background: white;">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>

    </div>
    <div class="col-sm-1 sidenav">

    </div>
  </div>
</div>

<footer class="container-fluid">
  <img src="/img/logo/logo.svg" alt="logo" style="width: 4%; margin-left: 14%;">
  <p style="margin-top: 0%; margin-left: 5%; display: inline-flex; margin-bottom: 0%;">+31 6 11223344</p> <p style="margin-top: 0%; margin-left: 5%; display: inline-flex; margin-bottom: 0%;">voorbeeld@gmail.com</p> <p style="margin-top: 0%; margin-bottom: 0%; margin-left: 23.5%; display: inline-flex;">Oranjedorpstraat 58, 7885AC Nieuw-Dordrecht</p>
</footer>

</body>
</html>
