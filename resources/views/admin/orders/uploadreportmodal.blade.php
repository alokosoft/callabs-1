<div class="modal fade" id="uploadrportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <form action="{{ route('order.uploadreoprt', [$order->id]) }}" method="post" style="display:inline" enctype="multipart/form-data">
                        @csrf
                            <input type="file" name="report" class="form-control file-upload-info @error('report') is-invalid @enderror" placeholder="Upload Image" name="report">

                            <button type="submit" class="btn btn-primary">Save</button>

                        </form>

                    </table>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>