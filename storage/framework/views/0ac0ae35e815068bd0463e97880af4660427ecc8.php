

<?php $__env->startSection('content'); ?>

<link href="<?php echo e(('css/frontend-css/cart.css')); ?>" rel="stylesheet">




<div class="pd-wrap" style="margin-top: 200px;">

    <div class="container" style="background-color: #fffbfa; width:80%">



        <div class="row">
            <table id="cart" class="table table-hover table-condensed cart-table">
                <thead>
                    <tr>
                        <th style="width:30%">Name</th>
                        <th style="width:20%">Lab Name</th>
                        <th style="width:10%">Price</th>
                        <th style="width:8%">Quantity</th>
                        <th style="width:22%" class="text-center">Subtotal</th>
                        <th style="width:10%"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0 ?>
                    <?php if(session('cart')): ?>
                    <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $total += $details['price'] * $details['quantity'] ?>
                    <tr data-id="<?php echo e($id); ?>">
                        <td data-th="Product">
                            <div class="row">
                                 <div class="col-sm-9">
                                    <h4 class="nomargin"><?php echo e($details['name']); ?></h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price"><?php echo e($details['lab_name']); ?></td>
                        
                        <td data-th="Price">₹<?php echo e($details['price']); ?></td>
                        <td data-th="Quantity">
                            <input type="number" value="<?php echo e($details['quantity']); ?>" class="form-control quantity cart_update" min="1" />
                        </td>
                        <td data-th="Subtotal" class="text-center">₹<?php echo e($details['price'] * $details['quantity']); ?></td>
                        <td class="actions" data-th="">
                            <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" class="text-right">
                            <h3><strong>Total ₹<?php echo e($total); ?></strong></h3>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-right">
                            <a href="<?php echo e(url('/')); ?>" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                         
                             <a href="<?php echo e(route('checkout')); ?>" class="btn btn-success"> <i class="fa fa-money"></i> Checkout</a>
                        </td>
                    </tr>
                </tfoot>
            </table>




        </div>

    </div>
</div>

 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views/cart.blade.php ENDPATH**/ ?>