@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Organ</h5>
                    <span>Add Organ</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#"> Organ</a></li>
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
                <h3>Add Organ</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('organ.store') }}" method="post" enctype="multipart/form-data">@csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Organ name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('lab_name') }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control file-upload-info @error('image') is-invalid @enderror" placeholder="Upload Image" name="image">
                            <span class="input-group-append">

                            </span>
                            @error('image')
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