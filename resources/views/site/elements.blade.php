@extends('layouts.master_site')

@section('title')

ELEMENTS | B-SITE SOLUTION

@endsection

@section('content')
		
		<div id="fh5co-hero" style="background-image: url({{ url('uploads/images/slide_2.jpg') }});">
			<div class="overlay"></div>
			<a href="#fh5co-main" class="smoothscroll fh5co-arrow to-animate hero-animate-4"><i class="ti-angle-down"></i></a>
			<!-- End fh5co-arrow -->
			<div class="container">
				<div class="col-md-8 col-md-offset-2">
					<div class="fh5co-hero-wrap">
						<div class="fh5co-hero-intro">
							<h1 class="to-animate hero-animate-1">Elements &amp; Components</h1>
							<h2 class="to-animate hero-animate-2">Lovely Made by <a href="http://freehtml5.co" target="_blank">FREEHTML5.co</a></h2>
							<p class="to-animate hero-animate-3"><a href="#" class="btn btn-outline btn-lg">Get Started</a></p>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<div id="fh5co-main">
	
			<div class="container">

				<!-- 
				///////////////////////////////////
				Features
				///////////////////////////////////
				-->
				<div class="row" id="fh5co-features">
					
					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box">
						<div class="fh5co-feature-icon">
							<i class="ti-mobile"></i>
						</div>
						<h3 class="heading">Mobile</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste sunt porro delectus cum officia magnam.</p>
					</div>
					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box"> 
						<div class="fh5co-feature-icon">
							<i class="ti-lock"></i>
						</div>
						<h3 class="heading">Lock</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste sunt porro delectus cum officia magnam. </p>
					</div>

					<div class="clearfix visible-sm-block"></div>

					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box"> 
						<div class="fh5co-feature-icon">
							<i class="ti-video-camera"></i>
						</div>
						<h3 class="heading">Video</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste sunt porro delectus cum officia magnam.</p>
					</div>

					<div class="clearfix visible-md-block visible-lg-block"></div>

					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box">
						<div class="fh5co-feature-icon">
							<i class="ti-shopping-cart"></i>
						</div>
						<h3 class="heading">Shop</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste sunt porro delectus cum officia magnam. </p>
					</div>

					<div class="clearfix visible-sm-block"></div>

					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box"> 
						<div class="fh5co-feature-icon">
							<i class="ti-palette"></i>
						</div>
						<h3 class="heading">Pallete</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste sunt porro delectus cum officia magnam.</p>
					</div>
					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box"> 
						<div class="fh5co-feature-icon">
							<i class="ti-truck"></i>
						</div>
						<h3 class="heading">Deliver</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste sunt porro delectus cum officia magnam.</p>
					</div>
				</div>
				<!-- END row -->

				<div class="fh5co-spacer fh5co-spacer-md"></div>
				<!-- End Spacer -->

				<!-- 
				///////////////////////////////////
				Portfolio 
				///////////////////////////////////
				-->

				<div class="row" id="fh5co-works">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-section-heading work-box">
						<h2 class="fh5co-lead">Awesome Projects</h2>
						<p class="fh5co-sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis. Ut, dolores sit amet consectetur adipisicing elit.</p>
						<div class="fh5co-spacer fh5co-spacer-sm"></div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 text-center fh5co-work-item work-box">
						<figure><a href="#"><img class="img-responsive" src="{{asset('uploads/images/img_large_1.jpg')}}" alt="Free HTML5 Template"></a></figure>
						<p class="fh5co-category">Web Design, Identity, Packaging </p>
						<h3 class="heading">Work no. 1</h3>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 text-center fh5co-work-item work-box"> 
						<figure><a href="#"><img class="img-responsive" src="{{asset('uploads/images/img_large_2.jpg')}}" alt="Free HTML5 Template"></a></figure>
						<p class="fh5co-category">Web Design, Identity, Packaging </p>
						<h3 class="heading">Work no. 2</h3>
					</div>

					<div class="clearfix visible-sm-block visible-xs-block"></div>

					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 text-center fh5co-work-item work-box"> 
						<figure><a href="#"><img class="img-responsive" src="{{asset('uploads/images/img_large_3.jpg')}}" alt="Free HTML5 Template"></a></figure>
						<p class="fh5co-category">Web Design, Identity, Packaging </p>
						<h3 class="heading">Work no. 3</h3>
					</div>

					<div class="clearfix visible-md-block visible-lg-block"></div>

					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 text-center fh5co-work-item work-box">
						<figure><a href="#"><img class="img-responsive" src="{{asset('uploads/images/img_large_4.jpg')}}" alt="Free HTML5 Template"></a></figure>
						<p class="fh5co-category">Web Design, Identity, Packaging </p>
						<h3 class="heading">Work no. 4</h3>
					</div>

					<div class="clearfix visible-sm-block visible-xs-block"></div>

					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 text-center fh5co-work-item work-box"> 
						<figure><a href="#"><img class="img-responsive" src="{{asset('uploads/images/img_large_5.jpg')}}" alt="Free HTML5 Template"></a></figure>
						<p class="fh5co-category">Web Design, Identity, Packaging </p>
						<h3 class="heading">Work no. 5</h3>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 text-center fh5co-work-item work-box"> 
						<figure><a href="#"><img class="img-responsive" src="{{asset('uploads/images/img_large_6.jpg')}}" alt="Free HTML5 Template"></a></figure>
						<p class="fh5co-category">Web Design, Identity, Packaging </p>
						<h3 class="heading">Work no. 6</h3>
					</div>

					<div class="col-md-4 col-md-offset-4 text-center work-box">
						<p><a href="#" class="btn btn-outline btn-md">View Portfolio</a></p>
					</div>
				</div>
				<!-- END row -->

			</div>
			<!-- END container -->
				
			<div class="fh5co-spacer fh5co-spacer-md"></div>

			<!-- Responsive Tabs -->
			<div class="container">
				
				<!-- 
				///////////////////////////////////
				Responsive Tabs
				///////////////////////////////////
				-->


				<div class="row">
					<div class="col-md-12 animate-box">
						<h2 class="fh5co-uppercase-heading-sm text-center">Fully Responsive Tabs</h2>
						
						<div class="fh5co-spacer fh5co-spacer-sm"></div>

						<div id="fh5co-tab-feature-center" class="fh5co-tab text-center">
							<ul class="resp-tabs-list hor_1">
								<li><i class="fh5co-tab-menu-icon ti-ruler-pencil"></i>Design</li>
								<li><i class="fh5co-tab-menu-icon ti-paint-bucket"></i> Branding</li>
								<li><i class="fh5co-tab-menu-icon ti-shopping-cart"></i> E-Commerce</li>
							</ul>
							<div class="resp-tabs-container hor_1">
								<div>
									<div class="row">
										<div class="col-md-12">
											<h2 class="h3">Aesthetic Design</h2>
										</div>
										<div class="col-md-6">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quis deserunt dolorem, debitis cupiditate nihil velit dolores, inventore voluptatem delectus quos atque similique natus eaque qui, nisi repudiandae dolore sit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aut maxime eius magnam. Ipsa qui consequatur laborum culpa recusandae ullam repellendus, quod cum nemo consequuntur quidem labore minima dignissimos, eum!</p>
										</div>
										<div class="col-md-6">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatem, vitae nesciunt ad hic quam quisquam sit possimus officia ratione. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, ex. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex fuga illum necessitatibus consequuntur aspernatur omnis quidem ut, similique esse assumenda.</p>
										</div>
									</div>
								</div>
								<div>
									<div class="row">
										<div class="col-md-12">
											<h2 class="h3">Branding &amp; Identity</h2>
										</div>
										<div class="col-md-6">
											<p>Nam tristique porttitor neque, sit amet aliquet metus ultricies non. Vestibulum lacinia ante sit amet enim iaculis tempus. Nulla aliquam tincidunt leo, et consequat justo viverra id. Maecenas lacinia libero vel iaculis tincidunt. Quisque luctus massa eu sodales vehicula. Duis gravida at nunc sit amet sagittis. Fusce pulvinar scelerisque enim, vel interdum erat ullamcorper a. Cras elementum mauris justo, quis lacinia erat mollis sed. Donec malesuada odio eu metus consequat interdum. </p>
										</div>
										<div class="col-md-6">
											<p>In varius, ex ut tincidunt tempor, nunc nisi commodo quam, vel volutpat ex eros id tellus. Morbi cursus libero mi. In condimentum leo in libero volutpat rutrum. Ut pellentesque finibus lacus, sed imperdiet ex tincidunt vel. Proin et blandit nisl, dapibus faucibus urna. Praesent et nisi dictum, placerat purus eget, varius est. Suspendisse potenti. Curabitur blandit faucibus auctor.</p>
										</div>
									</div>
								</div>
								<div>
									<div class="row">
										<div class="col-md-12">
											<h2 class="h3">Online Shop</h2>
										</div>
										<div class="col-md-6">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quis deserunt dolorem, debitis cupiditate nihil velit dolores, inventore voluptatem delectus quos atque similique natus eaque qui, nisi repudiandae dolore sit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aut maxime eius magnam.</p>
										</div>
										<div class="col-md-6">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatem, vitae nesciunt ad hic quam quisquam sit possimus officia ratione. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, ex. Lorem ipsum dolor sit amet.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<hr class="fh5co-spacer fh5co-spacer-sm">

					<div class="col-md-12 animate-box">
						<div id="fh5co-tab-feature" class="fh5co-tab">
							<ul class="resp-tabs-list hor_1">
								<li><i class="fh5co-tab-menu-icon ti-ruler-pencil"></i>Design</li>
								<li><i class="fh5co-tab-menu-icon ti-paint-bucket"></i> Branding</li>
								<li><i class="fh5co-tab-menu-icon ti-shopping-cart"></i> E-Commerce</li>
							</ul>
							<div class="resp-tabs-container hor_1">
								<div>
									<div class="row">
										<div class="col-md-12">
											<h2 class="h3">Aesthetic Design</h2>
										</div>
										<div class="col-md-6">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quis deserunt dolorem, debitis cupiditate nihil velit dolores, inventore voluptatem delectus quos atque similique natus eaque qui, nisi repudiandae dolore sit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aut maxime eius magnam. Ipsa qui consequatur laborum culpa recusandae ullam repellendus, quod cum nemo consequuntur quidem labore minima dignissimos, eum!</p>
										</div>
										<div class="col-md-6">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatem, vitae nesciunt ad hic quam quisquam sit possimus officia ratione. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, ex. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex fuga illum necessitatibus consequuntur aspernatur omnis quidem ut, similique esse assumenda.</p>
										</div>
									</div>
								</div>
								<div>
									<div class="row">
										<div class="col-md-12">
											<h2 class="h3">Branding &amp; Identity</h2>
										</div>
										<div class="col-md-6">
											<p>Nam tristique porttitor neque, sit amet aliquet metus ultricies non. Vestibulum lacinia ante sit amet enim iaculis tempus. Nulla aliquam tincidunt leo, et consequat justo viverra id. Maecenas lacinia libero vel iaculis tincidunt. Quisque luctus massa eu sodales vehicula. Duis gravida at nunc sit amet sagittis. Fusce pulvinar scelerisque enim, vel interdum erat ullamcorper a. Cras elementum mauris justo, quis lacinia erat mollis sed. Donec malesuada odio eu metus consequat interdum. </p>
										</div>
										<div class="col-md-6">
											<p>In varius, ex ut tincidunt tempor, nunc nisi commodo quam, vel volutpat ex eros id tellus. Morbi cursus libero mi. In condimentum leo in libero volutpat rutrum. Ut pellentesque finibus lacus, sed imperdiet ex tincidunt vel. Proin et blandit nisl, dapibus faucibus urna. Praesent et nisi dictum, placerat purus eget, varius est. Suspendisse potenti. Curabitur blandit faucibus auctor.</p>
										</div>
									</div>
								</div>
								<div>
									<div class="row">
										<div class="col-md-12">
											<h2 class="h3">Online Shop</h2>
										</div>
										<div class="col-md-6">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quis deserunt dolorem, debitis cupiditate nihil velit dolores, inventore voluptatem delectus quos atque similique natus eaque qui, nisi repudiandae dolore sit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aut maxime eius magnam.</p>
										</div>
										<div class="col-md-6">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatem, vitae nesciunt ad hic quam quisquam sit possimus officia ratione. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, ex. Lorem ipsum dolor sit amet.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<hr class="fh5co-spacer fh5co-spacer-sm">

					<div class="col-md-12 animate-box">
						<div id="fh5co-tab-feature-vertical" class="fh5co-tab">
							<ul class="resp-tabs-list hor_1">
								<li><i class="fh5co-tab-menu-icon ti-ruler-pencil"></i>Design</li>
								<li><i class="fh5co-tab-menu-icon ti-paint-bucket"></i> Branding</li>
								<li><i class="fh5co-tab-menu-icon ti-shopping-cart"></i> E-Commerce</li>
							</ul>
							<div class="resp-tabs-container hor_1">
								<div>
									<div class="row">
										<div class="col-md-12">
											<h2 class="h3">Aesthetic Design</h2>
										</div>
										<div class="col-md-6">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quis deserunt dolorem, debitis cupiditate nihil velit dolores, inventore voluptatem delectus quos atque similique natus eaque qui, nisi repudiandae dolore sit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aut maxime eius magnam. Ipsa qui consequatur laborum culpa recusandae ullam repellendus, quod cum nemo consequuntur quidem labore minima dignissimos, eum!</p>
										</div>
										<div class="col-md-6">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatem, vitae nesciunt ad hic quam quisquam sit possimus officia ratione. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, ex. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex fuga illum necessitatibus consequuntur aspernatur omnis quidem ut, similique esse assumenda.</p>
										</div>
									</div>
								</div>
								<div>
									<div class="row">
										<div class="col-md-12">
											<h2 class="h3">Branding &amp; Identity</h2>
										</div>
										<div class="col-md-6">
											<p>Nam tristique porttitor neque, sit amet aliquet metus ultricies non. Vestibulum lacinia ante sit amet enim iaculis tempus. Nulla aliquam tincidunt leo, et consequat justo viverra id. Maecenas lacinia libero vel iaculis tincidunt. Quisque luctus massa eu sodales vehicula. Duis gravida at nunc sit amet sagittis. Fusce pulvinar scelerisque enim, vel interdum erat ullamcorper a. Cras elementum mauris justo, quis lacinia erat mollis sed. Donec malesuada odio eu metus consequat interdum. </p>
										</div>
										<div class="col-md-6">
											<p>In varius, ex ut tincidunt tempor, nunc nisi commodo quam, vel volutpat ex eros id tellus. Morbi cursus libero mi. In condimentum leo in libero volutpat rutrum. Ut pellentesque finibus lacus, sed imperdiet ex tincidunt vel. Proin et blandit nisl, dapibus faucibus urna. Praesent et nisi dictum, placerat purus eget, varius est. Suspendisse potenti. Curabitur blandit faucibus auctor.</p>
										</div>
									</div>
								</div>
								<div>
									<div class="row">
										<div class="col-md-12">
											<h2 class="h3">Online Shop</h2>
										</div>
										<div class="col-md-6">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quis deserunt dolorem, debitis cupiditate nihil velit dolores, inventore voluptatem delectus quos atque similique natus eaque qui, nisi repudiandae dolore sit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aut maxime eius magnam.</p>
										</div>
										<div class="col-md-6">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatem, vitae nesciunt ad hic quam quisquam sit possimus officia ratione. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, ex. Lorem ipsum dolor sit amet.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- END Tabs -->
				</div>

				<!-- END .row -->

				<div class="fh5co-spacer fh5co-spacer-md"></div>
				

				<!-- 
				///////////////////////////////////
				Forms 
				///////////////////////////////////
				-->

				<div class="row">
					<div class="col-md-12 animate-box">
						<h2 class="fh5co-uppercase-heading-sm text-center">Form</h2>
						<div class="fh5co-spacer fh5co-spacer-sm"></div>
					</div>
					<div class="col-md-8 col-md-offset-2 animate-box">
						<form action="#" method="post">
							<div class="col-md-6">
								<div class="form-group">
									<label for="name" class="sr-only">Email</label>
									<input placeholder="Name" id="name" type="text" class="form-control input-lg">
								</div>	
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input placeholder="Email" id="email" type="text" class="form-control input-lg">
								</div>	
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="gender" class="sr-only">Gender</label>
									<select class="form-control input-lg" id="gender">
									  <option>--Gender--</option>
									  <option>Male</option>
									  <option>Female</option>
									</select>
								</div>	
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="message" class="sr-only">Message</label>
									<textarea placeholder="Message" id="message" class="form-control input-lg" rows="3"></textarea>
								</div>	
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="submit" class="btn btn-primary btn-lg " value="Send">

									<input type="reset" class="btn btn-outline btn-lg " value="Reset">
								</div>	
							</div>
						</form>	
					</div>
					
				</div>
				<!-- END row -->

				<div class="fh5co-spacer fh5co-spacer-sm"></div>


				<!-- 
				///////////////////////////////////
				Lists & Heading Level 
				///////////////////////////////////
				-->

				<div class="row">
					<div class="col-md-12 animate-box">
						<h2 class="fh5co-uppercase-heading-sm text-center">Lists &amp; Heading Level</h2>
						<div class="fh5co-spacer fh5co-spacer-sm"></div>
					</div>
					<div class="col-md-4 animate-box">
						<h3>Unordered List</h3>
						<ul>
							<li>Convallis ut dictum vel venenatis id turpis</li>
							<li>Nam faucibus orci sit amet lorem lacinia</li>
							<li>A blandit dui vulputate</li>
							<li>Praesent finibus mi sed dignissim ullamcorper
								<ul>
									<li>A blandit dui vulputate</li>
									<li>Sed dignissim ullamcorper</li>
									<li>Vel venenatis id turpis</li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="col-md-4 animate-box">
						<h3>Ordered List</h3>
						<ol>
							<li>Convallis ut dictum vel venenatis id turpis</li>
							<li>Nam faucibus orci sit amet lorem lacinia</li>
							<li>A blandit dui vulputate</li>
							<li>Praesent finibus mi sed dignissim ullamcorper
								<ol>
									<li>A blandit dui vulputate</li>
									<li>Sed dignissim ullamcorper</li>
									<li>Vel venenatis id turpis</li>
								</ol>
							</li>
						</ol>
					</div>
					<div class="col-md-4 animate-box">
						<h1>Heading Level 1</h1>
						<h2>Heading Level 2</h2>
						<h3>Heading Level 3</h3>
						<h4>Heading Level 4</h4>
						<h5>Heading Level 5</h5>
						<h6>Heading Level 6</h6>
					</div>
				</div>
				<!-- END row -->

				<div class="fh5co-spacer fh5co-spacer-md"></div>

				<!-- 
				///////////////////////////////////
				Accordions & Progress Bars 
				///////////////////////////////////
				-->

				<div class="row">
					<div class="col-md-12 animate-box">
						<h2 class="fh5co-uppercase-heading-sm text-center">Accordions &amp; Progress Bars</h2>
						<div class="fh5co-spacer fh5co-spacer-sm"></div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="panel-group fh5co-accordion" id="accordion" role="tablist" aria-multiselectable="true">
				  <div class="panel panel-default ">
				    <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
				      <h4 class="panel-title">
				      	
				        <a class="accordion-toggle">
				          Cnon cupidatat skateboard dolor 
				        </a>
				      </h4>
				    </div>
				    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				      <div class="panel-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				      <h4 class="panel-title">
				      	
				        <a class="accordion-toggle">
				          Anim pariatur cliche reprehenderit 
				        </a>
				      </h4>
				    </div>
				    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				      <div class="panel-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				      <h4 class="panel-title">

				        <a class="accordion-toggle">Raw denim aesthetic synth</a>
				      </h4>
				    </div>
				    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				      <div class="panel-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				  </div>
				</div>
				</div>
				<div class="col-md-6 animate-box">	
					<h3 class="h4 fh5co-no-margin-bottom">Web Development</h3>
					<div class="progress">
					  <div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
					    <span class="sr-only">40% Complete (success)</span>
					  </div>
					</div>
					<h3 class="h4 fh5co-no-margin-bottom">Wordpress Integration</h3>
					<div class="progress">
					  <div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
					    <span class="sr-only">20% Complete</span>
					  </div>
					</div>
					<h3 class="h4 fh5co-no-margin-bottom">Bootstrap 3</h3>
					<div class="progress">
					  <div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
					    <span class="sr-only">60% Complete (warning)</span>
					  </div>
					</div>
					<h3 class="h4 fh5co-no-margin-bottom">Python/Django</h3>
					<div class="progress">
					  <div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
					    <span class="sr-only">80% Complete (danger)</span>
					  </div>
					</div>
				</div>
			</div>
			<!-- END row -->

				<div class="fh5co-spacer fh5co-spacer-md"></div>

				<!-- 
				///////////////////////////////////
				Images Alignment
				///////////////////////////////////
				-->

				<div class="row">
					<div class="col-md-12 animate-box">
						<h2 class="fh5co-uppercase-heading-sm text-center">Images Alignment</h2>
						<div class="fh5co-spacer fh5co-spacer-sm"></div>
					</div>
					<div class="col-md-12 animate-box">
						<img src="images/image_1.jpg" alt="Images" class="fh5co-align-left img-responsive">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, asperiores, hic. Nihil, fugit. Illo maxime nemo minus magnam recusandae, ab culpa dignissimos velit. Consequatur voluptate, veniam ad ea asperiores sequi culpa, distinctio qui voluptates enim, fugit sint architecto rerum numquam deleniti incidunt ipsa omnis soluta similique quaerat deserunt provident repellendus excepturi! Alias natus dicta quasi hic obcaecati, pariatur eaque enim suscipit exercitationem quo libero eveniet aliquam repudiandae, nobis, quos tenetur ipsa quia eligendi expedita beatae laboriosam non molestias rem. Totam, aspernatur qui eos harum iusto reprehenderit corporis similique. Corporis delectus ullam earum sint in cum repellat laborum error et dolorum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi ipsam, sint voluptas esse quaerat modi, ex minus provident est consectetur facilis enim vitae, cupiditate deleniti numquam illo labore maiores fuga dolorum. Quae tempora hic, dolorum possimus porro sapiente! Exercitationem velit harum, assumenda deserunt minus dolorem atque illo? Repudiandae atque, magni. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At sequi doloremque ullam consequuntur saepe eaque magnam incidunt eligendi inventore unde quaerat mollitia, delectus, autem blanditiis modi beatae accusantium sapiente aperiam, praesentium odit. Eum quos, quas quasi quae repudiandae, velit et facere explicabo excepturi eaque sint tempore distinctio suscipit aspernatur nostrum reiciendis accusantium tenetur. Tempora enim consequuntur eos? Provident, at, obcaecati doloremque exercitationem hic autem est veritatis, voluptatum quos ad voluptatem similique sint nam corporis. Quia minus numquam tempora officiis, quo corrupti tempore natus sequi placeat. Quibusdam veniam nesciunt modi doloribus sapiente rerum perspiciatis praesentium esse dicta, magnam quaerat, sit optio!</p>

						<img src="images/image_2.jpg" alt="Images" class="fh5co-align-right img-responsive">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, asperiores, hic. Nihil, fugit. Illo maxime nemo minus magnam recusandae, ab culpa dignissimos velit. Consequatur voluptate, veniam ad ea asperiores sequi culpa, distinctio qui voluptates enim, fugit sint architecto rerum numquam deleniti incidunt ipsa omnis soluta similique quaerat deserunt provident repellendus excepturi! Alias natus dicta quasi hic obcaecati, pariatur eaque enim suscipit exercitationem quo libero eveniet aliquam repudiandae, nobis, quos tenetur ipsa quia eligendi expedita beatae laboriosam non molestias rem. Totam, aspernatur qui eos harum iusto reprehenderit corporis similique. Corporis delectus ullam earum sint in cum repellat laborum error et dolorum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi ipsam, sint voluptas esse quaerat modi, ex minus provident est consectetur facilis enim vitae, cupiditate deleniti numquam illo labore maiores fuga dolorum. Quae tempora hic, dolorum possimus porro sapiente! Exercitationem velit harum, assumenda deserunt minus dolorem atque illo? Repudiandae atque, magni. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At sequi doloremque ullam consequuntur saepe eaque magnam incidunt eligendi inventore unde quaerat mollitia, delectus, autem blanditiis modi beatae accusantium sapiente aperiam, praesentium odit. Eum quos, quas quasi quae repudiandae, velit et facere explicabo excepturi eaque sint tempore distinctio suscipit aspernatur nostrum reiciendis accusantium tenetur. Tempora enim consequuntur eos? Provident, at, obcaecati doloremque exercitationem hic autem est veritatis, voluptatum quos ad voluptatem similique sint nam corporis. Quia minus numquam tempora officiis, quo corrupti tempore natus sequi placeat. Quibusdam veniam nesciunt modi doloribus sapiente rerum perspiciatis praesentium esse dicta, magnam quaerat, sit optio!</p>
					</div>
				</div>

			<!-- END row -->
			<div class="fh5co-spacer fh5co-spacer-md"></div>

			<div class="row">
				<!-- Start Slider -->
	          
	            <h2 class="fh5co-uppercase-heading-sm text-center animate-box">Slider</h2>
	            <div class="fh5co-spacer fh5co-spacer-xs"></div>

	            <!-- <div class="row">
	              <div class="col-md-12"> -->
	                <div class="owl-carousel owl-carousel-fullwidth animate-box">
	                    <div class="item"><a href="images/img_large_1.jpg" class="image-popup"><img src="{{asset('uploads/images/img_large_1.jpg')}}" alt="image"></a></div>
	                    <div class="item"><a href="images/img_large_1.jpg" class="image-popup"><img src="{{asset('uploads/images/img_large_2.jpg')}}" alt="image"></a></div>
	                    <div class="item"><a href="images/img_large_1.jpg" class="image-popup"><img src="{{asset('uploads/images/img_large_3.jpg')}}" alt="image"></a></div>
	                    <div class="item"><a href="images/img_large_1.jpg" class="image-popup"><img src="{{asset('uploads/images/img_large_4.jpg')}}" alt="image"></a></div>
	                    <div class="item"><a href="images/img_large_1.jpg" class="image-popup"><img src="{{asset('uploads/images/img_large_5.jpg')}}" alt="image"></a></div>
	                    <div class="item"><a href="images/img_large_1.jpg" class="image-popup"><img src="{{asset('uploads/images/img_large_6.jpg')}}" alt="image"></a></div>
	                 
	                </div>
	              <!-- </div>
	            </div> -->

	            <!-- End Slider -->

	            <div class="fh5co-spacer fh5co-spacer-lg"></div>

	            <!-- Start Slider Testimonial -->
	            <h2 class="fh5co-uppercase-heading-sm text-center animate-box">Customer Says...</h2>
	            <div class="fh5co-spacer fh5co-spacer-xs"></div>
	            <div class="owl-carousel-fullwidth animate-box">
	            <div class="item">
	              <p class="text-center quote">&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained. &rdquo; <cite class="author">&mdash; Ferdinand A. Porsche</cite></p>
	            </div>
	            <div class="item">
	              <p class="text-center quote">&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while. &rdquo;<cite class="author">&mdash; Steve Jobs</cite></p>
	            </div>
	            <div class="item">
	              <p class="text-center quote">&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly. &rdquo;<cite class="author">&mdash; Frank Chimero</cite></p>
	            </div>
	          </div>
	          <div class="fh5co-spacer fh5co-spacer-lg"></div>
	           <!-- End Slider Testimonial -->
			</div>
			<!-- END row -->



			</div>
			<!-- END container -->

		
		</div>
		<!-- END fhtco-main -->
@endsection