

<?php $__env->startSection('content'); ?>

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Test By Organ</h5>
                    <span>Add Test By Organ</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(url('/')); ?>"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Test By Organ</a></li>
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
                <h3>Add Test By Organ</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="<?php echo e(route('testbyorgan.store')); ?>" method="post" enctype="multipart/form-data"><?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Organ name</label>

                            <?php
                            $selected =[];
                              foreach($alreadyOrgans as $organ){
                                $selected[] = $organ->id;
                            }

                            ?>

                            <select id="organ_id" name="organ_id" class="form-control <?php $__errorArgs = ['organ_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> col-md-12">
                                <option value="0">-- Choose Organ --</option>

                                <?php $__empty_1 = true; $__currentLoopData = $alreadyOrgans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $organ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                 <option value="<?php echo e($organ->id); ?>"><?php echo e($organ->name); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                <?php endif; ?>
                            </select>

                            <?php $__errorArgs = ['organ_id'];
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
                            <label for="">Select Test</label>
                            <br />

                            <select id="boot-multiselect-demo" multiple="multiple" name="sub_tests[]" class="form-control <?php $__errorArgs = ['sub_tests'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> col-md-12">
                                <option value="0">-- Choose Test --</option>

                                <?php $__empty_1 = true; $__currentLoopData = $sub_tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <option value=<?php echo e($sub_test->id); ?>><?php echo e($sub_test->sub_test_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                <?php endif; ?>
                            </select>

                            <?php $__errorArgs = ['sub_test'];
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
                    </div>

                    <button type="submit" class="btn btn-primary mr-2 mt-2">Submit</button>
                    <button class="btn btn-light mt-2">Cancel</button>

                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views/admin/findtestorgan/create.blade.php ENDPATH**/ ?>