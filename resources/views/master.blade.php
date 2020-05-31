<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Creative Dev Bootstrap portfolio web template</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
  ================================================== -->
    <!-- Bootstrap -->
    <link href="{{ asset('public/home/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/home/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/home/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('public/home/css/prettyPhoto.css') }}">
	{{-- <link rel="stylesheet" href="{{ asset('public/home/css/style.css') }}"> --}}
	<link rel="stylesheet" href="{{ asset('public/home/css/style_2.css') }}">
	<link rel="stylesheet" href="{{ asset('public/home/css/custom.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
   <body data-spy="scroll" data-target=".main-nav">

    <section id="section-banner">
	<div class="pattern-overlay"></div>
    	<div class="container">
    		<div class="row">
    			<div class="banner-content wow fadeInRight">
					@foreach($hometitles as $home)
						
					
    				<h2 class="title">
					<span>{{$home->title1}}</span>

				<span>{{$home->title2}}</span>{{$home->title3}}
    				</h2>

					<a href="#" class="btn btn-default">Learn More</a>

					@endforeach
					{{-- <h2 class="title">
						<span>Hello..!</span>
	
					<span>I'm Md Mamun Ahmed Sagor</span>
					CREATIVE DEVELOPER
						</h2>
	
						<a href="#" class="btn btn-default">Learn More</a> --}}
    			</div>
    		</div>
    	</div>
    </section>

    <!-- section menu start -->

    <section class="section-menu">
    	<div class="navbar navbar-default main-nav" role="navigation" >
    		<div class="container" >
    			<div class="navbar-header">
    				<button class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse">
    					<span class="sr-only"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    				</button>

					<a href="#" class="navbar-brand">Creative</a>
    			</div>  <!-- navbar-header end -->
    			<!-- main nav  -->

    			<div class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
    				<ul class="nav navbar-nav navbar-right">
    					<li class="active"><a href="#section-banner">Home </a></li>
    					<li><a href="#section-profile">About me </a></li>
    					<li><a href="#section-skill">Skills </a></li>
    					<li><a href="#section-resume">Resume </a></li>
    					<li><a href="#section-testimonial">Testimonials </a></li>
    					<li><a href="#section-portfolio">Portfolio </a></li>
    					<li><a href="#section-contact">Contact me </a></li>
    				</ul>
    			</div><!-- /.navbar-collapse -->
    		</div><!-- /.container-fluid -->
    	</div>
    </section>
    <!-- section menu end -->
 <section id="section-overview" class="section-padding">
		<div class="container">
			<div class="row">
						<div class="service-wrapper">
							@foreach($profilecategories as $profile)
								
							
						<div class="service-inner wow fadeInRight" data-wow-delay="{{$profile->fadetime}}">
								<i class="fa {{$profile->icon}}"></i>
								<div class="service-box">
									<h3>{{$profile->title}}User Story</h3>
									<p>{{$profile->description}}Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
								</div>
							</div> <!-- service -inner  -->
							@endforeach
							<div class="service-inner wow fadeInRight" data-wow-delay=".5s">
								<i class="fa fa-bank"></i>
								<div class="service-box">
									<h3>Wireframe</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
								</div>
							</div>  <!-- service -inner  -->
							<div class="service-inner wow fadeInRight" data-wow-delay=".8s">
								<i class="fa fa-pencil"></i>
								<div class="service-box">
									<h3>Graphic Design</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
								</div>
							</div> <!-- service -inner  -->
							<div class="service-inner wow fadeInRight" data-wow-delay="1.1s">
								<i class="fa fa-globe"></i>
								<div class="service-box">
									<h3>Web Development</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
								</div>
							</div>  <!-- service -inner  -->
						</div>

						{{-- <div class="service-wrapper">
							<div class="service-inner wow fadeInRight" data-wow-delay=".2s">
								<i class="fa fa-users"></i>
								<div class="service-box">
									<h3>User Story</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
								</div>
							</div> <!-- service -inner  -->
							<div class="service-inner wow fadeInRight" data-wow-delay=".5s">
								<i class="fa fa-bank"></i>
								<div class="service-box">
									<h3>Wireframe</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
								</div>
							</div>  <!-- service -inner  -->
							<div class="service-inner wow fadeInRight" data-wow-delay=".8s">
								<i class="fa fa-pencil"></i>
								<div class="service-box">
									<h3>Graphic Design</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
								</div>
							</div> <!-- service -inner  -->
							<div class="service-inner wow fadeInRight" data-wow-delay="1.1s">
								<i class="fa fa-globe"></i>
								<div class="service-box">
									<h3>Web Development</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
								</div>
							</div>  <!-- service -inner  -->
						</div> --}}
					</div><!-- row end -->
		</div>
	</section>
	<!-- section overview end -->

	<!-- section profile start -->

	<section id="section-profile" class="section-padding">
	<div class="profile-bg visible-md visible-lg"></div>
	{{-- <img src="{{asset('public/home/images/2.png')}}" width="820px" height="824px"> --}}
		
	<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-12 pull-right">
					<div class="profile-desc wow fadeInRight">
						 <h2 class="section-title uppercase">Hello, My Name is Mamun.</h2>
