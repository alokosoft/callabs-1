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
                <form class="forms-sample" method="post" action="{{ route('labpackage.update', [$lab->id]) }}" enctype="multipart/form-data">@csrf

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Lab name</label>
                            <input type="text" name="lab_name" readonly class="form-control @error('name') is-invalid @enderror" value="{{ $lab->lab_name }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">

                            <label for="">Select Test</label>
                            <br />

                            @php

                            $selected=[];
                            foreach($lab->getSubtest as $subtest){

                            $selected[]= $subtest->id;
                            }

                            @endphp

                            <select id="boot-multiselect-demo" multiple="multiple" name="subtest_id" class="form-control @error('sub_tests') is-invalid @enderror col-md-12">
                                <option value="0">-- Choose Test --</option>
                                @forelse($sub_tests as $sub_test)

                                @if(!in_array($sub_test->id,$selected))

                                <option value="{{$sub_test->id}}">
                                    {{$sub_test->sub_test_name}}
                                </option>

                                @endif
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

                    <br />

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>

                </form>
            </div>
        </div>
    </div>
</div>


@endsection