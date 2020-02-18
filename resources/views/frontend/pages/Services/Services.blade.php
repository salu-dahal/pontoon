@php $title ="Pontoon|Services" @endphp
@extends('frontend.master.master')
@section('content')

<section id="mu-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="mu-contact-area">
					<!-- start title -->
					<div class="mu-title">
						<h2>We Provide??</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="w3-container">
			<div class="w3-display-container w3-hover-opacity" style="width:100%">
				<img src="frontend/images/img.jpg" width="100%" height="500">
				<div class="w3-display-topmiddle w3-display-hover w3-xxlarge">
					<div class="w3-animate-fade-in">
						<span class="w3-button w3-hover-purple">Facilities:</span>
					</div>
				</div>
				<div class="w3-display-middle w3-display-hover w3-medium">
					<div class="w3-animate-fade-in" style="text-align: center">
						<!--<span class="w3-padding w3-display-topmiddle">Facilities Like</span>-->
						<span class="w3-button w3-round w3-hover-green"><a href="#DM">Digital Marketing</a></span>
						<span class="w3-button w3-round w3-hover-green"><a href="#Motion">Motion Design</a></span>
						<span class="w3-button w3-round w3-hover-green"><a href="#Graphics">Graphics Design</a></span>
						<span class="w3-button w3-round w3-hover-green"><a href="#Web">Web Development</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a name="Graphics">
		<div class="col-md-6">
			<div class="mu-from-blog-area">

				<!-- start from blog content   -->
				<div class="mu-from-blog-content">
					<div class="row">

						<div class="col-md-12 col-sm-4">
							<article class="mu-blog-single-item">
								<figure class="mu-blog-single-img">
									<a href="#"><img src="frontend/images/img.jpg" alt="img"></a>
									<figcaption class="mu-blog-caption">
										<h3>Graphic designer</h3>
									</figcaption>
								</figure>

								<div class="mu-blog-description">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non
										<span id="dots">....</span><span id="more">voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.
										</span></p>
									<button onclick="fun()" id="myBtn">Read More</button>
								</div>
							</article>
						</div>


					</div>
				</div>
				<!-- end from blog content   -->
			</div>
		</div>
	</a>

	<!-- End from blog -->
	<a name="Motion">
		<div class="col-md-6">
			<div class="mu-from-blog-area">

				<!-- start from blog content   -->
				<div class="mu-from-blog-content">
					<div class="row">
						<div class="col-md-12 col-sm-4">
							<article class="mu-blog-single-item">
								<figure class="mu-blog-single-img">
									<a href="#"><img src="frontend/images/img.jpg" alt="img"></a>
									<figcaption class="mu-blog-caption">
										<h3>Motion designer</h3>
									</figcaption>
								</figure>

								<div class="mu-blog-description">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
									<a class="mu-read-more-btn" href="#">Read More</a>
								</div>
							</article>
						</div>



					</div>
				</div>
				<!-- end from blog content   -->
			</div>
		</div>
		</div>
		</div>
	</a>
</section>
<!-- End from blog -->

<!-- Start from blog -->

<section id="mu-from-blog">
	<a name="Web">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="mu-from-blog-area">

						<!-- start from blog content   -->
						<div class="mu-from-blog-content">
							<div class="row">
								<div class="col-md-12 col-sm-4">
									<article class="mu-blog-single-item">
										<figure class="mu-blog-single-img">
											<a href="#"><img src="frontend/images/img.jpg" alt="img"></a>
											<figcaption class="mu-blog-caption">
												<h3>Web development</h3>
											</figcaption>
										</figure>

										<div class="mu-blog-description">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
											<a class="mu-read-more-btn" href="#">Read More</a>
										</div>
									</article>
								</div>


							</div>
						</div>
						<!-- end from blog content   -->
					</div>
				</div>
	</a>

	<!-- End from blog -->
	<a name="DM">
		<div class="col-md-6">
			<div class="mu-from-blog-area">

				<!-- start from blog content   -->
				<div class="mu-from-blog-content">
					<div class="row">
						<div class="col-md-12 col-sm-4">
							<article class="mu-blog-single-item">
								<figure class="mu-blog-single-img">
									<a href="#"><img src="frontend/images/img.jpg" alt="img"></a>
									<figcaption class="mu-blog-caption">
										<h3>Digital Marketing</h3>
									</figcaption>
								</figure>

								<div class="mu-blog-description">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
									<a class="mu-read-more-btn" href="#">Read More</a>
								</div>
							</article>
						</div>


					</div>
				</div>
				<!-- end from blog content   -->
			</div>
		</div>
		</div>
		</div>
	</a>
</section>
<!-- End from blog -->



@stop