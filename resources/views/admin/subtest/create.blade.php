@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Test</h5>
                    <span>Add Test</span>
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
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
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
                <h3>Add Test</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{route('subtest.store') }}" method="post" enctype="multipart/form-data">@csrf
                    <div class="row">


                        <div class="col-lg-6">
                            <label for="">Test name</label>
                            <input type="text" id="sub_test" name="sub_test_name" placeholder="Enter Test" class="form-control  @error('sub_test_name') is-invalid @enderror" />

                            <!-- <input type="button" id="btAdd" value="Add Field" class="btn btn-primary mr-2 mt-2" style="float: right" /> -->


                            @error('sub_test')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-lg-6">

                            <label for="">Test Price</label>
                            <input type="text" id="price" name="price" placeholder="Enter Price" class="form-control  @error('price') is-invalid @enderror" />



                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label for="sample_type">{{__('Sample Type')}}</label>
                            <input type="text"  name="sample_type" id="sample_type" class="form-control  @error('sample_type') is-invalid @enderror">

                            @error('sample_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>



                        <div class="col-lg-6">
                            <label for="sample_type">{{__('Volume')}}</label>
                            <input type="text"  name="volume" id="volume" class="form-control  @error('volume') is-invalid @enderror">

                            @error('volume')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror


                        </div>



                        <div class="col-lg-6">
                            <label for="">Status</label>
                            <select name="status" class="form-control @error('status') is-invalid @enderror">
                                <option value="0">-- Choose Test --</option>

                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                            @error('status')
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