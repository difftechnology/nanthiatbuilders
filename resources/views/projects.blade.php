@extends('website_layout.layout')

@section('content')
<header>
  <div class="innerbanner"><img src="images/inner-banner-project.jpg" alt="" class="img-fluid"></div>
</header>
<!-- Page Content -->

<section id="tabs" class="project-tab">
  <h2>Our Projects</h2>
  <nav>
    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist"><a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Ongoing</a><a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Completed</a><a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Upcoming</a></div>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 p-0">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <?php $cnt=1 ?>
            @foreach ($ongoing as $ong)
            <div class="container-fluid">
              <div class="row">
                @if($cnt % 2 != 0)
                <div class="col-md-6 p-0">
                  <div id="projectcarousel{{$cnt}}" class="carousel slide" data-ride="carousel" data-interval="false">
                    <ol class="carousel-indicators">
                       <?php $pos=1 ?>
                        @foreach ($ong->media as $photo)
                            <li data-target="#projectcarousel{{$cnt}}" data-slide-to="{{ $pos }}" class="{{ $pos == 1 ? 'active' : '' }}"></li>
                            <?php $pos++ ?>
                        @endforeach
                    </ol>
                    <div class="carousel-inner" role="listbox">
                       <?php $pos=1 ?>
                       @foreach ($ong->media as $photo)
                        <div class="carousel-item {{ $pos == 1 ? 'active' : '' }}">
                            <img class="d-block mx-auto img-fluid" src="{{ asset($photo->name) }}" alt="First slide">
                            <?php $pos++ ?>
                         </div>
                      @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#projectcarousel{{$cnt}}" role="button" data-slide="prev"><img src="images/prev.png" alt=""></a><a class="carousel-control-next" href="#projectcarousel{{$cnt}}" role="button" data-slide="next"><img src="images/next.png" alt=""></a></div>
                </div>
                <div class="col-md-6 p-0">
                  <div class="projectsdet">
                    <div class="project-count">{{ $cnt }}</div>
                    <div class="clearfix"></div>
                    <div class="pcaption">Client</div>
                    <div class="clearfix"></div>
                    <h2>{{ $ong->client_name}}</h2>
                    <div class="pcaption">Location</div>
                    <div class="clearfix"></div>
                    <h3>{{ $ong->location}}</h3>
                    <div class="pcaption">Year</div>
                    <div class="clearfix"></div>
                    <h3>{{ $ong->year}}</h3>
                    <!-- <div class="pcaption">Project</div>
                    <div class="clearfix"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget turpis in elit fringilla lobortis a sit amet orci. In cursus nibh urna, sit amet suscipit erat finibus ac.</p> -->
                    <!--<a href="" class="moreabt">View Project</a>-->
                    
                  </div>
                </div>
                @endif
                @if($cnt % 2 == 0)
                <div class="col-md-6 p-0 order-md-1 order-2">
                  <div class="projectsdet-l">
                    <div class="project-count">{{ $cnt }}</div>
                    <div class="clearfix"></div>
                    <div class="pcaption">Client</div>
                    <div class="clearfix"></div>
                    <h2>{{ $ong->client_name}}</h2>
                    <div class="pcaption">Location</div>
                    <div class="clearfix"></div>
                    <h3>{{ $ong->location}}</h3>
                    <div class="pcaption">Year</div>
                    <div class="clearfix"></div>
                    <h3>{{ $ong->year}}</h3>
                    <!-- <div class="pcaption">Project</div>
                    <div class="clearfix"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget turpis in elit fringilla lobortis a sit amet orci. In cursus nibh urna, sit amet suscipit erat finibus ac.</p> -->
                    <!--<a href="" class="moreabt">View Project</a>-->
                    
                  </div>
                </div>

                <div class="col-md-6 p-0 order-1">
                  <div id="projectcarousel{{$cnt}}" class="carousel slide" data-ride="carousel" data-interval="false">
                    <ol class="carousel-indicators">
                       <?php $pos=1 ?>
                        @foreach ($ong->media as $photo)
                            <li data-target="#projectcarousel{{$cnt}}" data-slide-to="{{ $pos }}" class="{{ $pos == 1 ? 'active' : '' }}"></li>
                            <?php $pos++ ?>
                        @endforeach
                    </ol>
                    <div class="carousel-inner" role="listbox">
                       <?php $pos=1 ?>
                       @foreach ($ong->media as $photo)
                        <div class="carousel-item {{ $pos == 1 ? 'active' : '' }}">
                            <img class="d-block mx-auto img-fluid" src="{{ asset($photo->name) }}" alt="First slide">
                            <?php $pos++ ?>
                         </div>
                      @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#projectcarousel{{$cnt}}" role="button" data-slide="prev"><img src="images/prev.png" alt=""></a><a class="carousel-control-next" href="#projectcarousel{{$cnt}}" role="button" data-slide="next"><img src="images/next.png" alt=""></a></div>
                </div>
                
                @endif
              </div>
            </div>
             <?php $cnt++ ?>
            @endforeach
          </div>

          <!-- ***************** -->
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
           
            @foreach ($completed as $ong)
            <div class="container-fluid">
              <div class="row">
                @if($cnt % 2 != 0)
                <div class="col-md-6 p-0">
                  <div id="projectcarousel{{$cnt}}" class="carousel slide" data-ride="carousel" data-interval="false">
                    <ol class="carousel-indicators">
                       <?php $pos=1 ?>
                        @foreach ($ong->media as $photo)
                            <li data-target="#projectcarousel{{$cnt}}" data-slide-to="{{ $pos }}" class="{{ $pos == 1 ? 'active' : '' }}"></li>
                            <?php $pos++ ?>
                        @endforeach
                    </ol>
                    <div class="carousel-inner" role="listbox">
                       <?php $pos=1 ?>
                       @foreach ($ong->media as $photo)
                        <div class="carousel-item {{ $pos == 1 ? 'active' : '' }}">
                            <img class="d-block mx-auto img-fluid" src="{{ asset($photo->name) }}" alt="First slide">
                            <?php $pos++ ?>
                         </div>
                      @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#projectcarousel{{$cnt}}" role="button" data-slide="prev"><img src="images/prev.png" alt=""></a><a class="carousel-control-next" href="#projectcarousel{{$cnt}}" role="button" data-slide="next"><img src="images/next.png" alt=""></a></div>
                </div>
                <div class="col-md-6 p-0">
                  <div class="projectsdet">
                    <div class="project-count">{{ $cnt }}</div>
                    <div class="clearfix"></div>
                    <div class="pcaption">Client</div>
                    <div class="clearfix"></div>
                    <h2>{{ $ong->client_name}}</h2>
                    <div class="pcaption">Location</div>
                    <div class="clearfix"></div>
                    <h3>{{ $ong->location}}</h3>
                    <div class="pcaption">Year</div>
                    <div class="clearfix"></div>
                    <h3>{{ $ong->year}}</h3>
                    <!-- <div class="pcaption">Project</div>
                    <div class="clearfix"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget turpis in elit fringilla lobortis a sit amet orci. In cursus nibh urna, sit amet suscipit erat finibus ac.</p> -->
                    <!--<a href="" class="moreabt">View Project</a>-->
                    
                  </div>
                </div>
                @endif
                @if($cnt % 2 == 0)
                <div class="col-md-6 p-0 order-md-1 order-2">
                  <div class="projectsdet-l">
                    <div class="project-count">{{ $cnt }}</div>
                    <div class="clearfix"></div>
                    <div class="pcaption">Client</div>
                    <div class="clearfix"></div>
                    <h2>{{ $ong->client_name}}</h2>
                    <div class="pcaption">Location</div>
                    <div class="clearfix"></div>
                    <h3>{{ $ong->location}}</h3>
                    <div class="pcaption">Year</div>
                    <div class="clearfix"></div>
                    <h3>{{ $ong->year}}</h3>
                    <!-- <div class="pcaption">Project</div>
                    <div class="clearfix"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget turpis in elit fringilla lobortis a sit amet orci. In cursus nibh urna, sit amet suscipit erat finibus ac.</p> -->
                    <!--<a href="" class="moreabt">View Project</a>-->
                    
                  </div>
                </div>

                <div class="col-md-6 p-0 order-1">
                  <div id="projectcarousel{{$cnt}}" class="carousel slide" data-ride="carousel" data-interval="false">
                    <ol class="carousel-indicators">
                       <?php $pos=1 ?>
                        @foreach ($ong->media as $photo)
                            <li data-target="#projectcarousel{{$cnt}}" data-slide-to="{{ $pos }}" class="{{ $pos == 1 ? 'active' : '' }}"></li>
                            <?php $pos++ ?>
                        @endforeach
                    </ol>
                    <div class="carousel-inner" role="listbox">
                       <?php $pos=1 ?>
                       @foreach ($ong->media as $photo)
                        <div class="carousel-item {{ $pos == 1 ? 'active' : '' }}">
                            <img class="d-block mx-auto img-fluid" src="{{ asset($photo->name) }}" alt="First slide">
                            <?php $pos++ ?>
                         </div>
                      @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#projectcarousel{{$cnt}}" role="button" data-slide="prev"><img src="images/prev.png" alt=""></a><a class="carousel-control-next" href="#projectcarousel{{$cnt}}" role="button" data-slide="next"><img src="images/next.png" alt=""></a></div>
                </div>
                
                @endif
              </div>
            </div>
             <?php $cnt++ ?>
            @endforeach
          </div>
      </div>
    </div>
  </div>
</section>
@endsection

