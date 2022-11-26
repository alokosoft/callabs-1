

<?php $__env->startSection('content'); ?>


<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<link href="<?php echo e(asset('css/frontend-css/about.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/package-detail.css')); ?>" rel="stylesheet">



<div id="masthead">
    <div class=" container d-flex justify-content-center" style="margin-top: 190px;">
        <ul class="pagination shadow-lg">
            <li class="page-item "><a class="page-link" href="#"><i class="fa fa-home "></i> <small>Home</small> </a></li>
            <li class="page-item "><a class="page-link " href="#"><small>PACKAGE &nbsp; </small></a></li>
            <li class="page-item "><a class="page-link " href="#"><small><?php echo e($package->package_name); ?> &nbsp; </small></a></li>


        </ul>
    </div>

</div>

<!-- Begin Body -->

<div class="container">
    <div class="row">


        <?php echo $__env->make('layouts.components.frontsidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="col-lg-8">

            <div class="jumbotron col-md-11" style="left:4%;position:relative">
                <div class="row">

                    <div class="col-md-7" style="height:85px">

                        <h4 class="blue" style="color:#03A853;padding:15px;font-size:21px;font-weight:500;text-transform:capitalize"><?php echo e($package->package_name); ?>


                            <br /><br />

                            <span class="blue" style="padding:6px;line-height:25px;font-size:12px">Include Tests- <?php echo e($package->no_of_tests); ?></span>
                        </h4>


                    </div>
                    <div class="col-md-3">

                        <h4 class="blue" style="color:#03A853;padding:15px;position:absolute;right:-90%;font-size:16px;
                        font-weight:600"> ₹<?php echo e($package->price); ?>/- </h4>
                        <br />
                        <br />
                        <h5 class="blue" style="padding:10px;padding:8px;position:absolute;right:-90%;color:#ff6f61;
                        font-weight:400;font-size:16px">
                            <a href="<?php echo e(route('add_to_cart', ['package', $package->id, $package->id])); ?>" class="theme-btn" role="button">ADD TO CART</a>
                        </h5>


                    </div>
                </div>
            </div>

            <!-- Change password card-->
            <!-- Security preferences card-->

            <div class="card mb-4" style="background-color: #fff;">

                <!-- <div class="card-header" style="font-weight: bold; text-transform:capitalize">TEST</div> -->

                <div class="card-body" style="padding: 10px;">

                    <p class="details-para" style="text-align: justify;color:#000; line-height:30px;padding:12px">

                        Unhealthy lifestyle and stress can gradually take a toll on our
                        health. Early detection can help to capture the warning signs of masked diseases in the body.
                        Comprehensive Gold Full Body Checkup Package provides a comprehensive range of tests that check your liver, heart & kidney function, blood sugar, thyroid status, lipid profile, blood counts, vitamins, minerals, urine and more. In addition to all the features of Comprehensive Silver Full Body Checkup Package, it also provides C-Reactive Protein, Rheumatoid Factor, Hepatitis B and more detailed urine examination. This package – a part of our ‘premium range’ of diagnostic tests – can be ordered once every 6 to 12 months or as recommended by your doctor..</p>

                    <!-- Account privacy optinos-->



                    <div class="row">
                        <div class="col-md-11">
                            <div class="pxlr-club-faq">
                                <div class="content">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


                                        <?php $__currentLoopData = $package->parenttest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent_test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="headingOne" role="tab">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="<?php echo e('#collapseOne'.'-'.$parent_test->id); ?>" aria-expanded="false" aria-controls="<?php echo e('collapseOne'.'-'.$parent_test->id); ?>">
                                                        <?php echo e($parent_test->parent_test_name); ?> <i class="pull-right fa fa-plus"></i></a>
                                                </h4>
                                            </div>

                                            <div class="panel-collapse collapse" id="<?php echo e('collapseOne'.'-'.$parent_test->id); ?>" role="tabpanel" aria-labelledby="headingOne">

                                                <div class="panel-body pxlr-faq-body">

                                                    <?php


                                                    $values = new \Illuminate\Support\Collection(explode(",", $parent_test->sub_tests));


                                                    $sub_tests = DB::table('sub_tests')
                                                    ->select('sub_tests.sub_test_name as sub_name', 'sub_tests.price as price')
                                                    ->whereIn('id', $values)


                                                    ->get()->toArray();



                                                    ?>

                                                    <ul>
                                                        <?php $__currentLoopData = $sub_tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li><?php echo e($sub_test->sub_name); ?> - ₹<?php echo e($sub_test->price); ?></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>


                                                </div>
                                            </div>
                                        </div>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>



                </div>
            </div>

        </div>
    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views/package-details.blade.php ENDPATH**/ ?>