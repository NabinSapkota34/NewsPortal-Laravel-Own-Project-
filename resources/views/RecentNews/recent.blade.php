@extends('frontend.layouts.main')
@section('main-container')

<div class="banner-bottom-sechny py-md-4">
				<h3 class="hny-title text-center">Recent <span>News</span></h3>
				<div class="ban-content-inf row py-lg-3">
				  @forelse ($images as $image)
					<div class="maghny-gd-1 col-lg-6">
						<div class="maghny-grid">
							<figure class="effect-lily">
								<img class="img-fluid" src="{{ url('/images/recentnews/' . $image->image) }}" alt="">
								<figcaption class="w3set-hny">
									<div>
										<h4 class="top-text">{{ $image->caption }}
											<span>{{ $image->span }}</span></h4>
										<p>{{ $image->date }}</p>
									</div>

								</figcaption>
							</figure>
						</div>
					</div>
					@endforeach
                </div>
				</div>
			</div>

@endsection