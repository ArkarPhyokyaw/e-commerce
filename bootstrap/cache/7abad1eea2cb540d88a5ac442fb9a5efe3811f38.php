<?php $__env->startSection('title','Category Created'); ?>
<?php $__env->startSection('content'); ?>


<?php if(App\Classes\Session::has("error")): ?>
    <?php echo e(\App\Classes\Session::flash("error")); ?>

<?php endif; ?>
<h1 class="text-danger text-center">Created category </h1>
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <form action="/admin/category/created" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="file">file</label>
                    <input type="file" class="form-control" id="file" name="file">
                </div>
                <input type="hidden" name="token" value="<?php echo e(\App\Classes\CSRFToken::_token()); ?>">
                <div class="row justify-content-end no-gutters mt-4">
                        <button type="submit" class="btn btn-primary ">Created</button>
                </div>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>