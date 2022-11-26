

<?php $__env->startSection('content'); ?>

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
                            <th>Lab Name</th>
                            <th class="nosort">Address</th>
                            <th>Address 2</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Pin</th>
                            <th>Logo</th>
                            <th>Action</th>
                            <th>&nbsp;</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($labs) > 0): ?>
                        <?php $__currentLoopData = $labs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($lab->lab_name); ?></td>
                            <td><?php echo e($lab->address1); ?></td>
                            <td><?php echo e($lab->address2); ?></td>
                            <td><?php echo e($lab->state); ?></td>
                            <td><?php echo e($lab->city); ?></td>
                            <td><?php echo e($lab->pin); ?></td>
                            <td> <img src="<?php echo e(asset('Image/'.$lab->image)); ?>" height='100px' width='100px' /></td>
                         
                            <td>

                                <a href="<?php echo e(route('lab.edit', [$lab->id])); ?>"><i class="btn btn-warning ik ik-edit-2"></i></a>
                                <form action="<?php echo e(route('lab.destroy', [$lab->id])); ?>" method="post" style="display:inline"><?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger ml-3"><i class="ik ik-trash-2"></i></button>
                                </form>

                            </td>

                        </tr>

                        <!-- View Modal -->

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php else: ?>
                        <td>No user to display</td>
                        <?php endif; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views/admin/lab/index.blade.php ENDPATH**/ ?>