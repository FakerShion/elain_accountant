<?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">


        <h2>Order Check List</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Order No.</th>
                    <th>Client</th>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>进度</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                       <tr>

                        <td><?php echo e($order->id); ?></td>
                        <td><?php echo e($order->client); ?></td>
                        <td><?php echo e($order->item); ?></td>
                        <td><?php echo e($order->quantity); ?></td>
                        <td><?php echo e($order->comment); ?></td>
                           <td> <a href="/order/<?php echo e($order->id); ?>"> Details</a></td>

                        </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </tbody>
            </table>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>