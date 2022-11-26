@extends('layouts.mainlayout')
@section('content')

<link href="{{('css/frontend-css/login.css')}}" rel="stylesheet">
<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<link href="{{asset('css/frontend-css/about.css')}}" rel="stylesheet">


<div id="masthead">
    <div class=" container d-flex justify-content-center" style="margin-top: 190px;">
        <ul class="pagination shadow-lg">
            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-home "></i> <small>Home</small> </a></li>
            <li class="page-item"><a class="page-link" href="#"><small>PATIENT DETAILS &nbsp; </small></a></li>
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

                                <a class="list-group-item" href="#">
                                    <span class="badge">3</span> LOGOUT
                                </a>


                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card mb-4" style="padding: 10px; background-color:#fff">
                <div class="card-header">Delete Account</div>
                <div class="card-body">
                    <p>Deleting your account is a permanent action and cannot be undone. If you are sure you want to delete your account, select the button below.</p>
                    <button class="btn btn-danger-soft text-danger" type="button">I understand, delete my account</button>
                </div>
            </div>
        </div>



        <div class="col-lg-8">
            <div class="card mb-4" style="background-color: #fff;">
                <div class="card-header">ADD PATIENT
                </div>


                <div class="card-body" style="padding: 10px;">
                    <!-- Account privacy optinos-->
                    @php $total = 0 @endphp
                    @if(session('cart'))

                    @foreach(session('cart') as $id => $details)

                    @php $total += $details['price'] * $details['quantity']

                    @endphp
                    @endforeach

                    @endif

                    <form method="post" action="{{route('patient.create')}}">
                        @csrf

                        <div class="details row">

                            <div class="input col-lg-4">
                                <label for="">Name</label>
                                <input type="text" placeholder="Enter Name" name="addMore[0][name]">

                                @error('name')
                                <span class="invalid-feedback" role="alert" style="font-size: 12px; color:red">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="input col-lg-4">
                                <label for="">Age</label>
                                <input type="text" placeholder="Enter Age" name="addMore[0][age]">

                                @error('age')
                                <span class="invalid-feedback" role="alert" style="font-size: 12px; color:red">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input col-lg-4">
                                <label for="">Gender</label>
                                <span><input type="radio" placeholder="Amount" name="addMore[0][gender]" value="1" style="width:14px;height: 16px;float: left;clear: none;padding:7px;margin:4px 3px 0px 6px; display:inline-flex">Male</span>
                                <span><input type="radio" placeholder="Amount" name="addMore[0][gender]" value="2" style="width:14px;height: 16px;padding: 7px; float: left;clear: none;margin:4px 3px 0px 6px;">Female</span>

                                @error('gender')
                                <span class="invalid-feedback" role="alert" style="font-size: 12px; color:red">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="dynamicAddRemove"></div>


                        <button type="button" name="add" id="dynamic-ar" class="login-button" style="padding: 8px;float:right;width: 100px;height: 42px">Add More +</button>
                        <button class="login-button" type="submit" style="padding: 10px;width: 100px;height: 42px">Next</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection