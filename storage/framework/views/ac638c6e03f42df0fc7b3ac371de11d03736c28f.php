

<?php $__env->startSection('content'); ?>

<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<link href="<?php echo e(asset('css/frontend-css/about.css')); ?>" rel="stylesheet">


<div id="masthead">
    <div class=" container d-flex justify-content-center" style="margin-top: 190px;">
        <ul class="pagination shadow-lg">
            <li class="page-item "><a class="page-link" href="#"><i class="fa fa-home "></i> <small>Home</small> </a></li>
            <li class="page-item "><a class="page-link " href="#"><small>Organ &nbsp; </small></a></li>
            <li class="page-item "><a class="page-link " href="#"><small><?php echo e($organs->name); ?> &nbsp; </small></a></li>

        </ul>
    </div>

</div>

<!-- Begin Body -->

<div class="container">
    <div class="row">


        <?php echo $__env->make('layouts.components.frontsidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <div class="col-lg-8" style="background-color: #fff;">
            <!-- Security preferences card-->
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $subtests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subtest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <div class="card mb-4 col-md-3" style="background-color:#fff; padding:0px;margin:20px; width:28%;height:250px">
                    <div class="card-header" style="font-size: 16px;">

                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        <?php echo e((strlen($subtest->sub_test_name) > 25) ? substr($subtest->sub_test_name,0,10).'...' : $subtest->sub_test_name); ?>


                    </div>

                    <div class="card-body" style="padding: 10px;">

                        <h6 class="mb-1" style="font-size: 14px;"><i class="fa fa-thermometer" aria-hidden="true"></i> <?php echo e($subtest->sample_type); ?>

                            <br />

                            <i class="fa fa-flask" aria-hidden="true"></i> <span class="mb-1"><?php echo e($subtest->volume); ?> </span></h5>

                            <h5 class="mb-1">
                            </h5>

                            <hr />

                            <a href="<?php echo e(route('show.labs',[$subtest->id])); ?>">

                                <button type="button" class="login-button" style="background-color: #03A853;
    font-size: 14px;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 5px;
    box-shadow: 0px 18px 23px rgba(#e3a04d, 0.49);
    margin-top: 20px;
    cursor: pointer;
    border: #03A853;
    padding:5px
"> BOOK TEST</button>
                            </a>

                    </div>


                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                No Records
                <?php endif; ?>
              

               
            </div>

            <div class="d-flex justify-content-center">
            <?php echo $subtests->links(); ?>

        </div>
           
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views/organ/index.blade.php ENDPATH**/ ?>