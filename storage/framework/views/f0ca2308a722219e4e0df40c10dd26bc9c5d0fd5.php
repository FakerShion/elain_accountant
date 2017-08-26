<?php $__env->startSection('main'); ?>
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

        <form method="POST" action="/order/<?php echo e($order->id); ?>" >
            <?php echo e(csrf_field()); ?>

        <div class="table-responsive">




            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Attribute</th>
                    <th>Value</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>Client</th>
                    <th><?php echo e($order->client); ?>

                        <button class="change" id="change_client" value="true">change</button>
                    </th>


                </tr>
                <tr>
                    <th>Item</th>
                    <th><?php echo e($order->item); ?>

                        <button class="change" id="change_item" value="true">change</button>
                    </th>

                </tr>
                <tr>
                    <th>Quantity</th>
                    <th><?php echo e($order->quantity); ?>

                          <button class="change" id="change_quantity" value="true">change</button>
                    </th>
                </tr>
                <tr>
                    <th>Original Price</th>
                    <th><?php echo e($order->oriprice); ?>

                         <button class="change" id="change_oriprice" value="true">change</button>
                    </th>

                </tr>
                <tr>
                    <th>Sell Price</th>
                    <th><?php echo e($order->sellprice); ?>

                         <button class="change" id="change_sellprice" value="true">change</button>
                    </th>

                </tr>
                <tr>
                    <th>Due Date</th>
                    <th><?php echo e($order->duedate); ?>

                    <button class="change"  id="change_duedate" value="true">change</button>
                    </th>

                </tr>
                <tr>
                <th>Comment</th>
                <th><?php echo e($order->comment); ?>

                    <button class="change"  id="change_comment" value="true">change</button>
                </th>

                </tr>

                </tbody>
            </table>


        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>



    </main>




<?php $__env->stopSection(); ?>

<script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo e(asset('js/changeorder.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('css/change.css')); ?>">
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>