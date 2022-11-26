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
                            <label for="">Organ name</label>
                            <input type="text" name="organ_name" class="form-control @error('organ_name') is-invalid @enderror" 
                            value="{{ $test_organ->organ_name }}">
                            @error('organ_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="">Price</label>
                            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" 
                            value="{{ $test_organ->price }}">
                            @error('price')
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
                            <label for="">Price</label>
                            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ $lab->price }}">
                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="">Test Name</label>

                            <select name="parent_test_id" class="form-control @error('parent_test_id') is-invalid @enderror">
                                <option value="0">-- Choose Test --</option>

                                @forelse($parent_tests as $parent_test)

                                <option value="{{$parent_test->id}}" {{ ($parent_test->id === $lab->getParentTest->id)?'selected':false}}>

                                    {{$parent_test->parent_test_name}}
                                </option>

                                @empty

                                @endforelse

                            </select>
                            @error('parent_test_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
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