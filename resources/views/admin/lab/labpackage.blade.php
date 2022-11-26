@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Lab</h5>
                    <span>Add Lab</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Labs</a></li>
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
                <h3>Add Lab Test</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('labpackage.store') }}" method="post" enctype="multipart/form-data">@csrf
                    <div class="row">
                        <div class="col-lg-6">
                            @php

                            $selected=[];
                            foreach($alreadylab as $subtest){

                            $selected[]= $subtest->id;
                            }

                            @endphp

                            <label for="">Lab Name</label>
                            <select name="lab_id" class="form-control @if ($errors->has('lab_id')) is-invalid @endif">

                                <option value="0">--Select Lab--</option>
                                @forelse($labs as $lab)

                                @if(!in_array( $lab->id,$selected))

                                <option value="{{$lab->id}}">{{$lab->lab_name}}</option>

                                @endif
                                @empty

                                @endforelse

                            </select>

                            @error('lab_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="col-lg-6">

                            <label for="">Select Test</label>
                            <br />

                            <select id="boot-multiselect-demo" multiple="multiple" name="sub_test" class="form-control @error('sub_test') is-invalid @enderror col-md-12">
                                <option value="0">-- Choose Test --</option>

                                @forelse($sub_tests as $sub_test)
                                <option value={{$sub_test->id}}>{{$sub_test->sub_test_name}}</option>
                                @empty

                                @endforelse
                            </select>

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

                    </div>
                    <button type="submit" class="btn btn-primary mr-2 mt-2">Submit</button>
                    <button class="btn btn-light mt-2">Cancel</button>

            </div>


            </form>
        </div>
    </div>
</div>
</div>


@endsection