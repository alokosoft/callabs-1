@extends('layouts.mainlayout')
@section('content')

<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<link href="{{asset('css/frontend-css/about.css')}}" rel="stylesheet">


<div id="masthead">
  <div class=" container d-flex justify-content-center" style="margin-top: 190px;">
    <ul class="pagination shadow-lg">
      <li class="page-item "><a class="page-link" href="#"><i class="fa fa-home "></i> <small>Home</small> </a></li>
      <li class="page-item "><a class="page-link " href="#"><small>Search &nbsp; </small></a></li>
      <li class="page-item "><a class="page-link " href="#"><small>{{$labs['sub_test_name']}} &nbsp; </small></a></li>
    </ul>
  </div>
</div>

<!-- Begin Body -->

<div class="container">
  <div class="row">
    @include('layouts.components.frontsidebar')

    <div class="col-lg-8">

      <div class="card mb-4" style="background-color: #fff;">
        <div class="card-header">
          <i class="fa fa-plus-square" aria-hidden="true"></i> {{$labs['sub_test_name']}}
        </div>

        @forelse($getLabs as $getlab)

        <div class="card-body container" style="padding: 10px;">
          <div class="row">
            <div class="col-xs-6">
              <h6 class="mb-1"> <i class="fa fa-hospital-o" aria-hidden="true"></i> Lab - {{$getlab->lab_name}}
                <br />
                <i class="fa fa-map-marker" aria-hidden="true"></i> <span class="mb-1"> {{$getlab->address1}}, {{$getlab->city}} </span></h5>
            </div>

            <div class="col-xs-6">
              <h5 class="mb-1">

                @php
                $data = DB::table('lab_package')->where([
                ['lab_id', '=', $getlab->id],
                ['subtest_id', '=', $subtestId],
                ])->first();

                @endphp

                <span>Price - ₹{{$data?$data->price:''}}</span><br />

                <a class="fit" href="{{ route('add_to_cart', ['lab',$labs['id'], $getlab->id]) }}" class="theme-btn" role="button">Add To Cart</a>

              </h5>

            </div>
          </div>

          <hr />
          <img src="{{asset('Image/'.$getlab->image) }}" height='84px' width='240px' />
          <p class="small text-muted">Sharing usage data can help us to .</p>

          <hr />
        </div>
        @empty
        <div class="row">
          <div class="col-xs-6">
            <h6 class="mb-1" style="margin: 10px;"> No Labs Found
          </div>
        </div>

        @endforelse
      </div>
    </div>
  </div>
</div>

@endsection