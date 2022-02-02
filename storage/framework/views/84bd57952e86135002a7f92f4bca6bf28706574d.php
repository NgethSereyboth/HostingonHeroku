<?php $__env->startSection('admin.create'); ?>
  <a 
    id="create-article" 
    type="button" 
    class="btn btn-info" 
    href="<?php echo e(route('admin.users.create')); ?>"
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
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      
      <?php echo $__env->make(
        'layouts._partials.pop_up_modal',
        [ 'needSavedButton' => 'false' ] 
      , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr class="admin-user-row">

          <th scope="row"><?php echo e($user->id); ?></th>
          
          <td 
            class="admin-user-title"
            data-title="<?php echo e($user->name); ?>"
          >
            <?php echo e(Str::limit($user->name, 20)); ?>

          </td>

          <td
            class="admin-user-content"
            data-content="<?php echo e($user->email); ?>"
          >
            <?php echo e(Str::limit($user->email, 20)); ?>

          </td>
          
          <td
            class="admin-user-role"
            data-content="<?php echo e($user->role->label); ?>"
          >
            <?php echo e($user->role->label); ?>

          </td>

          <td class="d-flex align-items-center justify-content-center">
            
            <a 
              href="<?php echo e(route('admin.users.edit', $user->id)); ?>" 
              class="btn btn-primary mr-3"
            >
              Edit
            </a>
            
            <form 
              action="
                <?php echo e(route('admin.users.destroy', $user->id)); ?>

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
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Code\testing\KhmerTechInsider\resources\views/admin/users/index.blade.php ENDPATH**/ ?>