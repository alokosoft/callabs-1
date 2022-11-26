@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-edit bg-blue"></i>
                <div class="d-inline">
                    <h5>Test</h5>
                    <span>Update Test</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Test</a></li>
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
                <h3>Edit Test</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" method="post" action="{{ route('subtest.update', [$sub_test->id]) }}" enctype="multipart/form-data">@csrf

                    <div class="row">
                        <div class="col-lg-6">
                            <label for=""> Test Name</label>
                            <input type="text" name="sub_test_name" class="form-control @error('sub_test_name') is-invalid @enderror" value="{{ $sub_test->sub_test_name }}">
                            @error('sub_test_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="col-lg-6">

<label for="">Sub Test name</label>
<input type="text" id="price" name="price" placeholder="Enter Price" class="form-control  @error('price') is-invalid @enderror" value="{{ $sub_test->price }}" />



@error('price')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>

<div class="col-lg-6">
<label for="sample_type">{{__('Sample Type')}}</label>
<input type="text"  name="sample_type" id="sample_type" class="form-control  @error('sample_type') is-invalid @enderror" value="{{ $sub_test->sample_type }}">

@error('sample_type')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror

</div>



<div class="col-lg-6">
<label for="sample_type">{{__('Volume')}}</label>
<input type="text"  name="volume" id="volume" class="form-control  @error('volume') is-invalid @enderror" value="{{ $sub_test->volume }}">

@error('volume')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror


</div>


                    </div>
                    <br />

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>

                </form>
            </div>
        </div>
    </div>
</div>


@endsection