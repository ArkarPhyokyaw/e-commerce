<?php $__env->startSection('title','Admin Home page'); ?>
<?php $__env->startSection('content'); ?>



<div class="container">
    <div class="row">
        <div class="col-md-4">
            <?php echo $__env->make("layout.admin_sidebar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="col-md-8"></div>
    </div>
</div>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>