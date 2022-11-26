

<?php $__env->startSection('content'); ?>

<div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-inbox bg-blue"></i>
                    <div class="d-inline">
                        <h5>Packages</h5>
                        <span>List of All Packages</span>
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
                            <a href="#">Packages</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Index</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <?php if(Session::has('message')): ?>
                <div class="alert bg-success alert-success text-white text-center" role="alert">
                    <?php echo e(Session::get('message')); ?>

                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-body ">
                    <table id="data_table" class="table">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Number Of Tests</th>
                            <th>Lab Name</th>
                            <th>Category</th>
                            <th class="nosort">&nbsp;</th>
                                <th class="nosort">&nbsp;</th>
                         
                          
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(count($packages) > 0): ?>
                        <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $Package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key + 1); ?></td>
                            <td><?php echo e($Package->package_name); ?></td>
                            <td><?php echo e($Package->price); ?></td>
                            <td><?php echo e($Package->no_of_tests); ?></td>
                            <td><?php echo e($Package->getLab->lab_name); ?></td>
                            <td><?php echo e($Package->getCategory->category_name); ?></td>

                            <td>
                                <div class="table-actions">

                                    <a href="<?php echo e(route('package.edit', [$Package->id])); ?>"><i class="btn btn-warning ik ik-edit-2"></i></a>

                                    <a href="<?php echo e(route('doctor.show', [$Package->id])); ?>">
                                        <i class="btn btn-danger ik ik-trash-2"></i>
                                    </a>

                                </div>
                            </td>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php else: ?>
                        <td>No Test. Please create one.</td>
                        <?php endif; ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

 

 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views/admin/test/index.blade.php ENDPATH**/ ?>