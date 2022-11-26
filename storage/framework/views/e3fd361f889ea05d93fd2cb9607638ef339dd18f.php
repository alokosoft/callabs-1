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


                <?php
                $order_tests = DB::table('patient')
                ->select('patient.*')
                ->where('user_id', $order->user_id)
                ->get()->toArray();

                ?>



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
                            <?php $__empty_1 = true; $__currentLoopData = $order_tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                            <tr>
                                <td><?php echo e($order->name); ?></td>
                                <td><?php echo e($order->age); ?></td>
                                <td><?php echo e($order->gender ==='1'?'Male':'Female'); ?></td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                            <?php endif; ?>



                        </tbody>
                    </table>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\callabs\resources\views/admin/orders/patientdetails.blade.php ENDPATH**/ ?>