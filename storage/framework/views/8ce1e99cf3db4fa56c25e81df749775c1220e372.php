
<?php $__env->startSection('content'); ?>

<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<link href="<?php echo e(asset('css/frontend-css/about.css')); ?>" rel="stylesheet">


<div id="masthead">
  <div class=" container d-flex justify-content-center" style="margin-top: 190px;">
    <ul class="pagination shadow-lg">
      <li class="page-item "><a class="page-link" href="#"><i class="fa fa-home "></i> <small>Home</small> </a></li>
      <li class="page-item "><a class="page-link " href="#"><small>Search &nbsp; </small></a></li>
      <li class="page-item "><a class="page-link " href="#"><small><?php echo e($labs['sub_test_name']); ?> &nbsp; </small></a></li>
    </ul>
  </div>
</div>

<!-- Begin Body -->

<div class="container">
  <div class="row">
    <?php echo $__env->make('layouts.components.frontsidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="col-lg-8">

      <div class="card mb-4" style="background-color: #fff;">
        <div class="card-header">
          <i class="fa fa-plus-square" aria-hidden="true"></i> <?php echo e($labs['sub_test_name']); ?>

        </div>

        <?php $__empty_1 = true; $__currentLoopData = $getLabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $getlab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

        <div class="card-body container" style="padding: 10px;">
          <div class="row">
            <div class="col-xs-6">
              <h6 class="mb-1"> <i class="fa fa-hospital-o" aria-hidden="true"></i> Lab - <?php echo e($getlab->lab_name); ?>

                <br />
                <i class="fa fa-map-marker" aria-hidden="true"></i> <span class="mb-1"> <?php echo e($getlab->address1); ?>, <?php echo e($getlab->city); ?> </span></h5>
            </div>

            <div class="col-xs-6">
              <h5 class="mb-1">

                <?php
                $data = DB::table('lab_package')->where([
                ['lab_id', '=', $getlab->id],
                ['subtest_id', '=', $subtestId],
                ])->first();

                ?>

                <span>Price - ₹<?php echo e($data?$data->price:''); ?></span><br />

                <a class="fit" href="<?php echo e(route('add_to_cart', ['lab',$labs['id'], $getlab->id])); ?>" class="theme-btn" role="button">Add To Cart</a>

              </h5>

            </div>
          </div>

          <hr />
          <img src="<?php echo e(asset('Image/'.$getlab->image)); ?>" height='84px' width='240px' />
          <p class="small text-muted">Sharing usage data can help us to .</p>

          <hr />
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="row">
          <div class="col-xs-6">
            <h6 class="mb-1" style="margin: 10px;"> No Labs Found
          </div>
        </div>

        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views/list.blade.php ENDPATH**/ ?>