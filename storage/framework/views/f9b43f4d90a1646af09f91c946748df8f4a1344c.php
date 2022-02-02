<?php $__env->startSection('admin.content'); ?>

  <?php echo Form::open()
        ->post()
        ->multipart()
        ->route('admin.articles.store'); ?>


    <?php echo $__env->make('admin.articles._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Code\testing\KhmerTechInsider\resources\views/admin/articles/create.blade.php ENDPATH**/ ?>