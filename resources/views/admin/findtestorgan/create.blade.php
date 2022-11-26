@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Test By Organ</h5>
                    <span>Add Test By Organ</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{url('/')}}"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Test By Organ</a></li>
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
                <h3>Add Test By Organ</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('testbyorgan.store') }}" method="post" enctype="multipart/form-data">@csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Organ name</label>

                            @php
                            $selected =[];
                              foreach($alreadyOrgans as $organ){
                                $selected[] = $organ->id;
                            }

                            @endphp

                            <select id="organ_id" name="organ_id" class="form-control @error('organ_id') is-invalid @enderror col-md-12">
                                <option value="0">-- Choose Organ --</option>

                                @forelse($alreadyOrgans as $organ)
                                 <option value="{{$organ->id}}">{{$organ->name}}</option>
                                 @empty

                                @endforelse
                            </select>

                            @error('organ_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label for="">Select Test</label>
                            <br />

                            <select id="boot-multiselect-demo" multiple="multiple" name="sub_tests[]" class="form-control @error('sub_tests') is-invalid @enderror col-md-12">
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
                    </div>

                    <button type="submit" class="btn btn-primary mr-2 mt-2">Submit</button>
                    <button class="btn btn-light mt-2">Cancel</button>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection