

<?php $__env->startSection('content'); ?>

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-inbox bg-blue"></i>
                    <div class="d-inline">
                        <h5>Category</h5>
                        <span>List of All Categories</span>
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
                            <a href="#">Category</a>
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
                                <th>Category Name</th>
                                <th>Status</th>
                                
                                <th class="nosort">&nbsp;</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($categories) > 0): ?>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <tr>
                                        <td><?php echo e($category->category_name); ?></td>
                                        <td><?php echo e($category->status ==='1'?'Enabled':'Disabled'); ?></td>
                                      
                                         <td>
                                            <div class="table-actions">
                                                 <a href="<?php echo e(route('category.edit', [$category->id])); ?>"><i
                                                        class="btn btn-warning ik ik-edit-2"></i></a>

                                                <a href="<?php echo e(route('doctor.show', [$category->id])); ?>">
                                                    <i class="btn btn-danger ik ik-trash-2"></i>
                                                </a>

                                            </div>
                                        </td>
                                        <td></td>

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

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views/admin/category/index.blade.php ENDPATH**/ ?>