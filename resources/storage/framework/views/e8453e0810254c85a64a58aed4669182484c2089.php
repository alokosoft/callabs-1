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

                <?php $__empty_1 = true; $__currentLoopData = $parent_tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent_test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <div class="col-lg-4">

                    <input type="checkbox" name="parent_test_id[]" class="<?php $__errorArgs = ['parent_test_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                    value="<?php echo e($parent_test->id); ?>" style="margin:10px">
                    <label class="checkbox-inline"> <?php echo e($parent_test->parent_test_name); ?> </label>



                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>


                <?php endif; ?>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\callabs\resources\views/admin/test/parent_test_modal.blade.php ENDPATH**/ ?>