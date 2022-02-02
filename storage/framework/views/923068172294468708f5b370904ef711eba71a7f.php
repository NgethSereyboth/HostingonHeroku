<?php $__env->startSection('styles_scripts'); ?>

  <!-- Scripts -->
  <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    
  <!-- Styles -->
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <!-- Main Content-->
  <div class="container">

    <div class="card mt-5 mb-5 pl-5 pr-5">
      
      <h2
        class="mt-3 mb-3"
      >
        <?php echo e($article->title); ?>

      </h2>

      <div>

        <img 
          class="img-fluid"
          src="<?php echo e(asset('storage/'.$article->image)); ?>" 
          alt="<?php echo e($article->title); ?>"
        >

      </div>

      <p
        class="mt-3 mb-3"
      >
        <?php echo e($article->content); ?>

      </p>



    </div>

  </div>

  <!-- Footer -->
  <?php echo $__env->make('home._index.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Code\testing\KhmerTechInsider\resources\views/home/_index/news/show.blade.php ENDPATH**/ ?>