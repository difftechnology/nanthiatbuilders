<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nanthiat Builders</title> 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="Nanthiat Builders provides cost-effective and reliable contracting and consulting services for construction projects in Kerala. " name="description" />
<meta content="House, landscaping, roofing, commercial contractors, building designs, new house designs, residential construction, commercial construction, commercial contractor, nalukettu construction plan, house interior design, interior design work
" name="keywords" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('css/home-2021.css') }}" rel="stylesheet" type="text/css">
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145466145-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-145466145-1');
</script>

@yield('css')

</head>

<body>
<div id="loader-wrapper">		
        <div id="loader"></div>
        <div class="loader-section section-centre"><img src="images/nanthiat-logo.png" alt="" class="img-fluid"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
</div>

@include('home.menu')    



@yield("content")
      


<section id="footer">
	<div class="container-fluid p-0">
    <div class="row">
		<div class="col-md-4 mob-pb-30">
		<img src="{{asset('images/nanthiat-logo.png')}}" alt="" class="img-fluid">
			<p class="abt-nanthiat">Started in 1995 as a contracting firm in Chingavanam, Nanthiat Builders today, with an experience and expertise spanning more than two decades has emerged as a leading construction company in Kottayam, Kerala. </p>
		</div>
		<div class="col-md-2 mob-pb-30">
		<a href="{{ url('/') }}" class="foot-links">Home</a>
			<a href="{{ url('about') }}" class="foot-links">About Us</a>
			<a href="{{ url('projects') }}" class="foot-links">Our Projects</a>
			<a href="{{ url('photo-gallery') }}" class="foot-links">Photo Gallery</a>
			<a href="{{ url('contact') }}" class="foot-links">Contact</a>
		</div>
		<div class="col-md-2 mob-pb-30">
			<h5 class="add-nanthiat">Nanthiat Builders</h5>
			<p class="abt-nanthiat p-0">
			Nanthiat Builders<br>
Chingavanam<br>
Kottayam - 686531<br>
Kerala, India
			</p>
		</div>
		<div class="col-md-2 mob-pb-30">
		<p class="whatsapp">93495 03683</p>
			<p class="phonenum">0481- 2434951</p>
			<p class="emails"><a href="mailto:info@nanthiatbuilders.com">info@nanthiatbuilders.com</a></p>
		</div>
		<div class="col-md-2">
			<p class="abt-nanthiat p-0">© 2021 Nanthiat Builders</p>
			<p class="abt-nanthiat p-0">All Rights Reserved</p>
			<p class="abt-nanthiat p-0"><a href="">Privacy Policy</a></p>
			<p class="oms">Created by <a href="https://www.onlinemediaspace.com/">
			<img src="{{asset('images/oms-logo-inverse.png')}}" alt="" class="img-fluid"></a></p>
		</div>
		</div>
		</div>
		</section>		
	<a href="whatsapp://send?text=Hello!&amp;phone=+91 93495 03683" mypage="" class="call-now" rel="nofollow">
<div class="nanthiat-whatsapp">
<img src="{{asset('images/whatsapp.png')}}" alt="" class="img-fluid">
</div>
</a>
		<a href="" mypage="" class="call-now" rel="nofollow">
<div class="nanthiat-phone">
<img src="{{asset('images/phone.png')}}" alt="" class="img-fluid">
</div>
</a>

<script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script> 
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script> 
<script src="{{ URL::asset('js/carousel.js') }}"></script> 
<!--	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>--> 
<script>
	$(document).ready(function() {
	
	setTimeout(function(){
		$('body').addClass('loaded');
	}, 3000);
	
});
	</script>
	
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


@yield('scripts')


</body>
</html>
