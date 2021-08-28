@extends('website_layout.layout')


@section('content')
<header>
  <div class="innerbanner"><img src="images/inner-banner-contact.jpg" alt="" class="img-fluid"></div>
</header>
<!-- Page Content -->

<section id="newsandevent" class="my-3">
  <div class="container">
    <div class="row">
      <div class="col-md-6 p-0">
        <div class="aboutus-cont">
          <h2>Contact</h2>
          <p><span>Nanthiat Builders</span></p>
          <div class="pcaption">Address</div>
          <div class="clearfix"></div>
          <p>Chingavanam<br>
            Kottayam - 686531<br>
            Kerala, India<br>
          </p>
          <div class="pcaption">Telephone</div>
          <div class="clearfix"></div>
          <p><a href="tel:04812434951">0481- 2434951</a></p>
          <div class="pcaption">Mobile</div>
          <div class="clearfix"></div>
          <p><a href="tel:9349503683">9349503683</a></p>
          <div class="pcaption">email</div>
          <div class="clearfix"></div>
          <p><a href="mailto:info@nanthiatbuilders.com">info@nanthiatbuilders.com</a></p>
        </div>
      </div>
      <div id="nbform" class="col-md-6 py-4">
        <form method="post" action="{{ route('contactus.store') }}">

            <!-- CROSS Site Request Forgery Protection -->
            @csrf
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name *" required="">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email *" required="">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Mobile *" pattern="^\d{10}$" required="">
          </div>
          <div class="form-group">
            <textarea placeholder="Comments" name="message" required=""></textarea>
          </div>
          <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6Let7LIUAAAAAMX_eD1Lk3as2wup4v5SwjM8QGOT" required=""></div>
          </div>
          
          <!-- <input type="submit"  class="btn btn-primary" value="Submit"> -->
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection



@section('scripts')
<script src="{{ URL::asset('js/popper.min.js') }}"></script> 
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection