

<?php $__env->startSection('content'); ?>

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-inbox bg-blue"></i>
                <div class="d-inline">
                    <h5>Labs</h5>
                    <span>List of All Lab Package</span>
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
                            <th class="nosort">Test Name</th>
                            <th class="nosort">Test Price</th>

                            <th>Action</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($labpackages) > 0): ?>

                        <?php $__currentLoopData = $labpackages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $labpackage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <td>
                                <?php

                                $lab = DB::table('labs')->where('id','=', $labpackage->lab_id)->get();

                                ?>
                                <?php echo e($lab[0]->lab_name); ?>

                            </td>
                            <td width="290px">

                                <?php

                                $subtest = DB::table('sub_tests')->where('id','=', $labpackage->subtest_id)->get();
                                ?>


                                <?php echo e($subtest[0]->sub_test_name); ?>


                            </td>

                            <td width="290px">



                                <?php echo e($labpackage->price); ?>


                            </td>
                            <td>
                                <a href="<?php echo e(route('labpackage.edit', [$labpackage->lab_id])); ?>"><i class="btn btn-success fas fa-plus-circle"></i>
                                </a>

                                <a href="<?php echo e(route('labsubtestpackage.edit', [$labpackage->id])); ?>"><i class="btn btn-warning ik ik-edit-2"></i></a>
                                <form action="<?php echo e(route('labpackage.destroy', [$labpackage->id])); ?>" method="post" style="display:inline"><?php echo csrf_field(); ?>
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
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views/admin/lab/labpackageindex.blade.php ENDPATH**/ ?>