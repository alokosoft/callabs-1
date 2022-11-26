@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-edit bg-blue"></i>
                <div class="d-inline">
                    <h5>Labs</h5>
                    <span>Update Category</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Category</a></li>
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
                <h3>Edit Category</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" method="post" action="{{ route('category.update', [$category->id]) }}" enctype="multipart/form-data">@csrf

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Category name</label>
                            <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror" value="{{ $category->category_name }}">
                            @error('category_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="">Status</label>
                            <select name="status" class="form-control @error('status') is-invalid @enderror">

                                <option value="0">-- Choose Test --</option>
                                <option value="1" {{$category->status ==='1'?'selected':''}}>Yes</option>
                                <option value="2" {{$category->status === '2'?'selected':''}}>No</option>
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