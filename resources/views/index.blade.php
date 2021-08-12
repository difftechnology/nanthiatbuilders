<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Leading construction contractor in Kerala – Nanthiat Builders, Kottayam</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="Dreaming of building a new house or commercial building?  Nanthiat Builders provides an array of quality contracting and construction services in Kottayam and nearby districts." name="description" />
<meta content="Engineer, architect, builder, contractor,  nalukettu, traditional style, building construction, construction companies, house plans, local builders, best builders, best builders home construction, House designs, house construction, interior designers, Kerala style houses, contemporary house in kerala, nalukettu architect, best builder in Kottayam" name="keywords" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145466145-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-145466145-1');
</script>

</head>
<nav id="nanthiat-nav" class="navbar navbar-expand-lg navbar-light headerbg fixed-top">
  <div class="container">
    <div class="col-md-2 p-0"><a class="navbar-brand" href="{{ url('/') }}"><img src="images/nanthiat-logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    </div>
    <div class="col-md-10 p-0">
      <div class="nanthiat-contacts">
        <!--<div class="social-icons"><a href="" class="slinks"><img src="images/icon-facebook.png" alt=""></a><a href="" class="slinks"><img src="images/icon-twitter.png" alt=""></a><a href="" class="slinks"><img src="images/icon-youtube.png" alt=""></a></div>-->
        <div class="topcontacts"><img src="images/icon-phone.png" alt=""><a href="tel:04812434951">0481- 2434951</a></div>
        <div class="topcontacts"><img src="images/icon-whatsapp.png" alt=""><a href="https://wa.me/9349503683" target="_blank">93495 03683</a></div>
      </div>
      <div class="clearfix"></div>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <div class="clearfix"></div>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Home
            <!--<span class="sr-only">(current)</span>-->
            </a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('about') }}">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('projects') }}">Our Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('photo-gallery') }}">Photo Gallery</a></li>
          <!--<li class="nav-item"><a class="nav-link" href="{{ url('news-events') }}">News & Blogs</a></li>-->
          <li class="nav-item"><a class="nav-link" href="{{ url('contact') }}">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<header>
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">

    <ol class="carousel-indicators">
                    <?php $pos=1 ?>
                    @foreach ($carousels as $photo)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $pos }}" class="{{ $pos == 1 ? 'active' : '' }}"></li>
                        <?php $pos++ ?>
                    @endforeach
                </ol>
    <!-- <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      
    </ol> -->
    <div class="carousel-inner" role="listbox">
      <?php $pos=1 ?>
      @foreach ($carousels as $photo)
                        <div class="carousel-item {{ $pos == 1 ? 'active' : '' }}" style="background-image: url('{{ asset($photo) }}')">
                            <div class="carousel-caption d-none d-md-block"></div>
                            <?php $pos++ ?>
                        </div>
     @endforeach
      <!-- Slide One - Set the background image for this slide in the line below -->
      <!-- <div class="carousel-item active" style="background-image: url('images/banner-img-1.jpg')">
        <div class="carousel-caption d-none d-md-block"></div>
      </div>
      <div class="carousel-item" style="background-image: url('images/banner-img-2.jpg')">
        <div class="carousel-caption d-none d-md-block"></div>
      </div> -->
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <!--    <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Third Slide</h2>
          <p class="lead">This is a description for the third slide.</p>
        </div>
      </div>-->
    </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>
<!-- Page Content -->
<section id="specialities">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 p-0">
        <div class="specialities-cont">
          <div class="specialities">
            <div class="sicons"><img src="images/icon-rectitude.png" alt=""></div>
            <div class="scontes">
              <h2>INTEGRITY</h2>
              <p>Expertise spanning almost three decades<br>

Precise analysis & assessment of plans<br>

House designs & plans meeting  expectations and more<br>

Making your dream homes a reality<br>


</p>
            </div>
          </div>
          <div class="specialities">
            <div class="sicons"><img src="images/icon-fortified.png" alt=""></div>
            <div class="scontes">
              <h2>Fortified construction</h2>
              <p>Unsurpassed quality & durability of construction<br>

Construction adopting the latest technologies<br>

First quality products only used<br>

A team of industry-leading experts
</p>
            </div>
          </div>
          <div class="specialities">
            <div class="sicons"><img src="images/icon-relation.png" alt=""></div>
            <div class="scontes">
              <h2>BUILDING RELATIONSHIPS</h2>
              <p>Feedback-oriented approach<br>

On-time delivery of projects<br>

Continued assistance for maintenance<br>
Your satisfaction is our greatest reward
</p>
            </div>
          </div>
          <div class="specialities">
            <div class="sicons"><img src="images/icon-cost.png" alt=""></div>
            <div class="scontes">
              <h2>Affordable cost</h2>
              <p>Ensured budget-friendly construction<br>
Expert’s advice & suggestions on cost-cutting<br>

Effective alternatives provided at the planning stage itself<br>

On-time & within-budget construction and delivery 



</p>
            </div>
          </div>
          <div class="specialities">
            <div class="sicons"><img src="images/icon-nature-friendly.png" alt=""></div>
            <div class="scontes">
              <h2>Nature friendly designs</h2>
              <p>Nature-included designs<br>

Green construction practices<br>

Geography-oriented planning<br>

Eco-friendly execution
</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 p-0">
        <div class="specialities-img"></div>
      </div>
    </div>
  </div>
</section>
<section id="aboutus">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 p-0 order-md-1 order-2">
        <div class="aboutus-img"></div>
      </div>
      <div class="col-md-6 p-0 order-1">
        <div class="aboutus-cont">
          <h2>CONSTRUCTIONS FOR DECADES TO COME, WITH DECADES OF EXPERIENCE.
