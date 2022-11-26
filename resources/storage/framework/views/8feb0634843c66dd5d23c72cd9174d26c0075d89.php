<?php $__env->startSection('content'); ?>


<section id="intro" class="intro">
    <?php echo $__env->make('layouts.services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>



<!-- /Section: intro -->

<!-- Section: boxes -->
<?php echo $__env->make('layouts.boxes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- /Section: boxes -->



<!-- Section: services -->
<!-- <?php echo $__env->make('layouts.serve', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
<!-- /Section: services -->


<!-- Section: team -->
<?php echo $__env->make('layouts.teams', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- /Section: team -->

<?php echo $__env->make('layouts.emergency', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<!-- Section: works -->
<!-- <?php echo $__env->make('layouts.partials.works', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
<!-- /Section: works -->


 


<section id="partner" class="home-section paddingbot-60">
    <div class="container marginbot-50">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                    <div class="section-heading text-center">
                        <h2 class="h-bold">Our partner</h2>
                        <p>Take charge of your health today with our specially designed health packages</p>
                    </div>
                </div>
                <div class="divider-short"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="partner">
                    <a href="#"><img src="<?php echo e(('img/featured/lal.jpg')); ?>" alt=""  width="210" height="70"/></a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="partner">
                    <a href="#"><img src="<?php echo e(('img/featured/thyrocare.png')); ?>" alt=""  width="210" height="70"/></a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="partner">
                    <a href="#"><img src="<?php echo e(('img/featured/1mg.png')); ?>" alt=""  width="210" height="70"/></a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="partner">
                    <a href="#"><img src="<?php echo e(('img/featured/applo.jpg')); ?>" alt=""  width="210" height="70"/></a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <section id="partner" class="home-section paddingbot-60">
<?php echo $__env->make('layouts.advertise', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section> -->


</div>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views/welcome.blade.php ENDPATH**/ ?>