@extends('layouts.mainlayout')

@section('content')

<link href="{{('css/frontend-css/login.css')}}" rel="stylesheet">
<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<link href="{{asset('css/frontend-css/about.css')}}" rel="stylesheet">


<div id="masthead">
    <div class=" container d-flex justify-content-center" style="margin-top: 190px;">
        <ul class="pagination shadow-lg">
            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-home "></i> <small>Home</small> </a></li>
            <li class="page-item"><a class="page-link" href="#"><small>DASHBOARD&nbsp; </small></a></li>
        </ul>
    </div>

</div>

<div class="container">
    <div class="row">


        <div class="col-lg-4">
            <!-- Two factor authentication card-->
            <div class="card mb-4" style="padding: 10px; background-color:#fff">
                <div class="card-header">ACCOUNT</div>
                <div class="card-body" style="padding: 2px;">
                    <div id="filter-sidebar" class="col-xs-6 col-sm-12  sliding-sidebar" style="padding: 0px; background-color:#fff">

                        <div>
                            <div id="group-1" class="list-group collapse in">

                                <a class="list-group-item" href="#">
                                    <span class="badge">3</span> PROFILE
                                </a>

                                <a class="list-group-item" href="#">
                                    <span class="badge">3</span> CHANGE PASSWORD
                                </a>

                                <a class="list-group-item" href="{{route('report')}}">
                                    <span class="badge">3</span> DOWNLOAD REPORTS
                                </a>

                                <a class="list-group-item" href="#">
                                    <span class="badge">3</span> LOGOUT
                                </a>


                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card mb-4" style="padding: 10px; background-color:#fff">
                <div class="card-header"> </div>
                <div class="card-body">
                </div>
            </div>
        </div>



        <div class="col-lg-8">
            <div class="card mb-4" style="background-color: #fff;">
                <div class="card-header">DETAILS
                </div>
                <div class="card-body" style="padding: 10px;">
                    <!-- Account privacy optinos-->
                    @php

                    @endphp

                    <form method="post" action="{{route('payment')}}">
                        @csrf

                        <div class="details row">
                            <div class="input col-lg-6">
                                <label for="">Name</label>
                                <input type="text" placeholder="Enter your Name" name="name" value="{{$user['name']}}">
                            </div>

                            <div class="input col-lg-6"><label for="">Phone No</label>
                                <input type="text" placeholder="Enter your Phone" name="phone" value="{{$user['phone']}}">
                            </div>

                            <div class="input col-lg-6"><label for="">Email</label>
                                <input type="text" placeholder="Enter your Email" name="email" value="{{$user['email']}}">
                            </div>

                            <div class="input col-lg-6"><label for="">Address</label>
                                <input type="text" placeholder="Enter your Address" name="address" value="{{$user['address']}}">
                            </div>



                    </form>

                </div>

                <button class="login-button" type="submit">SAVE</button>

            </div>
        </div>
    </div>
</div>


@endsection