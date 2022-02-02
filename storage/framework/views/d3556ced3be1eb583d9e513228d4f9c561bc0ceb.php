<!-- Modal -->
<div 
  class="modal fade" 
  id="pop-up-modal" 
  tabindex="-1" 
  role="dialog" 
  aria-hidden="true"
>

  <div class="modal-dialog" role="document">

    <div class="modal-content">
      <div class="modal-header">
        
        <h5 
          class="modal-title" 
          id="pop-up-modal-title"
        >
          
        </h5>
        
        <button 
          type="button" 
          class="close" 
          data-dismiss="modal" 
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      
      </div>
      
      <div 
        id="pop-up-modal-content"
        class="modal-body"
      >
        
      </div>

      <div class="modal-footer">
        
        <button 
          type="button" 
          class="btn btn-secondary" 
          data-dismiss="modal"
        >
          Close
        </button>
        
        <?php if($needSavedButton == "true"): ?>
          <button 
            type="button" 
            class="btn btn-primary"
          >
            <?php echo e($saveButtonName); ?>

          </button>    
        <?php endif; ?>
      
      </div>

    </div>

  </div>

</div><?php /**PATH D:\Code\testing\KhmerTechInsider\resources\views/layouts/_partials/pop_up_modal.blade.php ENDPATH**/ ?>