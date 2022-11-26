<div class="modal fade" id="patientModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Test List</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body container row">


                @php
                $order_tests = DB::table('patient')
                ->select('patient.*')
                ->where('user_id', $order->user_id)
                ->get()->toArray();

                @endphp



                <div class="col-lg-12">

                    <table id="data_table" class="table">
                        <thead>
                            <tr>
                                <th>  Name</th>
                                <th> Age</th>
                                <th> Gender</th>


                                <th>&nbsp;</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse($order_tests as $order)

                            <tr>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->age }}</td>
                                <td>{{ $order->gender ==='1'?'Male':'Female' }}</td>

                            </tr>
                            @empty

                            @endforelse



                        </tbody>
                    </table>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>