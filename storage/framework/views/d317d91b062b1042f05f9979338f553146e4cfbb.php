<div class="ml-5 mr-5 mt-5">

  <?php if(isset($article)): ?>
    <?php echo Form::hidden('id', $article->id); ?>

  <?php endif; ?>

  <?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
  <?php endif; ?>

  <div>
    <?php echo Form::text('title', 'title'); ?>

  </div>

  <div>
    <?php echo Form::text('content', 'content'); ?>

  </div>

  <div class="form-group">
    <label for="image">Upload image for the article</label>
    <input 
      id="image" 
      type="file" 
      class="form-control-file"
      name="image"
      accept="image/png, image/gif, image/jpeg"
    >

    <?php if(isset($article)): ?>
      <img 
        class="img-fluid mt-5"
        src="<?php echo e(asset('storage/'.$article->image)); ?>" 
        alt="<?php echo e($article->title); ?>"
      >
    <?php endif; ?>

  </div>

  <div class="d-flex align-items-center justify-content-end">

    <a
      class="btn btn-warning mr-5"
      href="<?php echo e(route('admin.articles.index')); ?>"
    >
      Cancel
    </button>

    <button
      type="submit"
      class="btn btn-primary"
    >
      Submit
    </button>

  </div>

</div><?php /**PATH D:\Code\testing\KhmerTechInsider\resources\views/admin/articles/_form.blade.php ENDPATH**/ ?>