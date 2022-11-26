<div class="modal fade" id="parentTest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">AllParent Test</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body container row">

                @forelse($parent_tests as $parent_test)


                <div class="col-lg-4">

                    <input type="checkbox" name="parent_test_id[]" class="@error('parent_test_id') is-invalid @enderror" 
                    value="{{$parent_test->id }}" style="margin:10px">
                    <label class="checkbox-inline"> {{$parent_test->parent_test_name}} </label>



                </div>

                @empty


                @endforelse


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>