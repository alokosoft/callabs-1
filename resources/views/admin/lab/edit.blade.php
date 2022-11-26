@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-edit bg-blue"></i>
                <div class="d-inline">
                    <h5>Labs</h5>
                    <span>Update lab</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Lab</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-10">
        @if (Session::has('message'))
        <div class="alert bg-success alert-success text-white text-center" role="alert">
            {{ Session::get('message') }}
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Edit lab</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" method="post" action="{{ route('lab.update', [$lab->id]) }}" enctype="multipart/form-data">@csrf
                   
                <div class="row">
                        <div class="col-lg-6">
                            <label for="">Lab name</label>
                            <input type="text" name="lab_name" class="form-control @error('name') is-invalid @enderror" value="{{ $lab->lab_name }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="">Address1</label>
                            <input type="text" name="address1" class="form-control @error('address1') is-invalid @enderror" value="{{ $lab->address1 }}">
                            @error('address1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Address2</label>
                            <input type="text" name="address2" class="form-control @error('address2') is-invalid @enderror" value="{{ $lab->address2 }}">
                            @error('address2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="">State</label>
                            <input type="text" name="state" class="form-control @error('state') is-invalid @enderror" value="{{ $lab->state }}">
                            @error('state')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">City</label>
                            <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" value="{{ $lab->city }}">
                            @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="">Pin</label>
                            <input type="text" name="pin" class="form-control @error('pin') is-invalid @enderror" value="{{ $lab->pin }}">
                            @error('pin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <br />

                    <div class="row">
                    <div class="col-lg-6">
 
                    <label for="">Upload New Image</label>

<input type="file" name="new_image" class="form-control file-upload-info @error('new_image') is-invalid @enderror" placeholder="Upload Image">
<span class="input-group-append">

</span>
@error('image')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>

<br/>
<div class="col-lg-6">

<label>Image</label>
<br/>
<img src="{{asset('Image/'.$lab->image)}}" height='100px' width='100px' />
</div>

                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>

                </form>
            </div>
        </div>
    </div>
</div>


@endsection