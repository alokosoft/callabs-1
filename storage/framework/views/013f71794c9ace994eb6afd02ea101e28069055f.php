<link href="<?php echo e(('css/package.css')); ?>" rel="stylesheet">

<section id="doctor" class="home-section bg-gray paddingbot-60" >
    <div class="container marginbot-50">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="section-heading text-center" style="margin-top: -100px;">
                        <h2 class="h-bold">Browse By Category</h2>
                        <p>Call Labs Packages</p>
                    </div>
                </div>
                <div class="divider-short"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div id="filters-container" class="cbp-l-filters-alignLeft">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">BestSellers (<div class="cbp-filter-counter"></div>)</div>

                    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <div data-filter=".<?php echo e($category->id); ?>" class="cbp-filter-item"><?php echo e($category->category_name); ?> (<div class="cbp-filter-counter"></div>)</div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <td></td>
                    <?php endif; ?>

                    <!-- <div data-filter=".cardiologist" class="cbp-filter-item">Woman Helath (<div class="cbp-filter-counter"></div>)</div>

                    <div data-filter=".psychiatrist" class="cbp-filter-item">Diabetis (<div class="cbp-filter-counter"></div>)</div>
                   
                    <div data-filter=".womanhealth" class="cbp-filter-item">Covid 19 (<div class="cbp-filter-counter"></div>)</div>
                   
                   
                    <div style="float: right;"><button> View All </button></div> -->

                </div>

                <div id="grid-container" class="cbp-l-grid-team">
                    <ul>

                        <?php $__empty_1 = true; $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                        <li class='cbp-item <?php echo e($package->category); ?>' style="height: 460px !important; width: 300px !important">

                            <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                                <div class="inner-box" style="height: 420px !important; width:290px !important">

                                    <div class="tag topright"></div>

                                    <div class="price-box">
                                        <div class="title">
                                            <a href="<?php echo e(route('package-details',[$package->id] )); ?>"> <?php echo e($package-> package_name); ?></a>
                                        </div>

                                        <?php

                                        $lab= \App\Lab::where(['id' => $package->lab_name])->first();
                                        ?>

                                        <span>Lab Name - <?php echo e($lab?$lab->lab_name:'Call Labs'); ?></span><br />

                                         <h4 class="price">₹<?php echo e($package-> price?$package->price:$package-> no_of_tests); ?></h4>
                                    </div>
                                    <ul class="features cbp-singlePage cbp-l-grid-team-name">
                                       
                                    <?php
                                      
                                        ?>
                                        <?php $i = 0; ?>
                                        <?php $__currentLoopData = $package->parenttest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <li> <i class="fa-solid fa-circle-chevron-right"></i> <?php echo e($value->parent_test_name); ?></li>
                                        <?php $i++; ?>
                                        <?php if($i == 2): ?> <?php break; ?> <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        <li style="color:red"> Know More +</li>
                                    </ul>

                                    <div class="btn-box">
                                     
                            <a href="<?php echo e(route('add_to_cart', ['package', $package->id, $package->id])); ?>" class="theme-btn" role="button">Add to cart</a> 
                                    </div>
                                </div>
                            </div>
                        </li>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <td></td>
                        <?php endif; ?>

                        <!-- Pricing Block -->
                    </ul>
                </div>


            </div>
        </div>
    </div>

</section><?php /**PATH C:\xampp\htdocs\callabs\resources\views/layouts/teams.blade.php ENDPATH**/ ?>