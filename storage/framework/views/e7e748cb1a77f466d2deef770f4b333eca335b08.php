
<?php $__env->startSection('content'); ?>

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-inbox bg-blue"></i>
                <div class="d-inline">
                    <h5>Organ Test</h5>
                    <span>List of All Organ Test</span>
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
                        <a href="#">Organ Test</a>
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
                            <th>Organ Name</th>
                            <th>Sub Test</th>
                            <th class="nosort">&nbsp;</th>
                            <th class="nosort">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($allOrgans) > 0): ?>
                        <?php $__currentLoopData = $allOrgans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $organ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key + 1); ?></td>
                            <td><?php echo e($organ -> name); ?></td>
                            <td>
                                <?php $__currentLoopData = $organ->subtest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subtest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($loop->first ? '' : ', '); ?>

                                <?php echo e($subtest->sub_test_name); ?>


                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            
                             
                            <td>
                                <a href="<?php echo e(route('organtest.edit', [$organ->id])); ?>"><i class="btn btn-warning ik ik-edit-2"></i></a>

                                <form action="<?php echo e(route('organtest.destroy', [$organ->id])); ?>"
                                                    method="post" style="display:inline"><?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger ml-3"><i
                                                            class="ik ik-trash-2"></i></button>
                                                </form>

                          </td>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php else: ?>
                        <td>No Test. Please create one.</td>
                        <?php endif; ?>
                    </tbody>
                    </tr>
                    <!-- View Modal -->
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views/admin/findtestorgan/index.blade.php ENDPATH**/ ?>