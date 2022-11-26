@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-inbox bg-blue"></i>
                <div class="d-inline">
                    <h5>Test</h5>
                    <span>List of All  Test</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Test</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Index</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        @if (Session::has('message'))
        <div class="alert bg-success alert-success text-white text-center" role="alert">
            {{ Session::get('message') }}
        </div>
        @endif
        <div class="card">
            <div class="card-body ">
                <table id="data_table" class="table">
                    <thead>
                        <tr>
                            <th> Test Name</th>
                            <th> Test Price</th>
                            <th> Test Volume</th>
                            <th> Test Sample Type</th>
                            
                            <th class="nosort">Action</th>
                     
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($sub_tests) > 0)
                        @foreach ($sub_tests as $sub_test)

                        
                        <tr>
                            <td>{{ $sub_test->sub_test_name }}</td>
                            <td>{{ $sub_test->price }}</td>
                            <td>{{ $sub_test->volume }}</td>
                            <td>{{ $sub_test->sample_type }}</td>
                        
                            <td>
                                
                                    <a href="{{ route('subtest.edit', [$sub_test->id]) }}">
                                        <i class="btn btn-warning ik ik-edit-2"></i></a>
                            
                                
                                    </td>


                        </tr>
                        @endforeach

                        @else
                        <td>No subtest to display</td>
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection