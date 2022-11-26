@extends('layouts.mainlayout')

@section('content')
<link href="{{asset('css/frontend-css/listing.css')}}" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">

<div class="container" style="margin-top: 200px;">
	<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">


		@forelse($labs as $lab)
		<div class="col-md-4">
			<div class="card radius-15">
				<div class="card-body text-center">
					<div class="p-4 border radius-15">

						<h5 class="mb-0 mt-5">{{$lab->parent_test_id}}</h5>

						<p class="mb-3">Lab - {{$lab->lab_name}}</p>

						<p class="mb-3">Price - ₹{{$lab->price}}</p>

						<div class="list-inline contacts-social mt-3 mb-3">
						</div>
						<div class="d-grid">


							<a href="{{ route('add_to_cart', $lab->id) }}" class="theme-btn" role="button">
									
								<h5 style="color:#ff6f61;font-weight:bold;font-size:18px">
									Add To Cart</h5>

								
							</a>


							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		@empty

		<span>No records</span>

		@endforelse





	</div>
</div>


@endsection