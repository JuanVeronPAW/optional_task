<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Item Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('items.create')); ?>"> Create New Item</a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Code</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Quantity</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($item->id); ?></td>
            <td><?php echo e($item->code); ?></td>
            <td><?php echo e($item->name); ?></td>
            <td><?php echo e($item->brand); ?></td>
            <td><?php echo e($item->qty); ?></td>
            <td>
                <form action="<?php echo e(route('items.destroy',$item->id)); ?>" method="POST">
                    <a class="btn btn-info" href="<?php echo e(route('items.show',$item->id)); ?>">Show</a>
                    <a class="btn btn-primary" href="<?php echo e(route('items.edit',$item->id)); ?>">Edit</a>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
    <?php echo e($items->links()); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('items.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LAMAR KERJA\Dokumen\PT Sinar Metrindo Perkasa\technical-test-main\resources\views/items/index.blade.php ENDPATH**/ ?>