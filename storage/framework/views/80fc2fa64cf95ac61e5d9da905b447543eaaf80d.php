<?php $__env->startSection('title', 'Select Winners'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('selectWinner.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="container withBorder">
		<?php echo $__env->make('selectWinner.names', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<?php echo $__env->make('selectWinner.button', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<?php echo $__env->make('selectWinner.winners', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>

	<?php echo $__env->make('selectWinner.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>