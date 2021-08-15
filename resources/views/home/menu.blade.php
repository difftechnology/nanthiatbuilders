<nav id="nanthiat-nav" class="navbar navbar-expand-lg navbar-light headerbg fixed-top">
  <div class="container-fluid p-0">
    <div class="col-md-2 p-0"><a class="navbar-brand" href=""><img src="{{asset('images/nanthiat-logo-l.png')}}" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    </div>
    <div class="col-md-10 p-0 hidden-nav">
  
      <div class="clearfix"></div>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <div class="clearfix"></div>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home
            <!--<span class="sr-only">(current)</span>-->
            </a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('about') }}">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('projects') }}">Our Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('photo-gallery') }}">Photo Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('contact') }}">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>