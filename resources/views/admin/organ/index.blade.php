@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-inbox bg-blue"></i>
                <div class="d-inline">
                    <h5>Organ</h5>
                    <span>List of Organs</span>
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
                        <a href="#">Organs</a>
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
                            <th>Organ Name</th>
                            <th>Image</th>

                            <th class="nosort">&nbsp;</th>
                            <th class="nosort">&nbsp;</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if (count($allOrgans) > 0)
                        @foreach ($allOrgans as $key => $organ)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $organ->name }}</td>
                            <td> <img src={{asset('Image/'.$organ->image) }} height='100px' width='100px' /></td>
                            <td>
                                <a href="{{ route('organ.edit', [$organ->id]) }}"><i class="btn btn-warning ik ik-edit-2"></i></a>

                                 <form action="{{ route('organ.destroy', [$organ->id]) }}" method="post" style="display:inline">@csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger ml-3"><i class="ik ik-trash-2"></i></button>
                                </form>
                            </td>


                        </tr>
                        @endforeach

                        @else
                        <td>No Test. Please create one.</td>
                        @endif

                    </tbody>


                    </tr>

                    <!-- View Modal -->


                </table>
            </div>
        </div>
    </div>
</div>
@endsection