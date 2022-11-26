

<?php $__env->startSection('content'); ?>

<link href="<?php echo e(('css/frontend-css/login.css')); ?>" rel="stylesheet">
<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<link href="<?php echo e(asset('css/frontend-css/about.css')); ?>" rel="stylesheet">


<div id="masthead">
  <div class=" container d-flex justify-content-center" style="margin-top: 190px;">
    <ul class="pagination shadow-lg">
      <li class="page-item"><a class="page-link" href="#"><i class="fa fa-home "></i> <small>Home</small> </a></li>
      <li class="page-item"><a class="page-link" href="#"><small>LOG IN &nbsp; </small></a></li>
    </ul>
  </div>

</div>

<div class="container">
  <div class="row">

    <div class="col-lg-4">
      <!-- Two factor authentication card-->
      <div class="card mb-4" style="padding: 10px; background-color:#fff">
        <div class="card-body" style="padding: 2px;">
          <img src="<?php echo e(asset('img/boxes/medical.png')); ?>" style="height: 410px;width:330px" />

        </div>
      </div>
      <!-- Delete account card-->
    </div>




    <div class="col-lg-8">

      <div class="card mb-4" style="background-color: #fff;">
        <div class="card-header">LOG IN
        </div>
        <?php if(Session::has('message')): ?>
        <div class="alert alert-danger alert-dismissible text-white text-center" role="alert">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

          <?php echo e(Session::get('message')); ?>

        </div>
        <?php endif; ?>

        <div class="card-body" style="padding: 10px;">
          <!-- Account privacy optinos-->
          <form method="post" action="<?php echo e(route('user-login')); ?>">
            <?php echo csrf_field(); ?>

            <div class="details">
              <div class="input"><label for="">Email
                </label>
                <input type="text" placeholder="Enter your email address" name="email" autocomplete="off">

                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert" style="font-size: 12px; color:red">
                  <strong><?php echo e($message); ?></strong>
                </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

              </div>
              <div class="input">
                <label for="">Password
                </label><input type="password" placeholder="Enter your password" name="password">

                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert" style="font-size: 12px; color:red">
                  <strong><?php echo e($message); ?></strong>
                </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

              </div>
              <button class="login-button">Log in</button>
              <span class="between-button">Can’t log in? ∙ Sign up for an account</span>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views/layouts/frontend/login.blade.php ENDPATH**/ ?>