<br/>
                                    <p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
										magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
										suscipit lobortis nisl ut aliquip ex ea commodo consequat. enim ad minim veniam, quis nostrud exerci tation ullamcorper 
										suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                    </p>
 <br/>


                                    <p class="text-grey animated bounceInUp" style="opacity: 1;">
										Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
										Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.
                                    </p>
<br/>
                                    <p class="text-grey animated bounceInUp" style="opacity: 1;">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
										 laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation 
										 ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                    </p>

					</div>


				</div>
			</div> <!-- row end -->
		</div><!-- container end -->
	</section>
	<!-- section profile end -->

	<!-- section skill start -->

	<section id="section-skill" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="heading-title">My skills</h2>
				</div>
				<div class="col-md-6 col-sm-6 wow fadeInLeft">
					<div class="skill-desc">
						<p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri.
						<br>
						<br>
						Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri.
						<br>
						<br>
						Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>


					</div>
				</div>

				<div class="col-md-6 col-sm-6 wow fadeInRight" >

                  
           @foreach ($user as $skills)                       
                   
					<div class="skill-box wow fadeInDown" data-wow-delay=".2s">
						<label> {{ $skills->title }}</label>
						<div class="progress">
							<div class="progress-bar" role="progress-bar" aria-valuemin="0" aria-valuenow="70" aria-valuemax="100" style="width: {{ $skills->percentege }}%;" >
								{{ $skills->percentege }}%
							</div>
						</div>
                    </div>
                    @endforeach
					{{-- <div class="skill-box wow fadeInDown" data-wow-delay=".2s">
						<label> Wireframe</label>
						<div class="progress">
							<div class="progress-bar" role="progress-bar" aria-valuemin="0" aria-valuenow="70" aria-valuemax="100" style="width: 70%;" >
								70%
							</div>
						</div>
                    </div>
					<div class="skill-box wow fadeInDown" data-wow-delay=".4s">
						<label> Photoshop</label>
						<div class="progress">
							<div class="progress-bar" role="progress-bar" aria-valuemin="0" aria-valuenow="85" aria-valuemax="100" style="width: 85%;" >
								85%
							</div>
						</div>
					</div>
					<div class="skill-box wow fadeInDown" data-wow-delay=".6s">
						<label> HTML5 / CSS3</label>
						<div class="progress">
							<div class="progress-bar" role="progress-bar" aria-valuemin="0" aria-valuenow="90" aria-valuemax="100" style="width: 90%;" >
								90%
							</div>
						</div>
					</div>
					<div class="skill-box wow fadeInDown" data-wow-delay=".8s">
						<label> JavaScript </label>
						<div class="progress">
							<div class="progress-bar" role="progress-bar" aria-valuemin="0" aria-valuenow="65" aria-valuemax="100" style="width: 65%;" >
								65%
							</div>
						</div>
					</div> --}}
				</div>
			</div>
		</div>
	</section>
	<!-- section skill End -->

	<!-- Resume start -->

	<section id="section-resume" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow fadeInUp">
					<h2 class="heading-title">Resume</h2>
					<p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>

				</div>
			</div>
		</div>
	</section>

	<section id="resume-details" class="section-padding">


