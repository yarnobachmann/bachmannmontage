<nav class="navbar-default">
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
        <li><a href="{{ url("/contact") }} ">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
