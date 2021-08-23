
<section id="ourprojects">
	<div class="container-fluid p-0">
    <div class="row">
		<div class="col-md-12">
	<h2>Our Projects</h2>
		</div>
		<div class="col-md-12">
			<div class="ourproject-l">
			<div class="completed">
			<img src="{{$project_images_residential[0]}}" alt="" class="img-fluid">
			<div class="proj-det">
				<div class="det-l">
				<h4></h4>
					<p></p>
				</div>
				<div class="det-r"><a href="{{ url('projects') }}">Residential</a></div>
				</div>
			</div>
			<div class="commercial">
			<img src="{{isset($project_images_commercial[1])? $project_images_commercial[1] : $project_images_residential[4]}}" alt="" class="img-fluid">
			<div class="proj-det">
				<div class="det-l">
				<h4></h4>
					<p></p>
				</div>
				<div class="det-r"><a href="{{ url('projects') }}">Commercial</a></div>
				</div>
			</div>
			
			</div>
		<div class="ourproject-r">
			<div class="upcoming">
			<img src="{{$project_images_residential[2]}}" alt="" class="img-fluid">
			<div class="proj-det">
				<div class="det-l">
				<h4></h4>
					<p></p>
				</div>
				<!--<div class="det-r"><a href="">Upcoming</a></div>-->
				</div>
			</div>
			<div class="ongoing">
			<img src="{{isset($project_images_commercial[3])?$project_images_commercial[3] :$project_images_residential[3]  }}" alt="" class="img-fluid">
			<div class="proj-det">
				<div class="det-l">
				<h4></h4>
					<p></p>
				</div>
				<!--<div class="det-r"><a href="">Ongoing</a></div>-->
				</div>
			</div>
			
			</div>
		
		
		
		</div>
		
		
	</div>
		</div>
	</section>	
	