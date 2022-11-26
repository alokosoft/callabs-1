@extends('admin.layouts.master')

@section('content')

<div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-inbox bg-blue"></i>
                    <div class="d-inline">
                        <h5>Packages</h5>
                        <span>List of All Packages</span>
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
                            <a href="#">Packages</a>
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
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Number Of Tests</th>
                            <th>Lab Name</th>
                            <th>Category</th>
                            <th class="nosort">&nbsp;</th>
                                <th class="nosort">&nbsp;</th>
                         
                          
                            </tr>
                        </thead>
                        <tbody>
                        @if (count($packages) > 0)
                        @foreach ($packages as $key => $Package)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $Package->package_name }}</td>
                            <td>{{ $Package->price }}</td>
                            <td>{{ $Package->no_of_tests }}</td>
                            <td>{{ $Package->getLab->lab_name }}</td>
                            <td>{{$Package->getCategory->category_name}}</td>

                            <td>
                                <div class="table-actions">

                                    <a href="{{ route('package.edit', [$Package->id]) }}"><i class="btn btn-warning ik ik-edit-2"></i></a>

                                    <form action="{{ route('package.destroy', [$Package->id]) }}"
                                                    method="post" style="display:inline">@csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger ml-3"><i
                                                            class="ik ik-trash-2"></i></button>
                                                </form>

                                </div>
                            </td>

                        </tr>
                        @endforeach

                        @else
                        <td>No Test. Please create one.</td>
                        @endif


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

 

 
@endsection