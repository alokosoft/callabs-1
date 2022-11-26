<div class="col-lg-4" style="background-color: #fff;">
      <!-- Two factor authentication card-->
      <div class="mb-4" style="padding: 10px">
      
      <div class="card-header">All Labs</div>
        <div class="card-body" style="padding: 2px;">


          <div id="filter-sidebar" class="col-xs-6 col-sm-12  sliding-sidebar" style="padding: 0px; ">

            <div>
              <div id="group-1" class="list-group collapse in">
                <?php $__currentLoopData = $all_labs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all_lab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <a class="list-group-item" href="#">
                  <span class="badge">3</span> <?php echo e($all_lab->lab_name); ?>

                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="mb-4" style="padding: 10px">
      
      <div class="card-header">Organs</div>
        <div class="card-body" style="padding: 2px;">


          <div id="filter-sidebar" class="col-xs-6 col-sm-12  sliding-sidebar" style="padding: 0px;">

            <div>
              <div id="group-1" class="list-group collapse in">
                <?php $__currentLoopData = $all_labs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all_lab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <a class="list-group-item" href="#">
                  <span class="badge">3</span> <?php echo e($all_lab->lab_name); ?>

                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </div>
            </div>
          </div>

        </div>
      </div>



      
    </div><?php /**PATH C:\xampp\htdocs\callabs\resources\views/layouts/components/frontsidebar.blade.php ENDPATH**/ ?>