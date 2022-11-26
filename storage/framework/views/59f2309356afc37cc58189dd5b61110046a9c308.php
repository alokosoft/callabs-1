<link href="<?php echo e(asset('css/frontend-css/cart.css')); ?>" rel="stylesheet">

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

	<div id="wrapper">

		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
			<div class="top-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-2">
							<p class="bold text-left" style="font-size: 14px;">Everyday, 8am to 10pm </p>
						</div>


						<div class="col-sm-6 col-md-6" style="margin-top: -15px;">

							<?php echo $__env->make('layouts.components.searchbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						</div>

						<?php if(auth()->guard()->check()): ?>
						<div class="col-sm-6 col-md-2" style="font-size: 14px;">
						<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" >
                            <?php echo csrf_field(); ?>

							<p class="bold text-right" style="display: inline-block;color:#fff">
									<button type="submit" class="btn btn-danger">LOGOUT</button> </p>
                        </form>
							<!-- <a href="<?php echo e(route('logout')); ?>" style="color:#fff">
							
							</a> -->
						</div>

						<?php endif; ?>
						<?php if(auth()->guard()->guest()): ?>
						<div class="col-sm-6 col-md-2" style="font-size: 14px;">

							<a href="<?php echo e(url('/frontend-login')); ?>" style="color:#fff">
								<p class="bold text-right" style="display: inline-block;">
									LOG IN</p>
							</a>|
							<a href="<?php echo e(url('/frontend-signup')); ?>" style="color:#fff">
								<p class="bold text-right" style="display: inline-block;">SIGN UP</p>
							</a>

						</div>

						<?php endif; ?>

						<div class="col-sm-6 col-md-2">

							<div class="dropdown">
								<button type="button" class="btn btn-success" data-toggle="dropdown">
									<i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger"><?php echo e(count((array) session('cart'))); ?></span>
								</button>

								<div class="dropdown-menu">
									<div class="row total-header-section">
										<?php $total = 0 ?>
										<?php $__currentLoopData = (array) session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php 
									 	$total += $details['price'] * $details['quantity'] ?>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										<div class="col-lg-12 col-sm-12 col-12 total-section text-right">
											<p>Total: <span class="text-info">₹ <?php echo e($total); ?></span></p>
										</div>
									</div>
									<?php if(session('cart')): ?>
									<?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="row cart-detail">
										<div class="col-lg-8 col-sm-4 col-4 cart-detail-img">
											<p><?php echo e($details['name']); ?></p>
										</div>
										<div class="col-lg-4 col-sm-8 col-8 cart-detail-product">
											<p><?php echo e($details['lab_name']); ?></p>
											<span class="price text-info"> ₹ <?php echo e($details['price']); ?></span> <span class="count"> Qty:<?php echo e($details['quantity']); ?></span>
										</div>
									</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php endif; ?>

									<div class="row">
										<div class="col-lg-12 col-sm-12 col-12 text-center checkout">
											<a href="<?php echo e(route('cart')); ?>" class="btn btn-success btn-block">View all</a>
										</div>
									</div>
								</div>
							</div>



						</div>


					</div>
				</div>
			</div>


			<div class="container navigation">

				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="<?php echo e(url('/')); ?>">
						<img src="<?php echo e(asset('img/Logo.jpeg')); ?>" alt="" width="270" style="height: 96px !important;" />
					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#intro">Diagonostics</a></li>
						<li><a href="#service">Health Checkup</a></li>
						<li><a href="#doctor">Corona Virus Testing</a></li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<span class="badge custom-badge red pull-right">From Prescription</span>Book Test </a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>



		</nav><?php /**PATH C:\xampp\htdocs\callabs\resources\views/layouts/partials/header.blade.php ENDPATH**/ ?>