@extends('admin.layouts.master')
@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Package</h5>
                    <span>Add Package</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Packages</a></li>
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
                <h3>Add Package</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('test.store') }}" method="post" enctype="multipart/form-data">@csrf
                    <div class="row">
                       
                    <div class="col-lg-6">
                            <label for="">Package name</label>
                            <input type="text" name="package_name" class="form-control @error('package_name') is-invalid @enderror" value="{{ old('package_name') }}">

                            @error('package_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label for="">Category Name</label>

                            <select name="category" class="form-control @error('category') is-invalid @enderror">
                                <option value="0">-- Choose Category --</option>

                                @forelse($categories as $category)

                                <option value="{{$category->id}}">{{$category->category_name}}</option>

                                @empty

                                @endforelse

                            </select>
                            @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <br/>

                        
                        
                        <div class="col-lg-6">

                            <label for="">Select Parent Test</label>
                            <br/>

                            <select id="boot-multiselect-demo" multiple="multiple" name="parent_test_id[]" class="form-control @error('parent_test_id') is-invalid @enderror col-md-12">
                                <option value="0">-- Choose Test --</option>
                             
                                @forelse($parent_tests as $parent_test)

                                <option value={{$parent_test->id}}>{{$parent_test->parent_test_name}}</option>

                                @empty


                                @endforelse



                            </select>



                           
                            @error('parent_test_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <br />

                        <div class="col-lg-6">
                            <label for="">Lab Name</label>
                            <select name="lab_name" class="form-control @if ($errors->has('lab_name')) is-invalid @endif">

                                <option value="0">--Select Lab--</option>
                                @forelse($labs as $lab)

                                <option value="{{$lab->id}}">{{$lab->lab_name}}</option>

                                @empty

                                @endforelse

                            </select>

                            @error('lab_name')
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
                    <div class="row">

                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="exampleTextarea1">Package Description</label>
                                <!-- <textarea class="form-control @error('description') is-invalid @enderror" id="exampleTextarea1" rows="4" name="package_desc">{{ old('description') }}
                        </textarea> -->


                                <textarea id="txtarea" class="tinymce-editor" name="package_desc"></textarea>
                                <!-- <input type="button" id="btnValue" value="Get Value" />  
    <div id="divkarea"></div>      -->


                                @error('package_desc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
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