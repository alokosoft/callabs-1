@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-inbox bg-blue"></i>
                <div class="d-inline">
                    <h5>Labs</h5>
                    <span>List of All Lab Package</span>
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
                        <a href="#">Labs</a>
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
                            <th>Lab Name</th>
                            <th class="nosort">Test Name</th>
                            <th class="nosort">Test Price</th>

                            <th>Action</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($labpackages) > 0)

                        @foreach ($labpackages as $labpackage)

                        <tr>
                            <td>
                                @php

                                $lab = DB::table('labs')->where('id','=', $labpackage->lab_id)->get();

                                @endphp
                                {{ $lab[0]->lab_name }}
                            </td>
                            <td width="290px">

                                @php

                                $subtest = DB::table('sub_tests')->where('id','=', $labpackage->subtest_id)->get();
                                @endphp


                                {{$subtest[0]->sub_test_name}}

                            </td>

                            <td width="290px">



                                {{$labpackage->price}}

                            </td>
                            <td>
                                <a href="{{ route('labpackage.edit', [$labpackage->lab_id]) }}"><i class="btn btn-success fas fa-plus-circle"></i>
                                </a>

                                <a href="{{ route('labsubtestpackage.edit', [$labpackage->id]) }}"><i class="btn btn-warning ik ik-edit-2"></i></a>
                                <form action="{{ route('labpackage.destroy', [$labpackage->id]) }}" method="post" style="display:inline">@csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger ml-3"><i class="ik ik-trash-2"></i></button>
                                </form>

                            </td>

                        </tr>

                        <!-- View Modal -->

                        @endforeach

                        @else
                        <td>No user to display</td>
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection