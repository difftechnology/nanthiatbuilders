<header id="home-header">
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
    @foreach ($carousels as $photo)  
      <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->iteration}}" class="{{ ($loop->first)? 'active' : '' }}"></li>
      @endforeach
      
      <!--<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      @foreach ($carousels as $photo)
      <div class="carousel-item {{ ($loop->first)? 'active' : '' }}" style="background-image: url('{{ asset($photo) }}')">
        <div class="carousel-caption d-none d-md-block"></div>
      </div>
      @endforeach

      <!-- <div class="carousel-item active" style="background-image: url('{{asset('images/banner/banner-3-2021.jpg')}}')">
        <div class="carousel-caption d-none d-md-block"></div>
      </div> -->
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <!-- <div class="carousel-item" style="background-image: url('{{asset('images/banner/banner-4-2021.jpg')}}')">
        <div class="carousel-caption d-none d-md-block"></div>
      </div> -->
		 <!-- Slide Three - Set the background image for this slide in the line below -->
      <!-- <div class="carousel-item" style="background-image: url('{{asset('images/banner/banner-5-2021.jpg')}}')">
        <div class="carousel-caption d-none d-md-block"></div>
      </div> -->
		 <!-- Slide four - Set the background image for this slide in the line below -->
      <!-- <div class="carousel-item" style="background-image: url('{{asset('images/banner/banner-6-2021.jpg')}}')">
        <div class="carousel-caption d-none d-md-block"></div>
      </div> -->
		 <!-- Slide five - Set the background image for this slide in the line below -->
      <!-- <div class="carousel-item" style="background-image: url('{{asset('images/banner/banner-7-2021.jpg')}}')">
        <div class="carousel-caption d-none d-md-block"></div>
      </div> -->
		 <!-- Slide six - Set the background image for this slide in the line below -->
      <!-- <div class="carousel-item" style="background-image: url('{{asset('images/banner/banner-8-2021.jpg')}}')">
        <div class="carousel-caption d-none d-md-block"></div>
      </div> -->
     
    </div>
    
  </div>
</header>
