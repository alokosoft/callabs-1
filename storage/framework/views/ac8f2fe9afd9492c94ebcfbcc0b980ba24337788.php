

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
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Total Amount</th>
                            <th>Phone</th>
                            <th>Pay Option</th>
                            <th>Test Detail</th>
                            <th>Patient Detail</th>
                            <th>Upload Report</th>
                            <th>Download Report</th>

 
                        </tr>
                    </thead>

                    <tbody>
                        <?php if(count($orders) > 0): ?>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($order->name); ?></td>

                            <td><?php echo e($order->email); ?></td>
                            <td><?php echo e($order->amount); ?></td>

                            <td><?php echo e($order->phone); ?></td>

                            <td><?php echo e($order->pay_option === '2'?'COD':'ONLINE'); ?></td>


                            <td>
                                <a href="#" data-toggle="modal" data-target="#orderModal">
                                    <i class="btn btn-primary ik ik-eye"></i>
                                </a>
                            </td>

                            <td>
                                <a href="#" data-toggle="modal" data-target="#patientModal">
                                    <i class="btn btn-primary ik ik-eye"></i>
                                </a>
                            </td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#uploadrportModal">
                                    <!-- <i class="btn btn-primary ik ik-eye"></i>-->
                                    <i class="btn btn-primary fas fa-upload"></i>
                                </a>


                            </td>
                        </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php else: ?>
                        <td>No Order to display</td>
                        <?php endif; ?>

                    </tbody>
                </table>

                <?php if(count($orders) > 0): ?>
                
                <?php echo $__env->make('admin.orders.orderdetails', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('admin.orders.patientdetails', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('admin.orders.uploadreportmodal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php else: ?>
                <td>No Order to display</td>
                     

                <?php endif; ?>


            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views/admin/orders/index.blade.php ENDPATH**/ ?>