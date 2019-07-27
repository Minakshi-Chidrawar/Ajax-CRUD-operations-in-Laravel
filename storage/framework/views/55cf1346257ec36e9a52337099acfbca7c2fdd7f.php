<div class="col-md-3 col-md-offset-1">
    <div class="table-responsive text-center">
        <table class="table table-borderless" id="table">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="item<?php echo e($item->id); ?>">
                <!-- <td><?php echo e($item->id); ?></td> -->
                    <td><?php echo e($item->name); ?></td>
                    <td>
                        <button class="delete-modal btn btn-danger"
                                data-id="<?php echo e($item->id); ?>" data-name="<?php echo e($item->name); ?>">
                            <span class="glyphicon glyphicon-minus"></span>
                        </button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>