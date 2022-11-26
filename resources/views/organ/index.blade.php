@extends('layouts.mainlayout')

@section('content')

<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<link href="{{asset('css/frontend-css/about.css')}}" rel="stylesheet">


<div id="masthead">
    <div class=" container d-flex justify-content-center" style="margin-top: 190px;">
        <ul class="pagination shadow-lg">
            <li class="page-item "><a class="page-link" href="{{url('/')}}"><i class="fa fa-home "></i> <small>Home</small> </a></li>
            <li class="page-item "><a class="page-link " href="#"><small>Organ &nbsp; </small></a></li>
            <li class="page-item "><a class="page-link " href="#"><small>{{$organs->name}} &nbsp; </small></a></li>

        </ul>
    </div>

</div>

<!-- Begin Body -->

<div class="container">
    <div class="row">


        @include('layouts.components.frontsidebar')


        <div class="col-lg-8" style="background-color: #fff;">
            <!-- Security preferences card-->
            <div class="row">
                @forelse($subtests as $subtest)


                <div class="card mb-4 col-md-12" style="background-color:#fff; padding:0px;margin:20px; width:96%;height:200px">
                    <div class="card-header" style="font-size: 20px;line-height:36px">

                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        {{ (strlen($subtest->sub_test_name) > 65) ? substr($subtest->sub_test_name,0,10).'...' : $subtest->sub_test_name}}

                    </div>

                    <div class="card-body" style="padding: 10px;">

                        <h6 class="mb-1" style="font-size:20px;line-height:40px">
                             <i class="fa fa-thermometer" aria-hidden="true"></i> {{$subtest->sample_type}}
                            <br />

                            <i class="fa fa-flask" aria-hidden="true"></i> 
                            <span class="mb-1" style="font-size:20px;line-height:40px">{{$subtest->volume}} </span></h5>

                            <hr style="margin-top:1px;margin-bottom:1px" />

                            <a href="{{route('show.labs',[$subtest->id])}}">

                                <button type="button" class="login-button" style="background-color: #03A853;
    font-size: 14px;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 5px;
    box-shadow: 0px 18px 23px rgba(#e3a04d, 0.49);
    margin-top:6px;
    cursor: pointer;
    border: #03A853;
    padding:5px;
    float:right
"> BOOK TEST</button>
                            </a>

                    </div>


                </div>
                @empty
                No Tests Found
                @endforelse

            </div>

            <div class="d-flex justify-content-center">
                {!! $subtests->links() !!}
            </div>

        </div>
    </div>
</div>
@endsection