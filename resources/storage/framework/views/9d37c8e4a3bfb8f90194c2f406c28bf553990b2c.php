

<?php $__env->startSection('content'); ?>

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Category</h5>
                    <span>Add Category</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-10">
        <?php if(Session::has('message')): ?>
        <div class="alert bg-success alert-success text-white text-center" role="alert">
            <?php echo e(Session::get('message')); ?>

        </div>
        <?php endif; ?>

        <div class="card">
            <div class="card-header">
                <h3>Add Category</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="<?php echo e(route('subtest.store')); ?>" method="post" enctype="multipart/form-data"><?php echo csrf_field(); ?>
                    <div class="row">

                    <div class="col-lg-6">
                            <label for="">Select Parent Test</label>
                            <select name="parent_test_id"  id="parent_test_id" class="form-control <?php $__errorArgs = ['parent_test_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <option value="0">-- Choose Category --</option>

                                <?php $__empty_1 = true; $__currentLoopData = $parent_tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent_test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                <option value="<?php echo e($parent_test->id); ?>"><?php echo e($parent_test->parent_test_name); ?></option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                <?php endif; ?>

                            </select>
                           
                           
                            <?php $__errorArgs = ['parent_test_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>      
                        </div>

                        <div class="col-lg-6">
                            <label for="">Sub Test name</label>
                            <input type="text" id="sub_test" name="sub_test[]" placeholder="Enter Test" class="form-control sub_test_input" />

                            <input type="button" id="btAdd" value="Add Field" class="btn btn-primary mr-2 mt-2" style="float: right" />


                        </div>

                        <div id="main" class="col-lg-6"></div>

                    </div>

                    <br />

                    <button type="submit" class="btn btn-primary mr-2"  >Submit</button>
                    <button class="btn btn-light">Cancel</button>

                </form>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views/admin/subtest/create.blade.php ENDPATH**/ ?>