</h2>
          <p>Started in 1995 as a contracting firm in Chingavanam, Nanthiat Builders today, with an experience and expertise spanning more than two decades has emerged as a leading construction company in Kottayam, Kerala. Up to date, Nanthiat Builders have completed 300 plus project successfully and constructed 700000 sq. ft. safely and on time.</p>
          
          <a href="{{ url('about') }}" class="moreabt">More About Us</a>
          <div class="clearfix"></div>
          <!-- <h3><b>MD’s Message</b></h3>-->
          <!--<p><span>“Our ability to interpret your dream and implement into a reality with cost-effective and eco-friendly construction methodologies and our strict adherence to on-time deliverance of projects have kept our organization distinct from the contemporary builders and made us the first choice for residential and commercial constructions in Kottayam and the neighboring districts. ”</span></p>-->
        </div>
      </div>
    </div>
  </div>
</section>
<section id="projects">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Our Projects</h2>
        <p>This page is an ode to the charm of our architecture, the beauty of our designs and the wise, practical design and usage of interior spaces. From houses to independent villas, commercial buildings, factories, shopping complexes and churches, Nanthiat Builders have constructed it all.</p>
       <!--  <div class="projectslinks-area"><a href="projects.html" class="projectslinks">Ongoing Projects</a><a href="projects.html" class="projectslinks">Completed Projects</a><a href="projects.html" class="projectslinks">Upcoming Projects</a></div> -->
        <a href="{{ url('projects') }}" class="moreabt">View all projects</a></div>
      <div class="col-md-6 pl-0">
        <div id="projectcarousel" class="carousel slide" data-ride="carousel" style="background-color: grey">
          <ol class="carousel-indicators">
            <li data-target="#projectcarousel" data-slide-to="0" class="active"></li>
            <li data-target="#projectcarousel" data-slide-to="1"></li>
            <li data-target="#projectcarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"><img class="d-block mx-auto img-fluid" src="images/project-1.jpg" alt="First slide"></div>
            <div class="carousel-item"><img class="d-block mx-auto img-fluid" src="images/project-2.jpg" alt="Second slide"></div>
            <div class="carousel-item"><img class="d-block mx-auto img-fluid" src="images/project-3.jpg" alt="Third slide"></div>
          </div>
          <a class="carousel-control-prev" href="#projectcarousel" role="button" data-slide="prev"><img src="images/prev.png" alt=""></a><a class="carousel-control-next" href="#projectcarousel" role="button" data-slide="next"><img src="images/next.png" alt=""></a></div>
      </div>
    </div>
  </div>
</section>

<section id="nb-footer">
  <div class="container">
    <div class="row">
      <!--<div class="col-md-12 pb-4"><a href=""><img src="images/nanthiat-logo.png" alt=""></a></div>-->
      <div class="col-md-5 pr-5">
        <p>Nanthiat started its journey in 1995 providing contracting services in Kottayam. Now, Nanthiat, nearing to its 25 years of service, has already given services as a builder, contractor, and consultant. Currently, we undertake all types of projects and cover services in all verticals of construction – planning, building structures, landscaping, interiors, and exteriors.</p>
</div>
      <div class="col-md-2">
        <h2>Navigation</h2>
        <p><a href="{{ url('/') }}">Home</a></p>
        <p><a href="{{ url('about') }}">About Us</a></p>
        <p><a href="{{ url('projects') }}">Our Projects</a></p>
        <p><a href="{{ url('photo-gallery') }}">Photo Gallery</a></p>
        <!--<p><a href="{{ url('news-events') }}">News & Events</a></p>-->
        <p><a href="{{ url('contact') }}">Contact</a></p>
      </div>
      <div class="col-md-3">
        <h2>Contact Us</h2>
        <p>Nanthiat Builders<br>
          Chingavanam<br>
          Kottayam - 686531<br>
          Kerala, India<br>
          Phone : (office) <a href="tel:04812434951">0481- 2434951</a><br>
          Mob : <a href="tel:9349503683">9349503683</a></p>
      </div>
      <div class="col-md-2">
        <!--<div class="social-icons"><a href="" class="slinks"><img src="images/icon-facebook.png" alt=""></a><a href="" class="slinks"><img src="images/icon-twitter.png" alt=""></a><a href="" class="slinks"><img src="images/icon-youtube.png" alt=""></a></div>-->
      </div>
    </div>
  </div>
  <div class="container-fluid footertop">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <p class="text-left">Nanthiat Builders © 2019. All Rights Reserved |<a href="">Privacy Policy</a></p>
        </div>
        <div class="col-md-2">
          <p class="oms"><a href="http://www.onlinemediaspace.com"><img src="images/oms-logo.png" alt="" class="img-fluid"></a></p>
        </div>
      </div>
    </div>
  </div>
</section>
<body>
<script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script> 
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script> 
<script src="{{ URL::asset('js/carousel.js') }}"></script> 
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>--> 
<script src="{{ URL::asset('js/popper.min.js') }}"></script> 
<!-- new --> 
<script>
    $(document).ready(function() {
  $(window).on("scroll", function() {
    if ($(window).scrollTop() >= 20) {
      $(".navbar").addClass("compressed");
    } else {
      $(".navbar").removeClass("compressed");
    }
  });
});
    </script> 
<script>
      $(function() {
        var t0, t1;

        // Test to show that the carousel doesn't slide when the current tab isn't visible
        // Test to show that transition-duration can be changed with css
        $('#carousel-banner').on('slid.bs.carousel', function(event) {
          t1 = performance.now()
          console.log('transition-duration took' + (t1 - t0) + 'ms, slid at ', event.timeStamp)
        }).on('slide.bs.carousel', function() {
          t0 = performance.now()
        })
      })
    </script>
</body>
</html>
