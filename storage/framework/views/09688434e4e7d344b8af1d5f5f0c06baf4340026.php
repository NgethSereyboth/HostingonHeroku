<?php $__env->startSection('admin.create'); ?>
  <a 
    id="create-article" 
    type="button" 
    class="btn btn-info" 
    href="<?php echo e(route('admin.articles.create')); ?>"
  >
    <i class="fas fa-align-left"></i>
    <span>Create</span>
  </a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('admin.content'); ?>

  <table class="table table-sm mr-5 ml-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Image</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      
      <?php echo $__env->make(
        'layouts._partials.pop_up_modal',
        [ 'needSavedButton' => 'false' ] 
      , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr class="admin-article-row">

          <th scope="row"><?php echo e($article->id); ?></th>
          
          <td 
            class="admin-article-title"
            data-title="<?php echo e($article->title); ?>"
          >
            <?php echo e(Str::limit($article->title, 20)); ?>

          </td>

          <td
            class="admin-article-content"
            data-content="<?php echo e($article->content); ?>"
          >
            <?php echo e(Str::limit($article->content, 20)); ?>

          </td>
          
          <td
            class="admin-article-image"
            data-image="<?php echo e(asset('storage/'.$article->image)); ?>"
          >
            <div
              class="image-preview-listing"
              style="
                background: url('<?php echo e(asset('storage/'.$article->image)); ?>');
              "
            >
            </div>
          </td>
          <td class="d-flex align-items-center justify-content-center">
            <div 
              class="btn btn-success mr-3"
              data-controller="admin-article"
              data-action="click->admin-article#openPopUpModal"
              data-toggle="modal" 
              data-target="#pop-up-modal"
            >
              Show
            </div>
            
            <a 
              href="<?php echo e(route('admin.articles.edit', $article->id)); ?>" 
              class="btn btn-primary mr-3"
            >
              Edit
            </a>
            
            <form 
              action="
                <?php echo e(route('admin.articles.destroy', $article->id)); ?>

              "
              method="post"
            >
              <?php echo csrf_field(); ?>
              <input type="hidden" name="_method" value="DELETE">
              <button
                type="submit"                
                class="btn btn-danger"
              >
                Delete
              </button>
            </form>
          
          </td>
        </tr>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
    </tbody>
  </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Code\testing\KhmerTechInsider\resources\views/admin/articles/index.blade.php ENDPATH**/ ?>