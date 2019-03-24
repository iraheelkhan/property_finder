@extends('layouts.public')
@section('title')
	Home Property Listing
@endsection
@section('content')
	<!-- Home Slider -->
	<div class="home">
		<div class="home_slider_container">
			 <div class="owl-carousel owl-theme home_slider">
			 	<!-- Slide -->
			 	<div class="slide">
			 		<div class="background_image" style="background-image:url({{asset('images/index.jpg')}})"></div>
			 		<div class="home_container">
			 			<div class="container">
			 				<div class="row">
			 					<div class="col">
			 						<div class="home_content">
			 							<div class="home_title"><h1>Fazle-Haq Road, Street 24, House 18, Islamabad</h1></div>
			 							<div class="home_price_tag">PKR 482 900</div>
			 						</div>
			 					</div>
			 				</div>
			 			</div>
			 		</div>
			 	</div>
			 	<!-- Slide -->
			 	<div class="slide">
			 		<div class="background_image" style="background-image:url({{asset('images/index.jpg')}})"></div>
			 		<div class="home_container">
			 			<div class="container">
			 				<div class="row">
			 					<div class="col">
			 						<div class="home_content">
			 							<div class="home_title"><h1><h1>Fazle-Haq Road, Street 24, House 18, Islamabad</h1></div>
			 							<div class="home_price_tag">PKR 482 900</div>
			 						</div>
			 					</div>
			 				</div>
			 			</div>
			 		</div>
			 	</div>
			 	
			 </div>
			 <!-- Home Slider Navigation -->
			 <div class="home_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
			 
		</div>
	</div>

	<!-- Search -->

	<div class="search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="search_container">
						<div class="search_title">Find your home</div>
						<div class="search_form_container">
							<form action="#" class="search_form" id="search_form">
								<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
									<div class="search_inputs d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
										<input type="text" class="search_input" placeholder="Property type" required="required">
										<input type="text" class="search_input" placeholder="No rooms" required="required">
										<input type="text" class="search_input" placeholder="Location" required="required">
									</div>
									<button class="search_button">submit listing</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Featured: available for Rent -->
	<div class="featured">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">The best deals</div>
						<div class="section_title"><h1>Featured Properties</h1></div>
					</div>
				</div>
			</div>
			<div class="row featured_row">
				
				<!-- Featured Item -->
				<div class="col-lg-4">
					<div class="listing">
						<div class="listing_image">
							<div class="listing_image_container">
								<img src="{{asset('images/listing_1.jpg')}}" alt="">
							</div>
							<div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
								<div class="tag tag_house"><a href="listings.html">house</a></div>
								<div class="tag tag_sale"><a href="listings.html">for sale</a></div>
							</div>
							<div class="tag_price listing_price">PKR 217 346</div>
						</div>
						<div class="listing_content">
							<div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
								<img src="{{asset('images/icon_1.png')}}" alt="">
								<a href="single.html">280 Doe Meadow Drive Landover, MD 20785</a>
							</div>
							<div class="listing_info">
								<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
									<li class="property_area d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_2.png')}}" alt="">
										<span>2500 sq ft</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_3.png')}}" alt="">
										<span>2</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_4.png')}}" alt="">
										<span>5</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_5.png')}}" alt="">
										<span>2</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Featured Item -->
				<div class="col-lg-4">
					<div class="listing">
						<div class="listing_image">
							<div class="listing_image_container">
								<img src="{{asset('images/listing_2.jpg')}}" alt="">
							</div>
							<div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
								<div class="tag tag_house"><a href="listings.html">house</a></div>
								<div class="tag tag_rent"><a href="listings.html">for rent</a></div>
							</div>
							<div class="tag_price listing_price">PKR 515 957</div>
						</div>
						<div class="listing_content">
							<div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
								<img src="{{asset('images/icon_1.png')}}" alt="">
								<a href="single.html">4812 Haul Road Saint Paul, MN 55102</a>
							</div>
							<div class="listing_info">
								<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
									<li class="property_area d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_2.png')}}" alt="">
										<span>1234 sq ft</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_3.png')}}" alt="">
										<span>2</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_4.png')}}" alt="">
										<span>5</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_5.png')}}" alt="">
										<span>2</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Featured Item -->
				<div class="col-lg-4">
					<div class="listing">
						<div class="listing_image">
							<div class="listing_image_container">
								<img src="{{asset('images/listing_3.jpg')}}" alt="">
							</div>
							<div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
								<div class="tag tag_house"><a href="listings.html">house</a></div>
								<div class="tag tag_sale"><a href="listings.html">for sale</a></div>
							</div>
							<div class="tag_price listing_price">PKR 375 255</div>
						</div>
						<div class="listing_content">
							<div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
								<img src="{{asset('images/icon_1.png')}}" alt="">
								<a href="single.html">4067 Wolf Pen Road Mountain View, CA 94041</a>
							</div>
							<div class="listing_info">
								<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
									<li class="property_area d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_2.png')}}" alt="">
										<span>2000 sq ft</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_3.png')}}" alt="">
										<span>2</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_4.png')}}" alt="">
										<span>5</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_5.png')}}" alt="">
										<span>2</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Available for Sale -->
	<div class="hot">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">the best deals</div>
						<div class="section_title"><h1>Today's Hot Deal</h1></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9">
					<div class="row hot_row row-eq-height">
						<!-- Hot Deal Image -->
						<div class="col-lg-4">
							<div class="hot_image">
								<div class="background_image" style="background-image:url(images/hot.jpg)"></div>
								<div class="tag_price">PKR 562 346</div>
								<div class="tags tags_custom d-flex flex-row align-items-start justify-content-start flex-wrap">
									<div class="tag tag_house"><a href="listings.html">house</a></div>
									<div class="tag tag_sale"><a href="listings.html">for sale</a></div>
								</div>
							</div>
						</div>
						<!-- Hot Deal Content -->
						<div class="col-lg-8">
							<div class="hot_content">
								<div class="hot_deal">
									
									<div class="hot_title"><a href="#">Villa for sale</a></div>
									<div class="prop_location d-flex flex-row align-items-start justify-content-start">
										<img src="images/icon_1.png" alt="">
										<span>280 Doe Meadow Drive Landover, MD 20785</span>
									</div>
									
									<div class="prop_agent d-flex flex-row align-items-center justify-content-start">
										<div class="prop_agent_image"><img src="images/agent_1.jpg" alt=""></div>
										<div class="prop_agent_name"><a href="#">Maria Smith,</a> Agent</div>
									</div>
								</div>
								<div class="prop_info">
									<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/icon_2_large.png" alt="">
											<div>
												<div>1234</div>
												<div>sq ft</div>
											</div>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/icon_3_large.png" alt="">
											<div>
												<div>2</div>
												<div>baths</div>
											</div>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/icon_4_large.png" alt="">
											<div>
												<div>5</div>
												<div>beds</div>
											</div>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/icon_5_large.png" alt="">
											<div>
												<div>2</div>
												<div>garages</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row hot_row row-eq-height">
						<!-- Hot Deal Image -->
						<div class="col-lg-4">
							<div class="hot_image">
								<div class="background_image" style="background-image:url(images/hot.jpg)"></div>
								<div class="tag_price">PKR 562 346</div>
								<div class="tags tags_custom d-flex flex-row align-items-start justify-content-start flex-wrap">
									<div class="tag tag_house"><a href="listings.html">house</a></div>
									<div class="tag tag_sale"><a href="listings.html">for sale</a></div>
								</div>
							</div>
						</div>
						<!-- Hot Deal Content -->
						<div class="col-lg-8">
							<div class="hot_content">
								<div class="hot_deal">
									
									<div class="hot_title"><a href="#">Villa for sale</a></div>
									<div class="prop_location d-flex flex-row align-items-start justify-content-start">
										<img src="images/icon_1.png" alt="">
										<span>280 Doe Meadow Drive Landover, MD 20785</span>
									</div>
									
									<div class="prop_agent d-flex flex-row align-items-center justify-content-start">
										<div class="prop_agent_image"><img src="images/agent_1.jpg" alt=""></div>
										<div class="prop_agent_name"><a href="#">Maria Smith,</a> Agent</div>
									</div>
								</div>
								<div class="prop_info">
									<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/icon_2_large.png" alt="">
											<div>
												<div>1234</div>
												<div>sq ft</div>
											</div>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/icon_3_large.png" alt="">
											<div>
												<div>2</div>
												<div>baths</div>
											</div>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/icon_4_large.png" alt="">
											<div>
												<div>5</div>
												<div>beds</div>
											</div>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/icon_5_large.png" alt="">
											<div>
												<div>2</div>
												<div>garages</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="listing">
						<div class="listing_image">
							<div class="listing_image_container">
								<img src="{{asset('images/listing_1.jpg')}}" alt="">
							</div>
							<div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
								<div class="tag tag_house"><a href="listings.html">house</a></div>
								<div class="tag tag_sale"><a href="listings.html">for sale</a></div>
							</div>
							<div class="tag_price listing_price">PKR 217 346</div>
						</div>
						<div class="listing_content">
							<div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
								<img src="{{asset('images/icon_1.png')}}" alt="">
								<a href="single.html">280 Doe Meadow Drive Landover, MD 20785</a>
							</div>
							<div class="listing_info">
								<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
									<li class="property_area d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_2.png')}}" alt="">
										<span>2500 sq ft</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_3.png')}}" alt="">
										<span>2</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_4.png')}}" alt="">
										<span>5</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_5.png')}}" alt="">
										<span>2</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row hot_row row-eq-height">
				
				<!-- Hot Deal Image -->
				<div class="col-lg-4">
					<div class="hot_image">
						<div class="background_image" style="background-image:url(images/hot.jpg)"></div>
						<div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
							<div class="tag tag_house"><a href="listings.html">house</a></div>
							<div class="tag tag_sale"><a href="listings.html">for sale</a></div>
						</div>
					</div>
				</div>

				<!-- Hot Deal Content -->
				<div class="col-lg-6">
					<div class="hot_content">
						<div class="hot_deal">
							<div class="tag_price">PKR 562 346</div>
							<div class="hot_title"><a href="#">Villa for sale</a></div>
							<div class="prop_location d-flex flex-row align-items-start justify-content-start">
								<img src="images/icon_1.png" alt="">
								<span>280 Doe Meadow Drive Landover, MD 20785</span>
							</div>
							
							<div class="prop_agent d-flex flex-row align-items-center justify-content-start">
								<div class="prop_agent_image"><img src="images/agent_1.jpg" alt=""></div>
								<div class="prop_agent_name"><a href="#">Maria Smith,</a> Agent</div>
							</div>
						</div>
						<div class="prop_info">
							<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<img src="images/icon_2_large.png" alt="">
									<div>
										<div>1234</div>
										<div>sq ft</div>
									</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<img src="images/icon_3_large.png" alt="">
									<div>
										<div>2</div>
										<div>baths</div>
									</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<img src="images/icon_4_large.png" alt="">
									<div>
										<div>5</div>
										<div>beds</div>
									</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<img src="images/icon_5_large.png" alt="">
									<div>
										<div>2</div>
										<div>garages</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="row hot_row row-eq-height">
				
				<!-- Hot Deal Image -->
				<div class="col-lg-4">
					<div class="hot_image">
						<div class="background_image" style="background-image:url(images/hot.jpg)"></div>
						<div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
							<div class="tag tag_house"><a href="listings.html">house</a></div>
							<div class="tag tag_sale"><a href="listings.html">for sale</a></div>
						</div>
					</div>
				</div>

				<!-- Hot Deal Content -->
				<div class="col-lg-6">
					<div class="hot_content">
						<div class="hot_deal">
							<div class="tag_price">PKR 562 346</div>
							<div class="hot_title"><a href="#">Villa for sale</a></div>
							<div class="prop_location d-flex flex-row align-items-start justify-content-start">
								<img src="images/icon_1.png" alt="">
								<span>280 Doe Meadow Drive Landover, MD 20785</span>
							</div>
							
							<div class="prop_agent d-flex flex-row align-items-center justify-content-start">
								<div class="prop_agent_image"><img src="images/agent_1.jpg" alt=""></div>
								<div class="prop_agent_name"><a href="#">Maria Smith,</a> Agent</div>
							</div>
						</div>
						<div class="prop_info">
							<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<img src="images/icon_2_large.png" alt="">
									<div>
										<div>1234</div>
										<div>sq ft</div>
									</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<img src="images/icon_3_large.png" alt="">
									<div>
										<div>2</div>
										<div>baths</div>
									</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<img src="images/icon_4_large.png" alt="">
									<div>
										<div>5</div>
										<div>beds</div>
									</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<img src="images/icon_5_large.png" alt="">
									<div>
										<div>2</div>
										<div>garages</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- need material for house -->
	<div class="featured">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">The best deals</div>
						<div class="section_title"><h1>Featured Properties</h1></div>
					</div>
				</div>
			</div>
			<div class="row featured_row">
				
				<!-- Featured Item -->
				<div class="col-lg-4">
					<div class="listing">
						<div class="listing_image">
							<div class="listing_image_container">
								<img src="{{asset('images/listing_1.jpg')}}" alt="">
							</div>
							<div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
								<div class="tag tag_house"><a href="listings.html">house</a></div>
								<div class="tag tag_sale"><a href="listings.html">for sale</a></div>
							</div>
							<div class="tag_price listing_price">PKR 217 346</div>
						</div>
						<div class="listing_content">
							<div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
								<img src="{{asset('images/icon_1.png')}}" alt="">
								<a href="single.html">280 Doe Meadow Drive Landover, MD 20785</a>
							</div>
							<div class="listing_info">
								<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
									<li class="property_area d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_2.png')}}" alt="">
										<span>2500 sq ft</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_3.png')}}" alt="">
										<span>2</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_4.png')}}" alt="">
										<span>5</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_5.png')}}" alt="">
										<span>2</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Featured Item -->
				<div class="col-lg-4">
					<div class="listing">
						<div class="listing_image">
							<div class="listing_image_container">
								<img src="{{asset('images/listing_2.jpg')}}" alt="">
							</div>
							<div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
								<div class="tag tag_house"><a href="listings.html">house</a></div>
								<div class="tag tag_rent"><a href="listings.html">for rent</a></div>
							</div>
							<div class="tag_price listing_price">PKR 515 957</div>
						</div>
						<div class="listing_content">
							<div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
								<img src="{{asset('images/icon_1.png')}}" alt="">
								<a href="single.html">4812 Haul Road Saint Paul, MN 55102</a>
							</div>
							<div class="listing_info">
								<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
									<li class="property_area d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_2.png')}}" alt="">
										<span>1234 sq ft</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_3.png')}}" alt="">
										<span>2</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_4.png')}}" alt="">
										<span>5</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_5.png')}}" alt="">
										<span>2</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Featured Item -->
				<div class="col-lg-4">
					<div class="listing">
						<div class="listing_image">
							<div class="listing_image_container">
								<img src="{{asset('images/listing_3.jpg')}}" alt="">
							</div>
							<div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
								<div class="tag tag_house"><a href="listings.html">house</a></div>
								<div class="tag tag_sale"><a href="listings.html">for sale</a></div>
							</div>
							<div class="tag_price listing_price">PKR 375 255</div>
						</div>
						<div class="listing_content">
							<div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
								<img src="{{asset('images/icon_1.png')}}" alt="">
								<a href="single.html">4067 Wolf Pen Road Mountain View, CA 94041</a>
							</div>
							<div class="listing_info">
								<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
									<li class="property_area d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_2.png')}}" alt="">
										<span>2000 sq ft</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_3.png')}}" alt="">
										<span>2</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_4.png')}}" alt="">
										<span>5</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_5.png')}}" alt="">
										<span>2</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection