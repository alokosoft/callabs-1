@extends('layouts.mainlayout')

@section('content')

<link href="{{('css/frontend-css/login.css')}}" rel="stylesheet">
<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<link href="{{asset('css/frontend-css/about.css')}}" rel="stylesheet">


<div id="masthead">
  <div class=" container d-flex justify-content-center" style="margin-top: 190px;">
    <ul class="pagination shadow-lg">
      <li class="page-item"><a class="page-link" href="#"><i class="fa fa-home "></i> <small>Home</small> </a></li>
      <li class="page-item"><a class="page-link" href="#"><small>SIGN UP &nbsp; </small></a></li>
    </ul>
  </div>

</div>



<div class="container">
  <div class="row">


    <div class="col-lg-4">
      <!-- Two factor authentication card-->
      <div class="card mb-4" style="padding: 10px; background-color:#fff">
        <div class="card-body" style="padding: 2px;">
          <img src="{{asset('img/boxes/medical.png')}}" style="height: 410px;width:330px" />

        </div>
      </div>
      <!-- Delete account card-->
    </div>




    <div class="col-lg-8">
      <!-- Change password card-->
      <!-- Security preferences card-->
      <div class="card mb-4" style="background-color: #fff;">
        <div class="card-header">SIGN UP
        </div>
        <div class="card-body" style="padding: 10px;">
          <!-- Account privacy optinos-->
          <form method="post" action="{{route('user-signup')}}">
            @csrf
            <div class="details row">

              <div class="input col-lg-6">
                <label for="">Name</label>
                <input type="text" placeholder="Enter your name" name="name">

                @error('name')
                <span class="invalid-feedback" role="alert" style="font-size: 12px; color:red">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="input col-lg-6"><label for="">Email
                </label>
                <input type="text" placeholder="Enter your email address" name="email">

                @error('email')
                <span class="invalid-feedback" role="alert" style="font-size: 12px; color:red">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="input col-lg-6"><label for="">Phone
                </label>
                <input type="text" placeholder="Enter your phon number" name="phone">

                @error('phone')
                <span class="invalid-feedback" role="alert" style="font-size: 12px; color:red">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="input col-lg-6">
                <label for="">Password
                </label><input type="text" placeholder="Enter your password" name="password">
                @error('password')
                <span class="invalid-feedback" role="alert" style="font-size: 12px; color:red">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

            </div>
            <button class="login-button">Sign Up</button>
            <!-- <span class="signup">Can’t log in? ∙ Sign up for an account</span> -->

          </form>

        </div>
      </div>


    </div>
  </div>
</div>

@endsection