<div class="container">
<div class="row">
    <div class="col-md-12 wow fadeInLeft">

					<div class="resume-inner">
					<h2 class="heading-title">My Education</h2>
						<p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri.
						<br>
						Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>
					</div>
				</div>
</div>
	<div class="row">

        <div class="timeline-centered">

			@foreach( $certifications as $educations)		
		

			<article class="timeline-entry">

				<div class="timeline-entry-inner">

					<div class="timeline-icon bg-success">
						<i class="entypo-feather"></i>
					</div>

					<div class="timeline-label">
						<h3 class="resume-title">{{ $educations->title }}</h3>
					<p>GROUP : {{$educations->group}}</p>
					<p>YEAR : {{$educations->year}}</p>
					<p>BOARD : {{$educations->board}}</p>
					</div>
				</div>

			</article>
		@endforeach

        {{-- <article class="timeline-entry">

            <div class="timeline-entry-inner">

                <div class="timeline-icon bg-secondary">
                    <i class="entypo-suitcase"></i>
                </div>

                <div class="timeline-label">
                   <h3 class="resume-title">Web design diploma</h3>
                     <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
                </div>
            </div>

        </article> --}}

{{-- 
        <article class="timeline-entry">

            <div class="timeline-entry-inner">
 
                <div class="timeline-icon bg-info">
                    <i class="entypo-location"></i>
                </div>

                <div class="timeline-label">
                    <h3 class="resume-title">User experience diploma</h3>
                    <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
                </div>
            </div>

        </article> --}}

		
			
{{-- 		
        <article class="timeline-entry">

            <div class="timeline-entry-inner">

                <div class="timeline-icon bg-warning">
                    <i class="entypo-camera"></i>
                </div>

                <div class="timeline-label">
				<h3 class="resume-title">User research</h3>

                    <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
                </div>
            </div>

        </article> --}}

	
		
        <article class="timeline-entry begin">

            <div class="timeline-entry-inner">

                <div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
                    <i class="entypo-flight"></i> +
                </div>

            </div>

        </article>

    </div>


	</div>
</div>

<div class="container">
<div class="row">
    <div class="col-md-12 wow fadeInLeft">

					<div class="resume-inner">
					<h2 class="heading-title">Work Experience</h2>
						<p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri.
						<br>
						Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>
					</div>
				</div>
</div>
	<div class="row">

        <div class="timeline-centered">

	@foreach($experiences as $exp)
        <article class="timeline-entry">

            <div class="timeline-entry-inner">

                <div class="timeline-icon bg-success">
                    <i class="entypo-feather"></i>
                </div>

                <div class="timeline-label">
					<h3 class="resume-title">{{ $exp->title }}</h3>
					<p>{{ $exp->designation }}</p>
					<p>{{ $exp->year }}</p>
					<p>{{ $exp->description }}</p>
                </div>
            </div>

        </article>

		@endforeach
        {{-- <article class="timeline-entry">

            <div class="timeline-entry-inner">

                <div class="timeline-icon bg-secondary">
                    <i class="entypo-suitcase"></i>
                </div>

                <div class="timeline-label">
                   <h3 class="resume-title">Web designer</h3>
                     <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
                </div>
            </div>

        </article> --}}


        {{-- <article class="timeline-entry">

            <div class="timeline-entry-inner">

                <div class="timeline-icon bg-info">
                    <i class="entypo-location"></i>
                </div>

                <div class="timeline-label">
                    <h3 class="resume-title">Graphics designer</h3>
                    <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
                </div>
            </div>

        </article> --}}


        {{-- <article class="timeline-entry">

            <div class="timeline-entry-inner">

                <div class="timeline-icon bg-warning">
                    <i class="entypo-camera"></i>
                </div>

                <div class="timeline-label">
                    <h3 class="resume-title">developer</h3>

                    <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
                </div>
            </div>

        </article> --}}


        <article class="timeline-entry begin">

            <div class="timeline-entry-inner">

                <div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
                    <i class="entypo-flight"></i> +
                </div>

            </div>

        </article>

    </div>

	{{-- <a href="#" class="btn btn-default featured">Download Resume</a> --}}
	<a href="{{ asset('public/home/images/portfolio/portfolio_pic9.jpg') }}" class="btn btn-default featured" download>Download Resume</a>
	</div>
