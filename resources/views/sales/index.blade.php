@extends('layouts.public')
@section('title')
	Rent Property Listing
@endsection
@section('content')
	<style>
	.hot_image
		{
			min-height: 0;
		}
	.hot_row {
		margin-top: 0px;
    	margin-bottom: 79px;	
	}
	.prop_agent_name{
		float: right;
	}

</style>
	<!-- Featured: available for Rent -->
	<div class="featured">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">The best sales Listings</div>
						<div class="section_title"><h1>Featured Properties</h1></div>
					</div>
				</div>
			</div>
			<div class="row featured_row">
				@foreach($salesfeatured as $data)
				<div class="col-lg-4">
					<div class="listing">
						<div class="listing_image">
							<a href="{{route('SubmitShow', $data->id)}}">
								<div class="listing_image_container">
									<img src="{{ asset('images/'.$data->featured_image) }}" alt="">
								</div>
							</a>
							<div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
								<div class="tag tag_house"><a href="#">house</a></div>
							<div class="tag tag_sale"><a href="#">for {{$data['type']}}</a></div>
							</div>
							<div class="tag_price listing_price">PKR {{number_format($data->price)}}</div>
						</div>
						<div class="listing_content">
								<div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
										<i class="fas fa-microphone fa-2x"></i>
										<a href="{{route('SubmitShow', $data->id)}}">{{ucwords($data['title'])}}</a>
									</div>
							<div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
								<img src="{{asset('images/icon_1.png')}}" alt="">
								<a href="{{route('SubmitShow', $data->id)}}">{{$data['house']}} {{$data['street_name']}} {{$data->area->area_name}}</a>
							</div>
							<div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
								<i class="fas fa-phone-square fa-lg" style="font-size: 2em"></i>
								<a href="{{route('SubmitShow', $data->id)}}">{{($data['contact1'] ? $data['contact1'] : $data->user->phone)	}}</a>
							</div>
							<div class="listing_info">
								<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
									<li class="property_area d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_2.png')}}" alt="">
										<span>{{($data['size'] ? $data['size'] : '00')	}} sq ft </span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_3.png')}}" alt="">
										<span>{{($data['bathroom'] ? $data['bathroom'] : 'NAN')	}}</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_4.png')}}" alt="">
										<span>{{($data['kitchens'] ? $data['kitchens'] : '00')	}}</span>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<img src="{{asset('images/icon_5.png')}}" alt="">
										<span>{{($data['bedrooms'] ? $data['bedrooms'] : 'NAN')	}}</span>
									</li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
				@endforeach
				<!-- Featured Item End -->
				
			</div>
		</div>
	</div>

	<!-- Available for Sale -->
	{{-- <div class="hot">
		<div class="container">
			<div class="row mb-5">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">the best sale listing</div>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9">
					@foreach($sales as $data)
					<div class="row hot_row row-eq-height">
						
						<div class="col-lg-4">
							<div class="hot_image">
								<a href="{{route('SubmitShow', $data->id)}}">
									<div class="background_image" style="background-image:url({{ asset('images/'.$data->featured_image) }})"></div>
									<div class="tag_price"> PKR {{number_format($data->price)}}</div>
								</a>
									<div class="tags tags_custom d-flex flex-row align-items-start justify-content-start flex-wrap">
									<div class="tag tag_house"><a href="{{route('SubmitShow', $data->id)}}">house</a></div>
									<div class="tag tag_sale"><a href="{{route('SubmitShow', $data->id)}}">for {{$data['type']}}</a></div>
									</div>
								
							</div>
						</div>
						<!-- Hot Deal Content -->
						<div class="col-lg-8">
							<div class="hot_content">
								<div class="hot_deal">
									
									<div class="hot_title"><a href="{{route('SubmitShow', $data->id)}}	">{{ucwords($data['title'])}}</a></div>
									<div class="prop_location d-flex flex-row align-items-start justify-content-start">
										<p><img src="{{asset('images/icon_1.png')}}" alt="">
											{{$data['house']}} {{$data['street_name']}} {{$data->area->area_name}}
										</p>
									</div>
									<div class="">
										<br/>
											<p>
												<i class="fas fa-phone-square fa-lg" style="font-size: 2em"></i> <a href="{{route('SubmitShow', $data->id)}}">{{($data['contact1'] ? $data['contact1'] : $data->user->phone)}}</a>
											</p>
											<div class="prop_agent_name">Posted By: <a href="#">{{$data->user->first_name}} {{$data->user->last_name}}</div>
									</div>
									
									
								</div>
								<div class="prop_info">
									<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="{{asset('images/icon_2_large.png')}}" alt="">
											<div>
												<div>{{($data['size'] ? $data['size'] : '00')	}}</div>
												<div>sq ft</div>
											</div>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="{{asset('images/icon_3_large.png')}}" alt="">
											<div>
												<div>{{($data['bathroom'] ? $data['bathroom'] : 'NAN')	}}</div>
												<div>baths</div>
											</div>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="{{asset('images/icon_4_large.png')}}" alt="">
											<div>
												<div>{{($data['kitchens'] ? $data['kitchens'] : '00')	}}</div>
												<div>kitchens</div>
											</div>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="{{asset('images/icon_5_large.png')}}" alt="">
											<div>
												<div>{{($data['bedrooms'] ? $data['bedrooms'] : 'NAN')	}}</div>
												<div>beds</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			
			</div>

			
		</div>
	</div> --}}

	
@endsection