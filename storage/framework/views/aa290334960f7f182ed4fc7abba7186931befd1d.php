
<?php $__env->startSection('content'); ?>

<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<link href="<?php echo e(asset('css/frontend-css/about.css')); ?>" rel="stylesheet">


<div id="masthead">
    <div class=" container d-flex justify-content-center" style="margin-top: 190px;">
        <ul class="pagination shadow-lg">
            <li class="page-item "><a class="page-link" href="<?php echo e(url('/')); ?>"><i class="fa fa-home "></i> <small>Home</small> </a></li>
            <li class="page-item "><a class="page-link " href="#"><small>All Organ &nbsp; </small></a></li>

        </ul>
    </div>

</div>

<!-- Begin Body -->

<div class="container">
    <div class="row">


        <?php echo $__env->make('layouts.components.frontsidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <div class="col-lg-8 row" style="background-color: #fff;">
            <!-- Security preferences card-->
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $allOrgans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $organ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <div class="card mb-4 col-md-4" style="background-color:#fff; padding:0px;margin:20px; width:28%;height:230px">

                    <div class="card-header" style="font-size: 20px;line-height:36px">

                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        <?php echo e((strlen($organ->name) > 65) ? substr($organ->name,0,10).'...' : $organ->name); ?>


                    </div>

                    <div class="card-body" style="padding: 10px;">
                    <a href="<?php echo e(route('organs.details',[$organ->id])); ?>">

                      
                            <img src="<?php echo e(asset('Image/'.$organ->image)); ?>" height="130px" width="110px"  />
                    </a>
                            <br />

                      
                            <hr style="margin-top:1px;margin-bottom:1px" />


                    </div>


                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                No Tests Found
                <?php endif; ?>

            </div>

            <div class="d-flex justify-content-center">
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views/organ/allOrgans.blade.php ENDPATH**/ ?>