</div>

	</section>
	<!-- Resume end -->

	<!-- section testimonial start -->

	<section id="section-testimonial" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="carousel slide text-center" id="testimonial-carousel">
						 <ol class="carousel-indicators">
							<li data-target="#testimonial-carousel" data-slide-to="1" class="active"></li>
							@foreach ($testimonials as $test)
						  <li data-target="#testimonial-carousel" data-slide-to="{{$test->id}}"></li>
						 @endforeach
						    {{-- <li data-target="#testimonial-carousel" data-slide-to="1"></li>
						    <li data-target="#testimonial-carousel" data-slide-to="2"></li> --}}
						  </ol>
						<div class="carousel-inner">
							<div class="item active">
								<p>“ Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam. ”</p>

							<h4 class="client-name">Fedrer Venliy</h4>
							</div>
							@foreach ($testimonials as $test)
								
							
							<div class="item">
							<p>“ {{$test->description}}”</p>
							{{-- <span ><img src="{{$test->images)}}" height="50px" width="50px"></span> --}}

							<h4 class="client-name">{{$test->name}}<br/><span style="padding: 0px">{{$test->designation}} </span></h4>
							
							</div>
							@endforeach
							{{-- <div class="item">
								<p>“ Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam. ”</p>

								<h4 class="client-name">Markus Stephen</h4>
							</div>
							<div class="item ">
								<p>“ Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam. ”</p>

								<h4 class="client-name">John Deally</h4>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- section testimonial end -->

	<!-- section portfolio start -->


	<section id="section-portfolio" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow fadeInUp">
					<div class="section-heading">
						<h2 class="heading-title">portfolio</h2>
						<p>My goal is to help you make money, get more done , and have more fun in your day to-day life.
							If you want to be healthy, wealthy, wise, and happy you'll find my reaserch quite useful </p>
					</div>
				</div>
			</div>

			<div class="row">
				@foreach($portfolios as $port)
					
			
				<div class="col-md-4 col-sm-4">
					<div class="portfolio-box">
						<img src="{{ $port->images }}" alt="" class="img-responsive">
						<div class="image-overlay text-center">
							<a href="{{ $port->hoverimages }}" data-rel="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>
						</div>
					</div>
				</div> <!-- col-md-4 end -->
				{{-- <div class="col-md-4 col-sm-4">
					<div class="portfolio-box">
						<img src="{{ ('public/home/images/portfolio/portfolio_pic1.jpg') }}" alt="" class="img-responsive">
						<div class="image-overlay text-center">
							<a href="{{ ('public/home/images/portfolio/portfolio_pic1.jpg') }}" data-rel="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>
						</div>
					</div>
				</div> <!-- col-md-4 end --> --}}
				@endforeach
				<div class="col-md-4 col-sm-4">
					<div class="portfolio-box">
						<img src="{{ ('public/home/images/portfolio/portfolio_pic2.jpg') }}" alt="" class="img-responsive">
						<div class="image-overlay text-center">
							<a href="{{ ('public/home/images/portfolio/portfolio_pic2.jpg') }}" data-rel="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>
						</div>
					</div>
				</div> <!-- col-md-4 end 3step-->
				<div class="col-md-4 col-sm-4">
					<div class="portfolio-box">
						<img src="{{ asset('public/home/images/portfolio/portfolio_pic3.jpg') }}" alt="" class="img-responsive">
						<div class="image-overlay text-center">
							<a href="{{ asset('public/home/images/portfolio/portfolio_pic3.jpg') }}" data-rel="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>
						</div>
					</div>
				</div> <!-- col-md-4 end -->
				<div class="clearfix"></div>
				<div class="col-md-4 col-sm-4">
					<div class="portfolio-box">
						<img src="{{ asset('public/home/images/portfolio/portfolio_pic4.jpg') }}" alt="" class="img-responsive">
						<div class="image-overlay text-center">
							<a href="{{ asset('public/home/images/portfolio/portfolio_pic4.jpg') }}" data-rel="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>
						</div>
					</div>
				</div> <!-- col-md-4 end -->
				<div class="col-md-4 col-sm-4">
					<div class="portfolio-box">
						<img src="{{ asset('public/home/images/portfolio/portfolio_pic5.jpg') }}" alt="" class="img-responsive">
						<div class="image-overlay text-center">
							<a href="{{ asset('public/home/images/portfolioportfolio_pic5.jpg') }}" data-rel="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>
						</div>
					</div>
				</div> <!-- col-md-4 end 6 step -->

				<div class="col-md-4 col-sm-4">
					<div class="portfolio-box">
						<img src="{{ asset('public/home/images/portfolio/portfolio_pic6.jpg') }}" alt="" class="img-responsive">
						<div class="image-overlay text-center">
							<a href="{{ asset('public/home/images/portfolio/portfolio_pic6.jpg') }}" data-rel="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>
						</div>
					</div>
				</div> <!-- col-md-4 end -->
				<div class="clearfix"></div>
				<div class="col-md-4 col-sm-4">
					<div class="portfolio-box">
						<img src="{{ asset('public/home/images/portfolio/portfolio_pic7.jpg') }}" alt="" class="img-responsive">
						<div class="image-overlay text-center">
							<a href="{{ asset('public/home/images/portfolio/portfolio_pic7.jpg') }}" data-rel="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>
						</div>
					</div>
				</div> <!-- col-md-4 end -->
				<div class="col-md-4 col-sm-4">
					<div class="portfolio-box">
						<img src="{{ asset('public/home/images/portfolio/portfolio_pic8.jpg') }}" alt="" class="img-responsive">
						<div class="image-overlay text-center">
							<a href="{{ asset('public/home/images/portfolio/portfolio_pic8.jpg') }}" data-rel="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>
						</div>
					</div>
				</div> <!-- col-md-4 end -->
				<div class="col-md-4 col-sm-4">
					<div class="portfolio-box">
						<img src="{{ asset('public/home/images/portfolio/portfolio_pic9.jpg') }}" alt="" class="img-responsive">
						<div class="image-overlay text-center">
							<a href="{{ asset('public/home/images/portfolio/portfolio_pic9.jpg') }}" data-rel="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>
						</div>
					</div>
				</div> <!-- col-md-4 end -->
			</div>
		</div>
	</section>

<!-- azizul hasan isotop -->
	<section id="section-portfolio" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow fadeInUp">
					<div class="section-heading">
						<h2 class="heading-title">portfolio</h2>
						<p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. </p>
					</div>
				</div>
			</div>

			
			<div class="big-demo row  text-center wow fadeInUp " data-js="hero-demo">
				<div class="ui-group">
					<div class="filters  button-group js-radio-button-group">
						<button class="button is-checked" data-filter="*">
							Show all
						</button>
						<button class="button" data-filter=".web_design">Web Design</button>
						<button class="button" data-filter=".web_development">
							Web Development
						</button>
						<button class="button" data-filter=".codeigniter">
							CodeIgniter
						</button>
						<button class="button" data-filter=".laravel">
							Laravel
						</button>
						<button class="button" data-filter=".react">
							ReactJs
						</button>
						<button class="button" data-filter=".psdTohtml">
							PSD To HTML
						</button>
						<button class="button" data-filter=".wordpress">
							WordPress
						</button>
					</div>
				</div>
				<div class="grid ">
					
					<div class="col-md-4 col-sm-4 element-item  web_design" data-category="web_design">
						<div class="portfolio-box">
							<img src="{{ asset('public/home/images/portfolio/portfolio_pic9.jpg') }}" alt="" class="img-responsive">
							<div class="image-overlay text-center">
								<a href="{{ asset('public/home/images/portfolio/portfolio_pic9.jpg') }}" data-rel="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>
								
							</div>
						
						</div>
						<a href="http://mamunforever.com" target="_blank" style="margin-top:40px">www.mamunforever.com</a>
					</div>
					<div class="col-md-4 col-sm-4 element-item  web_design" data-category="web_design">
						<div class="portfolio-box">
							<img src="{{ asset('public/home/images/portfolio/portfolio_pic9.jpg') }}" alt="" class="img-responsive">
							<div class="image-overlay text-center">
								<a href="{{ asset('public/home/images/portfolio/portfolio_pic9.jpg') }}" data-rel="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 element-item  web_design" data-category="web_design">
						<div class="portfolio-box">
							<img src="{{ asset('public/home/images/portfolio/portfolio_pic9.jpg') }}" alt="" class="img-responsive">
							<div class="image-overlay text-center">
								<a href="{{ asset('public/home/images/portfolio/portfolio_pic9.jpg') }}" data-rel="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 element-item  web_design" data-category="web_design">
						<div class="portfolio-box">
							<img src="{{ asset('public/home/images/portfolio/portfolio_pic9.jpg') }}" alt="" class="img-responsive">
							<div class="image-overlay text-center">
								<a href="{{ asset('public/home/images/portfolio/portfolio_pic9.jpg') }}" data-rel="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 element-item  web_design" data-category="web_design">
						<div class="portfolio-box">
							<img src="{{ asset('public/home/images/portfolio/portfolio_pic9.jpg') }}" alt="" class="img-responsive">
							<div class="image-overlay text-center">
								<a href="{{ asset('public/home/images/portfolio/portfolio_pic9.jpg') }}" data-rel="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 element-item  web_design" data-category="web_design">
						<div class="portfolio-box">
							<img src="{{ asset('public/home/images/portfolio/portfolio_pic9.jpg') }}" alt="" class="img-responsive">
							<div class="image-overlay text-center">
								<a href="{{ asset('public/home/images/portfolio/portfolio_pic9.jpg') }}" data-rel="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 element-item  web_development" data-category="web_development">
						<div class="portfolio-box">
							<img src="{{ asset('public/home/images/portfolio/portfolio_pic9.jpg') }}" alt="" class="img-responsive">
							<div class="image-overlay text-center">
								<a href="{{ asset('public/home/images/portfolio/portfolio_pic9.jpg') }}" data-rel="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</section>
	<!-- section portfolio endt -->

	<!-- section contact start -->

	<section id="section-contact" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="heading-title">Contact me</h2>
				</div>
			</div>
			<div class="row">


				<div class="col-md-6 col-sm-6 wow fadeInRight">
					<div class="contact-form">
                        <form class="contact-box" action="{{ route('store.usercontacts') }}" method="post" >
                            @csrf
							<div class="form-group">
								<label>Name*</label>
								<input type="text" name="name" class="form-control">
							</div>

							<div class="form-group">
								<label>Email address*</label>
								<input type="text"  name="email" class="form-control">
							</div>

							<div class="form-group">
								<label>Message*</label>
								<input type="text"  name="message" class="form-control">
                            </div>



						<div class="row">
							<div class="col-md-12">
								<input type="submit" value="Contact me"  class="btn btn-default">
							</div>
                        </div>
                    </form>
					</div>
				</div>
					<div class="col-md-6 col-sm-6 wow fadeInLeft">
					<div class="contact-left">
					<p>Khilgaon (Bengali: খিলগাঁও) is a Thana of Dhaka District in the Division of Dhaka, Bangladesh.
						 It is bounded by Rampura and Badda Thana on the north, Motijheel, Sabujbagh and Demra Thanas on the south, Rupganj Upazila on the east,
						  Ramna thana on the west.</p>
						<div class="location">
							<p>292 North Goran (Shipahibag bazar)</p>
							<p>Khilgaon, Dhaka-1219K</p>
							<p>Bangladesh</p>
						</div>
						<ul>
							<li><span>Email :</span> <a>mamunphp.net@gmail.com</a></li>
							<li><span>Phone :</span> <a>+8801928966931</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- section contact end -->
<a class="scroll-to-top" href="#page-top" >
        <i class="fa fa-angle-up"></i>
    </a>
	<footer id="section-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="socail-link list-inline">
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.facebook.com/mamun01928966931" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
                    {{-- <h4>&copy; 2019 Company Name. <a href="https://webthemez.com/free-bootstrap-templates/" target="_blank" title="Free Bootstrap Templates">Free Bootstrap Templates</a> by WebThemez.com</h4>
                     --}}
                     {{-- <h4>&copy; 2020 Company Name. <a href="https://webthemez.com/free-bootstrap-templates/" target="_blank" title="Free Bootstrap Templates">Ekhilgaon.com</a> by mamun</h4> --}}
					 <h4>All Rights Reserved By  <a href="https://www.linkedin.com/in/azizulhasan1995/" target="_blank" title="LinkedIn Profile"> Md Mamun</a> </h4>

				</div>
			</div>
		</div>
	</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- initialize jQuery Library -->
    <script type="text/javascript" src="{{ asset('public/home/js/jquery.js') }}"></script>
    <!-- Bootstrap jQuery -->
    <script type="text/javascript" src="{{ asset('public/home/assets/js/bootstrap.min.js') }}"></script>
    <!-- PrettyPhoto -->
    <script type="text/javascript" src="{{ asset('public/home/js/jquery.prettyPhoto.js') }}"></script>
    <!-- Wow Animation -->
    <script type="text/javascript" src="{{ asset('public/home/js/wow.min.js') }}"></script>
    <!-- singlepagenav -->
    <script src="{{ asset('public/home/js/jquery.singlePageNav.js') }}"></script>
    <!-- Eeasing -->
    <script type="text/javascript" src="{{ asset('public/home/js/jquery.easing.1.3.js') }}"></script>
    <!-- Sticky Menu -->
    <script src="{{ ('public/home/js/jquery.sticky.js') }}"></script>
    <script src="{{ ('public/home/js/isotope-docs.min.js') }}"></script>
	<!-- <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script> -->
    <script type="text/javascript" src="{{ asset('public/home/js/custom.js') }}"></script>
	<script>
		 $(".main-nav").sticky();
	</script>

	<script>
		// Scroll to top button appear
		$(document).on('scroll', function() {
		var scrollDistance = $(this).scrollTop();
		if (scrollDistance > 100) {
			$('.scroll-to-top').fadeIn();
			
		} else {
			$('.scroll-to-top').fadeOut();
		}
		});

		// Smooth scrolling using jQuery easing
		$(document).on('click', 'a.scroll-to-top', function(event) {
		$("html, body").animate({ scrollTop: 0 }, "slow");
		event.preventDefault();
		});
		new WOW().init();
    </script>
  </body>
</html>
