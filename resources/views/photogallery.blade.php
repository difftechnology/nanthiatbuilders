@extends('website_layout.layout')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/grid-gallery.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
@endsection


@section('content')
<header>
  <div class="innerbanner"><img src="images/inner-banner-gallery.jpg" alt="" class="img-fluid"></div>
</header>
<!-- Page Content -->

<section id="gallery" class="gallery-block grid-gallery">
  <div class="container">
    <h2>Photo Gallery</h2>
    <div class="row">
       @foreach ($gallery as $photo)
        <div class="col-md-6 col-lg-4 item">
          <a class="lightbox" href="{{ asset($photo) }}">
            <img class="img-fluid image scale-on-hover" src="{{ asset($photo) }}">
          </a>
        </div>
       @endforeach
    </div>
  </div>
</section>
@endsection


@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script> 
<script>
    baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
</script> 
@endsection        