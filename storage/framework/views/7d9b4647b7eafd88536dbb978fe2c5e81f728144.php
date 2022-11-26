 <section id="boxes" class="home-section paddingtop-80">
     <div class="container marginbot-50">
         <div class="row">
             <div class="col-lg-8 col-lg-offset-2">
                 <div class="wow fadeInDown" data-wow-delay="0.1s">
                     <div class="section-heading text-center">
                         <h2 class="h-bold">Find Test By Organs</h2>

                     </div>
                 </div>
                 <div class="divider-short"></div>
             </div>
         </div>
     </div>

     <div class="container">
         <div class="row">

             <?php $__empty_1 = true; $__currentLoopData = $organs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $organ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
             <div class="col-sm-3 col-md-2">
                 <div class="wow fadeInUp" data-wow-delay="0.2s">
                     <div class="box text-center">

                         <a href="<?php echo e(route('organs.details',[$organ->id])); ?>">
                             <img src=<?php echo e(asset('Image/'.$organ->image)); ?> width="80" height="80" />

                         <p>
                             <?php echo e($organ->name); ?>

                         </p>
                         </a>

                     </div>
                 </div>
             </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
             <div></div>
             <?php endif; ?>

             <!-- <h4 class="h-bold" style="text-align: center;padding:12px;margin-top:120px">View All</h4> -->

         </div>
     </div>

 </section><?php /**PATH C:\xampp\htdocs\callabs\resources\views/layouts/boxes.blade.php ENDPATH**/ ?>