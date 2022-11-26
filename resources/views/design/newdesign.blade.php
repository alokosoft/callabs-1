@extends('layouts.mainlayout')

@section('content')

<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<link href="{{asset('css/frontend-css/about.css')}}" rel="stylesheet">


<div id="masthead">
  <div class=" container d-flex justify-content-center" style="margin-top: 190px;">
    <ul class="pagination shadow-lg">
      <li class="page-item "><a class="page-link" href="#"><i class="fa fa-home "></i> <small>Home</small> </a></li>
      <li class="page-item "><a class="page-link " href="#"><small>SIGN UP &nbsp; </small></a></li>
     </ul>
  </div>

</div>

<!-- Begin Body -->

<div class="container">
  <div class="row">


    <div class="col-lg-4">
      <!-- Two factor authentication card-->
      <div class="card mb-4" style="padding: 10px; background-color:#fff">
        <div class="card-header">Two-Factor Authentication</div>
        <div class="card-body" style="padding: 2px;">
          <p>Add another level of security to your account by enabling two-factor authentication. We will send you a text message to verify your login attempts on unrecognized devices and browsers.</p>
          <form>
            <div class="form-check">
              <input class="form-check-input" id="twoFactorOn" type="radio" name="twoFactor" checked="">
              <label class="form-check-label" for="twoFactorOn">On</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" id="twoFactorOff" type="radio" name="twoFactor">
              <label class="form-check-label" for="twoFactorOff">Off</label>
            </div>
            <div class="mt-3">
              <label class="small mb-1" for="twoFactorSMS">SMS Number</label>
              <input class="form-control" id="twoFactorSMS" type="tel" placeholder="Enter a phone number" value="555-123-4567">
            </div>
          </form>
        </div>
      </div>
      <!-- Delete account card-->
      <div class="card mb-4" style="padding: 10px; background-color:#fff">
        <div class="card-header">Delete Account</div>
        <div class="card-body">
          <p>Deleting your account is a permanent action and cannot be undone. If you are sure you want to delete your account, select the button below.</p>
          <button class="btn btn-danger-soft text-danger" type="button">I understand, delete my account</button>
        </div>
      </div>
    </div>



    <div class="col-lg-8">
      <!-- Change password card-->
      <!-- Security preferences card-->
      <div class="card mb-4" style="background-color: #fff;">
        <div class="card-header">Security Preferences</div>
        <div class="card-body" style="padding: 10px;">
          <!-- Account privacy optinos-->
          <h5 class="mb-1">Account Privacy</h5>
          <p class="small text-muted">By setting your account to private, your profile information and posts will not be visible to users outside of your user groups.</p>
          <form>
            <div class="form-check">
              <input class="form-check-input" id="radioPrivacy1" type="radio" name="radioPrivacy" checked="">
              <label class="form-check-label" for="radioPrivacy1">Public (posts are available to all users)</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" id="radioPrivacy2" type="radio" name="radioPrivacy">
              <label class="form-check-label" for="radioPrivacy2">Private (posts are available to only users in your groups)</label>
            </div>
          </form>
          <hr class="my-4">
          <!-- Data sharing options-->
          <h5 class="mb-1">Data Sharing</h5>
          <p class="small text-muted">Sharing usage data can help us to improve our products and better serve our users as they navigation through our application. When you agree to share usage data with us, crash reports and usage analytics will be automatically sent to our development team for investigation.</p>

        </div>
      </div>


    </div>
  </div>
</div>

@endsection