<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nanthiat Builders</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('css/home-2021.css') }}" rel="stylesheet" type="text/css">

</head>


	<div id="loader-wrapper">		
			<div id="loader"></div>
          <div class="loader-section section-centre"><img src="images/nanthiat-logo.png" alt="" class="img-fluid"></div>
			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
		</div>

    @include('home.menu')    
    @include('home.header')    
<!-- Page Content -->
<section id="about">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-md-12">
        <h1>About Nanthiat Builders - Architects in Kottayam</h1>
        <p><i>Constructions for decades to come, with decades of experience.</i></p>
        <p>Started in 1995 as a contracting firm in Chingavanam, Nanthiat Builders today, with an experience and expertise spanning more than two decades has emerged as a leading construction company in Kottayam, Kerala. Up to date, Nanthiat Builders have completed 300 plus project successfully and constructed 700000 sq. ft. safely and on time.</p>
		  <p>With a rich and varied portfolio of construction works spanning across houses, independent villas, commercial buildings, factories, shopping complexes, churches and more.</p>
		  <div class="linksarea">
		  <a href="{{ url('about') }}" class="border-rgt">More About Us</a>
		  <a href="{{ url('projects') }}">Our Projects</a>
		  </div>
      
         </div>
    </div>
  </div>
  <div class="border-bot"></div>
</section>	
	
<section id="nanthiat-status">
	<div class="container-fluid p-0">
    <div class="row">
      <div class="col-md-3 border-rgt-b">
		  <div class="feature-det">
		  <img src="{{asset('images/icon-completed-projects.png')}}" alt="" class="img-fluid">
		  <p>100</p>
			  <p><span>Completed Projects</span></p>
		  </div>
		</div>
		<div class="col-md-3 border-rgt-b">
		  <div class="feature-det">
		  <img src="{{asset('images/icon-happy-customers.png')}}" alt="" class="img-fluid">
		  <p>200</p>
			  <p><span>Happy Customers</span></p>
		  </div>
		</div> 
		<div class="col-md-3 border-rgt-b">
		  <div class="feature-det">
		  <img src="{{asset('images/icon-ideas.png')}}" alt="" class="img-fluid">
		  <p>150</p>
			  <p><span>Ideas were Realised</span></p>
		  </div>
		</div> 
		<div class="col-md-3">
		  <div class="feature-det">
		  <img src="{{asset('images/icon-man-hours.png')}}" alt="" class="img-fluid">
		  <p>1000123</p>
			  <p><span>Man Hours</span></p>
		  </div>
		</div> 
	</div>  
		</div>  
	</section>

	<section id="features-head">
	<div class="container-fluid p-0">
    <div class="row">
		<div class="col-md-12">
		<h2>Nanthiat Builders, Why Us?</h2>
		<p>Nanthiat Builders today, with an experience and expertise spanning more than two decades has emerged as a leading construction company.</p>
		
		</div>
		
		</div>
	</div>
	</section>
	
<section id="features" style="background: url({{asset('images/features-bg.jpg')}})">
	<div class="overlay"></div>
	<div class="container-fluid p-0">
    <div class="row">
		<div class="col-md-12">
			<div class="feature-arrow"><img src="{{asset('images/feature-arrow.png')}}" alt="" class="img-fluid"></div>
		</div>
		<div class="col-md-6 mt-5 pt-4">
		<div class="whyus-l">
			<div class="whyus-cont-l">
			<h3>NATURE FRIENDLY DESIGNS</h3>
				<p>Nature-included designs, Green construction practices, Geography-oriented planning, Eco-friendly execution.</p>
			</div>
			<div class="whyus-img-l">
			<img src="{{asset('images/icon-red-nature-friendly.png')}}" alt="" class="img-fluid">
			</div>
			</div>
			<div class="whyus-l">
			<div class="whyus-cont-l">
			<h3>FORTIFIED CONSTRUCTION</h3>
				<p>Unsurpassed quality & durability of construction Construction adopting the latest technologies First quality products only used A team of industry-leading experts.</p>
			</div>
			<div class="whyus-img-l">
			<img src="{{asset('images/icon-red-fortified.png')}}" alt="" class="img-fluid">
			</div>
			</div>
			<div class="whyus-l">
			<div class="whyus-cont-l">
			<h3>AFFORDABLE COST</h3>
				<p>Ensured budget-friendly construction Expert’s advice & suggestions on cost-cutting Effective alternatives provided at the planning 
stage itself On-time & within-budget construction and delivery.</p>
			</div>
			<div class="whyus-img-l">
			<img src="{{asset('images/icon-red-cost.png')}}" alt="" class="img-fluid">
			</div>
			</div>
		</div>
		<div class="col-md-6 mt-5 pt-4">
		<div class="whyus-r">
			<div class="whyus-img-r">
			<img src="{{asset('images/icon-red-integrity.png')}}" alt="" class="img-fluid">
			</div>
			<div class="whyus-cont-r">
			<h3>INTEGRITY</h3>
				<p>Expertise spanning almost three decades, Precise analysis & assessment of plans, House designs & plans meeting expectations and more Making your dream homes a reality.</p>
			</div>
			
			</div>
			<div class="whyus-r">
			<div class="whyus-img-r">
			<img src="{{asset('images/icon-red-relation.png')}}" alt="" class="img-fluid">
			</div>
			<div class="whyus-cont-r">
			<h3>BUILDING RELATIONSHIPS</h3>
				<p>Feedback-oriented approach On-time delivery of projects Continued assistance for maintenance Your satisfaction is our greatest reward.</p>
			</div>
			
			</div>
			<div class="whyus-r">
			<div class="whyus-img-r">
			<img src="{{asset('images/icon-red-contact.png')}}" alt="" class="img-fluid">
			</div>
			<div class="whyus-cont-r">
			<h3>Contact us</h3>
				<p>WhatsApp : 93495 03683 , Phone : 0481- 2434951<br>Email : info@nanthiatbuilders.com</p>
			</div>
			
			</div>
		</div>
		</div>
	</div>
	</section>	
	
  @include('home.projects')



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

<body>
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
