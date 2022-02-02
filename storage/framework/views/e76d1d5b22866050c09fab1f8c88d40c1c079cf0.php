<?php $__env->startSection('styles_scripts'); ?>

  <!-- Scripts -->
  <script src="<?php echo e(asset('js/admin.js')); ?>" defer></script>
    
  <!-- Styles -->
  <link href="<?php echo e(asset('css/admin.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="wrapper">

  
  <?php echo $__env->make('admin._partials.side_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div id="content" style="width: 100%">
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      
      <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-left"></i>
            <span>Open Menu</span>
        </button>

        <?php echo $__env->yieldContent('admin.create'); ?>

      </div>
    
    </nav>

    <?php echo $__env->yieldContent('admin.content'); ?>
  
  </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Code\testing\KhmerTechInsider\resources\views/admin/index.blade.php ENDPATH**/ ?>