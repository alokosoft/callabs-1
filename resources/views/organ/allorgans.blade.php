@extends('layouts.mainlayout')
@section('content')

<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<link href="{{asset('css/frontend-css/about.css')}}" rel="stylesheet">


<div id="masthead">
    <div class=" container d-flex justify-content-center" style="margin-top: 190px;">
        <ul class="pagination shadow-lg">
            <li class="page-item "><a class="page-link" href="{{url('/')}}"><i class="fa fa-home "></i> <small>Home</small> </a></li>
            <li class="page-item "><a class="page-link " href="#"><small>All Organ &nbsp; </small></a></li>

        </ul>
    </div>

</div>

<!-- Begin Body -->

<div class="container">
    <div class="row">


        @include('layouts.components.frontsidebar')


        <div class="col-lg-8 row" style="background-color: #fff;">
            <!-- Security preferences card-->
            <div class="row">
                @forelse($allOrgans as $organ)


                <div class="card mb-4 col-md-4" style="background-color:#fff; padding:0px;margin:20px; width:28%;height:230px">

                    <div class="card-header" style="font-size: 20px;line-height:36px">

                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        {{ (strlen($organ->name) > 65) ? substr($organ->name,0,10).'...' : $organ->name}}

                    </div>

                    <div class="card-body" style="padding: 10px;">
                    <a href="{{route('organs.details',[$organ->id])}}">

                      
                            <img src="{{asset('Image/'.$organ->image)}}" height="130px" width="110px"  />
                    </a>
                            <br />

                      
                            <hr style="margin-top:1px;margin-bottom:1px" />


                    </div>


                </div>
                @empty
                No Tests Found
                @endforelse

            </div>

            <div class="d-flex justify-content-center">
            </div>

        </div>
    </div>
</div>
@endsection