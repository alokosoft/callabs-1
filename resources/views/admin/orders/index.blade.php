@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-inbox bg-blue"></i>
                <div class="d-inline">
                    <h5>Labs</h5>
                    <span>List of All Labs</span>
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
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Total Amount</th>
                            <th>Phone</th>
                            <th>Pay Option</th>
                            <th>Test Detail</th>
                            <th>Patient Detail</th>
                            <th>Upload Report</th>
                            <th>Download Report</th>

 
                        </tr>
                    </thead>

                    <tbody>
                        @if (count($orders) > 0)
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->name }}</td>

                            <td>{{ $order->email }}</td>
                            <td>{{ $order->amount }}</td>

                            <td>{{ $order->phone }}</td>

                            <td>{{ $order->pay_option === '2'?'COD':'ONLINE' }}</td>


                            <td>
                                <a href="#" data-toggle="modal" data-target="#orderModal">
                                    <i class="btn btn-primary ik ik-eye"></i>
                                </a>
                            </td>

                            <td>
                                <a href="#" data-toggle="modal" data-target="#patientModal">
                                    <i class="btn btn-primary ik ik-eye"></i>
                                </a>
                            </td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#uploadrportModal">
                                    <!-- <i class="btn btn-primary ik ik-eye"></i>-->
                                    <i class="btn btn-primary fas fa-upload"></i>
                                </a>


                            </td>
                        </tr>

                        @endforeach

                        @else
                        <td>No Order to display</td>
                        @endif

                    </tbody>
                </table>

                @if (count($orders) > 0)
                
                @include('admin.orders.orderdetails')
                @include('admin.orders.patientdetails')
                @include('admin.orders.uploadreportmodal')

                @else
                <td>No Order to display</td>
                     

                @endif


            </div>
        </div>
    </div>
</div>
@endsection